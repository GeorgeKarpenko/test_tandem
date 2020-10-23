<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademicGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academic_groups', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100)->index();
            $table->integer('course')->length(2)->unsigned();
            $table->string('faculty', 30);
            $table->boolean('archive');
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
        Schema::dropIfExists('academic_groups');
    }
}
