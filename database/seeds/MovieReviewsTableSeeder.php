<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieReviewsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('movie_reviews')->delete();
        
        DB::table('movie_reviews')->insert(array (
            0 => 
            array (
                'id' => 1,
                'movie_id' => 1,
                'name' => 'Jimoh Damilola',
                'comment' => 'Lorem ipsum is simply dummy text',
                'created_at' => '2017-01-25 07:03:55',
                'updated_at' => '2017-01-25 07:04:26',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'movie_id' => 2,
                'name' => 'Jimoh Kazeem',
                'comment' => 'Lorem ipsum is simply dummy text',
                'created_at' => '2017-01-25 10:31:13',
                'updated_at' => '2017-01-25 10:31:13',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'movie_id' => 3,
                'name' => 'Adebanjo Afolasayo',
                'comment' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries',
                'created_at' => '2017-01-25 11:34:56',
                'updated_at' => '2017-01-25 11:34:56',
                'deleted_at' => NULL,
            ),
        ));
    }
}