<?php

namespace App\Filament\Resources\Topics;

use App\Filament\Resources\Topics\Pages\CreateTopic;
use App\Filament\Resources\Topics\Pages\EditTopic;
use App\Filament\Resources\Topics\Pages\ListTopics;
use App\Filament\Resources\Topics\Schemas\TopicForm;
use App\Filament\Resources\Topics\Tables\TopicsTable;
use App\Models\Topic;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Auth;
use UnitEnum;

class TopicResource extends Resource
{
    protected static string | UnitEnum | null $navigationGroup = 'Resources';

    protected static ?int $navigationSort = 2;

    protected static ?string $modelLabel = 'Topik';

    protected static ?string $model = Topic::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedChatBubbleBottomCenterText;

    protected static ?string $recordTitleAttribute = 'name';

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
        return TopicForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TopicsTable::configure($table);
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
            'index' => ListTopics::route('/'),
            'create' => CreateTopic::route('/create'),
            'edit' => EditTopic::route('/{record}/edit'),
        ];
    }

    protected static function isHiddenForCurrentUser(): bool
    {
        $user = Auth::user();

        if (! $user?->email) {
            return false;
        }

        $blockedEmails = config('onlinebersama.topic_resource_hidden_emails', []);

        return in_array(strtolower((string) $user->email), array_map('strtolower', $blockedEmails), true);
    }
}
