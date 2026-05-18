@extends('layouts.app')

@section('title', 'تواصل معنا | Mining Earth')
@section('description', 'تواصل مع ماينج إيرث - المقر الإداري والمصنع.')

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
        <span class="current">تواصل معنا</span>
      </div>
      <h1>ابدأ <span class="gold">المحادثة</span></h1>
      <p>سواء كنت باحثاً، مستثمراً، أو شريكاً صناعياً — فريقنا متاح للرد على استفساراتك ومناقشة فرص التعاون. تواصل معنا عبر القنوات المختلفة أو املأ نموذج الاستفسار وسنرد عليك خلال 24 ساعة.</p>
    </div>
  </section>

  <!-- Contact Cards + Form -->
  <section class="contact-section">
    <div class="contact-grid">
      <!-- Left: Contact Info Cards -->
      <div class="contact-info">

        <div class="contact-card reveal">
          <div class="contact-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
          </div>
          <div>
            <h4>المقر الإداري</h4>
            <p>عقار رقم ٥٨ شارع الحجاز<br>النزهة، مصر الجديدة<br>القاهرة، جمهورية مصر العربية</p>
          </div>
        </div>

        <div class="contact-card copper reveal">
          <div class="contact-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
          </div>
          <div>
            <h4>المصنع</h4>
            <p>بلوك ١٨ المنطقة الصناعية<br>نجع حمادي، قنا<br>جمهورية مصر العربية</p>
          </div>
        </div>

        <div class="contact-card reveal">
          <div class="contact-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
          </div>
          <div>
            <h4>الموبايل · من داخل مصر</h4>
            <p>
              <a href="tel:+201131449794">01131449794</a>
              <a href="tel:+201204534592">01204534592</a>
            </p>
            <h4 style="margin-top: 18px;">من خارج مصر</h4>
            <p>
              <a href="tel:00201131449794" dir="ltr">+20 113 144 9794</a>
              <a href="tel:00201204534592" dir="ltr">+20 120 453 4592</a>
            </p>
          </div>
        </div>

        <div class="contact-card green reveal">
          <div class="contact-icon">
            <svg fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
          </div>
          <div>
            <h4>واتساب</h4>
            <p>
              <strong style="color: var(--ivory); font-weight: 600;">من داخل مصر</strong><br>
              <a href="https://wa.me/201113736084" target="_blank">01113736084</a>
            </p>
            <p style="margin-top: 12px;">
              <strong style="color: var(--ivory); font-weight: 600;">من خارج مصر</strong><br>
              <a href="https://wa.me/201113736084" target="_blank" dir="ltr">+20 111 373 6084</a>
            </p>
          </div>
        </div>

      </div>

      <!-- Right: Contact Form -->
      <div class="contact-form-wrap reveal">
        <h3>أرسل لنا استفسارك</h3>
        <p>اكتب لنا تفاصيل استفسارك أو فرصة التعاون، وسيقوم فريقنا بالرد عليك خلال 24 ساعة عمل.</p>
        <form id="contactForm">
          <div class="form-row">
            <div class="form-group">
              <label for="name">الاسم بالكامل</label>
              <input type="text" id="name" name="name" required placeholder="اسم المستفسر" />
            </div>
            <div class="form-group">
              <label for="phone">رقم الموبايل</label>
              <input type="tel" id="phone" name="phone" required placeholder="01XXXXXXXXX" />
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label for="email">البريد الإلكتروني</label>
              <input type="email" id="email" name="email" required placeholder="your@email.com" />
            </div>
            <div class="form-group">
              <label for="company">الشركة / المؤسسة</label>
              <input type="text" id="company" name="company" placeholder="اسم الجهة (اختياري)" />
            </div>
          </div>
          <div class="form-group">
            <label for="topic">موضوع الاستفسار</label>
            <select id="topic" name="topic" required>
              <option value="">-- اختر الموضوع --</option>
              <option value="research">شراكة بحثية أو علمية</option>
              <option value="investment">فرصة استثمارية</option>
              <option value="licensing">ترخيص تقنية / براءة اختراع</option>
              <option value="industrial">شراكة صناعية / توريد</option>
              <option value="consulting">استشارات تقنية</option>
              <option value="career">انضمام للفريق البحثي</option>
              <option value="other">موضوع آخر</option>
            </select>
          </div>
          <div class="form-group">
            <label for="message">تفاصيل الاستفسار</label>
            <textarea id="message" name="message" required placeholder="اكتب لنا تفاصيل استفسارك أو فرصة التعاون..."></textarea>
          </div>
          <button type="submit" class="btn btn-primary">
            إرسال الاستفسار
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
          </button>
        </form>
      </div>
    </div>
  </section>

  <!-- Map -->
  <section class="map-section">
    <div class="map-wrap reveal">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3454.6447!2d31.3438!3d30.0987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583fd8e5e88e4f%3A0x4b0e1e1e1e1e1e1e!2sHeliopolis%2C%20Cairo!5e0!3m2!1sen!2seg!4v1700000000000"
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
        allowfullscreen>
      </iframe>
    </div>
  </section>

  <!-- CTA -->
  <section class="cta-banner">
    <div class="cta-inner">
      <h2>تفضل بزيارتنا في <span style="color: var(--gold);">مصر الجديدة</span></h2>
      <p>المقر الإداري مفتوح للاجتماعات بمواعيد مسبقة. للاجتماعات الميدانية في المصنع بنجع حمادي، يُرجى التواصل معنا لترتيب الزيارة.</p>
      <div class="cta-actions">
        <a href="https://wa.me/201113736084" target="_blank" class="btn btn-primary">
          <svg fill="currentColor" viewBox="0 0 24 24" width="18" height="18"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
          واتساب مباشر
        </a>
        <a href="tel:+201131449794" class="btn btn-ghost">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
          اتصال مباشر
        </a>
      </div>
    </div>
  </section>
@endsection
