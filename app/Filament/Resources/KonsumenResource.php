<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KonsumenResource\Pages;
use App\Filament\Resources\KonsumenResource\RelationManagers;
use App\Models\Konsumen;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KonsumenResource extends Resource
{
    protected static ?string $model = Konsumen::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('Nama_Konsumen')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('Umur_Konsumen')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('Alamat_Konsumen')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('phone_Konsumen')
                ->required()
                ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('Nama_Konsumen')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('Umur_Konsumen'),
                Tables\Columns\TextColumn::make('Alamat_Konsumen')->searchable(),
                Tables\Columns\TextColumn::make('Phone_Konsumen'),
                Tables\Columns\TextColumn::make('Jam_Buka'),
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
            'index' => Pages\ListKonsumens::route('/'),
            'create' => Pages\CreateKonsumen::route('/create'),
            'edit' => Pages\EditKonsumen::route('/{record}/edit'),
        ];
    }    
}
