<?php

use Illuminate\Database\Seeder;

class CategoryDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('category_detail')->delete();

        \DB::table('category_detail')->insert(array (
            0 =>
            array (
                'id' => 1,
                'category_id' => 2,
                'name' => 'iphone new',
                'status' => 1,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ),
            1 =>
            array (
                'id' => 2,
                'category_id' => 2,
                'name' => 'iphone cũ 99%',
                'status' => 1,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ),
            2 =>
            array (
                'id' => 3,
                'category_id' => 5,
                'name' => 'Macbook air 2019',
                'status' => 1,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ),
            3 =>
            array (
                'id' => 4,
                'category_id' => 5,
                'name' => 'Macbook pro 2019',
                'status' => 1,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ),
            4 =>
            array (
                'id' => 5,
                'category_id' => 6,
                'name' => 'the new ',
                'status' => 1,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ),
            5 =>
            array (
                'id' => 6,
                'category_id' => 6,
                'name' => 'asdasd',
                'status' => 1,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ),
            6 =>
            array (
                'id' => 7,
                'category_id' => 6,
                'name' => 'asdasdasd',
                'status' => 1,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ),
        ));
    }
}
