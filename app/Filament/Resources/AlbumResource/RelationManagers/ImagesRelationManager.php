<?php

namespace App\Filament\Resources\AlbumResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class ImagesRelationManager extends RelationManager
{
    protected static string $relationship = 'images';

    protected static ?string $title = 'الصور';

    protected static ?string $modelLabel = 'صورة';

    protected static ?string $pluralModelLabel = 'الصور';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('path')
                    ->label('الصورة')
                    ->image()
                    ->disk('public')
                    ->directory('gallery/images')
                    ->visibility('public')
                    ->imageEditor()
                    ->required()
                    ->columnSpanFull(),

                Forms\Components\TextInput::make('caption')
                    ->label('التعليق التوضيحي')
                    ->maxLength(255)
                    ->columnSpanFull()
                    ->placeholder('مثال: مدخل المصنع - المنطقة الصناعية بنجع حمادي'),

                Forms\Components\TextInput::make('sort_order')
                    ->label('ترتيب العرض')
                    ->numeric()
                    ->default(0)
                    ->helperText('الأرقام الأصغر تظهر أولاً'),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('caption')
            ->columns([
                Tables\Columns\ImageColumn::make('path')
                    ->label('الصورة')
                    ->disk('public')
                    ->square()
                    ->size(80),

                Tables\Columns\TextColumn::make('caption')
                    ->label('التعليق')
                    ->searchable()
                    ->wrap()
                    ->placeholder('بدون تعليق'),

                Tables\Columns\TextColumn::make('sort_order')
                    ->label('الترتيب')
                    ->sortable(),
            ])
            ->defaultSort('sort_order', 'asc')
            ->headerActions([
                Tables\Actions\CreateAction::make()
                    ->label('إضافة صورة جديدة')
                    ->modalHeading('رفع صورة جديدة'),
            ])
            ->actions([
                Tables\Actions\EditAction::make()->label('تعديل'),
                Tables\Actions\DeleteAction::make()->label('حذف'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()->label('حذف المحدد'),
                ]),
            ])
            ->reorderable('sort_order');
    }
}
