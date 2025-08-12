<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BranchResource\Pages;
use App\Filament\Resources\BranchResource\RelationManagers;
use App\Models\Branch;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BranchResource extends Resource
{
    protected static ?string $model = Branch::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office';

    protected static ?string $navigationGroup = 'Administración';

    protected static ?string $pluralModelLabel = 'Sucursales';

    protected static ?string $modelLabel = 'Sucursal';

    protected static ?string $slug = 'sucursal';




    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Nombre de la Sucursal')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                TextInput::make('description')
                    ->label('Descripción')
                    ->nullable()
                    ->maxLength(500)
                    ->columnSpanFull(),
                TextInput::make('opening_hours')
                    ->label('Horario de Apertura')
                    ->nullable()
                    ->maxLength(50)
                    ->columnSpanFull(),
                TextInput::make('closing_hours')
                    ->label('Horario de Cierre')
                    ->nullable()
                    ->maxLength(50)
                    ->columnSpanFull(),
                FileUpload::make('images')
                    ->label('Imágenes')
                    ->multiple()
                    ->columnSpanFull(),
                TextInput::make('address')
                    ->label('Dirección')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                TextInput::make('phone')
                    ->label('Teléfono')
                    ->required()
                    ->maxLength(20)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nombre de la Sucursal')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('address')
                    ->label('Dirección')
                    ->searchable()
                    ->sortable(),
                ImageColumn::make('images')
                    ->label('Imágenes')
                    ->stacked(),
                TextColumn::make('phone')
                    ->label('Teléfono')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListBranches::route('/'),
            'create' => Pages\CreateBranch::route('/create'),
            'edit' => Pages\EditBranch::route('/{record}/edit'),
        ];
    }
}
