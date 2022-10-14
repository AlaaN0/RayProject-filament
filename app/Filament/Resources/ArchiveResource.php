<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Archive;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\DeleteBulkAction;
use App\Filament\Resources\ArchiveResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ArchiveResource\RelationManagers;
use App\Filament\Resources\ArchiveResource\Pages\EditArchive;
use App\Filament\Resources\ArchiveResource\Pages\ListArchives;
use App\Filament\Resources\ArchiveResource\Pages\CreateArchive;
use Filament\Forms\Components\RichEditor;

class ArchiveResource extends Resource
{
    protected static ?string $model = Archive::class;

    protected static ?string $navigationIcon = 'heroicon-o-heart';
    protected static ?string $navigationGroup = 'News';
    protected static ?string $navigationLabel = 'News Archives';
    protected static ?int $navigationSort = 1;

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
                TextColumn::make('title')->label('Title'),
                TextColumn::make('content')->label('Content'),
                TextColumn::make('news_date')->label('News Date')->dateTime(),
                TextColumn::make('created_at')->label('Created At')->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
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
            'index' => Pages\ListArchives::route('/'),
            'create' => Pages\CreateArchive::route('/create'),
            'edit' => Pages\EditArchive::route('/{record}/edit'),
        ];
    }    
}
