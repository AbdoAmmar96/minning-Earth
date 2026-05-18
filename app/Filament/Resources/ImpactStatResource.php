<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ImpactStatResource\Pages;
use App\Models\ImpactStat;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ImpactStatResource extends Resource
{
    protected static ?string $model = ImpactStat::class;

    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';

    protected static ?string $navigationLabel = 'إحصائيات الأثر';

    protected static ?string $modelLabel = 'إحصائية';

    protected static ?string $pluralModelLabel = 'إحصائيات الأثر';

    protected static ?string $navigationGroup = 'إدارة المحتوى';

    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('بيانات الإحصائية')
                    ->schema([
                        Forms\Components\TextInput::make('value')
                            ->label('الرقم / القيمة')
                            ->required()
                            ->maxLength(50)
                            ->placeholder('2000°C+ أو 5+ أو ∞')
                            ->helperText('الرقم الكبير المعروض'),

                        Forms\Components\Select::make('color_scheme')
                            ->label('لون البطاقة')
                            ->options([
                                'gold' => 'ذهبي',
                                'copper' => 'نحاسي',
                                'green' => 'أخضر',
                                'mixed' => 'مختلط (ذهبي/نحاسي)',
                            ])
                            ->default('gold')
                            ->required(),

                        Forms\Components\TextInput::make('title')
                            ->label('العنوان')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('قدرة الفرن الشمسي'),

                        Forms\Components\TextInput::make('subtitle')
                            ->label('وصف فرعي')
                            ->maxLength(255)
                            ->placeholder('حرارة صناعية بدون احتراق'),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('الترتيب والنشر')
                    ->schema([
                        Forms\Components\TextInput::make('sort_order')
                            ->label('ترتيب العرض')
                            ->numeric()
                            ->default(0),

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

                Tables\Columns\TextColumn::make('value')
                    ->label('القيمة')
                    ->weight('bold')
                    ->size('lg'),

                Tables\Columns\TextColumn::make('title')
                    ->label('العنوان')
                    ->searchable(),

                Tables\Columns\TextColumn::make('color_scheme')
                    ->label('اللون')
                    ->badge()
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'gold' => 'ذهبي',
                        'copper' => 'نحاسي',
                        'green' => 'أخضر',
                        'mixed' => 'مختلط',
                        default => $state,
                    })
                    ->color(fn (string $state): string => match ($state) {
                        'gold' => 'warning',
                        'copper' => 'danger',
                        'green' => 'success',
                        'mixed' => 'info',
                        default => 'gray',
                    }),

                Tables\Columns\IconColumn::make('is_published')
                    ->label('منشور')
                    ->boolean(),
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
            'index' => Pages\ListImpactStats::route('/'),
            'create' => Pages\CreateImpactStat::route('/create'),
            'edit' => Pages\EditImpactStat::route('/{record}/edit'),
        ];
    }
}
