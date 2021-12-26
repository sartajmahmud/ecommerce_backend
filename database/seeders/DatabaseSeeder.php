<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            'role_id' => '3',
            'name' => 'Sartaj',
            'email' => 'sartaj@gmail.com',
            'phoneNumber' => '01796406262',
            'password' => '123456',
            'device_token' => '13214rkdopiajf'
        ]);
        DB::table('products')->insert([
            'category_id' => '1',
            'brand_id' => '2',
            'deliverable' => '0',
            'name' => 'abc',
            'price' => '10',
            'discounted_price' => '5',
            'delivery_fee' => '5',
            'media_id' => '1',
            'description' => 'qwert yuiop'
        ]);
        DB::table('addresses')->insert([
            'user_id' => '1',
            'default' => '1',
            'latitude' => '1.1',
            'longitude' => '2.2',
            'address' => 'india',
            'description' => 'qwerty'

        ]);


        DB::table('assigned_sellers')->insert([
            'user_id' => '1',
            'seller_id' => '1'

        ]);
        DB::table('brands')->insert([

            'name' => 'apple',
            'media_id' => '2'

        ]);


        DB::table('carts')->insert([

            'user_id' => '1',
            'product_id' => '1',
            'quantity' => '2'

        ]);

        DB::table('categories')->insert([

            'name' => 'fruit',
            'media_id' => '2'

        ]);
        DB::table('featured_products')->insert([

            'product_id' => '1',
            'priority' => '1'

        ]);

        DB::table('flash_sales')->insert([

            'product_id' => '1',
            'priority' => '1'

        ]);

        DB::table('inventories')->insert([

            'seller_id' => '1',
            'product_id' => '1',
            'quantity' => '20'

        ]);

        DB::table('orders')->insert([
            'user_id' => '1',
            'active' => '1',
            'order_status' => '1',
            'delivery_fee' => '31',
            'payment_id' => '1',
            'customer_message' => 'na',
            'delivery_address' => 'ananaan',
            'latitude' => '1.1',
            'longitude' => '2.2'
        ]);



        DB::table('order_statuses')->insert([

            'name' => 'Order Pending'

        ]);
        DB::table('order_statuses')->insert([

            'name' => 'Order Received'

        ]);
        DB::table('order_statuses')->insert([

            'name' => 'Order Processing'

        ]);
        DB::table('order_statuses')->insert([

            'name' => 'Out For Delivery'

        ]);
        DB::table('order_statuses')->insert([

            'name' => 'Delivered'

        ]);

        DB::table('payments')->insert([

            'method' => 'Cash on Delivery',
            'status' => 'Unpaid'

        ]);
        DB::table('payments')->insert([

            'method' => 'Online',
            'status' => 'Paid'

        ]);

        DB::table('product_orders')->insert([

            'order_id' => '1',
            'product_id' => '1',
            'quantity' => '2',
            'total_price' => '55'

        ]);

        DB::table('reviews')->insert([

            'user_id' => '1',
            'product_id' => '1',
            'rating' => '4',
            'review_message' => 'great'

        ]);

        DB::table('roles')->insert([

            'name' => 'User',
            'priority' => '1'

        ]);
        DB::table('roles')->insert([

            'name' => 'Salesman',
            'priority' => '2'

        ]);
        DB::table('roles')->insert([

            'name' => 'Seller',
            'priority' => '3'

        ]);
        DB::table('roles')->insert([

            'name' => 'Admin',
            'priority' => '4'

        ]);
        DB::table('salesman_attendances')->insert([

            'user_id' => '1',
            'latitude' => '1.1',
            'longitude' => '4.1'

        ]);
        DB::table('sales_order_items')->insert([

            'sales_order_id' => '1',
            'product_id' => '1',
            'quantity' => '2'

        ]);
        DB::table('sales_visits')->insert([

            'salesman_id' => '1',
            'seller_id' => '1',
            'contact_person' => 'sakib',
            'contact_detail' => '123456'

        ]);

        DB::table('sellers')->insert([
            'name' => 'sakib',
            'phoneNumber' => '1234',
            'email' => 'abc@abc.com',
            'address' => 'abc,dhaka',
            'latitude' => '2.2',
            'longitude' => '1.1',
            'inventory_id' => '1',
            'media_id' => '1'
        ]);

        DB::table('sliders')->insert([

            'product_id' => '1',
            'media_id' => '1',
            'enabled' => '1'

        ]);
        DB::table('sliders')->insert([

            'product_id' => '1',
            'media_id' => '2',
            'enabled' => '1'

        ]);

        DB::table('todays_deals')->insert([

            'product_id' => '1',
            'priority' => '1'

        ]);
        DB::table('top_categories')->insert([

            'product_id' => '1',
            'priority' => '1'

        ]);

        DB::table('welcome_banners')->insert([

            'name' => 'welcome',
            'media_id' => '1',
            'order' => '1'

        ]);
        DB::table('sales_orders')->insert([
            'salesman_id' => '1',
            'seller_id' => '1',
            'reference' => '1',
            'order_date' => '2021-10-01',
            'delivery_date' => '2021-09-10'
        ]);








    }
}
