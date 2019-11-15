<?php

use Illuminate\Database\Seeder;

class ColorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('colors')->delete();

        \DB::table('colors')->insert([
            0 =>
            [
                'id' => 1,
                'product_id' => 1,
                'color' => 'red',
                'price' => 0,
                'image' => 'icon-phone.png',
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ],
            1 =>
            [
                'id' => 2,
                'product_id' => 1,
                'color' => 'red',
                'price' => 1000000,
                'image' => 'icon-phone.png',
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ],
            2 =>
            [
                'id' => 3,
                'product_id' => 1,
                'color' => 'red',
                'price' => 100000,
                'image' => 'icon-phone.png',
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ],
            3 =>
            [
                'id' => 4,
                'product_id' => 1,
                'color' => 'red',
                'price' => 100000,
                'image' => 'icon-phone.png',
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ],
            4 =>
            [
                'id' => 5,
                'product_id' => 1,
                'color' => 'red',
                'price' => 200000,
                'image' => 'icon-phone.png',
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ],
            5 =>
            [
                'id' => 6,
                'product_id' => 1,
                'color' => 'blue',
                'price' => 300000,
                'image' => 'icon-phone.png',
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ],
            6 =>
            [
                'id' => 7,
                'product_id' => 1,
                'color' => 'red',
                'price' => 50000,
                'image' => 'icon-phone.png',
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ],
            7 =>
            [
                'id' => 8,
                'product_id' => 1,
                'color' => 'red',
                'price' => 0,
                'image' => 'icon-phone.png',
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ]
        ]);
    }
}
