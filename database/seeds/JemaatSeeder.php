<?php

use App\Jemaat;
use Illuminate\Database\Seeder;

class JemaatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jemaat::insert([
            [
                'name' => 'Josh Yehezkiel',
                'email' => 'josh@church.com',
                'nomer_kk' => '545681325183',
                'nama_baptis' => 'Josh',
                'alamat_skg' => 'Sawojajar, Malang',
                'alamat_asal' => 'Sawojajar, Malang',
                'tempat_lahir' => 'Malang',
                'pendidikan' => 'Sarjana',
                'pekerjaan' => 'Swasta',
                'no_tlp' => '081252692343',
                'jk' => 'laki-laki',
                'tgl_lahir' => '1996-05-05',
                'status' => 'aktif',
                'tgl_masuk' => '2020-06-02 20:06:56.0',
                'jabatans_id' => '1',

            ]
        ]);
    }
}
