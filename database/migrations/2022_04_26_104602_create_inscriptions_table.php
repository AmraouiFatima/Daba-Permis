<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('email');
            $table->unsignedBigInteger('idType')->nullable();
            $table->foreign('idType')->references('id')->on('types')->onDelete('cascade');
            $table->string('city');
            $table->string('cni');
            $table->string('cni_recto');
            $table->string('cni_verso');
            $table->string('adresse');
            $table->string('phoneNo');
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
        Schema::dropIfExists('inscriptions');
    }
}
