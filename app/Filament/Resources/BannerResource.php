<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BannerResource\Pages;
use App\Filament\Resources\BannerResource\RelationManagers;
use App\Models\Banner;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BannerResource extends Resource
{
    protected static ?string $model = Banner::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationGroup = 'Página principal';

    protected static ?string $pluralModelLabel = 'Portadas';

    protected static ?string $modelLabel = 'Portada';

    protected static ?string $slug = 'portada';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Título')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('image')
                    ->label('Imagen')
                    ->image()
                    ->disk('public')
                    ->directory('banners')
                    ->maxSize(1024) // 1MB
                    ->nullable(),
                Forms\Components\Textarea::make('description')
                    ->label('Descripción')
                    ->rows(3)
                    ->maxLength(65535)
                    ->nullable(),
                Forms\Components\TextInput::make('link')
                    ->label('Enlace')
                    ->url()
                    ->maxLength(255)
                    ->nullable(),
                Forms\Components\Toggle::make('active')
                    ->label('Activo')
                    ->default(true),
                Forms\Components\TextInput::make('order')
                    ->label('Orden')
                    ->default(0)
                    ->numeric(),
                Forms\Components\DateTimePicker::make('start_date')
                    ->label('Fecha de inicio')
                    ->nullable(),
                Forms\Components\DateTimePicker::make('end_date')
                    ->label('Fecha de fin')
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')->label('Imagen')->disk('public'),
                Tables\Columns\TextColumn::make('title')->label('Título')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('description')->label('Descripción')->limit(50)->wrap(),
                Tables\Columns\TextColumn::make('link')->label('Enlace')->limit(50)->wrap(),
                Tables\Columns\TextColumn::make('order')->label('Orden')->sortable(),
                Tables\Columns\TextColumn::make('start_date')
                    ->label('Fecha de inicio')
                    ->dateTime('d/m/Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('end_date')
                    ->label('Fecha de fin')
                    ->dateTime('d/m/Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Creado el')
                    ->dateTime('d/m/Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Actualizado el')
                    ->dateTime('d/m/Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListBanners::route('/'),
            'create' => Pages\CreateBanner::route('/crear'),
            'edit' => Pages\EditBanner::route('/{record}/editar'),
        ];
    }
}
