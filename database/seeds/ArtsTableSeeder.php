<?php

use Illuminate\Database\Seeder;

class ArtsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 21; $i++){
            DB::table('Arts')->insert([
                'title' => 'Art '.$i,
                'year' => rand(1900,2020),
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam neque tortor, feugiat id ultrices et, congue eu elit. Praesent ornare elit turpis, a sagittis risus pulvinar quis.',
                'authorsFirstName' => 'First_'.$i,
                'authorsLastName' => 'Last_'.$i,
                'type' => rand(1,2),
                'width' => 1000,
                'height' => 1000,
                'file_name' => 'Art_'.$i,
            ]);
        }
    }
}
