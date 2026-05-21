<?php

namespace App\Filament\Resources\Posts\Schemas;

use App\Models\Post;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
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
                Grid::make(3)
                    ->columnSpanFull()
                    ->schema([
                        Grid::make(1)
                            ->columnSpan(2)
                            ->schema([
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
                                    ->unique('posts', 'slug')
                                    ->live()
                                    ->required(),
                                TextInput::make('type')
                                    ->required(),
                                Select::make('post_category_id')
                                    ->label('Category')
                                    ->options(function () {
                                        return \App\Models\PostCategory::pluck('name', 'id')->toArray();
                                    })
                                    ->searchable()
                                    ->required(),
                                TextInput::make('status')
                                    ->required()
                                    ->default('draft'),
                                TextInput::make('read_time')
                                    ->required(),
                                Select::make('template_view_path')
                                    ->options((new self())->template_view_options)
                                    ->default('default'),
                                TextInput::make('meta_title'),
                                TextInput::make('meta_description'),
                                TextInput::make('meta_keywords'),
                            ]),
                        // Kolom Sidebar (Kanan)
                        Grid::make()->schema([
                            Section::make('Topics (Tags)')->schema([
                                Repeater::make('pivotTopics') // Mengambil relasi pivot di Model Post
                                    ->relationship()
                                    ->schema([
                                        Select::make('topic_id')
                                            ->label('Pilih Topic')
                                            ->relationship('topic', 'name') // Mengambil relasi di Model PostTopic
                                            ->searchable()
                                            ->preload()
                                            ->required()
                                            ->disableOptionsWhenSelectedInSiblingRepeaterItems(), // Mencegah duplikasi tag
                                    ])
                                    ->orderColumn('sort_order') // Fitur Drag & Drop akan mengisi kolom ini
                                    ->addActionLabel('Tambah Topic')
                                    ->collapsible()
                                    ->defaultItems(0),
                            ])->columnSpanFull(),

                            Section::make('Related Articles')->schema([
                                Repeater::make('pivotRelatedPosts') // Mengambil relasi pivot di Model Post
                                    ->relationship()
                                    ->schema([
                                        Select::make('related_post_id')
                                            ->label('Pilih Artikel')
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
                                    ->addActionLabel('Tambah Artikel Terkait')
                                    ->collapsible()
                                    ->defaultItems(0),
                            ])->columnSpanFull(),
                        ])->columnSpan(1),
                    ])
            ]);
    }
}
