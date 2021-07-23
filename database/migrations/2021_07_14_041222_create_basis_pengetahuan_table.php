<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasisPengetahuanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basis_pengetahuan', function (Blueprint $table) {
            $table->id();
            $table->char('kode', 5)->unique();
            $table->unsignedBigInteger('gejala_id');
            $table->unsignedBigInteger('penyakit_id');
            $table->float('mb');
            $table->float('md');
            $table->timestamps();
            $table->foreign('gejala_id')->references('id')->on('gejala')->onDelete('cascade');
            $table->foreign('penyakit_id')->references('id')->on('penyakit')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('basis_pengetahuan');
    }
}
