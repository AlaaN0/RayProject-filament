<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use App\Models\RecruitmentJob;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\BooleanColumn;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\RecruitmentJobResource\Pages;
use App\Filament\Resources\RecruitmentJobResource\RelationManagers;

class RecruitmentJobResource extends Resource
{
    protected static ?string $model = RecruitmentJob::class;

    protected static ?string $navigationIcon = 'heroicon-o-heart';
    protected static ?string $navigationGroup = 'Recruitments';
    protected static ?string $navigationLabel = 'Jobs';
    protected static ?int $navigationSort = 0;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                ->schema([
                    TextInput::make('title')->required(),
                    RichEditor::make('description')->required(),
                    Toggle::make('status')->label('Status')->inline(false),
                    TextInput::make('job_type')->required()->label('Job Type')
                            ->datalist([
                                'Full Time',
                                'Part Time',
                            ]),
                    DatePicker::make('recruitement_date')->label('Recruitment date')->required(),

                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->label('Title'),
                TextColumn::make('job_type')->label('Type'),
                TextColumn::make('description')->label('Description'),
                TextColumn::make('recruitement_date')->label('Recruitment Date')->dateTime(),
                BooleanColumn::make('status')->label('Is Active'),
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
                ])
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
            'index' => Pages\ListRecruitmentJobs::route('/'),
            'create' => Pages\CreateRecruitmentJob::route('/create'),
            'edit' => Pages\EditRecruitmentJob::route('/{record}/edit'),
        ];
    }    
}
