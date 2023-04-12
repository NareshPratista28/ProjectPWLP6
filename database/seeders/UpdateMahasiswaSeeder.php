<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UpdateMahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //misal kita update data mahasiswa yang ada saat ini miliki TI 2A
        db::table('mahasiswas')->update(['kelas_id' => 1]);
    }
}
