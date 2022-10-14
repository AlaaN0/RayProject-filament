<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\VotingSubm;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\VotingSubmResource\Pages;
use App\Filament\Resources\VotingSubmResource\RelationManagers;

class VotingSubmResource extends Resource
{
    protected static ?string $model = VotingSubm::class;

    protected static ?string $navigationIcon = 'heroicon-o-heart';
    protected static ?string $navigationGroup = 'Voting';
    protected static ?string $navigationLabel = 'Submissions';
    protected static ?int $navigationSort = 1;

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
                TextColumn::make('question')->label('Question'),
                TextColumn::make('answer')->label('Answer'),
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
            'index' => Pages\ListVotingSubms::route('/'),
            'create' => Pages\CreateVotingSubm::route('/create'),
            'edit' => Pages\EditVotingSubm::route('/{record}/edit'),
        ];
    }    
}
