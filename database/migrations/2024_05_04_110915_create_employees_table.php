<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('no_karyawan')->unique();
            $table->string('nama_karyawan');
            $table->date('tanggal_masuk');
            $table->date('mulai_kontrak');
            $table->date('habis_kontrak')->nullable();
            $table->date('tetap')->nullable();
            $table->string('no_ktp')->unique();
            $table->string('no_npwp')->unique();
            $table->string('no_kk');
            $table->string('nama_ibu_kandung');
            $table->string('asuransi_bnilife')->nullable();
            $table->string('bpjs_tk')->nullable()->unique();
            $table->string('bpjs_kes')->nullable()->unique();
            $table->string('sim_a')->nullable()->unique();
            $table->string('sim_b')->nullable()->unique();
            $table->string('sim_c')->nullable()->unique();
            $table->string('no_hp')->unique();
            $table->string('email_kantor')->nullable();
            $table->string('email_pribadi')->unique();
            $table->string('bidang_kejuruan');
            $table->string('kota');
            $table->date('tanggal_lahir');
            $table->string('alamat_ktp');
            $table->string('domisili');
            $table->foreignId('perusahaan_id');
            $table->foreignId('department_id');
            $table->foreignId('jabatan_id');
            $table->foreignId('golongan_id');
            $table->foreignId('status_id');
            $table->foreignId('status_karyawan_id');
            $table->foreignId('jenis_kelamin_id');
            $table->foreignId('pendidikan_id');
            $table->foreignId('agama_id');
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
        Schema::dropIfExists('employees');
    }
}
