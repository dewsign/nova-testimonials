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
            $table->string('name');
            $table->string('job_title');
            $table->text('quote');

            $table->unsignedInteger('testimonial_category_id')->nullable();
            $table->foreign('testimonial_category_id')->references('id')->on('testimonial_categories')->onDelete('set null');
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