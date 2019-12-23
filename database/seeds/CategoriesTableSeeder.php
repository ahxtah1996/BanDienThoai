<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('categories')->delete();

        \DB::table('categories')->insert(array (
            0 =>
            array (
                'id' => 1,
                'parent_category_id' => null,
                'name' => 'Apple',
                'status' => 1,
                'type' => 1,
                'icon' => 'icon-apple.png',
                'img_home' => 'iphone-home.png',
                'banner' => 'iphone-bg.jpg',
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ),
            1 =>
            array (
                'id' => 2,
                'parent_category_id' => 1,
                'name' => 'Imac',
                'status' => 1,
                'type' => 1,
                'icon' => null,
                'img_home' => null,
                'banner' => null,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ),
            2 =>
            array (
                'id' => 3,
                'parent_category_id' => 1,
                'name' => 'Ipad',
                'status' => 1,
                'type' => 1,
                'icon' => null,
                'img_home' => null,
                'banner' => null,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ),
            3 =>
            array (
                'id' => 4,
                'parent_category_id' => 1,
                'name' => 'Iphone',
                'status' => 1,
                'type' => 2,
                'icon' => null,
                'img_home' => null,
                'banner' => null,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ),
            4 =>
            array (
                'id' => 5,
                'parent_category_id' => 1,
                'name' => 'Iwatch',
                'status' => 1,
                'type' => 2,
                'icon' => null,
                'img_home' => null,
                'banner' => null,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ),
            5 =>
            array (
                'id' => 6,
                'parent_category_id' => null,
                'name' => 'Android',
                'status' => 1,
                'type' => 2,
                'icon' => 'icon-android.png',
                'img_home' => 'android-home.png',
                'banner' => 'android-bg.png',
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ),
            6 =>
            array (
                'id' => 7,
                'parent_category_id' => 6,
                'name' => 'Samsung',
                'status' => 1,
                'type' => 2,
                'icon' => null,
                'img_home' => null,
                'banner' => null,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ),
            7 =>
            array (
                'id' => 8,
                'parent_category_id' => 6,
                'name' => 'Huawei',
                'status' => 1,
                'type' => 2,
                'icon' => null,
                'img_home' => null,
                'banner' => null,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ),
            8 =>
            array (
                'id' => 9,
                'parent_category_id' => 6,
                'name' => 'Pixel',
                'status' => 1,
                'type' => 2,
                'icon' => null,
                'img_home' => null,
                'banner' => null,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ),
            9 =>
            array (
                'id' => 10,
                'parent_category_id' => null,
                'name' => 'Máy ảnh',
                'status' => 1,
                'type' => 2,
                'icon' => 'icon-mayanh.png',
                'img_home' => 'mayanh-home.png',
                'banner' => 'mayanh-bg.png',
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ),
            10 =>
            array (
                'id' => 11,
                'parent_category_id' => 10,
                'name' => 'Fujifilm',
                'status' => 1,
                'type' => 2,
                'icon' => null,
                'img_home' => null,
                'banner' => null,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ),
            11 =>
            array (
                'id' => 12,
                'parent_category_id' => 10,
                'name' => 'Olympus',
                'status' => 1,
                'type' => 2,
                'icon' => null,
                'img_home' => null,
                'banner' => null,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ),
            12 =>
            array (
                'id' => 13,
                'parent_category_id' => null,
                'name' => 'Đồ chơi công nghệ',
                'status' => 1,
                'type' => 2,
                'icon' => 'icon-toy.png',
                'img_home' => 'toy-home.png',
                'banner' => 'toy-bg.png',
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ),
            13 =>
            array (
                'id' => 14,
                'parent_category_id' => null,
                'name' => 'Phụ kiện',
                'status' => 1,
                'type' => 2,
                'icon' => 'icon-phukien.png',
                'img_home' => 'toy-pk.png',
                'banner' => 'pk-bg.png',
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ),
            14 =>
            array (
                'id' => 15,
                'parent_category_id' => 14,
                'name' => 'Máy tính - Điện thoại',
                'status' => 1,
                'type' => 2,
                'icon' => null,
                'img_home' => null,
                'banner' => null,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ),
            15 =>
            array (
                'id' => 16,
                'parent_category_id' => 14,
                'name' => 'Ốp',
                'status' => 1,
                'type' => 2,
                'icon' => null,
                'img_home' => null,
                'banner' => null,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ),
            16 =>
            array (
                'id' => 17,
                'parent_category_id' => null,
                'name' => 'Xe',
                'status' => 1,
                'type' => 2,
                'icon' => 'icon-xe.png',
                'img_home' => 'xe-home.png',
                'banner' => 'xe-bg.png',
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ),
            17 =>
            array (
                'id' => 18,
                'parent_category_id' => 17,
                'name' => 'Xe',
                'status' => 1,
                'type' => 2,
                'icon' => null,
                'img_home' => null,
                'banner' => null,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ),
            18 =>
            array (
                'id' => 19,
                'parent_category_id' => 17,
                'name' => 'Đồ chơi',
                'status' => 1,
                'type' => 2,
                'icon' => null,
                'img_home' => null,
                'banner' => null,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ),
            19 =>
            array (
                'id' => 20,
                'parent_category_id' => null,
                'name' => 'Đồ dùng tiện lợi',
                'status' => 1,
                'type' => 2,
                'icon' => 'icon-tienloi.png',
                'img_home' => 'tienloi-home.png',
                'banner' => 'tienloi-bg.png',
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            )
        ));
    }
}
