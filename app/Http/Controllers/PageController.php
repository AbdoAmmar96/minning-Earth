<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\ImpactStat;
use App\Models\Partner;
use App\Models\Research;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function partnerships()
    {
        return view('pages.partnerships', [
            'partners' => Partner::published()->ordered()->get(),
        ]);
    }

    public function research()
    {
        return view('pages.research', [
            'researches' => Research::published()->ordered()->get(),
            'stats' => ImpactStat::published()->ordered()->get(),
        ]);
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function gallery()
    {
        $albums = Album::query()
            ->where('is_published', true)
            ->with('images')
            ->orderBy('sort_order')
            ->get();

        // تحويل البيانات لصيغة JavaScript المتوقعة
        $albumsForJs = $albums->map(function (Album $album) {
            return [
                'id' => $album->slug,
                'title' => $album->title,
                'label' => $album->label ?? '',
                'description' => $album->description ?? '',
                'cover' => $album->getCoverUrl(),
                'images' => $album->images->map(fn ($img) => [
                    'src' => asset('storage/' . $img->path),
                    'caption' => $img->caption ?? '',
                ])->toArray(),
            ];
        })->values();

        return view('pages.gallery', [
            'albums' => $albums,
            'albumsForJs' => $albumsForJs,
        ]);
    }
}
