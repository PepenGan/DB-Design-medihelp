<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ApotekResource\Pages;
use App\Filament\Resources\ApotekResource\RelationManagers;
use App\Models\Apotek;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Tabs;
 
class ApotekResource extends Resource
{
    protected static ?string $model = Apotek::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    Forms\Components\TextInput::make('ID_Apotek')
                    ->required()
                    ->maxLength(255),
           
                    Forms\Components\TextInput::make('ID_Apoteker')
                    ->required()
                    ->maxLength(255),
          
                    Forms\Components\TextInput::make('Nama_Apotek')
                    ->required()
                    ->maxLength(255),
                
              
                    Forms\Components\TextInput::make('Lokasi')
                    ->required()
                    ->maxLength(255),
                
                    Forms\Components\Select::make('Jam_Buka')->options([
                        '07.00 - 15.00',
                        '07.00 - 17.00',
                        '07.00 - 19.00',
                        '07.00 - 21.00'
                ]),
                ])
                
        ]);
        
                         
                               }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('ID_Apotek')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('ID_Apoteker'),
                Tables\Columns\TextColumn::make('Nama_Apotek')->searchable(),
                Tables\Columns\TextColumn::make('Lokasi'),
                Tables\Columns\TextColumn::make('Jam_Buka'),
                // Tables\Columns\TextColumn::make('Created_at')
                // ->dateTime(),
                // Tables\Columns\TextColumn::make('Update_at')
                // ->dateTime(),
                
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
            'index' => Pages\ListApoteks::route('/'),
            'create' => Pages\CreateApotek::route('/create'),
            'edit' => Pages\EditApotek::route('/{record}/edit'),
        ];
    }    
}
