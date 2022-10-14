<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use App\Models\RecruitmentSubm;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\RecruitmentSubmResource\Pages;
use App\Filament\Resources\RecruitmentSubmResource\RelationManagers;

class RecruitmentSubmResource extends Resource
{
    protected static ?string $model = RecruitmentSubm::class;

    protected static ?string $navigationIcon = 'heroicon-o-heart';
    protected static ?string $navigationGroup = 'Recruitments';
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
                TextColumn::make('name')->label('Name'),
                TextColumn::make('email')->label('Email'),
                TextColumn::make('phone')->label('Phone Number'),
                TextColumn::make('job_title')->label('Job Title'),
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
            'index' => Pages\ListRecruitmentSubms::route('/'),
            'create' => Pages\CreateRecruitmentSubm::route('/create'),
            'edit' => Pages\EditRecruitmentSubm::route('/{record}/edit'),
        ];
    }    
}
