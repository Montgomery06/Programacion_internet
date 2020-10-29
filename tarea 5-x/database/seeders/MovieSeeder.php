<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$movies = json_decode(file_get_contents("database/jsons/movie.json"),true);

    	foreach ($movies as $movieA) {
    		$movie = new Movie();
    		$movie->title = $movieA["title"]; 
    		$movie->clasification = $movieA["clasification"];
    		$movie->minutes = $movieA["minutes"];
    		$movie->year = $movieA["year"];
    		$movie->description = $movieA["description"];
    		$movie->cover = $movieA["cover"];
    		$movie->trailer = $movieA["trailer"];
    		$movie->categorie_id = $movieA["categorie_id"];
    		$movie->save();
    	}

        //
    }
}
