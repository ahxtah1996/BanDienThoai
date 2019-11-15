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
                'name' => 'iphone',
                'status' => 1,
                'icon' => 'icon-phone.png',
                'description' => 'Điện thoại iPhone',
                'img_home' => 'iphonebann.png',
                'background' => 'iphone-banner.jpg',
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ),
            1 =>
            array (
                'id' => 2,
                'parent_category_id' => 1,
                'name' => 'Danh mục',
                'status' => 1,
                'icon' => null,
                'description' => null,
                'img_home' => null,
                'background' => null,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ),
            2 =>
            array (
                'id' => 3,
                'parent_category_id' => null,
                'name' => 'ipad',
                'status' => 1,
                'icon' => 'icon-ipad.png',
                'description' => 'Máy tính bảng iPad',
                'img_home' => 'ipadbanner.png',
                'background' => 'macbannersub.png',
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ),
            3 =>
            array (
                'id' => 4,
                'parent_category_id' => null,
                'name' => 'macbook',
                'status' => 1,
                'icon' => 'icon-mac.png',
                'description' => 'Macbook - Máy tính Apple',
                'img_home' => 'macbookbanner.png',
                'background' => 'macbannersub.png',
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ),
            4 =>
            array (
                'id' => 5,
                'parent_category_id' => 4,
                'name' => 'macbook 2019',
                'status' => 1,
                'icon' => null,
                'description' => null,
                'img_home' => null,
                'background' => null,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ),
            5 =>
            array (
                'id' => 6,
                'parent_category_id' => 4,
                'name' => 'orther',
                'status' => 1,
                'icon' => null,
                'description' => null,
                'img_home' => null,
                'background' => null,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ),
            6 =>
            array (
                'id' => 7,
                'parent_category_id' => null,
                'name' => 'apple watch',
                'status' => 1,
                'icon' => 'icon-iwatch.png',
                'description' => 'Apple Watch - Đồng hồ thông minh',
                'img_home' => 'donghobanner.png',
                'background' => 'banner.jpg',
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ),
            7 =>
            array (
                'id' => 8,
                'parent_category_id' => 7,
                'name' => 'APPLE WATCH SERIES 4',
                'status' => 1,
                'icon' => null,
                'description' => null,
                'img_home' => null,
                'background' => null,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ),
            8 =>
            array (
                'id' => 9,
                'parent_category_id' => 7,
                'name' => 'APPLE WATCH SERIES 3',
                'status' => 1,
                'icon' => null,
                'description' => null,
                'img_home' => null,
                'background' => null,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ),
        ));
    }
}
