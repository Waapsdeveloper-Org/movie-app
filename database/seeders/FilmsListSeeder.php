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

                "name"=> "The Great Adventure",
                "description"=> "An epic journey of discovery and courage.",
                "release_date"=> "2023-01-15",
                "ticket_price"=> 12.99,
                "country"=> "United States",
                "genre"=> "Adventure",
                "photo"=> "https=>//example.com/poster1.jpg"
            ],
            [

                "name"=> "Love in Bloom",
                "description"=> "A heartwarming romantic comedy.",
                "release_date"=> "2023-02-28",
                "ticket_price"=> 10.99,
                "country"=> "Canada",
                "genre"=> "Romance",
                "photo"=> "https=>//example.com/poster2.jpg"
            ],
            [

                "name"=> "Mystery Shadows",
                "description"=> "A gripping thriller with unexpected twists.",
                "release_date"=> "2023-03-20",
                "ticket_price"=> 14.99,
                "country"=> "United Kingdom",
                "genre"=> "Mystery",
                "photo"=> "https=>//example.com/poster3.jpg"
            ],
            [

                "name"=> "Ocean's Harmony",
                "description"=> "A documentary exploring marine life and conservation.",
                "release_date"=> "2023-04-05",
                "ticket_price"=> 9.99,
                "country"=> "Australia",
                "genre"=> "Documentary",
                "photo"=> "https=>//example.com/poster4.jpg"
            ],
            [

                "name"=> "Code Breaker",
                "description"=> "A thrilling espionage tale of secret codes and betrayal.",
                "release_date"=> "2023-05-12",
                "ticket_price"=> 13.99,
                "country"=> "United States",
                "genre"=> "Action",
                "photo"=> "https=>//example.com/poster5.jpg"
            ],
            [

                "name"=> "Dance of Destiny",
                "description"=> "A mesmerizing dance drama set against a backdrop of fate.",
                "release_date"=> "2023-06-30",
                "ticket_price"=> 11.99,
                "country"=> "France",
                "genre"=> "Drama",
                "photo"=> "https=>//example.com/poster6.jpg"
            ],
            [

                "name"=> "The Art of Deception",
                "description"=> "A heist film where art and crime collide.",
                "release_date"=> "2023-07-18",
                "ticket_price"=> 14.99,
                "country"=> "Italy",
                "genre"=> "Crime",
                "photo"=> "https=>//example.com/poster7.jpg"
            ],
            [

                "name"=> "City Lights",
                "description"=> "A heartwarming tale of urban life and friendships.",
                "release_date"=> "2023-08-25",
                "ticket_price"=> 10.99,
                "country"=> "United States",
                "genre"=> "Comedy",
                "photo"=> "https=>//example.com/poster8.jpg"
            ],
            [

                "name"=> "Beyond the Stars",
                "description"=> "A space exploration film that transcends boundaries.",
                "release_date"=> "2023-09-14",
                "ticket_price"=> 15.99,
                "country"=> "Russia",
                "genre"=> "Science Fiction",
                "photo"=> "https=>//example.com/poster9.jpg"
            ],
            [

                "name"=> "Whispers in the Wind",
                "description"=> "A poetic love story set in a small village.",
                "release_date"=> "2023-10-02",
                "ticket_price"=> 12.99,
                "country"=> "India",
                "genre"=> "Romance",
                "photo"=> "https=>//example.com/poster10.jpg"
            ],
            [

                "name"=> "Infinite Horizon",
                "description"=> "A mind-bending sci-fi odyssey.",
                "release_date"=> "2023-11-10",
                "ticket_price"=> 15.99,
                "country"=> "Australia",
                "genre"=> "Science Fiction",
                "photo"=> "https=>//example.com/poster11.jpg"
            ],
            [

                "name"=> "Comedy Club Chaos",
                "description"=> "Hilarious misadventures in a comedy club.",
                "release_date"=> "2023-12-05",
                "ticket_price"=> 11.99,
                "country"=> "Germany",
                "genre"=> "Comedy",
                "photo"=> "https=>//example.com/poster12.jpg"
            ],
            [

                "name"=> "Dreams of Tomorrow",
                "description"=> "An inspiring tale of overcoming obstacles and pursuing dreams.",
                "release_date"=> "2024-01-20",
                "ticket_price"=> 14.99,
                "country"=> "United States",
                "genre"=> "Drama",
                "photo"=> "https=>//example.com/poster13.jpg"
            ],
            [

                "name"=> "Rhythm of the Streets",
                "description"=> "A vibrant musical journey through the city's music scene.",
                "release_date"=> "2024-02-12",
                "ticket_price"=> 13.99,
                "country"=> "Brazil",
                "genre"=> "Musical",
                "photo"=> "https=>//example.com/poster14.jpg"
            ],
            [

                "name"=> "Hidden Treasures",
                "description"=> "A treasure hunt adventure with unexpected twists.",
                "release_date"=> "2024-03-08",
                "ticket_price"=> 12.99,
                "country"=> "Spain",
                "genre"=> "Adventure",
                "photo"=> "https=>//example.com/poster15.jpg"
            ],
            [

                "name"=> "Behind Closed Doors",
                "description"=> "A suspenseful thriller exploring secrets and lies.",
                "release_date"=> "2024-04-04",
                "ticket_price"=> 15.99,
                "country"=> "United States",
                "genre"=> "Thriller",
                "photo"=> "https=>//example.com/poster16.jpg"
            ],
            [

                "name"=> "Eternal Love",
                "description"=> "A timeless romance that spans generations.",
                "release_date"=> "2024-05-20",
                "ticket_price"=> 11.99,
                "country"=> "France",
                "genre"=> "Romance",
                "photo"=> "https=>//example.com/poster17.jpg"
            ],
            [

                "name"=> "Tech Revolution",
                "description"=> "A futuristic tale of technological advancements and challenges.",
                "release_date"=> "2024-06-15",
                "ticket_price"=> 14.99,
                "country"=> "Japan",
                "genre"=> "Sci-Fi",
                "photo"=> "https=>//example.com/poster18.jpg"
            ],
            [

                "name"=> "Culinary Delights",
                "description"=> "A mouthwatering journey through the world of culinary arts.",
                "release_date"=> "2024-07-10",
                "ticket_price"=> 12.99,
                "country"=> "Italy",
                "genre"=> "Food &amp;amp; Documentary",
                "photo"=> "https=>//example.com/poster19.jpg"
            ],
            [

                "name"=> "Lost in Translation",
                "description"=> "A comedic exploration of cultural misunderstandings.",
                "release_date"=> "2024-08-05",
                "ticket_price"=> 13.99,
                "country"=> "United States",
                "genre"=> "Comedy",
                "photo"=> "https=>//example.com/poster20.jpg"
            ],
            [

                "name"=> "Echoes of War",
                "description"=> "A poignant war drama reflecting on the impact of conflict.",
                "release_date"=> "2024-09-01",
                "ticket_price"=> 15.99,
                "country"=> "Germany",
                "genre"=> "Drama",
                "photo"=> "https=>//example.com/poster21.jpg"
            ],
            [

                "name"=> "Parallel Realities",
                "description"=> "A mind-bending exploration of parallel universes.",
                "release_date"=> "2024-10-18",
                "ticket_price"=> 14.99,
                "country"=> "United States",
                "genre"=> "Sci-Fi",
                "photo"=> "https=>//example.com/poster22.jpg"
            ],
            [

                "name"=> "Gastronomic Symphony",
                "description"=> "A culinary masterpiece blending flavors and music.",
                "release_date"=> "2024-11-12",
                "ticket_price"=> 12.99,
                "country"=> "France",
                "genre"=> "Food &amp;amp; Musical",
                "photo"=> "https=>//example.com/poster23.jpg"
            ],
            [

                "name"=> "The Enchanted Forest",
                "description"=> "A magical adventure through an enchanted realm.",
                "release_date"=> "2024-12-06",
                "ticket_price"=> 11.99,
                "country"=> "Canada",
                "genre"=> "Fantasy",
                "photo"=> "https=>//example.com/poster24.jpg"
            ],
            [

                "name"=> "Voices of Silence",
                "description"=> "A powerful drama highlighting the strength of silent resilience.",
                "release_date"=> "2025-01-22",
                "ticket_price"=> 13.99,
                "country"=> "United States",
                "genre"=> "Drama",
                "photo"=> "https=>//example.com/poster25.jpg"
            ],
            [

                "name"=> "Jazzed Up",
                "description"=> "A lively musical journey through the world of jazz.",
                "release_date"=> "2025-02-15",
                "ticket_price"=> 14.99,
                "country"=> "Brazil",
                "genre"=> "Musical",
                "photo"=> "https=>//example.com/poster26.jpg"
            ],
            [

                "name"=> "Rogue Agents",
                "description"=> "A high-stakes action thriller featuring rogue spies.",
                "release_date"=> "2025-03-10",
                "ticket_price"=> 15.99,
                "country"=> "Russia",
                "genre"=> "Action",
                "photo"=> "https=>//example.com/poster27.jpg"
            ],
            [

                "name"=> "Whirlwind Romance",
                "description"=> "A whirlwind love story with unexpected twists.",
                "release_date"=> "2025-04-04",
                "ticket_price"=> 12.99,
                "country"=> "Italy",
                "genre"=> "Romance",
                "photo"=> "https=>//example.com/poster28.jpg"
            ],
            [

                "name"=> "Virtual Reality",
                "description"=> "An immersive exploration of the virtual world and its consequences.",
                "release_date"=> "2025-05-20",
                "ticket_price"=> 11.99,
                "country"=> "United States",
                "genre"=> "Sci-Fi",
                "photo"=> "https=>//example.com/poster29.jpg"
            ],
            [

                "name"=> "Comedic Chronicles",
                "description"=> "A collection of comedic stories that will leave you in stitches.",
                "release_date"=> "2025-06-15",
                "ticket_price"=> 14.99,
                "country"=> "Canada",
                "genre"=> "Comedy",
                "photo"=> "https=>//example.com/poster30.jpg"
            ],
            [

                "name"=> "Serenade of the Seas",
                "description"=> "A musical voyage on a cruise ship, blending love and melodies.",
                "release_date"=> "2025-07-10",
                "ticket_price"=> 13.99,
                "country"=> "Spain",
                "genre"=> "Musical",
                "photo"=> "https=>//example.com/poster31.jpg"
            ],
            [

                "name"=> "Silent Witness",
                "description"=> "A gripping courtroom drama with a silent witness at its core.",
                "release_date"=> "2025-08-05",
                "ticket_price"=> 15.99,
                "country"=> "United Kingdom",
                "genre"=> "Drama",
                "photo"=> "https=>//example.com/poster32.jpg"
            ],
            [

                "name"=> "Cinematic Symphony",
                "description"=> "A symphony of visuals and music in a cinematic masterpiece.",
                "release_date"=> "2025-09-01",
                "ticket_price"=> 12.99,
                "country"=> "France",
                "genre"=> "Musical",
                "photo"=> "https=>//example.com/poster33.jpg"
            ],
            [

                "name"=> "Beyond the Horizon",
                "description"=> "An exploration of the unknown beyond the horizon.",
                "release_date"=> "2025-10-18",
                "ticket_price"=> 11.99,
                "country"=> "Australia",
                "genre"=> "Adventure",
                "photo"=> "https=>//example.com/poster34.jpg"
            ],
            [

                "name"=> "Enigma",
                "description"=> "A psychological thriller unraveling the mysteries of the human mind.",
                "release_date"=> "2025-11-12",
                "ticket_price"=> 14.99,
                "country"=> "United States",
                "genre"=> "Thriller",
                "photo"=> "https=>//example.com/poster35.jpg"
            ],
            [

                "name"=> "Harmony's Quest",
                "description"=> "An animated adventure exploring the balance of nature and magic.",
                "release_date"=> "2025-12-06",
                "ticket_price"=> 11.99,
                "country"=> "Canada",
                "genre"=> "Animation",
                "photo"=> "https=>//example.com/poster36.jpg"
            ],
            [

                "name"=> "Timeless Echo",
                "description"=> "A time-traveling love story that transcends the boundaries of time.",
                "release_date"=> "2026-01-22",
                "ticket_price"=> 13.99,
                "country"=> "United Kingdom",
                "genre"=> "Romance",
                "photo"=> "https=>//example.com/poster37.jpg"
            ],
            [

                "name"=> "Echoes of Eternity",
                "description"=> "A metaphysical journey through the echoes of time and space.",
                "release_date"=> "2026-02-15",
                "ticket_price"=> 14.99,
                "country"=> "Japan",
                "genre"=> "Fantasy",
                "photo"=> "https=>//example.com/poster38.jpg"
            ],
            [

                "name"=> "Tech Noir",
                "description"=> "A cyberpunk thriller exploring the dark side of technological advancements.",
                "release_date"=> "2026-03-10",
                "ticket_price"=> 15.99,
                "country"=> "United States",
                "genre"=> "Sci-Fi",
                "photo"=> "https=>//example.com/poster39.jpg"
            ],
            [

                "name"=> "Laughter in the Rain",
                "description"=> "A heartwarming comedy set against the backdrop of a rainy romance.",
                "release_date"=> "2026-04-04",
                "ticket_price"=> 12.99,
                "country"=> "France",
                "genre"=> "Comedy",
                "photo"=> "https=>//example.com/poster40.jpg"
            ],
            [

                "name"=> "The Quantum Paradox",
                "description"=> "A mind-bending exploration of quantum physics and parallel realities.",
                "release_date"=> "2026-05-20",
                "ticket_price"=> 11.99,
                "country"=> "Germany",
                "genre"=> "Sci-Fi",
                "photo"=> "https=>//example.com/poster41.jpg"
            ],
            [

                "name"=> "Soulful Serenity",
                "description"=> "A soul-stirring drama portraying the search for inner peace.",
                "release_date"=> "2026-06-15",
                "ticket_price"=> 14.99,
                "country"=> "Italy",
                "genre"=> "Drama",
                "photo"=> "https=>//example.com/poster42.jpg"
            ],
            [

                "name"=> "Midnight Mirage",
                "description"=> "A neo-noir mystery unfolding in the enigmatic streets of a city at midnight.",
                "release_date"=> "2026-07-10",
                "ticket_price"=> 13.99,
                "country"=> "United States",
                "genre"=> "Mystery",
                "photo"=> "https=>//example.com/poster43.jpg"
            ],
            [

                "name"=> "Celestial Rhythms",
                "description"=> "An intergalactic musical journey with cosmic rhythms and melodies.",
                "release_date"=> "2026-08-05",
                "ticket_price"=> 15.99,
                "country"=> "Canada",
                "genre"=> "Musical",
                "photo"=> "https=>//example.com/poster44.jpg"
            ],
            [

                "name"=> "Whispering Winds",
                "description"=> "A poetic exploration of nature's whispers and untold stories.",
                "release_date"=> "2026-09-01",
                "ticket_price"=> 12.99,
                "country"=> "Spain",
                "genre"=> "Poetry",
                "photo"=> "https=>//example.com/poster45.jpg"
            ],
            [

                "name"=> "Neon Dreams",
                "description"=> "A visually stunning journey through the neon-lit landscapes of a cyberpunk city.",
                "release_date"=> "2026-10-18",
                "ticket_price"=> 11.99,
                "country"=> "Japan",
                "genre"=> "Sci-Fi",
                "photo"=> "https=>//example.com/poster46.jpg"
            ],
            [

                "name"=> "Mystic Waters",
                "description"=> "A mystical adventure uncovering the secrets hidden beneath ancient waters.",
                "release_date"=> "2026-11-12",
                "ticket_price"=> 14.99,
                "country"=> "Australia",
                "genre"=> "Fantasy",
                "photo"=> "https=>//example.com/poster47.jpg"
            ],
            [

                "name"=> "Cinematic Dreamscape",
                "description"=> "An immersive experience blending reality and dreams in a surreal dreamscape.",
                "release_date"=> "2026-12-06",
                "ticket_price"=> 11.99,
                "country"=> "United States",
                "genre"=> "Fantasy",
                "photo"=> "https=>//example.com/poster48.jpg"
            ],
            [

                "name"=> "Echoes of Silence",
                "description"=> "A silent film that speaks volumes, exploring the power of non-verbal communication.",
                "release_date"=> "2027-01-22",
                "ticket_price"=> 13.99,
                "country"=> "France",
                "genre"=> "Drama",
                "photo"=> "https=>//example.com/poster49.jpg"
            ],
            [

                "name"=> "Cosmic Chronicles",
                "description"=> "An epic space saga chronicling the rise and fall of civilizations across the cosmos.",
                "release_date"=> "2027-02-15",
                "ticket_price"=> 14.99,
                "country"=> "United Kingdom",
                "genre"=> "Sci-Fi",
                "photo"=> "https=>//example.com/poster50.jpg"
            ],
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


        foreach ($list as $ilm) {
            \App\Models\Film::create(film);
        }

    }
}
