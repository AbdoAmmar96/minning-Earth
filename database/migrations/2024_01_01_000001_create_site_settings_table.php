<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->boolean('show_gallery_nav')->default(true);
            $table->timestamps();
        });

        // إدراج صف واحد افتراضي - التطبيق هيستخدم أول صف دايماً
        \DB::table('site_settings')->insert([
            'show_gallery_nav' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('site_settings');
    }
};
