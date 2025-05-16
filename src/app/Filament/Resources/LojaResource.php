<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LojaResource\Pages;
use App\Filament\Resources\LojaResource\RelationManagers;
use App\Models\Loja;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LojaResource extends Resource
{
    protected static ?string $model = Loja::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('loja')
                ->label("Nome da Loja / Cidade")
                ->required(),

                Forms\Components\TextInput::make('gerencia')
                ->label("Responsável")
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
               ->columns([
               Tables\Columns\TextColumn::make("loja")
               ->label("Nome da Loja / Cidade")
               ->searchable()
               ->sortable(),
               Tables\Columns\TextColumn::make("gerencia")
               ->label("Responsável")
               ->searchable()
               ->sortable(),



            ])
            ->filters([
                //
            ])
            ->actions([
                
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListLojas::route('/'),
            'create' => Pages\CreateLoja::route('/create'),
            'edit' => Pages\EditLoja::route('/{record}/edit'),
        ];
    }
}
