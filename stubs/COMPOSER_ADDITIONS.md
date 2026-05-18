# تعديلات مطلوبة في composer.json

افتح `composer.json` في جذر المشروع، وعدّل قسم `autoload` ليصبح كالتالي:

```json
"autoload": {
    "psr-4": {
        "App\\": "app/",
        "Database\\Factories\\": "database/factories/",
        "Database\\Seeders\\": "database/seeders/"
    },
    "files": [
        "app/helpers.php"
    ]
}
```

**الإضافة المهمة:** السطر `"files": ["app/helpers.php"]` — ده اللي بيحمّل دوال الـ helpers تلقائياً (مثل `gallery_visible()` و `site_setting()`).

بعد ما تعدّل وتحفظ، شغّل:

```bash
composer dump-autoload
```

دي خطوة لازم تتعمل **مرة واحدة فقط** بعد التعديل.
