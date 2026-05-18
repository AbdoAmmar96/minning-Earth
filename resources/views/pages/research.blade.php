@extends('layouts.app')

@section('title', 'الأبحاث المبتكرة | Mining Earth')
@section('description', 'الفرن الشمسي، الهيدروجين الأخضر، استخلاص المياه، والكهرباء الجوف أرضية.')

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
        <span class="current">الأبحاث المبتكرة</span>
      </div>
      <h1>أبحاث تصنع <span class="gold">المستقبل</span></h1>
      <p>طوّرت الشركة منظومة من الأبحاث المبتكرة في الطاقة الشمسية، الهيدروجين الأخضر، استخلاص المياه، والمعادن الاستراتيجية — كلها بالتعاون مع شركاء بحثيين دوليين ومحليين.</p>
    </div>
  </section>

  <section class="research-section">
    <div class="research-inner">
      <div class="section-heading">
        <div class="section-eyebrow">5 أبحاث استراتيجية</div>
        <h2>ابتكارات <span class="gold">قابلة للتطبيق الصناعي</span></h2>
        <p>كل بحث مدعوم بشراكة علمية وقابل للتحويل إلى وحدة إنتاج صناعي.</p>
      </div>

      <div class="research-grid">
        @foreach($researches as $i => $research)
        <div class="research-item reveal">
          <div class="research-num">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</div>
          <div class="research-content">
            <h3>{{ $research->title }}</h3>
            <p>{{ $research->description }}</p>
            @if(!empty($research->tags))
            <div class="research-tags">
              @foreach($research->tags as $tag)
              <span class="research-tag">{{ $tag }}</span>
              @endforeach
            </div>
            @endif
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- Impact Stats -->
  <section class="vision-section" style="background: #080808;">
    <div class="section-heading">
      <div class="section-eyebrow">أثر أبحاثنا</div>
      <h2>أرقام تتحدث عن <span class="gold">الإمكانات</span></h2>
      <p>الأبحاث ليست مجرد أوراق علمية — إنها بنية تحتية تكنولوجية قابلة للتحويل إلى منتجات صناعية وفرص استثمارية.</p>
    </div>
    <div class="vision-grid" style="grid-template-columns: repeat({{ max(min($stats->count(), 4), 1) }}, 1fr); gap: 24px;">
      @php
      $statGradients = [
        'gold' => 'linear-gradient(135deg, var(--gold-light), var(--gold-deep))',
        'copper' => 'linear-gradient(135deg, var(--copper), #8a4a1e)',
        'green' => 'linear-gradient(135deg, var(--green-light), var(--green))',
        'mixed' => 'linear-gradient(135deg, var(--gold-light), var(--copper))',
      ];
      $statCardClass = [
        'gold' => '',
        'copper' => 'copper',
        'green' => 'green',
        'mixed' => '',
      ];
      @endphp
      @foreach($stats as $stat)
      <div class="vision-card {{ $statCardClass[$stat->color_scheme] ?? '' }} reveal" style="text-align: center; padding: 40px 24px;">
        <div style="font-family: 'Playfair Display', serif; font-size: 56px; font-weight: 900; background: {{ $statGradients[$stat->color_scheme] ?? $statGradients['gold'] }}; -webkit-background-clip: text; background-clip: text; color: transparent; line-height: 1; margin-bottom: 12px;">{{ $stat->value }}</div>
        <h3 style="font-size: 18px;">{{ $stat->title }}</h3>
        @if($stat->subtitle)
        <p style="font-size: 14px;">{{ $stat->subtitle }}</p>
        @endif
      </div>
      @endforeach
    </div>
  </section>

  <!-- CTA -->
  <section class="cta-banner">
    <div class="cta-inner">
      <h2>تبحث عن شريك تكنولوجي <span style="color: var(--gold);">رائد</span>؟</h2>
      <p>منظومتنا البحثية مفتوحة للمستثمرين والشركات الراغبة في الحصول على تراخيص لتقنياتنا أو الانضمام كشركاء صناعيين.</p>
      <div class="cta-actions">
        <a href="{{ route('contact') }}" class="btn btn-primary">
          ناقش فرص الترخيص
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
        </a>
        <a href="{{ route('partnerships') }}" class="btn btn-ghost">شراكاتنا العلمية</a>
      </div>
    </div>
  </section>
@endsection
