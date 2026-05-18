<?php

use App\Models\SiteSetting;

if (!function_exists('site_setting')) {
    /**
     * الوصول لإعدادات الموقع بسهولة
     *
     * مثال: site_setting('show_gallery_nav', true)
     */
    function site_setting(string $key, mixed $default = null): mixed
    {
        $settings = SiteSetting::current();
        return $settings->{$key} ?? $default;
    }
}

if (!function_exists('gallery_visible')) {
    /**
     * هل معرض الصور مفعّل في النافبار؟
     */
    function gallery_visible(): bool
    {
        return (bool) site_setting('show_gallery_nav', true);
    }
}
