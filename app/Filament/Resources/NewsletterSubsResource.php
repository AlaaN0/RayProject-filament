<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use App\Models\NewsletterSubs;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\NewsletterSubsResource\Pages;
use App\Filament\Resources\NewsletterSubsResource\RelationManagers;

class NewsletterSubsResource extends Resource
{
    protected static ?string $model = NewsletterSubs::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';
    protected static ?string $navigationLabel = 'Newsletter Subscriptions';
    protected static ?string $navigationGroup = 'Newsletter Subscriptions';

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
                TextColumn::make('created_at')->label('Created At')->dateTime(),
                //TextColumn::make('updated_at')->label('Updated At')->dateTime(),
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
            'index' => Pages\ListNewsletterSubs::route('/'),
            'create' => Pages\CreateNewsletterSubs::route('/create'),
            'edit' => Pages\EditNewsletterSubs::route('/{record}/edit'),
        ];
    }    
}
