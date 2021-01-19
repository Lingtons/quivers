<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendanceLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendance_logs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('check_in_id');
            $table->unsignedBigInteger('child_id');
            $table->dateTime('checkin_time');
            $table->dateTime('checkout_time')->nullable();
            $table->string('checkout_reason')->nullable();
            $table->string('status');
            $table->timestamps();

            $table->foreign('check_in_id')->references('id')->on('check_ins');
            $table->foreign('child_id')->references('id')->on('children');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_logs');
    }
}
