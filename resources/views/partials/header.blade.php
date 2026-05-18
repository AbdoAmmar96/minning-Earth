<header class="header">
    <div class="header-inner">
        <a href="{{ route('home') }}" class="brand">
            <img src="{{ asset('images/logo.png') }}" alt="Mining Earth" />
            <div class="brand-text">
                <strong>MINING EARTH</strong>
            </div>
        </a>
        <nav class="nav">
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">الرئيسية</a>
            <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">نبذة عنا</a>
            <a href="{{ route('partnerships') }}" class="{{ request()->routeIs('partnerships') ? 'active' : '' }}">الشراكات</a>
            <a href="{{ route('research') }}" class="{{ request()->routeIs('research') ? 'active' : '' }}">الأبحاث</a>
            @if(gallery_visible())
                <a href="{{ route('gallery') }}" class="{{ request()->routeIs('gallery') ? 'active' : '' }}">معرض الصور</a>
            @endif
        </nav>
        <a href="{{ route('contact') }}" class="header-cta">تواصل معنا</a>
        <button class="menu-toggle" onclick="document.getElementById('mobileMenu').classList.add('open'); document.getElementById('overlay').classList.add('open');" aria-label="القائمة">
            <svg width="28" height="28" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/></svg>
        </button>
    </div>
</header>

<div class="overlay" id="overlay" onclick="document.getElementById('mobileMenu').classList.remove('open'); this.classList.remove('open');"></div>
<div class="mobile-menu" id="mobileMenu">
    <button class="mobile-close" onclick="document.getElementById('mobileMenu').classList.remove('open'); document.getElementById('overlay').classList.remove('open');">✕</button>
    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">الرئيسية</a>
    <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">نبذة عنا</a>
    <a href="{{ route('partnerships') }}" class="{{ request()->routeIs('partnerships') ? 'active' : '' }}">الشراكات</a>
    <a href="{{ route('research') }}" class="{{ request()->routeIs('research') ? 'active' : '' }}">الأبحاث</a>
    @if(gallery_visible())
        <a href="{{ route('gallery') }}" class="{{ request()->routeIs('gallery') ? 'active' : '' }}">معرض الصور</a>
    @endif
    <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">تواصل معنا</a>
</div>
