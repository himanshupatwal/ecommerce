<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        [ 
         'name'=>'samsung mobile',
         'price'=>'10000',
         'description'=>'4 GB RAM and 64 GB storage',
         'category'=>'mobile',
         'gallery'=>'Samsung.jpg'
        ],
        [ 
         'name'=>'redmi mobile',
         'price'=>'11000',
         'description'=>'6 GB RAM and 64 GB storage',
         'category'=>'mobile',
         'gallery'=>'redmi.jpg'
        ],
        [
         'name'=>'nokia mobile',
         'price'=>'12000',
         'description'=>'6 GB RAM and 64 GB storage',
         'category'=>'mobile',
         'gallery'=>'Nokia.jpg'
        ],
        [
         'name'=>'color tv',
         'price'=>'10000',
         'description'=>'8 GB RAM and 128 GB storage',
         'category'=>'mobile',
         'gallery'=>'tv.png'
        ]
        ]);
    }
}
