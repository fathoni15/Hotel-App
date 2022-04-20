<?php

namespace Database\Seeders;

use App\Models\TipeKamar;
use Illuminate\Database\Seeder;

class TipeKamarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipeKamar::truncate();
        $tipe = [
            [
                'name' => 'Reguler',
                'id_fasilitas' => 'AC, Wifi',
                'info' => 'blablabla',
                'harga' => '200000',
                'foto' => 'room1.jpg',
            ],
            [
                'name' => 'Deluxe',
                'id_fasilitas' => 'AC, Wifi, TV, Sprei premium',
                'info' => 'blablabla',
                'harga' => '500000',
                'foto' => 'room2.jpg',
            ],
            [
                'name' => 'Ekonomi',
                'id_fasilitas' => 'AC, Wifi, TV',
                'info' => 'blablabla',
                'harga' => '350000',
                'foto' => 'room3.jpg',
            ],
        ];

        foreach($tipe as $key => $val){
            TipeKamar::create($val);
        }
    }
}
