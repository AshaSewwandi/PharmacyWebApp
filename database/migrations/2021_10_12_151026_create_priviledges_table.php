<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePriviledgesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('priviledges', function (Blueprint $table) {
            $table->bigIncrements('PriviledgeID');
            $table->unsignedBigInteger('RoleID')->default(3);
            $table->string('Description');
            $table->foreign('RoleID')->references('RoleID')->on('roles');
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
        Schema::dropIfExists('priviledges');
    }
}
