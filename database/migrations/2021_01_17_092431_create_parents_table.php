<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('family_name')->unique();
            $table->string('phone');
            $table->string('phone_alt')->nullable();
            $table->string('email');
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('maid_name')->nullable();
            $table->text('image_url');
            $table->text('image_url_alt')->nullable();
            $table->string('preferred_check_code')->nullable();
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
        Schema::dropIfExists('parents');
    }
}
