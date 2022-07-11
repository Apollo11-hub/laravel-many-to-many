<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[ 'Formula 1', 'Formula 2', 'Formula 3', 'NASCAR' , 'Rally','Truck racing'];

        foreach ($data as $cate) {

            $new_category = new Category();
            $new_category->name = $cate;
            $new_category->slug = Str::slug($cate);
            $new_category->save();
        }
    }
}
