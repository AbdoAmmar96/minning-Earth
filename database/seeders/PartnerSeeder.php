<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    public function run(): void
    {
        $partners = [
            [
                'name' => 'الهند',
                'region' => 'South Asia',
                'flag' => '🇮🇳',
                'description' => 'تعاون موسّع مع مؤسسات بحثية وجامعية رائدة في الهند في تطوير الأفران الشمسية فائقة الأداء وتقنيات استخلاص المياه من الهواء بالاعتماد على الطاقة الشمسية.',
                'card_style' => 'default',
                'sort_order' => 1,
            ],
            [
                'name' => 'روسيا',
                'region' => 'Eurasia',
                'flag' => '🇷🇺',
                'description' => 'شراكات مع مراكز بحثية روسية متخصصة في علوم التعدين والمعالجة الفيزيائية والكيميائية للخامات منخفضة التركيز.',
                'card_style' => 'default',
                'sort_order' => 2,
            ],
            [
                'name' => 'النرويج',
                'region' => 'Europe',
                'flag' => '🇳🇴',
                'description' => 'تعاون مع باحثين بشركات بحثية نرويجية في مجالات الهيدروجين الأخضر وتقنيات الطاقة المتجددة وتطوير الحلول البيئية.',
                'card_style' => 'default',
                'sort_order' => 3,
            ],
            [
                'name' => 'فرنسا',
                'region' => 'Europe',
                'flag' => '🇫🇷',
                'description' => 'شراكات بحثية مع مؤسسات فرنسية متخصصة في تطوير تقنيات استخلاص العناصر الأرضية النادرة والمعادن الحرجة.',
                'card_style' => 'default',
                'sort_order' => 4,
            ],
            [
                'name' => 'الوطن العربي',
                'region' => 'MENA Region',
                'flag' => '🌍',
                'description' => 'تعاون مع مركز الطاقة المتجددة بجامعات عربية متعددة، تركز على ابتكار حلول الطاقة الشمسية وتطبيقاتها الصناعية في البيئات الصحراوية.',
                'card_style' => 'default',
                'sort_order' => 5,
            ],
            [
                'name' => 'شبكة بحثية متكاملة',
                'region' => 'Strategic Network',
                'flag' => '✦',
                'description' => 'تربط شراكاتنا بين كفاءات علمية متنوعة الجغرافيا والتخصصات، مما يضمن نقل المعرفة وتوطين التقنيات الحديثة في المنطقة العربية.',
                'card_style' => 'highlight',
                'sort_order' => 6,
            ],
        ];

        foreach ($partners as $row) {
            Partner::updateOrCreate(['name' => $row['name']], $row + ['is_published' => true]);
        }

        $this->command->info('✓ تم إنشاء ' . count($partners) . ' شريك افتراضي');
    }
}
