<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactUsResource\Pages;
use App\Filament\Resources\ContactUsResource\RelationManagers;
use App\Models\ContactUs;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContactUsResource extends Resource
{
    protected static ?string $model = ContactUs::class;

    protected static ?string $navigationIcon = 'heroicon-o-heart';
    protected static ?string $navigationGroup = 'Submissions';
    protected static ?string $navigationLabel = 'Contact Us';
    protected static ?int $navigationSort = 0;

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
                TextColumn::make('email')->label('E-mail'),
                TextColumn::make('address')->label('Address'),
                TextColumn::make('phone')->label('Phone Number'),
                TextColumn::make('type')->label('Type'),
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
            'index' => Pages\ListContactUs::route('/'),
            'create' => Pages\CreateContactUs::route('/create'),
            'edit' => Pages\EditContactUs::route('/{record}/edit'),
        ];
    }    
}
