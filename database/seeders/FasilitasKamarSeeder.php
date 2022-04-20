<?php

namespace Database\Seeders;

use App\Models\FasilitasKamar;
use Illuminate\Database\Seeder;

class FasilitasKamarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FasilitasKamar::truncate();
        $fasilitas = [
            [
                'name' => 'Wifi',
            ],
            [
                'name' => 'AC',
            ],
            [
                'name' => 'TV',
            ],
            [
                'name' => 'Sprei premium',
            ],
            [
                'name' => 'Kopi/teh',
            ],
        ];

        foreach($fasilitas as $key => $val){
            FasilitasKamar::create($val);
        }
    }
}
