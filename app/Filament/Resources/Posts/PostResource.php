<?php

namespace App\Filament\Resources\Posts;

use App\Filament\Resources\Posts\Pages\CreatePost;
use App\Filament\Resources\Posts\Pages\EditPost;
use App\Filament\Resources\Posts\Pages\ListPosts;
use App\Filament\Resources\Posts\Schemas\PostForm;
use App\Filament\Resources\Posts\Tables\PostsTable;
use App\Models\Post;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Auth;
use UnitEnum;

class PostResource extends Resource
{
    protected static string | UnitEnum | null $navigationGroup = 'Resources';

    protected static ?int $navigationSort = 1;

    protected static ?string $model = Post::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedSquare3Stack3d;

    public static function shouldRegisterNavigation(): bool
    {
        return ! static::isHiddenForCurrentUser();
    }

    public static function canViewAny(): bool
    {
        return ! static::isHiddenForCurrentUser();
    }

    public static function form(Schema $schema): Schema
    {
        return PostForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PostsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPosts::route('/'),
            'create' => CreatePost::route('/create'),
            'edit' => EditPost::route('/{record}/edit'),
        ];
    }

    protected static function isHiddenForCurrentUser(): bool
    {
        $user = Auth::user();

        if (! $user?->email) {
            return false;
        }

        $blockedEmails = config('onlinebersama.post_resource_hidden_emails', []);

        return in_array(strtolower((string) $user->email), array_map('strtolower', $blockedEmails), true);
    }
}
