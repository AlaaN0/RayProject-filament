<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Brochure;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\BrochureResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\BrochureResource\RelationManagers;
use Filament\Tables\Columns\TextColumn;

class BrochureResource extends Resource
{
    protected static ?string $model = Brochure::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';
    protected static ?string $navigationLabel = 'Brochures';
    protected static ?string $navigationGroup = 'Brochures';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                ->schema([
                    TextInput::make('name')->required(),
                    FileUpload::make('attachment')
                    ->image()
                    ->visibility($visibility = 'public'),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Name'),
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
                ])->label('Actions'),
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
            'index' => Pages\ListBrochures::route('/'),
            'create' => Pages\CreateBrochure::route('/create'),
            'edit' => Pages\EditBrochure::route('/{record}/edit'),
        ];
    }    
}
