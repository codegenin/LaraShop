<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            'name' => 'ACNE',
            'category_id' => 1,
            'products_count' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('brands')->insert([
            'name' => 'RONHILL',
            'category_id' => 1,
            'products_count' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('brands')->insert([
            'name' => 'ALBIRO',
            'category_id' => 2,
            'products_count' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('brands')->insert([
            'name' => 'ODDMOLLY',
            'category_id' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('brands')->insert([
            'name' => 'FENDI',
            'category_id' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('brands')->insert([
            'name' => 'GUESS',
            'category_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
