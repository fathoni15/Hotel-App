<?php

namespace Database\Seeders;

use App\Models\FasilitasUmum;
use Illuminate\Database\Seeder;

class FasilitasUmumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FasilitasUmum::truncate();
        $fasilitas = [
            [
                'name' => 'Restaurant',
                'info' => 'Usage of the Internet is becoming more common due to rapid advancement of technology and power.',
            ],
            [
                'name' => 'Sports Club',
                'info' => 'Usage of the Internet is becoming more common due to rapid advancement of technology and power.',
            ],
            [
                'name' => 'Swimming Pool',
                'info' => 'Usage of the Internet is becoming more common due to rapid advancement of technology and power.',
            ],
            [
                'name' => 'Rent a Car',
                'info' => 'Usage of the Internet is becoming more common due to rapid advancement of technology and power.',
            ],
            [
                'name' => 'Gymnesium',
                'info' => 'Usage of the Internet is becoming more common due to rapid advancement of technology and power.',
            ],
            [
                'name' => 'Bar',
                'info' => 'Usage of the Internet is becoming more common due to rapid advancement of technology and power.',
            ],
        ];

        foreach($fasilitas as $key => $val){
            FasilitasUmum::create($val);
        }
    }
}
