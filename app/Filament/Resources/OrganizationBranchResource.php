<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use App\Models\OrganizationBranch;
use Filament\Forms\Components\Card;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\OrganizationBranchResource\Pages;
use App\Filament\Resources\OrganizationBranchResource\RelationManagers;

class OrganizationBranchResource extends Resource
{
    protected static ?string $model = OrganizationBranch::class;

    protected static ?string $navigationIcon = 'heroicon-o-heart';
    protected static ?string $navigationGroup = 'About Organization';
    protected static ?string $navigationLabel = 'Branches';
    protected static ?int $navigationSort = 0;

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
                TextColumn::make('title')->label('Name'),
                TextColumn::make('content')->label('Description'),
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
            'index' => Pages\ListOrganizationBranches::route('/'),
            'create' => Pages\CreateOrganizationBranch::route('/create'),
            'edit' => Pages\EditOrganizationBranch::route('/{record}/edit'),
        ];
    }    
}
