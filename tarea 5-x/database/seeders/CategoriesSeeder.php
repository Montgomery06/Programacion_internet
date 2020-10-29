<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$category = new Categories();
    	$category->name = "Horror";
    	$category->description = "Peliculas que dan miedo";
    	$category->save();
        //
    }
}