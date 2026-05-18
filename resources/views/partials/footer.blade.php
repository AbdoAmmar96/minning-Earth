<footer class="footer">
    <div class="footer-inner">
        <div class="footer-grid">
            <div class="footer-brand">
                <img src="{{ asset('images/logo.png') }}" alt="Mining Earth" />
                <p>شركة مصرية ناشئة مسجلة لدى هيئة الاستثمار، تعمل في التكنولوجيا العميقة للتعدين والمعادن الاستراتيجية والطاقة المستدامة.</p>
            </div>
            <div class="footer-col">
                <h5>روابط سريعة</h5>
                <ul>
                    <li><a href="{{ route('about') }}">نبذة عنا</a></li>
                    <li><a href="{{ route('partnerships') }}">الشراكات</a></li>
                    <li><a href="{{ route('research') }}">الأبحاث</a></li>
                    @if(gallery_visible())
                        <li><a href="{{ route('gallery') }}">معرض الصور</a></li>
                    @endif
                    <li><a href="{{ route('contact') }}">تواصل معنا</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h5>قطاعاتنا</h5>
                <ul>
                    <li><a href="{{ route('about') }}#sector-1">التعدين والمعالجة</a></li>
                    <li><a href="{{ route('about') }}#sector-2">الذكاء الاصطناعي</a></li>
                    <li><a href="{{ route('about') }}#sector-3">الطاقة المستدامة</a></li>
                    <li><a href="{{ route('about') }}#sector-4">الخدمات الدولية</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h5>تواصل معنا</h5>
                <div class="footer-contact-item">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a2 2 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    <div>
                        <strong style="color: var(--ivory); display:block; margin-bottom: 4px;">المقر الإداري</strong>
                        عقار رقم ٥٨ شارع الحجاز، النزهة، مصر الجديدة
                    </div>
                </div>
                <div class="footer-contact-item">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    <div>
                        <strong style="color: var(--ivory); display:block; margin-bottom: 4px;">المصنع</strong>
                        بلوك ١٨ المنطقة الصناعية، نجع حمادي، قنا
                    </div>
                </div>
                <div class="footer-contact-item">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    <div>
                        <strong style="color: var(--ivory); display:block; margin-bottom: 4px;">للاتصال</strong>
                        <a href="tel:+201131449794" style="color: var(--steel-light);">01131449794</a>
                    </div>
                </div>
                <div class="footer-contact-item">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <div>
                        <strong style="color: var(--ivory); display:block; margin-bottom: 4px;">من خارج مصر</strong>
                        <a href="tel:00201131449794" dir="ltr" style="color: var(--steel-light);">+20 113 144 9794</a>
                    </div>
                </div>
                <div class="footer-contact-item">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    <a href="mailto:info@miningearth.com">info@miningearth.com</a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div>© {{ date('Y') }} Mining Earth · ماينج إيرث. جميع الحقوق محفوظة.</div>
            <div class="footer-credit">
                تصميم وتطوير: <a href="https://bp-eg.com/" target="_blank" rel="noopener noreferrer">شركة شريك الأعمال لتقنية المعلومات</a>
            </div>
        </div>
    </div>
</footer>
