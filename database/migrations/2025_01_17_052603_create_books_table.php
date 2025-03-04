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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->integer('sub_category_id');
            $table->integer('publisher_id');
            $table->integer('author_id');
            $table->integer('language_id');
            $table->integer('book_series_id');
            $table->string('name');
            $table->string('code')->unique();
            $table->float('regular_price');
            $table->float('selling_price');
            $table->integer('discount')->default(0);
            $table->integer('stock')->default(0);
            $table->tinyInteger('status')->default(1);
            $table->text('short_description')->nullable();
            $table->longText('long_description')->nullable();
            $table->text('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->json('tags')->nullable();
            $table->integer('pages')->nullable();
            $table->date('published_date')->nullable();
            $table->tinyInteger('book_format');
            $table->string('isbn')->nullable();
            $table->text('image');
            $table->integer('hit_count')->default(0);
            $table->integer('sales_count')->default(0);
            $table->tinyInteger('feature_status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
