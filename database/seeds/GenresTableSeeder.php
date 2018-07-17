<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenresTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('genres')->delete();
        
        DB::table('genres')->insert(array (
            0 => 
            array (
                'id' => 1,
                'genre_type' => 'Western',
                'created_at' => '2017-01-24 09:04:57',
                'updated_at' => '2017-01-24 09:04:57',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'genre_type' => 'Drama',
                'created_at' => '2017-01-24 09:07:02',
                'updated_at' => '2017-01-24 09:07:02',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'genre_type' => 'Comedy',
                'created_at' => '2017-01-24 09:07:14',
                'updated_at' => '2017-01-24 09:07:14',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'genre_type' => 'Horror',
                'created_at' => '2017-01-24 09:07:27',
                'updated_at' => '2017-01-24 09:07:27',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'genre_type' => 'Historical',
                'created_at' => '2017-01-25 11:34:22',
                'updated_at' => '2017-02-13 05:13:06',
                'deleted_at' => NULL,
            ),
        ));
    }
}