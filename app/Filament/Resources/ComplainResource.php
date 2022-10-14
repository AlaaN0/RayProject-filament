<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ComplainResource\Pages;
use App\Filament\Resources\ComplainResource\RelationManagers;
use App\Models\Complain;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;

class ComplainResource extends Resource
{
    protected static ?string $model = Complain::class;

    protected static ?string $navigationIcon = 'heroicon-o-heart';
    protected static ?string $navigationGroup = 'Submissions';
    protected static ?string $navigationLabel = 'Complains';
    protected static ?int $navigationSort = 3;

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
                TextColumn::make('email')->label('Email'),
                TextColumn::make('phone')->label('Phone Number'),
                TextColumn::make('message_title')->label('Message Title'),
                TextColumn::make('message')->label('Message'),
                TextColumn::make('created_at')->label('Created At')->dateTime(),

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
            'index' => Pages\ListComplains::route('/'),
            'create' => Pages\CreateComplain::route('/create'),
            'edit' => Pages\EditComplain::route('/{record}/edit'),
        ];
    }    
}
