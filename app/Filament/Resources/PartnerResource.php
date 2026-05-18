<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PartnerResource\Pages;
use App\Models\Partner;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PartnerResource extends Resource
{
    protected static ?string $model = Partner::class;

    protected static ?string $navigationIcon = 'heroicon-o-globe-alt';

    protected static ?string $navigationLabel = 'الشركاء الدوليون';

    protected static ?string $modelLabel = 'شريك';

    protected static ?string $pluralModelLabel = 'الشركاء';

    protected static ?string $navigationGroup = 'إدارة المحتوى';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('بيانات الشريك')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('اسم الدولة / الشريك')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('region')
                            ->label('المنطقة (Region)')
                            ->maxLength(255)
                            ->helperText('مثال: South Asia, Europe, MENA Region'),

                        Forms\Components\TextInput::make('flag')
                            ->label('علم / أيقونة')
                            ->maxLength(20)
                            ->helperText('emoji للعلم مثل 🇮🇳 أو رمز مثل ✦')
                            ->placeholder('🇮🇳'),

                        Forms\Components\Select::make('card_style')
                            ->label('نمط البطاقة')
                            ->options([
                                'default' => 'افتراضي',
                                'highlight' => 'مميّز (ذهبي)',
                            ])
                            ->default('default')
                            ->required(),

                        Forms\Components\Textarea::make('description')
                            ->label('الوصف')
                            ->rows(4)
                            ->required()
                            ->columnSpanFull(),
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

                Tables\Columns\TextColumn::make('flag')
                    ->label('علم')
                    ->size('lg'),

                Tables\Columns\TextColumn::make('name')
                    ->label('الاسم')
                    ->searchable()
                    ->weight('bold'),

                Tables\Columns\TextColumn::make('region')
                    ->label('المنطقة')
                    ->badge()
                    ->color('gray'),

                Tables\Columns\TextColumn::make('card_style')
                    ->label('النمط')
                    ->badge()
                    ->formatStateUsing(fn (string $state): string => $state === 'highlight' ? 'مميّز' : 'افتراضي')
                    ->color(fn (string $state): string => $state === 'highlight' ? 'warning' : 'gray'),

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
            'index' => Pages\ListPartners::route('/'),
            'create' => Pages\CreatePartner::route('/create'),
            'edit' => Pages\EditPartner::route('/{record}/edit'),
        ];
    }
}
