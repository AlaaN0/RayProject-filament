<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\FarmerSlider;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\FarmerSliderResource\Pages;
use App\Filament\Resources\FarmerSliderResource\RelationManagers;

class FarmerSliderResource extends Resource
{
    protected static ?string $model = FarmerSlider::class;

    protected static ?string $navigationIcon = 'heroicon-o-heart';
    protected static ?string $navigationGroup = 'Slider';
    protected static ?string $navigationLabel = 'Farmer Awareness Slider';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                ->schema([
                    TextInput::make('name')->required(),
                    TextInput::make('link')->url(),
                    Toggle::make('status')->label('Status')->inline(false),
                    FileUpload::make('images')
                    ->label('Images')
                    ->image()
                    ->visibility($visibility = 'public'),
                ])
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Title'),
                TextColumn::make('link')->label('Link'),
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
            'index' => Pages\ListFarmerSliders::route('/'),
            'create' => Pages\CreateFarmerSlider::route('/create'),
            'edit' => Pages\EditFarmerSlider::route('/{record}/edit'),
        ];
    }    
}
