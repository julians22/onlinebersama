<?php

namespace App\Filament\Resources\Posts\Tables;

use App\Models\Post;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PostsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                IconColumn::make('type')
                    ->label('Tipe')
                    ->searchable()
                    ->color('primary')
                    ->icon(fn (string $state): Heroicon => match ($state) {
                        Post::TYPE_ARTICLE => Heroicon::OutlinedDocumentText,
                        Post::TYPE_VIDEO => Heroicon::OutlinedVideoCamera,
                    }),
                TextColumn::make('writer')
                    ->label('Penulis')
                    ->searchable()
                    ->placeholder('Tidak ada penulis'),
                TextColumn::make('topics.name')
                    ->placeholder('Tidak ada topik')
                    ->label('Topik')
                    ->badge()
                    ->separator(','),
                TextColumn::make('read_time')
                    ->label('Waktu Baca')
                    ->searchable(),
                TextColumn::make('status')
                    ->badge()
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        Post::STATUS_PUBLISHED => 'Published',
                        Post::STATUS_DRAFT => 'Draft',
                    })
                    ->color(fn (string $state): string => match ($state) {
                        Post::STATUS_DRAFT => 'warning',
                        Post::STATUS_PUBLISHED => 'success',
                    })
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
    }
}
