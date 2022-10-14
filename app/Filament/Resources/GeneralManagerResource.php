<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use App\Models\GeneralManager;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\GeneralManagerResource\Pages;
use App\Filament\Resources\GeneralManagerResource\RelationManagers;

class GeneralManagerResource extends Resource
{
    protected static ?string $model = GeneralManager::class;

    protected static ?string $navigationIcon = 'heroicon-o-heart';
    protected static ?string $navigationGroup = 'Submissions';
    protected static ?string $navigationLabel = 'Contact General Manager Ofiice';
    protected static ?int $navigationSort = 2;

    //public static function form(Form $form): Form
    //{
    //    return $form
    //        ->schema([
    //            //
    //        ]);
    //}

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Name'),
                TextColumn::make('nid')->label('NID'),
                TextColumn::make('phone')->label('Phone Number'),
                TextColumn::make('city')->label('City'),
                TextColumn::make('message_title')->label('Message Title'),
                TextColumn::make('message')->label('Message'),
                TextColumn::make('created_at')->label('Created At')->dateTime(),
                //TextColumn::make('updated_at')->label('Updated At')->dateTime(),
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
            'index' => Pages\ListGeneralManagers::route('/'),
            'create' => Pages\CreateGeneralManager::route('/create'),
            'edit' => Pages\EditGeneralManager::route('/{record}/edit'),
        ];
    }    
}
