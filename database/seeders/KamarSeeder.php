<?php

namespace Database\Seeders;

use App\Models\Kamar;
use Illuminate\Database\Seeder;

class KamarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kamar::truncate();
        $kamar = [
            [
                'tipe_kamar' => '1',
                'no_kamar' => '101',
            ],
            [
                'tipe_kamar' => '1',
                'no_kamar' => '102',
            ],
            [
                'tipe_kamar' => '1',
                'no_kamar' => '103',
            ],
            [
                'tipe_kamar' => '1',
                'no_kamar' => '104',
            ],
            [
                'tipe_kamar' => '1',
                'no_kamar' => '105',
            ],
            [
                'tipe_kamar' => '2',
                'no_kamar' => '201',
            ],
            [
                'tipe_kamar' => '2',
                'no_kamar' => '202',
            ],
            [
                'tipe_kamar' => '2',
                'no_kamar' => '203',
            ],
            [
                'tipe_kamar' => '2',
                'no_kamar' => '204',
            ],
            [
                'tipe_kamar' => '2',
                'no_kamar' => '205',
            ],
            [
                'tipe_kamar' => '3',
                'no_kamar' => '301',
            ],
            [
                'tipe_kamar' => '3',
                'no_kamar' => '302',
            ],
            [
                'tipe_kamar' => '3',
                'no_kamar' => '303',
            ],
            [
                'tipe_kamar' => '3',
                'no_kamar' => '304',
            ],
            [
                'tipe_kamar' => '3',
                'no_kamar' => '305',
            ],
        ];

        foreach ($kamar as $key => $value){
            Kamar::create($value);
        }
    }
}
