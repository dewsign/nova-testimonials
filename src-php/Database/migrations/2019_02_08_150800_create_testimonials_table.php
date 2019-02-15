<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestimonialsTable extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonial_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('testimonials', function (Blueprint $table) {
            $table->increments('id');
            $table->active();
            $table->featured();
            $table->sortable();
            $table->string('author_name');
            $table->string('author_description');
            $table->text('quote');
            $table->string('image');
            $table->string('image_alt');

            $table->unsignedInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('testimonial_categories')->onDelete('set null');
            $table->timestamps();
        });
    }

     /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('testimonial_categories');
        Schema::dropIfExists('testimonials');
    }
}