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
use Filament\Tables\Filters\SelectFilter;
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
                TextColumn::make('type')
                    ->label('Tipe')
                    ->searchable()
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        Post::TYPE_ARTICLE => 'Artikel',
                        Post::TYPE_VIDEO => 'Video',
                        Post::TYPE_EBOOK => 'E-Book',
                    })
                    ->color(fn (string $state): string => match ($state) {
                        Post::TYPE_ARTICLE => 'primary',
                        Post::TYPE_VIDEO => 'warning',
                        Post::TYPE_EBOOK => 'success',
                    })
                    ->icon(fn (string $state): Heroicon => match ($state) {
                        Post::TYPE_ARTICLE => Heroicon::OutlinedDocumentText,
                        Post::TYPE_VIDEO => Heroicon::OutlinedVideoCamera,
                        Post::TYPE_EBOOK => Heroicon::OutlinedBookOpen,
                    })
                    ->iconColor(fn (string $state): string => match ($state) {
                        Post::TYPE_ARTICLE => 'primary',
                        Post::TYPE_VIDEO => 'warning',
                        Post::TYPE_EBOOK => 'success',
                    }),
                TextColumn::make('topics.name')
                    ->placeholder('Tidak ada topik')
                    ->label('Topik')
                    ->badge()
                    ->separator(','),
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
                // Filter for type article
                SelectFilter::make('type')
                    ->label('Tipe')
                    ->options([
                        Post::TYPE_ARTICLE => 'Artikel',
                        Post::TYPE_VIDEO => 'Video',
                        Post::TYPE_EBOOK => 'E-Book',
                    ]),
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
