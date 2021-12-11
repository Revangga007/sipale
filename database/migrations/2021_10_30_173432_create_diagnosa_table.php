<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiagnosaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnosa', function (Blueprint $table) {
            $table->id();
            $table->char('nik', 16);
            $table->string('nama_pemilik');
            $table->string('no_hp', 13);
            $table->longText('alamat');
            $table->string('nama_peliharaan');
            $table->enum('jekel', ['jantan', 'betina']);
            $table->integer('umur')->nullable();
            $table->integer('berat')->nullable();
            $table->float('suhu')->nullable();
            $table->char('penyakit_id', 4);
            $table->float('presentase');
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
        Schema::dropIfExists('diagnosa');
    }
}
