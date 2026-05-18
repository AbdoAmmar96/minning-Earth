// Mining Earth - Shared Scripts

// Generate floating particles (only if container exists)
const particles = document.getElementById('particles');
if (particles) {
  for (let i = 0; i < 25; i++) {
    const p = document.createElement('div');
    p.className = 'particle';
    p.style.left = Math.random() * 100 + '%';
    p.style.animationDelay = Math.random() * 12 + 's';
    p.style.animationDuration = (8 + Math.random() * 8) + 's';
    particles.appendChild(p);
  }
}

// Header scroll shadow
const header = document.querySelector('.header');
if (header) {
  window.addEventListener('scroll', () => {
    if (window.scrollY > 30) {
      header.style.boxShadow = '0 4px 30px rgba(0,0,0,0.5)';
    } else {
      header.style.boxShadow = 'none';
    }
  });
}

// Reveal on scroll
const revealObserver = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
    }
  });
}, { threshold: 0.12, rootMargin: '0px 0px -60px 0px' });

document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));

// Contact form (basic — for static demo)
const contactForm = document.getElementById('contactForm');
if (contactForm) {
  contactForm.addEventListener('submit', function(e) {
    e.preventDefault();
    const btn = this.querySelector('button[type="submit"]');
    const originalText = btn.innerHTML;
    btn.innerHTML = '✓ تم الإرسال بنجاح';
    btn.style.background = 'linear-gradient(135deg, #1E5B4E 0%, #2A7A6A 100%)';
    btn.style.color = '#F2E6CF';
    setTimeout(() => {
      this.reset();
      btn.innerHTML = originalText;
      btn.style.background = '';
      btn.style.color = '';
    }, 3500);
  });
}
