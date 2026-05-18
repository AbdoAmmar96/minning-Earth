@extends('layouts.app')

@section('title', 'التعاون والشراكة | Mining Earth')
@section('description', 'شراكات Mining Earth الدولية مع جامعات ومراكز بحثية.')

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
        <span class="current">التعاون والشراكة</span>
      </div>
      <h1>شبكة شراكات <span class="gold">علمية عالمية</span></h1>
      <p>نتعاون مع نخبة من الباحثين والمؤسسات الأكاديمية في أربع قارات، ونعمل جنباً إلى جنب مع استشاريين من أبرز الهيئات البحثية المصرية لبناء منظومة بحث وتطوير ذات أثر استراتيجي.</p>
    </div>
  </section>

  <!-- International Partners -->
  <section class="partners-section">
    <div class="partners-inner">
      <div class="section-heading">
        <div class="section-eyebrow">شراكاتنا الدولية</div>
        <h2>تعاون <span class="gold">عبر القارات</span></h2>
        <p>تتعاون الشركة من خلال الأبحاث العلمية والتطوير مع الكثير من الباحثين بمؤسسات بحثية وجامعية حول العالم.</p>
      </div>

      <div class="partners-grid">
        @foreach($partners as $partner)
          @if($partner->card_style === 'highlight')
          <div class="partner-card reveal" style="background: linear-gradient(145deg, rgba(212,175,55,0.08), rgba(199,106,43,0.05));">
            <div class="partner-flag" style="background: linear-gradient(135deg, var(--gold), var(--copper)); border-color: var(--gold);">{{ $partner->flag }}</div>
            <span class="region" style="color: var(--gold);">{{ $partner->region }}</span>
            <h3>{{ $partner->name }}</h3>
            <p>{{ $partner->description }}</p>
          </div>
          @else
          <div class="partner-card reveal">
            <div class="partner-flag">{{ $partner->flag }}</div>
            <span class="region">{{ $partner->region }}</span>
            <h3>{{ $partner->name }}</h3>
            <p>{{ $partner->description }}</p>
          </div>
          @endif
        @endforeach
      </div>

      <!-- Egyptian Consultants -->
      <div class="consultants-block reveal">
        <h3>الاستشاريون المتخصصون في مصر</h3>
        <p style="color: var(--ivory-soft); margin-bottom: 32px; font-size: 16px; line-height: 1.85;">تستعين الشركة بفريق من الاستشاريين المتخصصين من أبرز الهيئات البحثية والأكاديمية المصرية، لضمان جودة عمليات البحث والتطوير والامتثال للمعايير الوطنية والدولية.</p>
        <ul class="consultants-list">
          <li>هيئة المواد النووية</li>
          <li>المركز القومي للبحوث</li>
          <li>كليات البترول والتعدين بالجامعات المصرية</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Research Team -->
  <section class="vision-section" style="padding-top: 0;">
    <div class="section-heading">
      <div class="section-eyebrow">فريقنا البحثي</div>
      <h2>باحثون <span class="gold">متميزون</span></h2>
      <p>تضم الشركة فريقاً من الباحثين المتميزين بما لهم من أبحاث علمية منشورة في مجلات علمية متخصصة، ويعملون كذراع علمي لتحويل الفرضيات إلى منتجات قابلة للتسويق.</p>
    </div>
    <div class="vision-grid">
      <div class="vision-card reveal">
        <div class="vision-icon">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
        </div>
        <h3>نشر علمي معتمد</h3>
        <p>أبحاث الفريق منشورة في مجلات علمية محكّمة ومتخصصة، مما يضفي على الشركة مصداقية علمية قائمة على الأدلة المنشورة والمراجعة من الأقران الدوليين.</p>
      </div>
      <div class="vision-card copper reveal">
        <div class="vision-icon">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
        </div>
        <h3>كفاءات متعددة التخصصات</h3>
        <p>الفريق يجمع بين خبراء التعدين، علماء المواد، مهندسي الطاقة، متخصصي الذكاء الاصطناعي، وخبراء حماية الملكية الفكرية — منظومة متكاملة في فريق واحد.</p>
      </div>
    </div>
  </section>

  <section class="cta-banner">
    <div class="cta-inner">
      <h2>هل ترغب في الانضمام لشبكتنا <span style="color: var(--gold);">العلمية</span>؟</h2>
      <p>نرحب بالباحثين والمؤسسات العلمية والصناعية المهتمة بالتعاون في مشاريع البحث والتطوير والتسويق التجاري لبراءات الاختراع.</p>
      <div class="cta-actions">
        <a href="{{ route('contact') }}" class="btn btn-primary">
          ابدأ شراكة بحثية
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
        </a>
        <a href="{{ route('research') }}" class="btn btn-ghost">استعرض أبحاثنا</a>
      </div>
    </div>
  </section>
@endsection
