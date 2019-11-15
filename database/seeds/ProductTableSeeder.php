<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('products')->delete();

        \DB::table('products')->insert([
            0 =>
            [
                'id' => 1,
                'category_detail_id' => 1,
                'name' => 'iPhone 11 Pro Max 64GB',
                'price' => 33990000,
                'description' => 'icon-phone.png',
                'detail' => 'Chiếc iPhone mạnh mẽ nhất, lớn nhất, thời lượng pin tốt nhất đã xuất hiện. iPhone 11 Pro Max chắc chắn là chiếc điện thoại mà ai cũng ao ước khi sở hữu những tính năng xuất sắc nhất, đặc biệt là camera và pin.',
                'status' => 1,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ],
            1 =>
            [
                'id' => 2,
                'category_detail_id' => 1,
                'name' => 'iPhone 11 Pro Max 64GB',
                'price' => 33990000,
                'description' => 'icon-phone.png',
                'detail' => 'Chiếc iPhone mạnh mẽ nhất, lớn nhất, thời lượng pin tốt nhất đã xuất hiện. iPhone 11 Pro Max chắc chắn là chiếc điện thoại mà ai cũng ao ước khi sở hữu những tính năng xuất sắc nhất, đặc biệt là camera và pin.',
                'status' => 1,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ],
            2 =>
            [
                'id' => 3,
                'category_detail_id' => 2,
                'name' => 'iPhone 11 Pro Max 64GB',
                'price' => 33990000,
                'description' => 'icon-phone.png',
                'detail' => 'Chiếc iPhone mạnh mẽ nhất, lớn nhất, thời lượng pin tốt nhất đã xuất hiện. iPhone 11 Pro Max chắc chắn là chiếc điện thoại mà ai cũng ao ước khi sở hữu những tính năng xuất sắc nhất, đặc biệt là camera và pin.',
                'status' => 1,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ],
            3 =>
            [
                'id' => 4,
                'category_detail_id' => 4,
                'name' => 'Macbook pro 2019',
                'price' => 33990000,
                'description' => 'icon-phone.png',
                'detail' => 'Chiếc iPhone mạnh mẽ nhất, lớn nhất, thời lượng pin tốt nhất đã xuất hiện. iPhone 11 Pro Max chắc chắn là chiếc điện thoại mà ai cũng ao ước khi sở hữu những tính năng xuất sắc nhất, đặc biệt là camera và pin.',
                'status' => 1,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ],
            4 =>
            [
                'id' => 5,
                'category_detail_id' => 2,
                'name' => 'iPhone 11 Pro Max 64GB',
                'price' => 33990000,
                'description' => 'icon-phone.png',
                'detail' => 'Chiếc iPhone mạnh mẽ nhất, lớn nhất, thời lượng pin tốt nhất đã xuất hiện. iPhone 11 Pro Max chắc chắn là chiếc điện thoại mà ai cũng ao ước khi sở hữu những tính năng xuất sắc nhất, đặc biệt là camera và pin.',
                'status' => 1,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ],
            5 =>
            [
                'id' => 6,
                'category_detail_id' => 4,
                'name' => 'iPhone 11 Pro Max 64GB',
                'price' => 33990000,
                'description' => 'icon-phone.png',
                'detail' => 'Chiếc iPhone mạnh mẽ nhất, lớn nhất, thời lượng pin tốt nhất đã xuất hiện. iPhone 11 Pro Max chắc chắn là chiếc điện thoại mà ai cũng ao ước khi sở hữu những tính năng xuất sắc nhất, đặc biệt là camera và pin.',
                'status' => 1,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ],
            6 =>
            [
                'id' => 7,
                'category_detail_id' => 4,
                'name' => 'iPhone 11 Pro Max 64GB',
                'price' => 33990000,
                'description' => 'icon-phone.png',
                'detail' => 'Chiếc iPhone mạnh mẽ nhất, lớn nhất, thời lượng pin tốt nhất đã xuất hiện. iPhone 11 Pro Max chắc chắn là chiếc điện thoại mà ai cũng ao ước khi sở hữu những tính năng xuất sắc nhất, đặc biệt là camera và pin.',
                'status' => 1,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ],
            7 =>
            [
                'id' => 8,
                'category_detail_id' => 5,
                'name' => 'iPhone 11 Pro Max 64GB',
                'price' => 33990000,
                'description' => 'icon-phone.png',
                'detail' => 'Chiếc iPhone mạnh mẽ nhất, lớn nhất, thời lượng pin tốt nhất đã xuất hiện. iPhone 11 Pro Max chắc chắn là chiếc điện thoại mà ai cũng ao ước khi sở hữu những tính năng xuất sắc nhất, đặc biệt là camera và pin.',
                'status' => 1,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ]
        ]);
    }
}
