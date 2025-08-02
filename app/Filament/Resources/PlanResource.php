<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PlanResource\Pages;
use App\Filament\Resources\PlanResource\RelationManagers;
use App\Models\Plan;
use Filament\Forms;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PlanResource extends Resource
{
    protected static ?string $model = Plan::class;

    protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';

    protected static ?string $navigationGroup = 'Administración';

    protected static ?string $pluralModelLabel = 'Planes';

    protected static ?string $modelLabel = 'Plan';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Nombre del Plan')
                    ->required()
                    ->maxLength(255)
                    ->unique(Plan::class, 'name', ignoreRecord: true),
                TextInput::make('description')
                    ->label('Descripción')
                    ->nullable()
                    ->maxLength(65535),
                TextInput::make('price')
                    ->label('Precio')
                    ->required()
                    ->numeric()
                    ->minValue(0)
                    ->maxValue(999999.99),
                TextInput::make('duration_days')
                    ->label('Duración (días)')
                    ->required()
                    ->numeric()
                    ->minValue(1)
                    ->maxValue(365),
                Repeater::make('benefits')
                    ->label('Beneficios')
                    ->schema([
                        TextInput::make('benefit')
                            ->label('Beneficio')
                            ->required(),
                    ])
                    ->helperText('Agrega los beneficios de este plan. Puedes añadir varios.')
                    ->minItems(1)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nombre del Plan')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('description')
                    ->label('Descripción')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('price')
                    ->label('Precio')
                    ->searchable()
                    ->sortable()
                    ->formatStateUsing(fn($state) => '$' . number_format($state, 2)),
                TextColumn::make('duration_days')
                    ->label('Duración (días)')
                    ->searchable()
                    ->sortable(),
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
            'index' => Pages\ListPlans::route('/'),
            'create' => Pages\CreatePlan::route('/create'),
            'edit' => Pages\EditPlan::route('/{record}/edit'),
        ];
    }
}
