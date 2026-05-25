<?php

namespace App\Filament\Resources\Topics\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class TopicForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Topik Detail')
                    ->columnSpanFull()
                    ->schema([
                        TextInput::make('name')
                            ->label('Nama')
                            ->required(),
                        TextInput::make('slug')
                            ->unique('topics', 'slug')
                            ->live()
                            // hide when create form
                            ->hidden(fn (string $operation): bool => $operation === 'create')
                            ->required(),
                    ])
            ]);
    }
}
