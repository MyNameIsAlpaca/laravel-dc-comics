<?php

namespace Database\Seeders;

use App\Models\comics;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $listComics = config('comics');

        foreach ($listComics as $comic) {
            $newComics = new comics();

            $newComics->title = $comic['title'];
            $newComics->desc = $comic['description'];
            $newComics->thumb = $comic['thumb'];
            $newComics->price = $comic['price'];
            $newComics->series = $comic['series'];
            $newComics->sales_date = $comic['sale_date'];
            $newComics->type = $comic['type'];
            $newComics->artists = 'jason paul';
            $newComics->writers = 'jason paul';

            $newComics->save();
        }
    }
}
