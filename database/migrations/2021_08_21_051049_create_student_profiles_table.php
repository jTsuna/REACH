<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('program_id')->nullable();
            $table->integer('smartnum')->nullable();
            $table->integer('non_smart_num')->nullable();
            $table->string('mother')->nullable();
            $table->integer('mother_contact')->nullable();
            $table->integer('mother_age')->nullable();
            $table->string('mother_occupation')->nullable();
            $table->string('mother_company')->nullable();
            $table->string('motherCompany_address')->nullable();
            $table->string('father')->nullable();
            $table->integer('father_contact')->nullable();
            $table->integer('father_age')->nullable();
            $table->string('father_occupation')->nullable();
            $table->string('father_company')->nullable();
            $table->string('fatherCompany_address')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('program_id')->references('id')->on('program_lists')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_profiles');
    }
}
