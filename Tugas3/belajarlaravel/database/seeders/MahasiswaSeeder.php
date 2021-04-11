<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa')->insert([
          'name' => 'Firman Wahyudi',
          'alamat' => "Dusun Krajan RT 003/RW 001, Desa Kesambirampak,Kec Kapongan,Kab Situbondo",
          'jenis_kelamin' => 1,
          'prodi' => 1,
          'no_hp' => "085231481241"
          'created_at' => now(),
          'updated_at' => now()
        ]);
    }
}
