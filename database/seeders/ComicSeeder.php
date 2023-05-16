<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comicsArray = config("comics");
        foreach ($comicsArray as $alboSolo) {
            $newComic = new Comic();

            $newComic->title = $alboSolo["title"];
            $newComic->description = $alboSolo["description"];
            $newComic->thumb = $alboSolo["thumb"];
            $newComic->price = $alboSolo["price"];
            // $newComic->artists = $alboSolo["artists"];
            // $newComic->writers = $alboSolo["writers"];
            $newComic->series = $alboSolo["series"];
            $newComic->sale_date = $alboSolo["sale_date"];

            $newComic->save();
        }
        dd($comicsArray);
    }
}
