<?php

use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('produks')->insert([
            'name' => 'Snack Semprong',
            'slug' => 'Snack Semprong',
            'description' => 'Snack semprong harga murah',
            'price' => '25.000',
            'image' => '1kupinggajah.png'
        ]);

        DB::table('produks')->insert([
            'name' => 'Snack Kuping Gajah',
            'slug' => 'Snack Kuping Gajah',
            'description' => 'Snack Kuping Gajah harga murah',
            'price' => '20.000',
            'image' => '2semprong.jpg'
        ]);
        DB::table('produks')->insert([
            'name' => 'Snack Wafer Coklat',
            'slug' => 'Snack Wafer Coklat',
            'description' => 'Snack Wafer Coklat harga murah',
            'price' => '15.000',
            'image' => '3wafercoklat.jpg'
        ]);
    }
}
