<?php

use Illuminate\Database\Seeder;

class ArtImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            for ($i = 1; $i < 21; $i++){
                DB::table('Art_images')->insert([
                    'img' => 'Art_'.$i.'.jpg',
                    'art_id' => $i,
                ]);
            }
    }
}
