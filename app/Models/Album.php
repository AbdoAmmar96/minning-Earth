<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Album extends Model
{
    protected $fillable = [
        'slug',
        'title',
        'label',
        'description',
        'cover_image',
        'is_published',
        'sort_order',
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'sort_order' => 'integer',
    ];

    protected static function booted(): void
    {
        // إنشاء slug تلقائياً لو لم يُحدد
        static::creating(function (Album $album) {
            if (empty($album->slug) && !empty($album->title)) {
                $album->slug = Str::slug($album->title);
            }
        });
    }

    public function images(): HasMany
    {
        return $this->hasMany(AlbumImage::class)->orderBy('sort_order');
    }

    /**
     * إرجاع مسار صورة الغلاف، أو أول صورة في الألبوم لو الغلاف فارغ
     */
    public function getCoverUrl(): ?string
    {
        if ($this->cover_image) {
            return asset('storage/' . $this->cover_image);
        }

        $firstImage = $this->images()->first();
        return $firstImage ? asset('storage/' . $firstImage->path) : null;
    }
}
