<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNeedsAnalysesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    // 1 = red
    // 2 = blue
    // 3 = green
    // 4 = yellow
    public function up()
    {
        Schema::create('needs_analyses', function (Blueprint $table) {
            $table->id();
            $table->string('question');
            $table->integer('category_id');
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
        Schema::dropIfExists('needs_analyses');
    }
}
