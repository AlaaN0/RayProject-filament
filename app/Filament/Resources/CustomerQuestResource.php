<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use App\Models\CustomerQuest;
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
use App\Filament\Resources\CustomerQuestResource\Pages;
use App\Filament\Resources\CustomerQuestResource\RelationManagers;

class CustomerQuestResource extends Resource
{
    protected static ?string $model = CustomerQuest::class;

    protected static ?string $navigationIcon = 'heroicon-o-heart';
    protected static ?string $navigationGroup = 'Customer Satisfaction Survey';
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
                    Toggle::make('is_required')->label('Is Required')->inline(false),
                    Toggle::make('is_active')->label('Is Active')->inline(false) ,
                    TextInput::make('answer_type')->required()->label('Answer Type')
                        ->datalist([
                            'Text Answer',
                            'Multiple Answer',
                            'Single Answer',
                        ]),
                        
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('question')->label('Question'),
                BooleanColumn::make('is_active')->label('Is Active'),
                BooleanColumn::make('is_required')->label('Is Required'),
                TextColumn::make('answer_type')->label('Answer Type'),
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
            'index' => Pages\ListCustomerQuests::route('/'),
            'create' => Pages\CreateCustomerQuest::route('/create'),
            'edit' => Pages\EditCustomerQuest::route('/{record}/edit'),
        ];
    }    
}
