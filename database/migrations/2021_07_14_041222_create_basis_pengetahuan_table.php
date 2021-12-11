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
            $table->char('gejala_id');
            $table->char('penyakit_id');
            $table->float('mb');
            $table->float('md');
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
        Schema::dropIfExists('basis_pengetahuan');
    }
}
