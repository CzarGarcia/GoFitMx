<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CustomerInstructorResource\Pages;
use App\Filament\Resources\CustomerInstructorResource\RelationManagers;
use App\Models\CustomerInstructor;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CustomerInstructorResource extends Resource
{
    protected static ?string $model = CustomerInstructor::class;

    protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';
    protected static ?string $navigationGroup = 'Administración';
    protected static ?string $pluralModelLabel = 'Clientes-Instructores';
    protected static ?string $modelLabel = 'Cliente-Instructor';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('customer.user.name')
                    ->label('Cliente')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('instructor.user.name')
                    ->label('Instructor Asignado')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('assigned_at')
                    ->label('Fecha de Asignación')
                    ->date()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([])
            ->bulkActions([]);
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
            'index' => Pages\ListCustomerInstructors::route('/'),
        ];
    }
}
