<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCustomer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('branch', function (Blueprint $table) {
            $table->id('id');
            $table->string('name',50);
            $table->string('email',50);
            $table->text('address');
            $table->enum('gender', ['m', 'f', 'o']);
            $table->date('dob');
            $table->string('country', 50);
            $table->string('password')->unique();
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
        //
    }
}
