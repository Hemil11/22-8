<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class citySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            [
                'id' => 1,
                'name' => 'Amlabad'
                
            ],
             [
                'id' => 2,
                'name' => 'Bandh Dih'
                
            ],
            [
                'id' => 3,
                'name' => 'Bandhgora'
                
            ],
            [
                'id' => 4,
                'name' => 'Bhojudih'
                
            ],
            [
                'id' => 5,
                'name' => 'Bokaro Steel City'
                
            ],
            [
                'id' => 16,
                'name' => 'Chandrapura'
                
            ],
            [
                'id' => 7,
                'name' => 'Chas'
                
            ],
            [
                'id' => 8,
                'name' => 'Chira Chas'
                
            ],
             [
                'id' => 9,
                'name' => 'Dugda'
                
            ],
             [
                'id' => 10,
                'name' => 'Dungaditand'
                
            ],
             [
                'id' => 11,
                'name' => 'Gomia'
                
            ],
             [
                'id' => 12,
                'name' => 'Jaridih Bazar'
                
            ],
           
            [
                'id' => 13,
                'name' => 'Jena'
                
            ],
           
            [
                'id' => 14,
                'name' => 'Kurpania'
                
            ],
             [
                'id' => 15,
                'name' => 'Lalpania'
                
            ],
             [
                'id' => 101,
                'name' => 'Phusro'
                
            ],
             [
                'id' => 17,
                'name' => 'Sijhua'
                
            ],
             [
                'id' => 18,
                'name' => 'Tenu'
                
            ],
           [
                'id' => 19,
                'name' => 'bombuflat'
                
            ],
            [
                'id' => 20,
                'name' => 'Garacharma'
                
            ],
            [
                'id' => 21,
                'name' => 'Port Blair'
                
            ],
            [
                'id' => 22,
                'name' => 'Rangat'
                
            ],
             [
                'id' => 23,
                'name' => 'Addanki'
                
            ],
            [
                'id' => 24,
                'name' => 'Adivivaram'
                
            ],
            [
                'id' => 25,
                'name' => 'Adoni'
                
            ],
            [
                'id' => 26,
                'name' => 'Aganampudi'
                
            ],
             [
                'id' => 27,
                'name' => 'Ajjaram'
                
            ],
             [
                'id' => 28,
                'name' => 'Akividu'
                
            ],
             [
                'id' => 29,
                'name' => 'Akkarampalle'
                
            ],
             [
                'id' => 30,
                'name' => 'Akkayapalle'
                
            ],
             [
                'id' => 31,
                'name' => 'Akkireddipalem'
                
            ],
             [
                'id' =>32,
                'name' => 'Alampur'
                
            ],
             [
                'id' => 33,
                'name' => 'Amalapuram'
                
            ],    
        ];

        City::insert($cities);
    }
}
