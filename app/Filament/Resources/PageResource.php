<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageResource\Pages;
use App\Filament\Resources\PageResource\RelationManagers;
use App\Models\Page;
use Filament\Forms;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


    protected static ?string $navigationGroup = 'Página principal';

    protected static ?string $pluralModelLabel = 'Páginas';

    protected static ?string $modelLabel = 'Página';

    protected static ?string $slug = 'pagina';


    public static function canCreate(): bool
    {
        return false;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required()->label('Nombre del gimnasio')
                    ->maxLength(255)
                    ->unique(ignoreRecord: true)
                    ->columnSpanFull(),
                FileUpload::make('icon')->required()->label('Icono')
                    ->image()
                    ->disk('public')
                    ->directory('icons')
                    ->visibility('public')
                    ->maxSize(1024)
                    ->acceptedFileTypes(['image/*'])
                    ->columnSpanFull(),
                ColorPicker::make('color_primary')->required()
                    ->label('Color Primario'),
                ColorPicker::make('color_secondary')->required()
                    ->label('Color Secundario'),
                ColorPicker::make('color_tertiary')->required()
                    ->label('Color Terciario'),
                ColorPicker::make('background_color')->required()
                    ->label('Color de Fondo'),
                ColorPicker::make('background_secondary_color')->required()
                    ->label('Color de Fondo Secundario'),
                ColorPicker::make('header_color')->required()
                    ->label('Color de Encabezado'),
                ColorPicker::make('footer_color')->required()
                    ->label('Color de Pie de Página'),
                ColorPicker::make('text_color')->required()
                    ->label('Color de Texto'),
            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Nombre del gimnasio'),
                Tables\Columns\ImageColumn::make('icon')->label('Icono')->disk('public'),
                Tables\Columns\ColorColumn::make('color_primary')->label('Color Primario'),
                Tables\Columns\ColorColumn::make('color_secondary')->label('Color Secundario'),
                Tables\Columns\ColorColumn::make('color_tertiary')->label('Color Terciario'),
                Tables\Columns\ColorColumn::make('background_color')->label('Color de Fondo'),
                Tables\Columns\ColorColumn::make('background_secondary_color')->label('Color de Fondo Secundario'),
                Tables\Columns\ColorColumn::make('header_color')->label('Color de Encabezado'),
                Tables\Columns\ColorColumn::make('footer_color')->label('Color de Pie de Página'),
                Tables\Columns\ColorColumn::make('text_color')->label('Color de Texto'),
            ])->filters([
                //
            ])->actions([
                Tables\Actions\ViewAction::make(),
            ])->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    // Define bulk actions here if needed
                ]),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([]),
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
            'index' => Pages\ListPages::route('/'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }
}
