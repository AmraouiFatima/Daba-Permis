<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idSchool')->nullable();
            $table->foreign('idSchool')->references('id')->on('schools')->onDelete('cascade');
            $table->unsignedBigInteger('idCandidat')->nullable();
            $table->foreign('idCandidat')->references('id')->on('candidats')->onDelete('cascade');
            $table->unsignedBigInteger('idMoniteur')->nullable();
            $table->foreign('idMoniteur')->references('id')->on('moniteurs')->onDelete('cascade');
            $table->unsignedBigInteger('idCar')->nullable();
            $table->foreign('idCar')->references('id')->on('parkings')->onDelete('cascade');
            $table->string('type');
            $table->datetime('date');
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
        Schema::dropIfExists('seances');
    }
}
