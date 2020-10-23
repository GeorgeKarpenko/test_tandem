<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('last_name', 50);
            $table->string('first_name', 50);
            $table->string('middle_name', 50);
            $table->string('birth_date', 10);
            $table->boolean('active');
            $table->unsignedBigInteger('academic_group_id')->unsigned()->index();
            $table->foreign('academic_group_id')->references('id')->on('academic_groups')->onDelete('cascade');
            $table->timestamps();

            $table->index(['last_name', 'first_name', 'middle_name']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people');
    }
}
