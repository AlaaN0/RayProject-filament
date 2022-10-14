<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\VotingQuest;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Repeater;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\BooleanColumn;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\VotingQuestResource\Pages;
use App\Filament\Resources\VotingQuestResource\RelationManagers;

class VotingQuestResource extends Resource
{
    protected static ?string $model = VotingQuest::class;

    protected static ?string $navigationIcon = 'heroicon-o-heart';
    protected static ?string $navigationGroup = 'Voting';
    protected static ?string $navigationLabel = 'Questions';
    protected static ?int $navigationSort = 0;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('question')->required(),
                        Repeater::make('answers')
                            ->schema([
                                TextInput::make('answers')->required(),  
                            ])
                            ->createItemButtonLabel('Add row'),
                        Toggle::make('status')->label('Status')->inline(false),
                        //Toggle::make('is_active')->label('Is Active')->inline(false) ,
                       
                            
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('question')->label('Question'),
                BooleanColumn::make('status')->label('Is Active'),
                //BooleanColumn::make('is_required')->label('Is Required'),
                //TextColumn::make('answer_type')->label('Answer Type'),
                TextColumn::make('created_at')->label('Created At')->dateTime(),
                TextColumn::make('updated_at')->label('Updated At')->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ActionGroup::make([
                    //Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ]),
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
            'index' => Pages\ListVotingQuests::route('/'),
            'create' => Pages\CreateVotingQuest::route('/create'),
            'edit' => Pages\EditVotingQuest::route('/{record}/edit'),
        ];
    }    
}
