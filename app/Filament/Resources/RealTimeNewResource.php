<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\RealTimeNew;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\RealTimeNewResource\Pages;
use App\Filament\Resources\RealTimeNewResource\RelationManagers;

class RealTimeNewResource extends Resource
{
    protected static ?string $model = RealTimeNew::class;

    protected static ?string $navigationIcon = 'heroicon-o-heart';
    protected static ?string $navigationGroup = 'News';
    protected static ?string $navigationLabel = 'Real Time News';
    protected static ?int $navigationSort = 4;

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
                TextColumn::make('name')->label('Title'),
                TextColumn::make('content')->label('Description'),
                TextColumn::make('created_at')->label('Created At')->dateTime(),
                //TextColumn::make('updated_at')->label('Updated At')->dateTime(),
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
            'index' => Pages\ListRealTimeNews::route('/'),
            'create' => Pages\CreateRealTimeNew::route('/create'),
            'edit' => Pages\EditRealTimeNew::route('/{record}/edit'),
        ];
    }    
}
