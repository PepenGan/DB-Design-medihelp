<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KonsultasiResource\Pages;
use App\Filament\Resources\KonsultasiResource\RelationManagers;
use App\Models\Konsultasi;
use Filament\Forms;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\Relationship;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KonsultasiResource extends Resource
{
    protected static ?string $model = Konsultasi::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('konsultans_id')
                ->relationship('konsultan','nama')
                ->required(),
                Select::make('user_id')
                ->relationship('user','name')
                ->required(),
                DateTimePicker:: make('jadwal')
                ->required(),
                Select::make('status')
                ->options([
                    'pending' => 'Pending',
                    'confrimed' => 'Confirmed',
                    'completed' => 'Completed', 
                ])
               ->default('pending')

                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('konsultans_id')->sortable(),
                TextColumn::make('user_id')->sortable(),
                TextColumn::make('jadwal')->sortable(),
                TextColumn::make('status')->sortable(),
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
            'index' => Pages\ListKonsultasis::route('/'),
            'create' => Pages\CreateKonsultasi::route('/create'),
            'edit' => Pages\EditKonsultasi::route('/{record}/edit'),
        ];
    }    
}
