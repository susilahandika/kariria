<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIdentitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identities', function (Blueprint $table){
            $table->increments('id');
            $table->string('name', 100);
            $table->string('telp', 20);
            $table->string('email', 50)->unique();
            $table->date('birthday');
            $table->string('gender', 1);
            $table->string('married', 1);
            $table->string('address', 200);
            $table->timestamps();

            $table->foreign('email')->references('email')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('identities');
    }
}
