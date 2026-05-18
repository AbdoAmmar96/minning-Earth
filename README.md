# Mining Earth CMS — Laravel 11 + Filament v3 + SQLite

نظام إدارة محتوى لموقع شركة ماينج إيرث، مبني بـ Laravel 11 و Filament v3. يستخدم SQLite كقاعدة بيانات لتسهيل النشر والصيانة.

## المميزات

- ✅ موقع كامل من 6 صفحات بـ Blade views (RTL عربي بالكامل)
- ✅ لوحة تحكم Filament v3 على المسار `/admin`
- ✅ إدارة كاملة لمعرض الصور (ألبومات + صور + رفع ملفات)
- ✅ Toggle لإخفاء/إظهار تبويب "معرض الصور" من النافبار
- ✅ Lightbox تفاعلي في معرض الصور
- ✅ Deep linking للألبومات (مثال: `/gallery#factory`)
- ✅ Seeded data بالألبومات الافتراضية الستة

---

## متطلبات التشغيل

- **PHP 8.2+** (Laravel Herd بيوفّر PHP 8.4)
- **Composer 2.x**
- **Node.js 18+** (اختياري - لو هتعدّل CSS/JS بتاع Filament)

> ✅ **SQLite** مش محتاج تشتغل أي database server. الـ DB file بيتعمل تلقائياً في `database/database.sqlite`.

---

## خطوات التشغيل الكاملة

### الخطوة 1 — إنشاء مشروع Laravel جديد

افتح Terminal في مجلد المشاريع وشغّل:

```bash
composer create-project laravel/laravel mining-earth-cms
cd mining-earth-cms
```

### الخطوة 2 — تثبيت Filament v3

```bash
composer require filament/filament:"^3.2" -W
php artisan filament:install --panels
```

لما يسألك عن اسم البانل، اضغط Enter للقبول (`admin`).

### الخطوة 3 — استبدل الملفات

انسخ كل الملفات من مجلد المشروع ده فوق ملفات المشروع اللي عملته في الخطوة 1. المجلدات اللي محتاج تنسخها:

```
app/          →  app/
database/     →  database/
resources/    →  resources/
routes/       →  routes/
public/css/   →  public/css/
public/js/    →  public/js/
public/images/→  public/images/
```

### الخطوة 4 — اضبط ملف .env لـ SQLite

افتح `.env` وعدّل قسم الـ database ليبقى كالتالي:

```env
DB_CONNECTION=sqlite
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=laravel
# DB_USERNAME=root
# DB_PASSWORD=
```

(احذف أو علّق على الأسطر التانية).

### الخطوة 5 — إنشاء قاعدة البيانات وتشغيل الـ Migrations

```bash
# إنشاء ملف الـ SQLite الفارغ
touch database/database.sqlite

# تشغيل الـ migrations
php artisan migrate

# إدخال البيانات الأولية (الألبومات الستة الافتراضية)
php artisan db:seed
```

### الخطوة 6 — إنشاء أول مستخدم للأدمن

```bash
php artisan make:filament-user
```

سيطلب منك: الاسم، الإيميل، الباسورد. تذكّر البيانات دي عشان تستخدمها في تسجيل الدخول.

### الخطوة 7 — إنشاء symbolic link للـ storage

عشان الصور المرفوعة تظهر للزائرين:

```bash
php artisan storage:link
```

### الخطوة 8 — تحديث `composer.json` لتحميل ملف الـ helpers

افتح `composer.json` وفي قسم `autoload`، أضف `app/helpers.php` لقائمة `files`:

```json
"autoload": {
    "psr-4": {
        "App\\": "app/"
    },
    "files": [
        "app/helpers.php"
    ]
}
```

بعد كده شغّل:

```bash
composer dump-autoload
```

### الخطوة 9 — التشغيل!

```bash
php artisan serve
```

أو لو شغّال على Laravel Herd، اعمل `herd link mining-earth-cms` وافتح `https://mining-earth-cms.test`.

---

## الروابط الرئيسية

| المسار | الوصف |
|---|---|
| `/` | الصفحة الرئيسية |
| `/about` | نبذة عنا |
| `/partnerships` | الشراكات |
| `/research` | الأبحاث |
| `/gallery` | معرض الصور (لو مفعّل) |
| `/contact` | تواصل معنا |
| `/admin` | لوحة التحكم (تسجيل دخول) |

---

## كيفية استخدام لوحة التحكم

### إدارة الألبومات

1. ادخل `/admin` وسجل دخول
2. من القائمة الجانبية، اضغط على **"الألبومات"**
3. تقدر تـ:
   - إنشاء ألبوم جديد
   - تعديل ألبوم موجود (الاسم، الوصف، الترتيب، حالة النشر)
   - رفع/حذف صور للألبوم من خلال تبويب **"Images"** داخل الألبوم
   - حذف ألبوم (الصور هتنحذف معاه)

### تشغيل/إيقاف معرض الصور

1. ادخل `/admin`
2. من القائمة الجانبية، اضغط على **"إعدادات الموقع"**
3. فعّل أو ألغِ تفعيل **"إظهار معرض الصور في النافبار"**
4. اضغط **"حفظ"**

لما تكون معطل:
- لينك "معرض الصور" بيختفي من النافبار في كل الصفحات
- لو حد دخل `/gallery` مباشرة، هيتم تحويله لصفحة 404

---

## هيكل قاعدة البيانات

### `albums`
| العمود | النوع | الوصف |
|---|---|---|
| id | bigint | PK |
| slug | string | معرف فريد (مثال: `factory`) |
| title | string | الاسم العربي |
| label | string | الاسم الإنجليزي |
| description | text | الوصف |
| cover_image | string | مسار الصورة الرئيسية |
| is_published | boolean | منشور/مخفي |
| sort_order | integer | ترتيب العرض |

### `album_images`
| العمود | النوع | الوصف |
|---|---|---|
| id | bigint | PK |
| album_id | bigint | FK → albums |
| path | string | مسار الصورة |
| caption | string | تعليق توضيحي |
| sort_order | integer | ترتيب العرض |

### `site_settings`
| العمود | النوع | الوصف |
|---|---|---|
| id | bigint | PK |
| show_gallery_nav | boolean | إظهار تبويب المعرض |

---

## استكشاف الأخطاء

**خطأ: "could not find driver"**
- تأكد إن extension الـ `pdo_sqlite` مفعّل في `php.ini`

**الصور المرفوعة مش بتظهر**
- شغّل `php artisan storage:link`
- تأكد من صلاحيات مجلد `storage/app/public`

**لوحة التحكم مش بتشتغل**
- شغّل `php artisan filament:install --panels`
- ثم `php artisan optimize:clear`

---

## الاعتماديات

- Laravel 11.x
- Filament 3.2+
- SQLite (PDO)

## التطوير

تصميم وتطوير: **شركة شريك الأعمال لتقنية المعلومات**

© 2026 Mining Earth · ماينج إيرث. جميع الحقوق محفوظة.
