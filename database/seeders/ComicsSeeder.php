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
        $newComics = new comics();

        $newComics->title = 'ciao';
        $newComics->desc = 'descrizione';
        $newComics->thumb = 'https://imgs.search.brave.com/aUNyvZBXUulb963JH7KnQm9AMr8bcBoLsiHREOqayIU/rs:fit:612:612:1/g:ce/aHR0cHM6Ly9pNS53/YWxtYXJ0aW1hZ2Vz/LmNvbS9hc3IvOWZm/ZWYzMDMtMGZhYy00/OGRkLTg3ODctYzUy/NTk0MDk2ODAwXzEu/MTc1ZDk1Mjg2NzY0/OGEwOTczMTY2NGMy/MTE1NjNlYWIuanBl/Zz9vZG5XaWR0aD02/MTImb2RuSGVpZ2h0/PTYxMiZvZG5CZz1m/ZmZmZmY';
        $newComics->price = 12.00;
        $newComics->series = 'xman';
        $newComics->sales_date = '12-23-2023';
        $newComics->type = 'horror';
        $newComics->artists = 'jason paul';
        $newComics->writers = 'jason paul';

        $newComics->save();
    }
}
