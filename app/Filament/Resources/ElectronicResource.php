<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Electronic;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ElectronicResource\Pages;
use App\Filament\Resources\ElectronicResource\RelationManagers;

class ElectronicResource extends Resource
{
    protected static ?string $model = Electronic::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';
    protected static ?string $navigationLabel = 'Electronic Social Sharing';
    protected static ?string $navigationGroup = 'Electronic Social Sharing';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                ->schema([
                TextInput::make('title')->required(),
                RichEditor::make('content'),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->label('Title'),
                TextColumn::make('content')->label('content'),
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
            'index' => Pages\ListElectronics::route('/'),
            'create' => Pages\CreateElectronic::route('/create'),
            'edit' => Pages\EditElectronic::route('/{record}/edit'),
        ];
    }    
}
