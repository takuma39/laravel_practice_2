<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('shops')->insert([
            [
                'owner_id' => 1,
                'name' => 'test1SHOP',
                'information' => 'お店の情報が入る/お店の情報が入る/お店の情報が入る/お店の情報が入る/お店の情報が入る/お店の情報が入る/お店の情報が入る/お店の情報が入る/お店の情報が入る/お店の情報が入る/お店の情報が入る/',
                'filename' => 'sample1.png',
                'is_selling' => true
            ],
            [
                'owner_id' => 2,
                'name' => 'test2SHOP',
                'information' => 'お店の情報が入る/お店の情報が入る/お店の情報が入る/お店の情報が入る/お店の情報が入る/お店の情報が入る/お店の情報が入る/お店の情報が入る/お店の情報が入る/お店の情報が入る/お店の情報が入る/',
                'filename' => 'sample2.png',
                'is_selling' => true
            ],
            [
                'owner_id' => 3,
                'name' => 'test3SHOP',
                'information' => 'お店の情報が入る/お店の情報が入る/お店の情報が入る/お店の情報が入る/お店の情報が入る/お店の情報が入る/お店の情報が入る/お店の情報が入る/お店の情報が入る/お店の情報が入る/お店の情報が入る/',
                'filename' => 'sample3.png',
                'is_selling' => true
            ],
            [
                'owner_id' => 4,
                'name' => 'test4SHOP',
                'information' => 'お店の情報が入る/お店の情報が入る/お店の情報が入る/お店の情報が入る/お店の情報が入る/お店の情報が入る/お店の情報が入る/お店の情報が入る/お店の情報が入る/お店の情報が入る/お店の情報が入る/',
                'filename' => 'sample4.png',
                'is_selling' => true
            ],
            [
                'owner_id' => 5,
                'name' => 'test5SHOP',
                'information' => 'お店の情報が入る/お店の情報が入る/お店の情報が入る/お店の情報が入る/お店の情報が入る/お店の情報が入る/お店の情報が入る/お店の情報が入る/お店の情報が入る/お店の情報が入る/お店の情報が入る/',
                'filename' => 'sample5.png',
                'is_selling' => true
            ],
        ]);
    }
}
