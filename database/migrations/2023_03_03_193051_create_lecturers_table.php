<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLecturersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lecturers', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('name');
            $table->integer('employee_number')->unsigned();
            $table->Integer('department_id')->unsigned();
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('CASCADE');
            $table->integer('lecture_id')->unsigned();
            // $table->integer('reviews_id')->unsigned();
            // $table->string('reviews');
            $table->string('email')->unique();
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
        Schema::dropIfExists('lecturers');
    }
}
