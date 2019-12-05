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
                'category_id' => 4,
                'name' => 'iphone new',
                'status' => 1,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ),
            1 =>
            array (
                'id' => 2,
                'category_id' => 4,
                'name' => 'iphone cũ 99%',
                'status' => 1,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ),
            2 =>
            array (
                'id' => 3,
                'category_id' => 3,
                'name' => 'Ipad air 2019',
                'status' => 1,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ),
            3 =>
            array (
                'id' => 4,
                'category_id' => 3,
                'name' => 'Ipad pro 2019',
                'status' => 1,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ),
            4 =>
            array (
                'id' => 5,
                'category_id' => 5,
                'name' => 'Iwatch 5',
                'status' => 1,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ),
            5 =>
            array (
                'id' => 6,
                'category_id' => 7,
                'name' => 'Máy tính bảng',
                'status' => 1,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ),
            6 =>
            array (
                'id' => 7,
                'category_id' => 7,
                'name' => 'Điện thoại',
                'status' => 1,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ),
            7 =>
            array (
                'id' => 8,
                'category_id' => 8,
                'name' => 'Xách tay 100%',
                'status' => 1,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ),
        ));
    }
}
