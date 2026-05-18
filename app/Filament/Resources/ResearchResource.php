<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ResearchResource\Pages;
use App\Models\Research;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ResearchResource extends Resource
{
    protected static ?string $model = Research::class;

    protected static ?string $navigationIcon = 'heroicon-o-beaker';

    protected static ?string $navigationLabel = 'الأبحاث';

    protected static ?string $modelLabel = 'بحث';

    protected static ?string $pluralModelLabel = 'الأبحاث';

    protected static ?string $navigationGroup = 'إدارة المحتوى';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('محتوى البحث')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('عنوان البحث')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),

                        Forms\Components\Textarea::make('description')
                            ->label('الوصف')
                            ->rows(5)
                            ->required()
                            ->columnSpanFull(),

                        Forms\Components\TagsInput::make('tags')
                            ->label('الوسوم (Tags)')
                            ->placeholder('اضغط Enter بعد كل وسم')
                            ->helperText('مثال: طاقة شمسية، 2000°C+، شراكة هندية')
                            ->columnSpanFull(),
                    ]),

                Forms\Components\Section::make('الترتيب والنشر')
                    ->schema([
                        Forms\Components\TextInput::make('sort_order')
                            ->label('ترتيب العرض')
                            ->numeric()
                            ->default(0)
                            ->helperText('الأرقام الأصغر تظهر أولاً'),

                        Forms\Components\Toggle::make('is_published')
                            ->label('منشور')
                            ->default(true),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('sort_order')
                    ->label('#')
                    ->sortable(),

                Tables\Columns\TextColumn::make('title')
                    ->label('العنوان')
                    ->searchable()
                    ->wrap(),

                Tables\Columns\TextColumn::make('tags')
                    ->label('الوسوم')
                    ->badge()
                    ->separator(','),

                Tables\Columns\IconColumn::make('is_published')
                    ->label('منشور')
                    ->boolean()
                    ->sortable(),
            ])
            ->defaultSort('sort_order')
            ->reorderable('sort_order')
            ->filters([
                Tables\Filters\TernaryFilter::make('is_published')
                    ->label('حالة النشر')
                    ->trueLabel('منشور فقط')
                    ->falseLabel('غير منشور فقط')
                    ->native(false),
            ])
            ->actions([
                Tables\Actions\EditAction::make()->label('تعديل'),
                Tables\Actions\DeleteAction::make()->label('حذف'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()->label('حذف المحدد'),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListResearch::route('/'),
            'create' => Pages\CreateResearch::route('/create'),
            'edit' => Pages\EditResearch::route('/{record}/edit'),
        ];
    }
}
