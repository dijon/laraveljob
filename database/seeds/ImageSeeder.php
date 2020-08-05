<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            'name' => 'Категория №' . rand(1, 100),
            'category_id' => 'Категория №' . rand(1, 100),
            'user_id' => 'Категория №' . rand(1, 100),
        ]);
    }
}
