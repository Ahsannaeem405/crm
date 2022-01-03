<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname')->nullable();
            $table->string('address')->nullable();
            $table->string('country')->nullable();
            $table->string('fullname')->nullable();
            $table->string('dob')->nullable();
            $table->string('Residential')->nullable();
            $table->string('detail')->nullable();
            $table->string('further_detail')->nullable();
            $table->string('signature')->nullable();
            $table->string('signature_date')->nullable();
            $table->string('statuss')->nullable();
            $table->string('apiUrl')->nullable();

            $table->string('state')->nullable();

            $table->string('postcode')->nullable();



            $table->string('role')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');


            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
