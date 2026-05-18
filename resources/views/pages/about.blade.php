@extends('layouts.app')

@section('title', 'نبذة عنا | Mining Earth - ماينج إيرث')
@section('description', 'شركة Mining Earth منصة رائدة في التكنولوجيا العميقة.')

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
        <span class="current">نبذة عنا</span>
      </div>
      <h1>منصة عربية للتكنولوجيا <span class="gold">العميقة</span></h1>
      <p>شركة Mining Earth — شركة مصرية ناشئة مسجلة لدى هيئة الاستثمار، تأسست كمنصة رائدة في التكنولوجيا العميقة لتحويل البحث الأكاديمي إلى حلول صناعية قابلة للتوسع عالمياً.</p>
    </div>
  </section>

  <!-- Philosophy -->
  <section class="vision-section">
    <div class="section-heading">
      <div class="section-eyebrow">فلسفتنا الاستراتيجية</div>
      <h2>السيادة التكنولوجية <span class="gold">عبر دمج العلوم</span></h2>
      <p>نرتكز على دمج الذكاء الاصطناعي والحلول الحيوية والتمويل الرقمي مع علوم التعدين لضمان السيادة التكنولوجية في سلاسل إمداد المعادن الحرجة ورفع الكفاءة التشغيلية للموارد الطبيعية.</p>
    </div>
    <div class="vision-grid">
      <div class="vision-card reveal">
        <div class="vision-icon">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
        </div>
        <h3>تأسيس وريادة</h3>
        <p>منصة مصرية مرخصة تستقطب الكفاءات العلمية العربية وتحوّل براءات الاختراع والبحوث الأكاديمية إلى منتجات صناعية ذات جدوى اقتصادية وأثر استراتيجي.</p>
      </div>
      <div class="vision-card copper reveal">
        <div class="vision-icon">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
        </div>
        <h3>دمج تكنولوجي</h3>
        <p>نجمع بين التعدين التقليدي والذكاء الاصطناعي والحلول الحيوية في منظومة واحدة، لضمان كفاءة استخلاص أعلى وأثر بيئي أقل في عمليات استرداد الموارد.</p>
      </div>
    </div>
  </section>

  <!-- Sector 1: Mining & Beneficiation -->
  <section class="sector-detail s1" id="sector-1">
    <div class="sector-detail-inner">
      <div class="sector-detail-side reveal">
        <div class="sector-tag">
          <div class="sector-tag-num">01</div>
          <div>
            <div class="sector-tag-label">Mining & Beneficiation</div>
          </div>
        </div>
        <h2>قطاع التعدين ومعالجة وتطوير الخامات</h2>
        <p class="intro">من الاستكشاف إلى رفع التركيز، نطوّر منظومة كاملة لاستخراج وتحسين الخامات الاستراتيجية بمعايير عالمية وأثر بيئي محدود.</p>
      </div>
      <div class="sector-detail-items">
        <div class="sector-item reveal">
          <h4>استخلاص العناصر الاستراتيجية</h4>
          <p>البحث والتنقيب والاستغلال للمعادن النفيسة (الذهب ومجموعته)، والعناصر الأرضية النادرة REEs، والمعادن الحرجة (الليثيوم، الكوبالت، التيتانيوم) من مصادرها الأولية والثانوية.</p>
        </div>
        <div class="sector-item reveal">
          <h4>رفع التركيز والكفاءة (Beneficiation)</h4>
          <p>إقامة وتشغيل وحدات صناعية متطورة لرفع التركيز الفيزيائي والكيميائي للخامات التعدينية، وتطوير عمليات المعالجة لتحسين جودة الخامات منخفضة التركيز (مثل الفوسفات والألومينا) لتعظيم جدواها الاقتصادية ومعدلات استخلاصها.</p>
        </div>
        <div class="sector-item reveal">
          <h4>الهندسة الحيوية والمبتكرة</h4>
          <p>تطوير تقنيات «التعدين الحيوي» (Bio-Mining) والحلول الإنزيمية لرفع كفاءة الاستخلاص والفصل بمعايير بيئية صفرية الانبعاثات.</p>
        </div>
        <div class="sector-item reveal">
          <h4>التعدين الحضري والمحاجر</h4>
          <p>استرداد المعادن من النفايات الإلكترونية والمخلفات الصناعية، واستغلال المحاجر وتصنيع الأحجار والرخام ودرفلة وتشكيل المعادن بأنواعها.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Sector 2: Deep-Tech & AI -->
  <section class="sector-detail s2" id="sector-2">
    <div class="sector-detail-inner">
      <div class="sector-detail-side reveal">
        <div class="sector-tag">
          <div class="sector-tag-num">02</div>
          <div>
            <div class="sector-tag-label">Deep-Tech & AI</div>
          </div>
        </div>
        <h2>قطاع الذكاء الاصطناعي والتكنولوجيا السيادية</h2>
        <p class="intro">حلول رقمية متقدمة تحوّل البيانات الجيولوجية والصناعية إلى قرارات ذكية، وتؤمّن البنى التحتية الحرجة من التهديدات السيبرانية.</p>
      </div>
      <div class="sector-detail-items">
        <div class="sector-item reveal">
          <h4>النمذجة الرقمية (AIaaS)</h4>
          <p>تطوير برمجيات الذكاء الاصطناعي للاستكشاف «تحت السطحي» ومعالجة البيانات الضخمة لتحسين كفاءة سلاسل الإمداد والعمليات التعدينية والإنتاجية.</p>
        </div>
        <div class="sector-item reveal">
          <h4>الأمن السيبراني الصناعي</h4>
          <p>تأمين الأنظمة الصناعية ذاتية التشغيل والبنى التحتية للمناجم والمصانع ضد الاختراقات الرقمية، وتطوير بروتوكولات حماية للأنظمة التشغيلية الحرجة.</p>
        </div>
        <div class="sector-item reveal">
          <h4>إدارة الأصول المعرفية</h4>
          <p>تملك واستغلال وحماية براءات الاختراع والملكية الفكرية للأبحاث المبتكرة كأصول استثمارية وتجارية مستقلة، مع تطوير منظومة ترخيص محلية وعالمية.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Sector 3: Green-Tech -->
  <section class="sector-detail s3" id="sector-3">
    <div class="sector-detail-inner">
      <div class="sector-detail-side reveal">
        <div class="sector-tag">
          <div class="sector-tag-num">03</div>
          <div>
            <div class="sector-tag-label">Green-Tech</div>
          </div>
        </div>
        <h2>قطاع الطاقة المستدامة والابتكار البيئي</h2>
        <p class="intro">حلول جذرية لتحديات الطاقة والمياه في البيئات الصحراوية، تجمع بين الفيزياء الحرارية والكيمياء والتكنولوجيا النانوية.</p>
      </div>
      <div class="sector-detail-items">
        <div class="sector-item reveal">
          <h4>الهندسة الحرارية الفائقة</h4>
          <p>ابتكار وتصنيع الأفران الشمسية فائقة الأداء (التي تتجاوز حرارتها 2000°C) ونظم توليد الطاقة من الحرارة الجوف أرضية والتحكم الحراري في البيئات الصحراوية.</p>
        </div>
        <div class="sector-item reveal">
          <h4>اقتصاد الهيدروجين والمياه</h4>
          <p>تطوير تقنيات إنتاج الهيدروجين الأخضر، واستخلاص المياه من الهواء، وتطوير مواد «النانو تكنولوجي» المتقدمة لتنقية المياه المستخدمة في العمليات الصناعية.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Sector 4: Global Operations -->
  <section class="sector-detail s4" id="sector-4">
    <div class="sector-detail-inner">
      <div class="sector-detail-side reveal">
        <div class="sector-tag">
          <div class="sector-tag-num">04</div>
          <div>
            <div class="sector-tag-label">Global Operations</div>
          </div>
        </div>
        <h2>قطاع الاستثمارات والخدمات الدولية</h2>
        <p class="intro">جسر بين السوق العربي والأسواق العالمية، نمكّن الكيانات الدولية من الوصول للمنطقة ونساعد الكفاءات المحلية على المنافسة عالمياً.</p>
      </div>
      <div class="sector-detail-items">
        <div class="sector-item reveal">
          <h4>التجارة والتمثيل الدولي</h4>
          <p>استيراد وتصدير التقنيات والمعدات والخامات، والقيام بأعمال الوكالة التجارية والتمثيل للكيانات الدولية المتخصصة في مجالات التعدين والطاقة والتكنولوجيا.</p>
        </div>
        <div class="sector-item reveal">
          <h4>الحاضنات والمختبرات التنظيمية</h4>
          <p>تقديم الاستشارات التقنية وإدارة المختبرات التنظيمية (Regulatory Sandboxes) لاختبار وتطوير براءات الاختراع وتدريب الكوادر العلمية والمواهب العربية الواعدة.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="cta-banner">
    <div class="cta-inner">
      <h2>عاوز تعرف <span style="color: var(--gold);">أكتر</span> عن قطاعاتنا؟</h2>
      <p>تواصل مع فريقنا للاطلاع على ملف الشركة الكامل، فرص الاستثمار، أو الانضمام كباحث أو شريك صناعي.</p>
      <div class="cta-actions">
        <a href="{{ route('contact') }}" class="btn btn-primary">
          ابدأ المحادثة
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
        </a>
        <a href="{{ route('partnerships') }}" class="btn btn-ghost">شراكاتنا العلمية</a>
      </div>
    </div>
  </section>
@endsection
