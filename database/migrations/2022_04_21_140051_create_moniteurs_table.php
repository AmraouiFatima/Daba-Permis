<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoniteursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moniteurs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idUser')->nullable();
            $table->foreign('idUser')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('idSchool')->nullable();
            $table->foreign('idSchool')->references('id')->on('schools')->onDelete('cascade');
            $table->string('type');
            $table->string('cni');
            $table->string('cni_recto');
            $table->string('cni_verso');
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('moniteurs');
    }
}
