<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('comment');
            $table->integer('rate')->unsigned();
            $table->Integer('student_id')->unsigned();
            $table->Integer('lecturers_id')->unsigned();
            $table->foreign('student_id')->references('id')->on('users')->onDelete('CASCADE');
            $table->foreign('lecturers_id')->references('id')->on('lecturers')->onDelete('CASCADE');
            $table->timestamp('created_at');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
