<?php

namespace App\Filament\Resources\Posts\Schemas;

use App\Models\Post;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ToggleButtons;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;

class PostForm
{
    public array $template_view_options = [
        'default' => 'Default Template',
    ];

    public function __construct()
    {
        // Load dynamic template view options dari database atau filesystem jika diperlukan
        // Contoh: $this->template_view_options = array_merge($this->template_view_options, $this->loadTemplateViewOptions());
        $templates = articleViewsOptions(); // Ambil daftar template view dari helper function
        foreach ($templates as $template) {
            $this->template_view_options[$template] = $template; // Tambahkan ke opsi select
        }
    }

    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Grid::make(5)
                    ->columnSpanFull()
                    ->schema([
                        // Kolom Utama (Kiri)
                        Grid::make(1)
                            ->columnSpan(3)
                            ->schema([
                                Section::make('Post Detail')
                                    ->schema([
                                        Grid::make(2)
                                            ->schema([
                                                ToggleButtons::make('type')
                                                    ->label('Tipe')
                                                    ->inline()
                                                    ->required()
                                                    ->default(Post::TYPE_ARTICLE)
                                                    ->options([
                                                        Post::TYPE_ARTICLE => 'Artikel',
                                                        Post::TYPE_VIDEO => 'Video',
                                                    ])
                                                    ->icons([
                                                        Post::TYPE_ARTICLE => 'heroicon-o-document-text',
                                                        Post::TYPE_VIDEO => 'heroicon-o-video-camera',
                                                    ]),
                                                ToggleButtons::make('status')
                                                    ->label('Status')
                                                    ->inline()
                                                    ->required()
                                                    ->default(Post::STATUS_PUBLISHED)
                                                    ->options([
                                                        Post::STATUS_PUBLISHED => 'Published',
                                                        Post::STATUS_DRAFT => 'Draft',
                                                    ])
                                                    ->icons([
                                                        Post::STATUS_PUBLISHED => 'heroicon-o-check',
                                                        Post::STATUS_DRAFT => 'heroicon-o-pencil-square',
                                                    ])
                                                    ->colors([
                                                        Post::STATUS_PUBLISHED => 'success',
                                                        Post::STATUS_DRAFT => 'warning',
                                                    ]),
                                            ]),
                                        TextInput::make('title')
                                            ->live(onBlur: true)
                                            ->afterStateUpdated(function (string $operation, $state, Set $set) {
                                                if ($operation !== 'create') {
                                                    return;
                                                }

                                                $set('slug', \Illuminate\Support\Str::slug($state));
                                            })
                                            ->required(),
                                        // slug akan di-generate otomatis dari title, tapi tetap bisa diedit manual jika diperlukan
                                        TextInput::make('slug')
                                            ->live()
                                            ->required(),
                                            Select::make('url_name')
                                            ->label('URL Name')
                                            ->options(
                                                config('onlinebersama.custom_article_route')
                                            )
                                            ->default(null)
                                            ->nullable(),
                                        TextInput::make('thumbnail_file_name')
                                            ->label('Thumbnail File Name'),
                                        TextInput::make('data_analytics')
                                            ->label('Data Analytics (Title)')
                                            ->helperText('Gunakan Bahasa Inggris. Contoh: "How to Create a Landing Page"'),
                                        TextInput::make('writer')
                                            ->label('Penulis')
                                            ->prefixIcon('heroicon-o-user'),
                                        TextInput::make('read_time')
                                            ->label('Waktu Baca')
                                            ->prefixIcon('heroicon-o-clock')
                                            ->required(),
                                        Select::make('template_view_path')
                                            ->label('Template View Path')
                                            ->options((new self())->template_view_options)
                                            ->default('default')
                                            ->required(),
                                        Select::make('related_slug')
                                            ->label('Artikel Terkait')
                                            ->options(Post::published()->pluck('title', 'slug')) // Ambil daftar artikel yang dipublikasikan untuk opsi select
                                            ->searchable()
                                            ->preload()
                                            ->required()
                                    ]),
                            ]),
                        // Kolom (Kanan)
                        Grid::make()
                            ->columnSpan(2)
                            ->schema([
                                Section::make('Meta Tags (SEO)')->schema([
                                    TextInput::make('meta_title')
                                        ->label('Meta Title'),
                                    TextInput::make('meta_description')
                                        ->label('Meta Description'),
                                    TextInput::make('meta_keywords')
                                        ->label('Meta Keywords'),
                                ])->columnSpanFull(),
                                Section::make('Topik (Tags)')->schema([
                                    Repeater::make('pivotTopics') // Mengambil relasi pivot di Model Post
                                        ->label('Pivot Topik')
                                        ->relationship()
                                        ->schema([
                                            Select::make('topic_id')
                                                ->label('Pilih Topik')
                                                ->relationship('topic', 'name') // Mengambil relasi di Model PostTopic
                                                ->searchable()
                                                ->preload()
                                                ->required()
                                                ->disableOptionsWhenSelectedInSiblingRepeaterItems(), // Mencegah duplikasi tag
                                        ])
                                        ->orderColumn('sort_order') // Fitur Drag & Drop akan mengisi kolom ini
                                        ->addActionLabel('Tambah Topik')
                                        ->collapsible()
                                        ->defaultItems(0),
                                ])->columnSpanFull(),
                                Section::make('Jelajahi Topik Lainnya')->schema([
                                    Repeater::make('pivotRelatedPosts') // Mengambil relasi pivot di Model Post
                                        ->label('Pivot Topik Lainnya')
                                        ->relationship()
                                        ->schema([
                                            Select::make('related_post_id')
                                                ->label('Pilih Post')
                                                ->relationship('relatedPost', 'title', function ($query, $get) {
                                                    // Mencegah post memilih dirinya sendiri
                                                    $currentPostId = $get('../../id');
                                                    if ($currentPostId) {
                                                        $query->where('id', '!=', $currentPostId);
                                                    }
                                                    return $query;
                                                })
                                                ->searchable()
                                                ->preload()
                                                ->required()
                                                ->disableOptionsWhenSelectedInSiblingRepeaterItems(), // Mencegah duplikasi
                                        ])
                                        ->orderColumn('sort_order') // Fitur Drag & Drop akan mengisi kolom ini
                                        ->addActionLabel('Tambah Topik Lainnya')
                                        ->collapsible()
                                        ->defaultItems(0),
                                ])->columnSpanFull(),
                        ]),
                    ])
            ]);
    }
}
