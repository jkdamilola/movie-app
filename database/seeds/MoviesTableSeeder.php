<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoviesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('movies')->delete();
        
        DB::table('movies')->insert(array(
            0 => 
            array (
                'id' => 1,
                'name' => 'Raees',
                'description' => 'The film is set in the early 80\'s and 90\'s in Gujarat. The fictitious story of a man who builds an empire in the state of Gujarat, the only state that still follows prohibition. It\'s a story about his rise and his relationships, which help him become the single most powerful man in the state. Written by RedChillies',
                'release_date' => '2017-01-25',
                'rating' => 3,
                'ticket_price' => '100.00',
                'country' => 'United State',
                'photo' => '',
                'slug' => 'raees',
                'created_at' => '2017-01-23 09:34:59',
                'updated_at' => '2017-02-14 06:24:56',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Return Of Xander Cage',
                'description' => 'Extreme athlete turned government operative Xander Cage (Vin Diesel) comes out of self-imposed exile, thought to be long dead, and is set on a collision course with deadly alpha warrior Xiang (Donnie Yen) and his team in a race to recover a sinister and seemingly unstoppable weapon known as Pandora\'s Box. Recruiting an all-new group of thrill-seeking cohorts, Xander finds himself enmeshed in a deadly conspiracy that points to collusion at the highest levels of world governments.',
                'release_date' => '2017-01-20',
                'rating' => 4,
                'ticket_price' => '200.00',
                'country' => 'United State',
                'photo' => '',
                'slug' => 'return-of-xander-cage',
                'created_at' => '2017-01-23 10:59:24',
                'updated_at' => '2017-02-14 06:25:18',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Kaabil',
                'description' => 'A blind man sets out to avenge the murder of his wife.',
                'release_date' => '2017-01-27',
                'rating' => 5,
                'ticket_price' => '500.00',
                'country' => 'India',
                'photo' => '',
                'slug' => 'kaabil',
                'created_at' => '2017-01-31 05:35:38',
                'updated_at' => '2017-02-14 06:24:41',
                'deleted_at' => NULL,
            ),
        ));        
    }
}