<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'no_karyawan' => $this->faker->numerify('#######'),
           'nama_karyawan' => $this->faker->name(),
           'tanggal_masuk' => $this->faker->dateTimeThisDecade('-2 years'),
           'mulai_kontrak' => $this->faker->dateTimeThisDecade('+2 years'),
           'habis_kontrak' => $this->faker->dateTimeThisYear('+3 months'),
           'tetap' => $this->faker->date(),
           'no_ktp' => $this->faker->unique()->numerify('##########'),
           'no_npwp' => $this->faker->unique()->numerify('##########'),
           'no_kk'  => $this->faker->unique()->numerify('##########'),
           'nama_ibu_kandung' => $this->faker->name(),
           'asuransi_bnilife' => $this->faker->unique()->numerify('##########'),
           'bpjs_tk' => $this->faker->numerify('##########'),
           'bpjs_kes' => $this->faker->numerify('##########'),
           'sim_a' => $this->faker->unique()->numerify('##########'),
           'sim_b' => $this->faker->unique()->numerify('##########'),
           'sim_c' => $this->faker->unique()->numerify('##########'),
           'no_hp' => $this->faker->unique()->phoneNumber('##########'),
           'email_kantor' => $this->faker->unique()->safeEmail(),
           'email_pribadi' => $this->faker->unique()->safeEmail(),
           'bidang_kejuruan' => $this->faker->word(),
           'kota' => $this->faker->city(),
           'tanggal_lahir' => $this->faker->date(),
           'alamat_ktp' => $this->faker->address(),
           'domisili' => $this->faker->address(),
           'perusahaan_id'  => 1,
           'department_id' => mt_rand(1,4),
           'jabatan_id' => mt_rand(1,7),
           'golongan_id' => mt_rand(3,8),
           'status_id' => mt_rand(1,2),
           'status_karyawan_id' => mt_rand(1,5),
           'jenis_kelamin_id' => mt_rand(1,2),
           'pendidikan_id' => mt_rand(1,7),
           'agama_id' => mt_rand(1,5),
        ];
    }
}
