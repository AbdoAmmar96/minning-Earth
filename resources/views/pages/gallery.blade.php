@extends('layouts.app')

@section('title', 'معرض الصور | Mining Earth - ماينج إيرث')
@section('description', 'معرض صور ماينج إيرث - المصنع، المختبرات، الأبحاث، الفعاليات، والشراكات.')

@push('head')
<style>
    /* ============ Gallery Styles ============ */
    .gallery-section {
        padding: 80px 32px 120px;
        background: var(--charcoal);
        min-height: 60vh;
    }
    .gallery-inner { max-width: 1400px; margin: 0 auto; }

    .albums-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 28px;
    }
    .album-card {
        position: relative;
        border-radius: 12px;
        overflow: hidden;
        cursor: pointer;
        aspect-ratio: 4/3;
        border: 1px solid var(--line);
        transition: transform .4s ease, border-color .4s ease;
        background: var(--charcoal-card);
    }
    .album-card:hover {
        transform: translateY(-6px);
        border-color: var(--gold);
        box-shadow: 0 20px 50px rgba(0,0,0,0.5);
    }
    .album-card img {
        width: 100%; height: 100%;
        object-fit: cover;
        transition: transform .8s ease;
        display: block;
    }
    .album-card:hover img { transform: scale(1.08); }
    .album-card .empty-cover {
        width: 100%; height: 100%;
        display: flex; align-items: center; justify-content: center;
        background: linear-gradient(135deg, var(--charcoal-card), var(--charcoal-soft));
        color: var(--gold);
        opacity: 0.5;
    }
    .album-card .empty-cover svg { width: 64px; height: 64px; }
    .album-overlay {
        position: absolute; inset: 0;
        background: linear-gradient(180deg, rgba(0,0,0,0.1) 30%, rgba(0,0,0,0.92) 100%);
        display: flex; flex-direction: column; justify-content: flex-end;
        padding: 30px 28px;
    }
    .album-card .album-label {
        color: var(--gold);
        font-size: 11px;
        letter-spacing: 3px;
        margin-bottom: 10px;
        font-family: 'Playfair Display', serif;
        font-style: italic;
        direction: ltr;
        text-align: right;
    }
    .album-card h3 {
        font-family: 'Cairo', sans-serif;
        color: var(--ivory);
        font-size: 22px;
        font-weight: 800;
        margin-bottom: 8px;
        line-height: 1.3;
    }
    .album-card .album-count {
        color: var(--gold);
        font-size: 13px;
        display: flex; align-items: center; gap: 8px;
    }
    .album-card .album-count svg { width: 14px; height: 14px; }
    .album-badge {
        position: absolute; top: 18px; right: 18px;
        background: rgba(13,13,13,0.85);
        border: 1px solid var(--line-strong);
        color: var(--gold);
        padding: 6px 14px;
        border-radius: 100px;
        font-size: 12px; font-weight: 700;
        font-family: 'Playfair Display', serif;
        backdrop-filter: blur(8px);
    }

    .album-detail { display: none; }
    .album-detail.active { display: block; animation: fadeIn .5s ease; }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .back-btn {
        display: inline-flex; align-items: center; gap: 10px;
        background: var(--charcoal-card);
        border: 1px solid var(--line);
        color: var(--ivory);
        padding: 12px 22px;
        border-radius: 6px;
        cursor: pointer;
        margin-bottom: 36px;
        transition: all .25s;
        font-family: inherit;
        font-size: 14px;
        font-weight: 500;
    }
    .back-btn:hover { border-color: var(--gold); color: var(--gold); transform: translateX(4px); }
    .back-btn svg { width: 18px; height: 18px; }
    .album-header {
        margin-bottom: 50px;
        padding-bottom: 32px;
        border-bottom: 1px solid var(--line);
    }
    .album-header .label {
        color: var(--gold); font-size: 12px; letter-spacing: 4px;
        font-family: 'Playfair Display', serif; font-style: italic;
        direction: ltr; text-align: right; margin-bottom: 12px;
    }
    .album-header h2 {
        font-family: 'Cairo', sans-serif;
        font-size: clamp(28px, 4vw, 44px);
        font-weight: 800;
        color: var(--ivory);
        margin-bottom: 14px;
        line-height: 1.25;
    }
    .album-header h2 .gold {
        background: linear-gradient(135deg, var(--gold-light), var(--gold-deep));
        -webkit-background-clip: text; background-clip: text; color: transparent;
    }
    .album-header p {
        color: var(--ivory-soft);
        font-size: 16.5px;
        line-height: 1.85;
        max-width: 800px;
    }
    .album-meta { display: flex; gap: 24px; margin-top: 18px; flex-wrap: wrap; }
    .album-meta span {
        color: var(--steel-light); font-size: 13.5px;
        display: flex; align-items: center; gap: 8px;
    }
    .album-meta svg { width: 16px; height: 16px; color: var(--gold); }

    .images-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 18px;
    }
    .image-tile {
        position: relative;
        aspect-ratio: 4/3;
        border-radius: 8px;
        overflow: hidden;
        cursor: pointer;
        border: 1px solid var(--line);
        transition: transform .35s, border-color .35s, box-shadow .35s;
        background: var(--charcoal-card);
    }
    .image-tile:hover {
        transform: translateY(-4px);
        border-color: var(--gold);
        box-shadow: 0 12px 30px rgba(0,0,0,0.4);
    }
    .image-tile img {
        width: 100%; height: 100%;
        object-fit: cover;
        transition: transform .6s ease;
        display: block;
    }
    .image-tile:hover img { transform: scale(1.1); }

    .empty-album {
        text-align: center;
        padding: 80px 40px;
        background: linear-gradient(135deg, var(--charcoal-card), var(--charcoal-soft));
        border: 1px solid var(--line);
        border-radius: 12px;
    }
    .empty-album svg { width: 80px; height: 80px; color: var(--gold); opacity: 0.4; margin-bottom: 24px; }
    .empty-album h3 { font-size: 22px; color: var(--ivory); margin-bottom: 10px; }
    .empty-album p { color: var(--ivory-soft); font-size: 15px; }

    @media (max-width: 1024px) {
        .albums-grid, .images-grid { grid-template-columns: repeat(2, 1fr); }
    }
    @media (max-width: 600px) {
        .albums-grid { grid-template-columns: 1fr; }
        .images-grid { grid-template-columns: repeat(2, 1fr); gap: 12px; }
        .album-overlay { padding: 22px 20px; }
        .album-card h3 { font-size: 19px; }
    }

    /* Lightbox */
    .lightbox {
        position: fixed; inset: 0;
        background: rgba(5,5,5,0.96);
        backdrop-filter: blur(10px);
        z-index: 500;
        display: none;
        align-items: center; justify-content: center;
        padding: 80px;
        animation: fadeIn .3s ease;
    }
    .lightbox.open { display: flex; }
    .lightbox img {
        max-width: 100%; max-height: 85vh;
        object-fit: contain;
        border-radius: 8px;
        box-shadow: 0 25px 70px rgba(0,0,0,0.9);
        border: 1px solid var(--line);
    }
    .lb-btn {
        position: absolute;
        background: rgba(13,13,13,0.9);
        border: 1px solid var(--line-strong);
        color: var(--gold);
        width: 52px; height: 52px;
        border-radius: 50%;
        cursor: pointer;
        display: flex; align-items: center; justify-content: center;
        transition: all .25s;
        font-family: inherit;
        backdrop-filter: blur(8px);
    }
    .lb-btn:hover {
        background: var(--gold); color: var(--charcoal);
        border-color: var(--gold);
        transform: scale(1.1);
    }
    .lb-btn svg { width: 22px; height: 22px; }
    .lb-close { top: 28px; left: 28px; }
    .lb-prev { right: 28px; top: 50%; transform: translateY(-50%); }
    .lb-next { left: 28px; top: 50%; transform: translateY(-50%); }
    .lb-prev:hover, .lb-next:hover { transform: translateY(-50%) scale(1.1); }
    .lb-caption {
        position: absolute; bottom: 30px;
        left: 50%; transform: translateX(-50%);
        background: rgba(13,13,13,0.92);
        color: var(--ivory);
        padding: 12px 26px;
        border-radius: 100px;
        font-size: 14px;
        border: 1px solid var(--line);
        backdrop-filter: blur(8px);
        max-width: 80%;
        text-align: center;
        display: flex; align-items: center; gap: 14px;
    }
    .lb-counter {
        color: var(--gold);
        font-family: 'Playfair Display', serif;
        font-weight: 700;
        font-size: 13px;
        border-right: 1px solid var(--line-strong);
        padding-right: 14px;
        direction: ltr;
    }
    @media (max-width: 768px) {
        .lightbox { padding: 70px 16px; }
        .lb-prev { right: 12px; }
        .lb-next { left: 12px; }
        .lb-btn { width: 44px; height: 44px; }
        .lb-caption { font-size: 12.5px; padding: 10px 18px; }
    }
</style>
@endpush

@section('content')
<section class="page-hero">
    <div class="mountain-bg">
        <svg viewBox="0 0 1440 400" preserveAspectRatio="xMidYMax slice" xmlns="http://www.w3.org/2000/svg">
            <path d="M0,400 L0,250 L240,150 L480,225 L720,100 L960,200 L1200,125 L1440,225 L1440,400 Z" fill="rgba(212,175,55,0.05)" stroke="rgba(212,175,55,0.15)" stroke-width="1"/>
        </svg>
    </div>
    <div class="page-hero-inner">
        <div class="breadcrumb">
            <a href="{{ route('home') }}">الرئيسية</a>
            <span class="sep">/</span>
            <span class="current" id="hero-crumb">معرض الصور</span>
        </div>
        <h1 id="hero-title">معرض <span class="gold">الصور</span></h1>
        <p id="hero-desc">جولة بصرية في عالم ماينج إيرث — من قاعات المختبرات إلى خطوط الإنتاج، ومن الفعاليات العلمية إلى أحدث الابتكارات. اختر الألبوم للاستعراض.</p>
    </div>
</section>

<section class="gallery-section">
    <div class="gallery-inner">

        @if($albums->isEmpty())
            <div class="empty-album">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/></svg>
                <h3>المعرض فارغ حالياً</h3>
                <p>لم تتم إضافة ألبومات بعد. يمكن للمسؤول إضافتها من لوحة التحكم.</p>
            </div>
        @else
            <div id="albums-view" class="albums-grid"></div>

            <div id="album-view" class="album-detail">
                <button class="back-btn" onclick="backToAlbums()">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    العودة لكل الألبومات
                </button>

                <div class="album-header">
                    <div class="label" id="album-label"></div>
                    <h2 id="album-title"></h2>
                    <p id="album-desc"></p>
                    <div class="album-meta">
                        <span>
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            <span id="album-count">0 صورة</span>
                        </span>
                        <span>
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
                            <span>اضغط على أي صورة لتكبيرها</span>
                        </span>
                    </div>
                </div>

                <div class="images-grid" id="images-grid"></div>
            </div>
        @endif

    </div>
</section>

<div class="lightbox" id="lightbox" onclick="if(event.target.id==='lightbox') closeLightbox()">
    <button class="lb-btn lb-close" onclick="closeLightbox()" aria-label="إغلاق">
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
    </button>
    <button class="lb-btn lb-prev" onclick="prevImage()" aria-label="السابق">
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
    </button>
    <button class="lb-btn lb-next" onclick="nextImage()" aria-label="التالي">
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
    </button>
    <img id="lb-img" src="" alt="" />
    <div class="lb-caption">
        <span class="lb-counter" id="lb-counter">1 / 1</span>
        <span id="lb-text">...</span>
    </div>
</div>
@endsection

@push('scripts')
<script>
// البيانات تأتي من Laravel
const albums = @json($albumsForJs);

const albumsView = document.getElementById('albums-view');
const albumView = document.getElementById('album-view');
const imagesGrid = document.getElementById('images-grid');

function renderAlbums() {
    if (!albumsView) return;
    albumsView.innerHTML = albums.map((a, i) => `
        <div class="album-card" onclick="openAlbum('${a.id}')">
            ${a.cover
                ? `<img src="${a.cover}" alt="${a.title}" loading="lazy" />`
                : `<div class="empty-cover"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25z"/></svg></div>`
            }
            <div class="album-overlay">
                <div class="album-label">${a.label}</div>
                <h3>${a.title}</h3>
                <div class="album-count">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    ${a.images.length} صورة
                </div>
            </div>
            <div class="album-badge">${String(i+1).padStart(2,'0')}</div>
        </div>
    `).join('');
}

function openAlbum(id) {
    const album = albums.find(a => a.id === id);
    if (!album) return;

    albumsView.style.display = 'none';
    albumView.classList.add('active');

    document.getElementById('album-title').textContent = album.title;
    document.getElementById('album-label').textContent = album.label;
    document.getElementById('album-desc').textContent = album.description;
    document.getElementById('album-count').textContent = `${album.images.length} صورة`;

    const titleParts = album.title.split(' ');
    document.getElementById('hero-title').innerHTML = `${titleParts[0]} <span class="gold">${titleParts.slice(1).join(' ')}</span>`;
    document.getElementById('hero-desc').textContent = album.description;
    document.getElementById('hero-crumb').textContent = album.title;

    if (album.images.length === 0) {
        imagesGrid.innerHTML = `
            <div class="empty-album" style="grid-column: 1 / -1;">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5z"/></svg>
                <h3>لا توجد صور في هذا الألبوم</h3>
                <p>سيتم إضافة الصور قريباً.</p>
            </div>
        `;
    } else {
        imagesGrid.innerHTML = album.images.map((img, i) => `
            <div class="image-tile" onclick="openLightbox('${id}', ${i})">
                <img src="${img.src}" alt="${img.caption}" loading="lazy" />
            </div>
        `).join('');
    }

    window.scrollTo({ top: document.querySelector('.gallery-section').offsetTop - 100, behavior: 'smooth' });
    window.location.hash = id;
}

function backToAlbums() {
    albumView.classList.remove('active');
    albumsView.style.display = 'grid';

    document.getElementById('hero-title').innerHTML = `معرض <span class="gold">الصور</span>`;
    document.getElementById('hero-desc').textContent = 'جولة بصرية في عالم ماينج إيرث — من قاعات المختبرات إلى خطوط الإنتاج، ومن الفعاليات العلمية إلى أحدث الابتكارات. اختر الألبوم للاستعراض.';
    document.getElementById('hero-crumb').textContent = 'معرض الصور';

    window.scrollTo({ top: 0, behavior: 'smooth' });
    history.replaceState(null, '', window.location.pathname);
}

// Lightbox
let currentAlbum = null;
let currentIndex = 0;
const lightbox = document.getElementById('lightbox');
const lbImg = document.getElementById('lb-img');
const lbText = document.getElementById('lb-text');
const lbCounter = document.getElementById('lb-counter');

function openLightbox(albumId, index) {
    currentAlbum = albums.find(a => a.id === albumId);
    currentIndex = index;
    updateLightbox();
    lightbox.classList.add('open');
    document.body.style.overflow = 'hidden';
}

function updateLightbox() {
    const img = currentAlbum.images[currentIndex];
    lbImg.src = img.src;
    lbImg.alt = img.caption;
    lbText.textContent = img.caption || '';
    lbCounter.textContent = `${currentIndex + 1} / ${currentAlbum.images.length}`;
}

function closeLightbox() {
    lightbox.classList.remove('open');
    document.body.style.overflow = '';
}

function nextImage() {
    currentIndex = (currentIndex + 1) % currentAlbum.images.length;
    updateLightbox();
}

function prevImage() {
    currentIndex = (currentIndex - 1 + currentAlbum.images.length) % currentAlbum.images.length;
    updateLightbox();
}

document.addEventListener('keydown', (e) => {
    if (!lightbox.classList.contains('open')) return;
    if (e.key === 'Escape') closeLightbox();
    if (e.key === 'ArrowRight') prevImage();
    if (e.key === 'ArrowLeft') nextImage();
});

renderAlbums();

window.addEventListener('load', () => {
    if (window.location.hash) {
        const id = window.location.hash.substring(1);
        if (albums.find(a => a.id === id)) {
            openAlbum(id);
        }
    }
});
</script>
@endpush
