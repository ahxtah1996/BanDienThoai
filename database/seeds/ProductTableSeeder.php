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
                'name' => 'iPhone 11 Pro Max 64GB1',
                'price' => 33990000,
                'sku' => 'SL/, LA',
                'des' => '<p>✅Hàng mới 100%</p><p>✅ 1 đổi 1 - 12 tháng</p><p>🎁Hỗ trợ trả góp 0% lãi suất</p><p>🎁Giảm giá 10% phụ kiện mua kèm</p>',
                'img' => 'icon-phone.png',
                'info' => 'Chiếc iPhone mạnh mẽ nhất, lớn nhất, thời lượng pin tốt nhất đã xuất hiện. iPhone 11 Pro Max chắc chắn là chiếc điện thoại mà ai cũng ao ước khi sở hữu những tính năng xuất sắc nhất, đặc biệt là camera và pin.',
                'status' => 1,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ],
            1 =>
            [
                'id' => 2,
                'category_detail_id' => 1,
                'name' => 'iPhone 11 Pro Max 64GB2',
                'price' => 33990000,
                'sku' => 'SL/, LA',
                'des' => '<p>✅Hàng mới 100%</p><p>✅ 1 đổi 1 - 12 tháng</p><p>🎁Hỗ trợ trả góp 0% lãi suất</p><p>🎁Giảm giá 10% phụ kiện mua kèm</p>',
                'img' => 'icon-phone.png',
                'info' => 'Chiếc iPhone mạnh mẽ nhất, lớn nhất, thời lượng pin tốt nhất đã xuất hiện. iPhone 11 Pro Max chắc chắn là chiếc điện thoại mà ai cũng ao ước khi sở hữu những tính năng xuất sắc nhất, đặc biệt là camera và pin.',
                'status' => 1,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ],
            2 =>
            [
                'id' => 3,
                'category_detail_id' => 2,
                'name' => 'IPhone cũ',
                'price' => 5990000,
                'sku' => 'iphone cũ',
                'des' => '<p>✅Hàng mới 100%</p><p>✅ 1 đổi 1 - 12 tháng</p><p>🎁Hỗ trợ trả góp 0% lãi suất</p><p>🎁Giảm giá 10% phụ kiện mua kèm</p>',
                'img' => 'icon-phone.png',
                'info' => 'Chiếc iPhone mạnh mẽ nhất, lớn nhất, thời lượng pin tốt nhất đã xuất hiện. iPhone 11 Pro Max chắc chắn là chiếc điện thoại mà ai cũng ao ước khi sở hữu những tính năng xuất sắc nhất, đặc biệt là camera và pin.',
                'status' => 0,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ],
            3 =>
            [
                'id' => 4,
                'category_detail_id' => 3,
                'name' => 'Macbook pro 2019',
                'price' => 33990000,
                'sku' => 'SL/, LA',
                'des' => '<p>✅Hàng mới 100%</p><p>✅ 1 đổi 1 - 12 tháng</p><p>🎁Hỗ trợ trả góp 0% lãi suất</p><p>🎁Giảm giá 10% phụ kiện mua kèm</p>',
                'img' => 'icon-phone.png',
                'info' => 'Chiếc iPhone mạnh mẽ nhất, lớn nhất, thời lượng pin tốt nhất đã xuất hiện. iPhone 11 Pro Max chắc chắn là chiếc điện thoại mà ai cũng ao ước khi sở hữu những tính năng xuất sắc nhất, đặc biệt là camera và pin.',
                'status' => 1,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ],
            4 =>
            [
                'id' => 5,
                'category_detail_id' => 3,
                'name' => 'iPhone 11 Pro Max 64GB4',
                'price' => 33990000,
                'sku' => 'SL/, LA',
                'des' => '<p>✅Hàng mới 100%</p><p>✅ 1 đổi 1 - 12 tháng</p><p>🎁Hỗ trợ trả góp 0% lãi suất</p><p>🎁Giảm giá 10% phụ kiện mua kèm</p>',
                'img' => 'icon-phone.png',
                'info' => 'Chiếc iPhone mạnh mẽ nhất, lớn nhất, thời lượng pin tốt nhất đã xuất hiện. iPhone 11 Pro Max chắc chắn là chiếc điện thoại mà ai cũng ao ước khi sở hữu những tính năng xuất sắc nhất, đặc biệt là camera và pin.',
                'status' => 1,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ],
            5 =>
            [
                'id' => 6,
                'category_detail_id' => 4,
                'name' => 'iPhone 11 Pro Max 64GB5',
                'price' => 33990000,
                'sku' => 'SL/, LA',
                'des' => '<p>✅Hàng mới 100%</p><p>✅ 1 đổi 1 - 12 tháng</p><p>🎁Hỗ trợ trả góp 0% lãi suất</p><p>🎁Giảm giá 10% phụ kiện mua kèm</p>',
                'img' => 'icon-phone.png',
                'info' => 'Chiếc iPhone mạnh mẽ nhất, lớn nhất, thời lượng pin tốt nhất đã xuất hiện. iPhone 11 Pro Max chắc chắn là chiếc điện thoại mà ai cũng ao ước khi sở hữu những tính năng xuất sắc nhất, đặc biệt là camera và pin.',
                'status' => 1,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ],
            6 =>
            [
                'id' => 7,
                'category_detail_id' => 4,
                'name' => 'iPhone 11 Pro Max 64GB6',
                'price' => 33990000,
                'sku' => 'SL/, LA',
                'des' => '<p>✅Hàng mới 100%</p><p>✅ 1 đổi 1 - 12 tháng</p><p>🎁Hỗ trợ trả góp 0% lãi suất</p><p>🎁Giảm giá 10% phụ kiện mua kèm</p>',
                'img' => 'icon-phone.png',
                'info' => 'Chiếc iPhone mạnh mẽ nhất, lớn nhất, thời lượng pin tốt nhất đã xuất hiện. iPhone 11 Pro Max chắc chắn là chiếc điện thoại mà ai cũng ao ước khi sở hữu những tính năng xuất sắc nhất, đặc biệt là camera và pin.',
                'status' => 1,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ],
            7 =>
            [
                'id' => 8,
                'category_detail_id' => 5,
                'name' => 'iPhone 11 Pro Max 64GB7',
                'price' => 33990000,
                'sku' => 'SL/, LA',
                'des' => '<p>✅Hàng mới 100%</p><p>✅ 1 đổi 1 - 12 tháng</p><p>🎁Hỗ trợ trả góp 0% lãi suất</p><p>🎁Giảm giá 10% phụ kiện mua kèm</p>',
                'img' => 'icon-phone.png',
                'info' => 'Chiếc iPhone mạnh mẽ nhất, lớn nhất, thời lượng pin tốt nhất đã xuất hiện. iPhone 11 Pro Max chắc chắn là chiếc điện thoại mà ai cũng ao ước khi sở hữu những tính năng xuất sắc nhất, đặc biệt là camera và pin.',
                'status' => 1,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ],
            8 =>
            [
                'id' => 9,
                'category_detail_id' => 6,
                'name' => 'iPhone 11 Pro Max 64GB8',
                'price' => 33990000,
                'sku' => 'SL/, LA',
                'des' => '<p>✅Hàng mới 100%</p><p>✅ 1 đổi 1 - 12 tháng</p><p>🎁Hỗ trợ trả góp 0% lãi suất</p><p>🎁Giảm giá 10% phụ kiện mua kèm</p>',
                'img' => 'icon-phone.png',
                'info' => 'Chiếc iPhone mạnh mẽ nhất, lớn nhất, thời lượng pin tốt nhất đã xuất hiện. iPhone 11 Pro Max chắc chắn là chiếc điện thoại mà ai cũng ao ước khi sở hữu những tính năng xuất sắc nhất, đặc biệt là camera và pin.',
                'status' => 1,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ],
            8 =>
            [
                'id' => 9,
                'category_detail_id' => 7,
                'name' => 'iPhone 11 Pro Max 64GB9',
                'price' => 33990000,
                'sku' => 'SL/, LA',
                'des' => '<p>✅Hàng mới 100%</p><p>✅ 1 đổi 1 - 12 tháng</p><p>🎁Hỗ trợ trả góp 0% lãi suất</p><p>🎁Giảm giá 10% phụ kiện mua kèm</p>',
                'img' => 'icon-phone.png',
                'info' => 'Chiếc iPhone mạnh mẽ nhất, lớn nhất, thời lượng pin tốt nhất đã xuất hiện. iPhone 11 Pro Max chắc chắn là chiếc điện thoại mà ai cũng ao ước khi sở hữu những tính năng xuất sắc nhất, đặc biệt là camera và pin.',
                'status' => 1,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ],
            9 =>
            [
                'id' => 10,
                'category_detail_id' => 7,
                'name' => 'iPhone 11 Pro Max 64GB10',
                'price' => 33990000,
                'sku' => 'SL/, LA',
                'des' => '<p>✅Hàng mới 100%</p><p>✅ 1 đổi 1 - 12 tháng</p><p>🎁Hỗ trợ trả góp 0% lãi suất</p><p>🎁Giảm giá 10% phụ kiện mua kèm</p>',
                'img' => 'icon-phone.png',
                'info' => 'Chiếc iPhone mạnh mẽ nhất, lớn nhất, thời lượng pin tốt nhất đã xuất hiện. iPhone 11 Pro Max chắc chắn là chiếc điện thoại mà ai cũng ao ước khi sở hữu những tính năng xuất sắc nhất, đặc biệt là camera và pin.',
                'status' => 1,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ],
            10 =>
            [
                'id' => 11,
                'category_detail_id' => 8,
                'name' => 'iPhone 11 Pro Max 64GB11',
                'price' => 33990000,
                'sku' => 'SL/, LA',
                'des' => '<p>✅Hàng mới 100%</p><p>✅ 1 đổi 1 - 12 tháng</p><p>🎁Hỗ trợ trả góp 0% lãi suất</p><p>🎁Giảm giá 10% phụ kiện mua kèm</p>',
                'img' => 'icon-phone.png',
                'info' => 'Chiếc iPhone mạnh mẽ nhất, lớn nhất, thời lượng pin tốt nhất đã xuất hiện. iPhone 11 Pro Max chắc chắn là chiếc điện thoại mà ai cũng ao ước khi sở hữu những tính năng xuất sắc nhất, đặc biệt là camera và pin.',
                'status' => 1,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ],
            11 =>
            [
                'id' => 12,
                'category_detail_id' => 8,
                'name' => 'iPhone 11 Pro Max 64GB12',
                'price' => 33990000,
                'sku' => 'SL/, LA',
                'des' => '<p>✅Hàng mới 100%</p><p>✅ 1 đổi 1 - 12 tháng</p><p>🎁Hỗ trợ trả góp 0% lãi suất</p><p>🎁Giảm giá 10% phụ kiện mua kèm</p>',
                'img' => 'icon-phone.png',
                'info' => 'Chiếc iPhone mạnh mẽ nhất, lớn nhất, thời lượng pin tốt nhất đã xuất hiện. iPhone 11 Pro Max chắc chắn là chiếc điện thoại mà ai cũng ao ước khi sở hữu những tính năng xuất sắc nhất, đặc biệt là camera và pin.',
                'status' => 1,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ],
            12 =>
            [
                'id' => 13,
                'category_detail_id' => 2,
                'name' => 'iPhone X 64GB',
                'price' => 13990000,
                'sku' => 'SL/, LA',
                'des' => 'đẹp 99%',
                'img' => 'icon-phone.png',
                'info' => null,
                'status' => 1,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ],
            13 =>
            [
                'id' => 14,
                'category_detail_id' => 2,
                'name' => 'iPhone X 128GB',
                'price' => 19990000,
                'sku' => 'SL/, LA',
                'des' => 'đẹp 99%',
                'img' => 'icon-phone.png',
                'info' => null,
                'status' => 1,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ],
            14 =>
            [
                'id' => 15,
                'category_detail_id' => 2,
                'name' => 'iPhone X 256GB',
                'price' => 23990000,
                'sku' => 'SL/, LA',
                'des' => 'đẹp 98%',
                'img' => 'icon-phone.png',
                'info' => null,
                'status' => 1,
                'created_at' => '2019-10-18 02:55:38',
                'updated_at' => '2019-10-18 02:57:17',
            ],
        ]);
    }
}
