<?php

namespace App\Filament\Resources\Posts\Schemas;

use App\Models\Post;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
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
                TextInput::make('title')
                    ->required(),
                // slug akan di-generate otomatis dari title, tapi tetap bisa diedit manual jika diperlukan
                TextInput::make('slug')
                    ->unique('posts', 'slug')
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
            ]);
    }
}
