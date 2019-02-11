<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->active();
            $table->featured();
            $table->string('name');
            $table->string('job_title');
            $table->text('quote');

            $table->unsignedInteger('review_category_id')->nullable();
            $table->foreign('review_category_id')->references('id')->on('review_categories')->onDelete('set null');
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
        Schema::dropIfExists('review_categories');
        Schema::dropIfExists('reviews');
    }
}