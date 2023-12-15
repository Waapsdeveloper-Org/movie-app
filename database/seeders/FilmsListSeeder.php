<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FilmsListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $list = [
            [
              "name" => "The Dark Knight",
              "description" => "A gripping tale of Gotham's vigilante, Batman.",
              "release_date" => "2008-07-18",
              "ticket_price" => 12,
              "country" => "USA",
              "genre" => "Action",
              "photo" => "dark_knight.jpg"
            ],
            [
              "name" => "Inception",
              "description" => "A mind-bending heist within dreams.",
              "release_date" => "2010-07-16",
              "ticket_price" => 14,
              "country" => "USA",
              "genre" => "Sci-Fi",
              "photo" => "inception.jpg"
            ],
            [
              "name" => "La La Land",
              "description" => "A romantic musical set in Los Angeles.",
              "release_date" => "2016-12-09",
              "ticket_price" => 10,
              "country" => "USA",
              "genre" => "Musical",
              "photo" => "la_la_land.jpg"
            ],
            [
              "name" => "Parasite",
              "description" => "A darkly comedic thriller about class struggle.",
              "release_date" => "2019-11-08",
              "ticket_price" => 11,
              "country" => "South Korea",
              "genre" => "Thriller",
              "photo" => "parasite.jpg"
            ],
            [
              "name" => "The Shawshank Redemption",
              "description" => "The tale of hope and friendship in Shawshank Prison.",
              "release_date" => "1994-09-23",
              "ticket_price" => 11,
              "country" => "USA",
              "genre" => "Drama",
              "photo" => "shawshank_redemption.jpg"
            ],
            [
              "name" => "Avatar",
              "description" => "A visually stunning journey to the alien world of Pandora.",
              "release_date" => "2009-12-18",
              "ticket_price" => 13,
              "country" => "USA",
              "genre" => "Fantasy",
              "photo" => "avatar.jpg"
            ],
            [
              "name" => "Pulp Fiction",
              "description" => "Quentin Tarantino's iconic non-linear crime film.",
              "release_date" => "1994-10-14",
              "ticket_price" => 12,
              "country" => "USA",
              "genre" => "Crime",
              "photo" => "pulp_fiction.jpg"
            ],
            [
              "name" => "The Matrix",
              "description" => "A sci-fi action film exploring the concept of reality.",
              "release_date" => "1999-03-31",
              "ticket_price" => 11,
              "country" => "USA",
              "genre" => "Sci-Fi",
              "photo" => "the_matrix.jpg"
            ],
            [
              "name" => "Forrest Gump",
              "description" => "The life journey of a simple man with extraordinary experiences.",
              "release_date" => "1994-07-06",
              "ticket_price" => 10,
              "country" => "USA",
              "genre" => "Drama",
              "photo" => "forrest_gump.jpg"
            ],
            [
              "name" => "Interstellar",
              "description" => "A space odyssey to save humanity.",
              "release_date" => "2014-11-07",
              "ticket_price" => 13,
              "country" => "USA",
              "genre" => "Sci-Fi",
              "photo" => "interstellar.jpg"
            ],
            [
              "name" => "Titanic",
              "description" => "A timeless love story set against the backdrop of a sinking ship.",
              "release_date" => "1997-12-19",
              "ticket_price" => 12,
              "country" => "USA",
              "genre" => "Romance",
              "photo" => "titanic.jpg"
            ],
            [
              "name" => "The Godfather",
              "description" => "A crime epic about the Corleone family.",
              "release_date" => "1972-03-24",
              "ticket_price" => 11,
              "country" => "USA",
              "genre" => "Crime",
              "photo" => "the_godfather.jpg"
            ],
            [
              "name" => "Gladiator",
              "description" => "A Roman general seeks justice and revenge.",
              "release_date" => "2000-05-05",
              "ticket_price" => 12,
              "country" => "USA",
              "genre" => "Action",
              "photo" => "gladiator.jpg"
            ],
            [
              "name" => "The Grand Budapest Hotel",
              "description" => "Wes Anderson's whimsical tale set in a European hotel.",
              "release_date" => "2014-03-07",
              "ticket_price" => 10,
              "country" => "USA",
              "genre" => "Comedy",
              "photo" => "grand_budapest_hotel.jpg"
            ],
            [
              "name" => "The Silence of the Lambs",
              "description" => "A psychological thriller about a brilliant but insane serial killer.",
              "release_date" => "1991-02-14",
              "ticket_price" => 11,
              "country" => "USA",
              "genre" => "Thriller",
              "photo" => "silence_of_the_lambs.jpg"
            ],
            [
              "name" => "The Social Network",
              "description" => "The creation and rise of Facebook and its founder, Mark Zuckerberg.",
              "release_date" => "2010-09-24",
              "ticket_price" => 10,
              "country" => "USA",
              "genre" => "Drama",
              "photo" => "social_network.jpg"
            ],
            [
              "name" => "Dunkirk",
              "description" => "Christopher Nolan's gripping World War II drama.",
              "release_date" => "2017-07-21",
              "ticket_price" => 13,
              "country" => "USA",
              "genre" => "War",
              "photo" => "dunkirk.jpg"
            ],
            [
              "name" => "The Revenant",
              "description" => "A tale of survival and revenge in the American wilderness.",
              "release_date" => "2015-12-25",
              "ticket_price" => 12,
              "country" => "USA",
              "genre" => "Adventure",
              "photo" => "the_revenant.jpg"
            ],
            [
              "name" => "Schindler's List",
              "description" => "Steven Spielberg's powerful portrayal of the Holocaust.",
              "release_date" => "1993-12-15",
              "ticket_price" => 11,
              "country" => "USA",
              "genre" => "Drama",
              "photo" => "schindlers_list.jpg"
            ],
            [
              "name" => "The Incredibles",
              "description" => "An animated adventure of a family of superheroes.",
              "release_date" => "2004-11-05",
              "ticket_price" => 10,
              "country" => "USA",
              "genre" => "Animation",
              "photo" => "the_incredibles.jpg"
            ]
        ];


        foreach ($list as $film) {
            \App\Models\Film::create($film);
        }

    }
}
