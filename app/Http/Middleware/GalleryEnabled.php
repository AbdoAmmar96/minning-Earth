<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GalleryEnabled
{
    /**
     * يمنع الوصول لصفحة المعرض لو الإعداد معطّل
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!gallery_visible()) {
            abort(404);
        }

        return $next($request);
    }
}
