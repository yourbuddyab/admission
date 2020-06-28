<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddmissionRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addmission_requests', function (Blueprint $table) {
            $table->id();
            $table->string('sname');
            $table->string('lname');
            $table->string('fname');
            $table->string('mname');
            $table->string('dob');
            $table->string('phone');
            $table->string('email');
            $table->string('oneaddress');
            $table->string('twoaddress');
            $table->string('threeaddress');
            $table->string('fouraddress');
            $table->string('application');
            $table->string('classes');
            $table->string('lastyear');
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
        Schema::dropIfExists('addmission_requests');
    }
}
