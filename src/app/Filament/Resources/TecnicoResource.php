<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Tecnico;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use App\Filament\Resources\TecnicoResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TecnicoResource\RelationManagers;
use App\Filament\Resources\TecnicoResource\Pages\EditTecnico;
use App\Filament\Resources\TecnicoResource\Pages\ListTecnicos;
use App\Filament\Resources\TecnicoResource\Pages\CreateTecnico;

class TecnicoResource extends Resource
{
    protected static ?string $model = Tecnico::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
                ->schema([
                Forms\Components\TextInput::make('nome')
                ->label("Técnico")
                ->required(),

                Forms\Components\Select::make('loja_id')
                ->label('Loja')
                ->relationship('loja', 'loja')
                ->searchable()
                ->preload()
                ->createOptionForm([

                Forms\Components\TextInput::make('loja')
                ->label("Nome da Loja / Cidade")
                ->required(),

                Forms\Components\TextInput::make('gerencia')
                ->label("Responsável")
                ->required(),

                ])
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
               Tables\Columns\TextColumn::make("nome")
               ->label("Nome do Técnico")
               ->searchable()
               ->sortable(),

               Tables\Columns\TextColumn::make("loja.loja")
               ->label("Loja")
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
            'index' => Pages\ListTecnicos::route('/'),
            'create' => Pages\CreateTecnico::route('/create'),
            'edit' => Pages\EditTecnico::route('/{record}/edit'),
        ];
    }
}
