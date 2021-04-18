<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChildrenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('children', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('family_id');
            $table->string('name');
            $table->string('gender');
            $table->text('image_url');
            $table->text('image_url_alt')->nullable();
            $table->string('category')->nullable();
            $table->date('dob');
            $table->timestamps();

            $table->foreign('family_id')->references('id')->on('families');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('children');
    }
}
