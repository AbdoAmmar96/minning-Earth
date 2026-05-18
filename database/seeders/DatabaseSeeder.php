<?php

namespace Database\Seeders;

use App\Models\Album;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $albums = [
            [
                'slug' => 'factory',
                'title' => 'المصنع - نجع حمادي',
                'label' => 'Factory · Naga Hammadi',
                'description' => 'مصنع الشركة الرئيسي بالمنطقة الصناعية في نجع حمادي بمحافظة قنا — مقر الإنتاج والمعالجة الصناعية للخامات.',
                'is_published' => true,
                'sort_order' => 1,
            ],
            [
                'slug' => 'labs',
                'title' => 'المختبرات البحثية',
                'label' => 'Research Laboratories',
                'description' => 'مختبرات Mining Earth المتخصصة في تحليل العينات وتطوير تقنيات الاستخلاص والمعالجة الكيميائية المتقدمة.',
                'is_published' => true,
                'sort_order' => 2,
            ],
            [
                'slug' => 'solar',
                'title' => 'الفرن الشمسي والطاقة',
                'label' => 'Solar Furnace & Energy',
                'description' => 'مشروع الفرن الشمسي الصناعي الذي تتجاوز حرارته 2000°C — أحد أبرز ابتكارات الشركة بالتعاون مع مؤسسات بحثية هندية.',
                'is_published' => true,
                'sort_order' => 3,
            ],
            [
                'slug' => 'minerals',
                'title' => 'المعادن والعينات',
                'label' => 'Minerals & Samples',
                'description' => 'مجموعة من العينات والخامات التي تعمل عليها الشركة — معادن نفيسة، عناصر أرضية نادرة، ومعادن حرجة.',
                'is_published' => true,
                'sort_order' => 4,
            ],
            [
                'slug' => 'events',
                'title' => 'الفعاليات والمؤتمرات',
                'label' => 'Events & Conferences',
                'description' => 'مشاركات ماينج إيرث في المؤتمرات العلمية والملتقيات الصناعية المحلية والدولية في مجالات التعدين والطاقة.',
                'is_published' => true,
                'sort_order' => 5,
            ],
            [
                'slug' => 'team',
                'title' => 'الفريق والشراكات',
                'label' => 'Team & Partnerships',
                'description' => 'فريق Mining Earth العلمي والإداري، ولقاءاتنا مع شركائنا من المؤسسات الأكاديمية والصناعية حول العالم.',
                'is_published' => true,
                'sort_order' => 6,
            ],
        ];

        foreach ($albums as $album) {
            Album::updateOrCreate(['slug' => $album['slug']], $album);
        }

        $this->command->info('✓ تم إنشاء ' . count($albums) . ' ألبوم افتراضي');
        $this->command->info('  ادخل /admin لإضافة الصور لكل ألبوم');

        $this->call([
            ResearchSeeder::class,
            PartnerSeeder::class,
            ImpactStatSeeder::class,
        ]);
    }
}
