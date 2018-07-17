<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieGenresTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('movie_genres')->delete();
        
        DB::table('movie_genres')->insert(array (
            0 => 
            array (
                'id' => 1,
                'movie_id' => 2,
                'genre_id' => 1,
                'created_at' => '2017-01-25 06:00:19',
                'updated_at' => '2017-01-25 06:00:19',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'movie_id' => 1,
                'genre_id' => 2,
                'created_at' => '2017-01-25 06:04:41',
                'updated_at' => '2017-01-25 06:09:34',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'movie_id' => 2,
                'genre_id' => 2,
                'created_at' => '2017-01-25 09:07:49',
                'updated_at' => '2017-01-25 09:07:49',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'movie_id' => 1,
                'genre_id' => 5,
                'created_at' => '2017-01-25 11:34:34',
                'updated_at' => '2017-01-25 11:34:34',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'movie_id' => 3,
                'genre_id' => 2,
                'created_at' => '2017-02-09 06:15:14',
                'updated_at' => '2017-02-09 06:15:14',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'movie_id' => 1,
                'genre_id' => 3,
                'created_at' => '2017-02-09 06:15:24',
                'updated_at' => '2017-02-09 06:15:24',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'movie_id' => 2,
                'genre_id' => 3,
                'created_at' => '2017-02-09 07:19:34',
                'updated_at' => '2017-02-09 07:19:34',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'movie_id' => 2,
                'genre_id' => 5,
                'created_at' => '2017-02-09 07:19:42',
                'updated_at' => '2017-02-09 07:19:42',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'movie_id' => 3,
                'genre_id' => 4,
                'created_at' => '2017-02-09 07:29:52',
                'updated_at' => '2017-02-09 07:29:52',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'movie_id' => 1,
                'genre_id' => 5,
                'created_at' => '2017-02-09 07:30:02',
                'updated_at' => '2017-02-09 07:30:02',
                'deleted_at' => NULL,
            ),
        ));
    }
}