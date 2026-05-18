<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class SiteSetting extends Model
{
    protected $fillable = [
        'show_gallery_nav',
    ];

    protected $casts = [
        'show_gallery_nav' => 'boolean',
    ];

    /**
     * الحصول على السطر الوحيد للإعدادات (singleton)، أو إنشاؤه لو مش موجود
     */
    public static function current(): self
    {
        return Cache::remember('site_settings.current', 3600, function () {
            return static::firstOrCreate([], [
                'show_gallery_nav' => true,
            ]);
        });
    }

    protected static function booted(): void
    {
        // تفريغ الـ cache عند أي تحديث
        static::saved(fn () => Cache::forget('site_settings.current'));
        static::deleted(fn () => Cache::forget('site_settings.current'));
    }
}
