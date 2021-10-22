<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grad_surveys', function (Blueprint $table) {
            $table->id();
            $table->string('lastname')->nullable();
            $table->string('firstname')->nullable();
            $table->string('middlename')->nullable();
            $table->string('maidenname')->nullable();
            $table->string('gender')->nullable();
            $table->string('civilstatus')->nullable();
            $table->string('age')->nullable();
            $table->string('contact')->nullable();
            $table->string('email')->nullable();
            $table->integer('yearGrad')->nullable();
            $table->string('license')->nullable();
            $table->string('certifications')->nullable();
            $table->string('afterGrad')->nullable();
            $table->string('empStatus')->nullable();
            $table->string('reasonUnemployment')->nullable();
            $table->string('company')->nullable();
            $table->string('nature')->nullable();
            $table->string('busType')->nullable();
            $table->string('position')->nullable();
            $table->string('jobLevel')->nullable();
            $table->string('dateStarted')->nullable();
            $table->string('salary')->nullable();
            $table->string('inlineJob')->nullable();
            $table->string('howLongAfterGrad')->nullable();
            $table->integer('projs')->nullable();
            $table->integer('proSuccess')->nullable();
            $table->integer('lifeLongLearning')->nullable();
            $table->integer('projsWithLaws')->nullable();
            $table->integer('goodExample')->nullable();
            $table->integer('personalStandards')->nullable();
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
        Schema::dropIfExists('grad_surveys');
    }
}
