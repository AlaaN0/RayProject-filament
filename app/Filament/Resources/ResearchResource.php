<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Research;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ResearchResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ResearchResource\RelationManagers;

class ResearchResource extends Resource
{
    protected static ?string $model = Research::class;

    protected static ?string $navigationIcon = 'heroicon-o-heart';
    protected static ?string $navigationGroup = 'Submissions';
    protected static ?string $navigationLabel = 'Research Form';
    protected static ?int $navigationSort = 5;

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
                TextColumn::make('full_name')->label('Full Nmae'),
                TextColumn::make('date_birth')->label('Date Od Birth')->dateTime(),
                TextColumn::make('nationality')->label('Nationality'),
                TextColumn::make('citizenship')->label('Citizenship'),
                TextColumn::make('phone')->label('Phone Number'),
                TextColumn::make('email')->label('E-mail'),
                TextColumn::make('website')->label('Website'),
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
            'index' => Pages\ListResearch::route('/'),
            'create' => Pages\CreateResearch::route('/create'),
            'edit' => Pages\EditResearch::route('/{record}/edit'),
        ];
    }    
}
