<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationForRCSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registration_for_r_c_s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Name');
            $table->string('Creator')->unique();
            $table->string('FatherName');
            $table->string('DOB');
            $table->string('BloodGroup');
            $table->string('NID');
            $table->string('Occupation');
            $table->string('Address');
            $table->string('PermanentAddress');
            $table->string('Phone');
            $table->string('Email');
            $table->string('EmergencyContact');
            $table->tinyInteger('Is_approved')->default(0);
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
        Schema::dropIfExists('registration_for_r_c_s');
    }
}
