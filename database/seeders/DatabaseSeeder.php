<?php

namespace Database\Seeders;

use App\Models\Agama;
use App\Models\User;
use App\Models\Status;
use App\Models\Jabatan;
use App\Models\Golongan;
use App\Models\Department;
use App\Models\Employee;
use App\Models\Perusahaan;
use App\Models\JenisKelamin;
use App\Models\Pendidikan;
use App\Models\StatusKaryawan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name'=> 'Admin',
            'email' => 'adminhr@drindonesia.com',
            'password'=> bcrypt('password'),
        ]);

        JenisKelamin::create([
            'nama'=> 'Laki-Laki',
        ]);
        JenisKelamin::create([
            'nama'=> 'Perempuan',
        ]);

        Perusahaan::create([
            'nama'=> 'PT. David Roy Indonesia',
        ]);

        Department::create([
            'nama'=> 'Sales',
        ]);
        Department::create([
            'nama'=> 'Accounting',
        ]);
        Department::create([
            'nama'=> 'Food Service',
        ]);
        Department::create([
            'nama'=> 'Retail',
        ]);

        Jabatan::create([
            'nama'=> 'Collector',
        ]);
        Jabatan::create([
            'nama'=> 'Account Executive (Cafe & Resto)',
        ]);
        Jabatan::create([
            'nama'=> 'Account Executive (Hotel)',
        ]);
        Jabatan::create([
            'nama'=> 'Account Payable Staff',
        ]);
        Jabatan::create([
            'nama'=> 'Supervisor Accounting',
        ]);
        Jabatan::create([
            'nama'=> 'Food Service Manager',
        ]);
        Jabatan::create([
            'nama'=> 'Retail Manager',
        ]);

        Golongan::create([
            'nama'=> 'A1',
        ]);
        Golongan::create([
            'nama'=> 'A2',
        ]);
        Golongan::create([
            'nama'=> 'B1',
        ]);
        Golongan::create([
            'nama'=> 'B2',
        ]);
        Golongan::create([
            'nama'=> 'C1',
        ]);
        Golongan::create([
            'nama'=> 'C2',
        ]);
        Golongan::create([
            'nama'=> 'D1',
        ]);
        Golongan::create([
            'nama'=> 'D2',
        ]);
        
        Status::create([
            'nama'=> 'Kontrak',
        ]);
        Status::create([
            'nama'=> 'Tetap',
        ]);

        StatusKaryawan::create([
            'nama'=> 'K0',
        ]);
        StatusKaryawan::create([
            'nama'=> 'K1',
        ]);
        StatusKaryawan::create([
            'nama'=> 'K2',
        ]);
        StatusKaryawan::create([
            'nama'=> 'K3',
        ]);
        StatusKaryawan::create([
            'nama'=> 'TK',
        ]);

        Pendidikan::create([
            'nama'=> 'S3',
        ]);
        Pendidikan::create([
            'nama'=> 'S2',
        ]);
        Pendidikan::create([
            'nama'=> 'S1',
        ]);
        Pendidikan::create([
            'nama'=> 'SMK',
        ]);
        Pendidikan::create([
            'nama'=> 'SMA',
        ]);
        Pendidikan::create([
            'nama'=> 'SMP',
        ]);
        Pendidikan::create([
            'nama'=> 'Diploma',
        ]);

        Agama::create([
            'nama'=> 'Islam',
        ]);
        Agama::create([
            'nama'=> 'Kristen',
        ]);
        Agama::create([
            'nama'=> 'Katolik',
        ]);
        Agama::create([
            'nama'=> 'Hindu',
        ]);
        Agama::create([
            'nama'=> 'Budha',
        ]);

        Employee::factory(10)->create();
    }
}
