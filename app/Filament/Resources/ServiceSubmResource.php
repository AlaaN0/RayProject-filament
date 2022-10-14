<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\ServiceSubm;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ServiceSubmResource\Pages;
use App\Filament\Resources\ServiceSubmResource\RelationManagers;

class ServiceSubmResource extends Resource
{
    protected static ?string $model = ServiceSubm::class;

    protected static ?string $navigationIcon = 'heroicon-o-heart';
    protected static ?string $navigationGroup = 'Service Provided Level Survey';
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
                TextColumn::make('id')->label('Submission Id'),
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
            'index' => Pages\ListServiceSubms::route('/'),
            'create' => Pages\CreateServiceSubm::route('/create'),
            'edit' => Pages\EditServiceSubm::route('/{record}/edit'),
        ];
    }    
}
