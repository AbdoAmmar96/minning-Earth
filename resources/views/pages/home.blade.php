@extends('layouts.app')

@section('title', 'ماينج إيرث | Mining Earth - تكنولوجيا عميقة للموارد المستدامة')
@section('description', 'شركة مصرية ناشئة في التكنولوجيا العميقة، تستقطب الكفاءات العربية لتحويل الأبحاث إلى حلول صناعية في التعدين والمعادن الحرجة والطاقة المستدامة.')

@section('content')
<section class="hero">
    <div class="mountain-bg">
        <svg viewBox="0 0 1440 800" preserveAspectRatio="xMidYMax slice" xmlns="http://www.w3.org/2000/svg">
            <path d="M0,800 L0,500 L240,300 L480,450 L720,200 L960,400 L1200,250 L1440,450 L1440,800 Z" fill="rgba(212,175,55,0.05)" stroke="rgba(212,175,55,0.15)" stroke-width="1"/>
            <path d="M0,800 L0,600 L180,450 L360,550 L540,400 L720,500 L900,350 L1080,500 L1260,400 L1440,550 L1440,800 Z" fill="rgba(13,13,13,0.6)" stroke="rgba(212,175,55,0.1)" stroke-width="1"/>
        </svg>
    </div>
    <div class="particles" id="particles"></div>
    <div class="hero-inner">
        <div class="hero-content">
            <div class="hero-eyebrow">DEEP-TECH · RESOURCES · SUSTAINABILITY</div>
            <h1>
                <span class="word">جيلٌ</span><span class="word gold">يبتكر</span><span class="dot"></span><br>
                <span class="word">واقعٌ</span><span class="word gold">يتغير</span><span class="dot"></span><br>
                <span class="word">مستقبلٌ</span><span class="word gold">يرتقي</span>
            </h1>
            <p class="hero-sub">
                منصة عربية رائدة في التكنولوجيا العميقة تستقطب الكفاءات العلمية وتحوّل البحث الأكاديمي إلى حلول صناعية قابلة للتوسع عالمياً في التعدين، الذكاء الاصطناعي، والطاقة المستدامة.
            </p>
            <div class="hero-actions">
                <a href="{{ route('about') }}" class="btn btn-primary">
                    اكتشف رحلتنا
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M11 17l-5-5m0 0l5-5m-5 5h12" transform="scale(-1, 1) translate(-24, 0)"/></svg>
                </a>
                <a href="#sectors" class="btn btn-ghost">قطاعاتنا الأربعة</a>
            </div>
        </div>
        <div class="hero-visual">
            <div class="orbit">
                <div class="orbit-dot"></div>
                <div class="orbit-dot b"></div>
                <div class="orbit-dot c"></div>
            </div>
            <div class="hero-logo-wrap">
                <img src="{{ asset('images/logo.png') }}" alt="Mining Earth" />
            </div>
        </div>
    </div>
</section>

<section class="sisi-section">
    <div class="sisi-inner">
        <div class="sisi-image-wrap">
            <img src="{{ asset('images/sisi.jpg') }}" alt="فخامة الرئيس عبد الفتاح السيسي" />
        </div>
        <div class="sisi-content">
            <div class="label">دولة العلم والابتكار</div>
            <h2>رؤية القيادة السياسية لمستقبل الجمهورية الجديدة</h2>
            <div class="sisi-quote">
                الدولة المصرية تتطلع إلى رؤية إبداعات في كافة العلوم والميادين، لنرى ميلاد <span class="gold">«دولة العلم»</span> و<span class="gold">«دولة الإبداع والاختراع»</span>.
            </div>
            <div class="sisi-attribution">
                <div>
                    <strong>فخامة الرئيس عبد الفتاح السيسي</strong>
                    <span style="display:block;">رئيس جمهورية مصر العربية</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="vision-section" id="about">
    <div class="section-heading">
        <div class="section-eyebrow">رؤيتنا وأهدافنا</div>
        <h2>منصة للابتكار <span class="gold">والريادة العلمية</span></h2>
        <p>نسعى لبناء جيل عربي قادر على المنافسة في سلاسل الإمداد العالمية للمعادن الاستراتيجية وتقنيات المستقبل.</p>
    </div>
    <div class="vision-grid">
        <div class="vision-card">
            <div class="vision-icon">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
            </div>
            <h3>الرؤية</h3>
            <p>تهدف الشركة إلى أن تكون نقطة جذب لكل المواهب والقامات العلمية في مختلف أنحاء الوطن العربي، مما يوفر مزيداً من الرؤى والابتكار في مجالات التكنولوجيا العميقة والموارد الاستراتيجية.</p>
        </div>
        <div class="vision-card copper">
            <div class="vision-icon">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg>
            </div>
            <h3>الأهداف</h3>
            <ul>
                <li>أن تستحوذ الشركة مستقبلاً على حصة من سلاسل الإمداد العالمية للعناصر الأرضية النادرة والمعادن الحرجة والمعادن الثمينة.</li>
                <li>أن تكون بداية نهضة علمية وابتكار في مجتمعاتنا العربية في باقي المجالات التكنولوجية والصناعية.</li>
            </ul>
        </div>
    </div>
</section>

<section class="sectors-section" id="sectors">
    <div class="section-heading">
        <div class="section-eyebrow">قطاعاتنا الاستراتيجية</div>
        <h2>أربعة محاور <span class="gold">للسيادة التكنولوجية</span></h2>
        <p>منظومة متكاملة تجمع علوم التعدين بالذكاء الاصطناعي والطاقة المستدامة والتمثيل الدولي.</p>
    </div>
    <div class="sectors-grid">
        <a href="{{ route('about') }}#sector-1" class="sector-card c1" style="text-decoration: none; color: inherit;">
            <div class="sector-num">01</div>
            <span class="en-tag">Mining & Beneficiation</span>
            <h4>التعدين ومعالجة الخامات</h4>
            <p>استخلاص المعادن النفيسة والعناصر الأرضية النادرة والمعادن الحرجة كالليثيوم والكوبالت والتيتانيوم، مع تطوير عمليات رفع التركيز والكفاءة.</p>
        </a>
        <a href="{{ route('about') }}#sector-2" class="sector-card c2" style="text-decoration: none; color: inherit;">
            <div class="sector-num">02</div>
            <span class="en-tag">Deep-Tech & AI</span>
            <h4>الذكاء الاصطناعي والسيادة الرقمية</h4>
            <p>برمجيات نمذجة للاستكشاف تحت السطحي، أمن سيبراني صناعي، وإدارة براءات الاختراع كأصول استثمارية مستقلة.</p>
        </a>
        <a href="{{ route('about') }}#sector-3" class="sector-card c3" style="text-decoration: none; color: inherit;">
            <div class="sector-num">03</div>
            <span class="en-tag">Green-Tech</span>
            <h4>الطاقة المستدامة والابتكار البيئي</h4>
            <p>أفران شمسية تتجاوز 2000°C، تقنيات الهيدروجين الأخضر من مياه البحر، واستخلاص المياه من الهواء بالطاقة الشمسية.</p>
        </a>
        <a href="{{ route('about') }}#sector-4" class="sector-card c4" style="text-decoration: none; color: inherit;">
            <div class="sector-num">04</div>
            <span class="en-tag">Global Operations</span>
            <h4>الاستثمارات والخدمات الدولية</h4>
            <p>تجارة واستيراد التقنيات، حاضنات ومختبرات تنظيمية لتدريب الكوادر العربية وتطوير براءات الاختراع.</p>
        </a>
    </div>
</section>

<section class="cta-banner">
    <div class="cta-inner">
        <h2>ابنِ المستقبل معنا.<br>كن جزءاً من نهضة <span style="color: var(--gold);">عربية</span> تكنولوجية.</h2>
        <p>سواء كنت باحثاً، مستثمراً، أو شريكاً صناعياً — منصتنا مفتوحة للتعاون مع كل من يؤمن بأن المعرفة العربية قادرة على المنافسة العالمية.</p>
        <div class="cta-actions">
            <a href="{{ route('contact') }}" class="btn btn-primary">
                ابدأ شراكتك معنا
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </a>
            <a href="{{ route('research') }}" class="btn btn-ghost">استعرض الأبحاث</a>
        </div>
    </div>
</section>
@endsection
