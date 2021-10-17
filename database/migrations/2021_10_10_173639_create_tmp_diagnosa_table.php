<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTmpDiagnosaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tmp_diagnosa', function (Blueprint $table) {
            $table->id();
            $table->char('nik', 16);
            $table->string('nama_pemilik');
            $table->string('no_hp', 13);
            $table->longText('alamat');
            $table->string('nama_peliharaan');
            $table->enum('jekel', ['jantan', 'betina']);
            $table->integer('berat');
            $table->integer('suhu');
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
        Schema::dropIfExists('tmp_diagnosa');
    }
}
