<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('blog_posts', function (Blueprint $table) {
            $table->string('category')->after('content');
            $table->text('meta_description')->after('is_featured')->nullable();
            $table->json('tags')->after('meta_description')->nullable();
            $table->dropColumn('author_image');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('blog_posts', function (Blueprint $table) {
            $table->dropColumn(['category', 'meta_description', 'tags']);
            $table->string('author_image')->nullable();
        });
    }
};
