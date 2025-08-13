<?php

namespace App\Filament\Resources;

use App\Enums\StatusInventory;
use App\Filament\Resources\InventoryResource\Pages;
use App\Filament\Resources\InventoryResource\RelationManagers;
use App\Models\Inventory;
use Filament\Forms;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InventoryResource extends Resource
{
    protected static ?string $model = Inventory::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';

    protected static ?string $navigationGroup = 'Administración';

    protected static ?string $pluralModelLabel = 'Inventarios';

    protected static ?string $modelLabel = 'Inventario';

    protected static ?string $slug = 'inventario';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Nombre')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                TextInput::make('description')
                    ->label('Descripción')
                    ->required()
                    ->maxLength(500)
                    ->columnSpanFull(),
                Select::make('branch_id')
                    ->label('Sucursal')
                    ->relationship('branch', 'name')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->columnSpanFull(),
                Select::make('status')
                    ->label('Estado')
                    ->options(StatusInventory::class)
                    ->required()
                    ->columnSpanFull(),
                DateTimePicker::make('maintenance_date')
                    ->label('Fecha de Mantenimiento')
                    ->required(fn(Forms\Get $get) => $get('status') === StatusInventory::EN_MANTENIMIENTO)
                    ->columnSpanFull(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nombre')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('description')
                    ->label('Descripción')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('branch.name')
                    ->label('Sucursal')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('status')
                    ->label('Estado')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('maintenance_date')
                    ->label('Fecha de Mantenimiento')
                    ->dateTime()
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                //
            ])
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
            'index' => Pages\ListInventories::route('/'),
            'create' => Pages\CreateInventory::route('/create'),
            'edit' => Pages\EditInventory::route('/{record}/edit'),
        ];
    }
}
