<?php

namespace Database\Seeders;

use App\Models\ImpactStat;
use Illuminate\Database\Seeder;

class ImpactStatSeeder extends Seeder
{
    public function run(): void
    {
        $stats = [
            [
                'value' => '2000°C+',
                'title' => 'قدرة الفرن الشمسي',
                'subtitle' => 'حرارة صناعية بدون احتراق',
                'color_scheme' => 'gold',
                'sort_order' => 1,
            ],
            [
                'value' => '5+',
                'title' => 'أبحاث مبتكرة',
                'subtitle' => 'جاهزة للتسويق التجاري',
                'color_scheme' => 'copper',
                'sort_order' => 2,
            ],
            [
                'value' => '4',
                'title' => 'دول شريكة',
                'subtitle' => 'الهند، روسيا، النرويج، فرنسا',
                'color_scheme' => 'green',
                'sort_order' => 3,
            ],
            [
                'value' => '∞',
                'title' => 'إمكانات التطبيق',
                'subtitle' => 'صناعة، زراعة، طاقة، مياه',
                'color_scheme' => 'mixed',
                'sort_order' => 4,
            ],
        ];

        foreach ($stats as $row) {
            ImpactStat::updateOrCreate(['title' => $row['title']], $row + ['is_published' => true]);
        }

        $this->command->info('✓ تم إنشاء ' . count($stats) . ' إحصائية افتراضية');
    }
}
