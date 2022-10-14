<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Suggestion;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SuggestionResource\Pages;
use App\Filament\Resources\SuggestionResource\RelationManagers;

class SuggestionResource extends Resource
{
    protected static ?string $model = Suggestion::class;

    protected static ?string $navigationIcon = 'heroicon-o-heart';
    protected static ?string $navigationGroup = 'Submissions';
    protected static ?string $navigationLabel = 'Suggestions';
    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Name'),
                TextColumn::make('email')->label('E-mail'),
                TextColumn::make('phone')->label('Phone Number'),
                TextColumn::make('message_title')->label('Message Title'),
                TextColumn::make('message')->label('Message'),
                //TextColumn::make('created_at')->label('Created At')->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
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
            'index' => Pages\ListSuggestions::route('/'),
            'create' => Pages\CreateSuggestion::route('/create'),
            'edit' => Pages\EditSuggestion::route('/{record}/edit'),
        ];
    }    
}
