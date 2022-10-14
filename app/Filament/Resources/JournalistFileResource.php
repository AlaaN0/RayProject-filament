<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use App\Models\JournalistFile;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\JournalistFileResource\Pages;
use App\Filament\Resources\JournalistFileResource\RelationManagers;

class JournalistFileResource extends Resource
{
    protected static ?string $model = JournalistFile::class;

    protected static ?string $navigationIcon = 'heroicon-o-heart';
    protected static ?string $navigationGroup = 'News';
    protected static ?string $navigationLabel = 'Journalist Files';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                ->schema([
                    TextInput::make('title')->required(),
                    RichEditor::make('content')->required(),
                    DatePicker::make('news_date')->required(),
                    Select::make('category_id')
                        ->relationship('category', 'name')->required(),
                    FileUpload::make('featured_image')
                        ->image()
                        ->visibility($visibility = 'public'),
                    FileUpload::make('gallery')
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
                TextColumn::make('content')->label('Content'),
                TextColumn::make('news_date')->label('News Date')->dateTime(),
                TextColumn::make('created_at')->label('Created At')->dateTime(),
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
            'index' => Pages\ListJournalistFiles::route('/'),
            'create' => Pages\CreateJournalistFile::route('/create'),
            'edit' => Pages\EditJournalistFile::route('/{record}/edit'),
        ];
    }    
}
