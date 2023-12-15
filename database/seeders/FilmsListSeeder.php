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

                "name"=> "May December",
                "description"=> "An epic journey of discovery and courage.",
                "release_date"=> "2023-01-15",
                "ticket_price"=> 12.99,
                "country"=> "United States",
                "genre"=> "Adventure",
                "photo"=> "https://www.metrotheatres.com/media/4845/may-december-netflix-770x433.jpg?preset=heropanel"
            ],
            [

                "name"=> "the super mario bros. movie",
                "description"=> "A heartwarming romantic comedy.",
                "release_date"=> "2023-02-28",
                "ticket_price"=> 10.99,
                "country"=> "Canada",
                "genre"=> "Romance",
                "photo"=> "https://www.nbc.com/sites/nbcblog/files/styles/scale_1280/public/2023/03/the-super-mario-bros-movie-poster-1.jpg"
            ],
            [

                "name"=> "Family Switch (2023)",
                "description"=> "A gripping thriller with unexpected twists.",
                "release_date"=> "2023-03-20",
                "ticket_price"=> 14.99,
                "country"=> "United Kingdom",
                "genre"=> "Mystery",
                "photo"=> "https://hexdownload.co/wp-content/webp-express/webp-images/uploads/2023/12/Family-Switch-2023-Poster.jpg.webp"
            ],
            [

                "name"=> "Primal (2019)",
                "description"=> "A documentary exploring marine life and conservation.",
                "release_date"=> "2023-04-05",
                "ticket_price"=> 9.99,
                "country"=> "Australia",
                "genre"=> "Documentary",
                "photo"=> "https://pic-bstarstatic.akamaized.net/ugc/c31e9981f309c752f3af35f5a09bea29.jpg"
            ],
            [

                "name"=> "Lone Survivor (2013)",
                "description"=> "A thrilling espionage tale of secret codes and betrayal.",
                "release_date"=> "2023-05-12",
                "ticket_price"=> 13.99,
                "country"=> "United States",
                "genre"=> "Action",
                "photo"=> "https://i0.wp.com/www.heyuguys.com/images/2014/01/Lone-Survivor-UK-Quad-Poster.jpg?fit=1024%2C768&ssl=1"
            ],
            [

                "name"=> "The Impossible (2012)",
                "description"=> "A mesmerizing dance drama set against a backdrop of fate.",
                "release_date"=> "2023-06-30",
                "ticket_price"=> 11.99,
                "country"=> "France",
                "genre"=> "Drama",
                "photo"=> "https://m.media-amazon.com/images/S/pv-target-images/4a6145bb585c9122019ecf7cd7d84de9ab364cf0beb28fdda3c69a284299146f.jpg"
            ],
            [

                "name"=> "Minions (2015)",
                "description"=> "A heist film where art and crime collide.",
                "release_date"=> "2023-07-18",
                "ticket_price"=> 14.99,
                "country"=> "Italy",
                "genre"=> "Crime",
                "photo"=> "https://i0.wp.com/blog.jerseyshoreinmotion.com/wp-content/uploads/2017/08/minions-2015-movie-wallpaper-poster-bob-kevin-stuart-poster-wallpaper-scarlet-overkill-sandra-bullock-despicable-me.jpg?ssl=1"
            ],
            [

                "name"=> "Insidious: The Red Door (2023)",
                "description"=> "A heartwarming tale of urban life and friendships.",
                "release_date"=> "2023-08-25",
                "ticket_price"=> 10.99,
                "country"=> "United States",
                "genre"=> "Comedy",
                "photo"=> "https://marruda3.files.wordpress.com/2023/07/insidious-the-red-door-1.jpg"
            ],
            [

                "name"=> "Spider-Man: Across the Spider-Verse (2023)",
                "description"=> "A space exploration film that transcends boundaries.",
                "release_date"=> "2023-09-14",
                "ticket_price"=> 15.99,
                "country"=> "Russia",
                "genre"=> "Science Fiction",
                "photo"=> "https://inreview52838412.files.wordpress.com/2023/06/spider-man-across-the-spider-verse-poster.jpg?w=1280"
            ],
            [

                "name"=> "Godzilla vs. Kong (2021)",
                "description"=> "A poetic love story set in a small village.",
                "release_date"=> "2023-10-02",
                "ticket_price"=> 12.99,
                "country"=> "India",
                "genre"=> "Romance",
                "photo"=> "https://super142.files.wordpress.com/2023/08/godzilla-vs-kong.jpg?w=1280"
            ],
            [

                "name"=> "Pain Hustlers (2023)",
                "description"=> "A mind-bending sci-fi odyssey.",
                "release_date"=> "2023-11-10",
                "ticket_price"=> 15.99,
                "country"=> "Australia",
                "genre"=> "Science Fiction",
                "photo"=> "https://static1.colliderimages.com/wordpress/wp-content/uploads/2023/01/pain-hustlers-chris-evans-emily-blunt-andy-garcia.jpg"
            ],
            [

                "name"=> "No Hard Feelings (2023)",
                "description"=> "Hilarious misadventures in a comedy club.",
                "release_date"=> "2023-12-05",
                "ticket_price"=> 11.99,
                "country"=> "Germany",
                "genre"=> "Comedy",
                "photo"=> "https://media.cinemacloud.co.uk/imageFilm/1542_1_1.jpg"
            ],
            [

                "name"=> "Silver Linings Playbook (2012)",
                "description"=> "An inspiring tale of overcoming obstacles and pursuing dreams.",
                "release_date"=> "2024-01-20",
                "ticket_price"=> 14.99,
                "country"=> "United States",
                "genre"=> "Drama",
                "photo"=> "https://themarckoguy.files.wordpress.com/2014/04/silver_linings_playbook-wallpaper-1366x768.jpg"
            ],
            [

                "name"=> "Get Out (2017)",
                "description"=> "A vibrant musical journey through the city's music scene.",
                "release_date"=> "2024-02-12",
                "ticket_price"=> 13.99,
                "country"=> "Brazil",
                "genre"=> "Musical",
                "photo"=> "https://themarckoguy.files.wordpress.com/2017/10/img_2163.jpg"
            ],
            [

                "name"=> "Fair Play (2023) ",
                "description"=> "A treasure hunt adventure with unexpected twists.",
                "release_date"=> "2024-03-08",
                "ticket_price"=> 12.99,
                "country"=> "Spain",
                "genre"=> "Adventure",
                "photo"=> "https://dnm.nflximg.net/api/v6/BvVbc2Wxr2w6QuoANoSpJKEIWjQ/AAAAQSI29jr4DU5t4D5eCehukOTC2O48l3-MrNo-U9aHJqYfiseX-g7pXIzHwxEl8bN1uXRJBU5EH7vWnxBfuI5K8q7GkqyZTB7D7dS9IR1htdssnJuEAnOSOIF4MkiLaOvMhUiCZOim_DvckLylzgDngh3UsMk.jpg?r=3cd"
            ],
            [

                "name"=> "Nowhere (2023)  ",
                "description"=> "A suspenseful thriller exploring secrets and lies.",
                "release_date"=> "2024-04-04",
                "ticket_price"=> 15.99,
                "country"=> "United States",
                "genre"=> "Thriller",
                "photo"=> "https://i.ytimg.com/vi/L82vyhA5I7I/maxresdefault.jpg"
            ],
            [

                "name"=> "Dune (2021) ",
                "description"=> "A timeless romance that spans generations.",
                "release_date"=> "2024-05-20",
                "ticket_price"=> 11.99,
                "country"=> "France",
                "genre"=> "Romance",
                "photo"=> "https://itsmoreofacomment.com/wp-content/uploads/2021/09/Dune-Movie-Official-Poster-banner-feature.jpg"
            ],
            [

                "name"=> "Reptile (2023) ",
                "description"=> "A futuristic tale of technological advancements and challenges.",
                "release_date"=> "2024-06-15",
                "ticket_price"=> 14.99,
                "country"=> "Japan",
                "genre"=> "Sci-Fi",
                "photo"=> "https://cdn.whats-on-netflix.com/wp-content/uploads/2023/08/21103049/reptile-netflix-movie-everything-we-know.jpg"
            ],
            [

                "name"=> "The Wolf of Wall Street (2013)",
                "description"=> "A mouthwatering journey through the world of culinary arts.",
                "release_date"=> "2024-07-10",
                "ticket_price"=> 12.99,
                "country"=> "Italy",
                "genre"=> "Food &amp;amp; Documentary",
                "photo"=> "https://venkatarangan.com/blog/wp-content/uploads/2014/01/the-wolf-of-wall-street.jpg"
            ],
            [

                "name"=> "Dredd (2012)",
                "description"=> "A comedic exploration of cultural misunderstandings.",
                "release_date"=> "2024-08-05",
                "ticket_price"=> 13.99,
                "country"=> "United States",
                "genre"=> "Comedy",
                "photo"=> "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThiPzd7SXnE3uM9SvvvA90O4KSbPSFVBb0GQ&usqp=CAU"
            ],
            [

                "name"=> "Don't Worry Darling (2022)",
                "description"=> "A poignant war drama reflecting on the impact of conflict.",
                "release_date"=> "2024-09-01",
                "ticket_price"=> 15.99,
                "country"=> "Germany",
                "genre"=> "Drama",
                "photo"=> "https://static1.colliderimages.com/wordpress/wp-content/uploads/2022/01/dont-worry-darling.jpg"
            ],
            [

                "name"=> "Big George Foreman (2023)",
                "description"=> "A mind-bending exploration of parallel universes.",
                "release_date"=> "2024-10-18",
                "ticket_price"=> 14.99,
                "country"=> "United States",
                "genre"=> "Sci-Fi",
                "photo"=> "https://i.ytimg.com/vi/6wfB0vhVSsM/maxresdefault.jpg"
            ],
            [

                "name"=> "You Are So Not Invited to My Bat Mitzvah (2023)",
                "description"=> "A culinary masterpiece blending flavors and music.",
                "release_date"=> "2024-11-12",
                "ticket_price"=> 12.99,
                "country"=> "France",
                "genre"=> "Food &amp;amp; Musical",
                "photo"=> "https://www.redbrick.me/wp-content/uploads/2023/10/bat-mitzvah.jpg"
            ],
            [

                "name"=> "Heart of Stone (2023)",
                "description"=> "A magical adventure through an enchanted realm.",
                "release_date"=> "2024-12-06",
                "ticket_price"=> 11.99,
                "country"=> "Canada",
                "genre"=> "Fantasy",
                "photo"=> "https://coolmusicltd.com/wp-content/uploads/2023/08/Heart-of-Stone.jpg"
            ],
            [

                "name"=> "Fatale (2020)",
                "description"=> "A powerful drama highlighting the strength of silent resilience.",
                "release_date"=> "2025-01-22",
                "ticket_price"=> 13.99,
                "country"=> "United States",
                "genre"=> "Drama",
                "photo"=> "https://resizing.flixster.com/-XZAfHZM39UwaGJIFWKAE8fS0ak=/v3/t/assets/p18941504_v_h10_al.jpg"
            ],
            [

                "name"=> "Happiness for Beginners (2023)",
                "description"=> "A lively musical journey through the world of jazz.",
                "release_date"=> "2025-02-15",
                "ticket_price"=> 14.99,
                "country"=> "Brazil",
                "genre"=> "Musical",
                "photo"=> "data:image/jpeg;base64,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"
            ],
            [

                "name"=> "They Cloned Tyrone (2023)",
                "description"=> "A high-stakes action thriller featuring rogue spies.",
                "release_date"=> "2025-03-10",
                "ticket_price"=> 15.99,
                "country"=> "Russia",
                "genre"=> "Action",
                "photo"=> "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQl80eUXvEmGDT6i6Ovhcay_oxM53dLA0fM0g&usqp=CAU"
            ],
            [

                "name"=> "Puss in Boots: The Last Wish (2022)",
                "description"=> "A whirlwind love story with unexpected twists.",
                "release_date"=> "2025-04-04",
                "ticket_price"=> 12.99,
                "country"=> "Italy",
                "genre"=> "Romance",
                "photo"=> "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhCUv1sb5d4gHeLeY6IGOXXH31gxthMtiTow-5fLZNuUF25w6owldCUpz8HKtYAlVKGL4c3J7TV-RW8wqsIWg0NIE8JgHEU4er-NmoKTUHeZ1UJru0zh3Or6eLtH0HZ43Yk-L_Poyd-W7Rpg_6g3R7vWS9lytEadba3QbqYARM6fHb6FP18eANCvp8RwQ/s1920/Puss%20in%20Boots%20banner.jpeg"
            ],
            [

                "name"=> "The Mule (2018)",
                "description"=> "An immersive exploration of the virtual world and its consequences.",
                "release_date"=> "2025-05-20",
                "ticket_price"=> 11.99,
                "country"=> "United States",
                "genre"=> "Sci-Fi",
                "photo"=> "https://studiojakemedia.files.wordpress.com/2019/06/the-mule-clint-eastwood-movie.jpg"
            ],
            [

                "name"=> "Extraction 2 (2023)",
                "description"=> "A collection of comedic stories that will leave you in stitches.",
                "release_date"=> "2025-06-15",
                "ticket_price"=> 14.99,
                "country"=> "Canada",
                "genre"=> "Comedy",
                "photo"=> "data:image/jpeg;base64,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"
            ],
            [

                "name"=> "The Son (2022)",
                "description"=> "A musical voyage on a cruise ship, blending love and melodies.",
                "release_date"=> "2025-07-10",
                "ticket_price"=> 13.99,
                "country"=> "Spain",
                "genre"=> "Musical",
                "photo"=> "https://resizing.flixster.com/-XZAfHZM39UwaGJIFWKAE8fS0ak=/v3/t/assets/p22803507_v_h9_ad.jpg"
            ],
            [

                "name"=> "The Mother (2023)",
                "description"=> "A gripping courtroom drama with a silent witness at its core.",
                "release_date"=> "2025-08-05",
                "ticket_price"=> 15.99,
                "country"=> "United Kingdom",
                "genre"=> "Drama",
                "photo"=> "https://static1.colliderimages.com/wordpress/wp-content/uploads/2023/05/the-mother-04.jpg"
            ],
            [

                "name"=> "Whitney Houston: I Wanna Dance with Somebody (2022)",
                "description"=> "A symphony of visuals and music in a cinematic masterpiece.",
                "release_date"=> "2025-09-01",
                "ticket_price"=> 12.99,
                "country"=> "France",
                "genre"=> "Musical",
                "photo"=> "data:image/jpeg;base64,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"
            ],
            [

                "name"=> "Chupa (2023)",
                "description"=> "An exploration of the unknown beyond the horizon.",
                "release_date"=> "2025-10-18",
                "ticket_price"=> 11.99,
                "country"=> "Australia",
                "genre"=> "Adventure",
                "photo"=> "https://s3.amazonaws.com/static.rogerebert.com/uploads/review/primary_image/reviews/chupa-movie-review-2023/chupa-movie-review-2023.jpeg"
            ],
            [

                "name"=> "The Magician's Elephant (2023)",
                "description"=> "A psychological thriller unraveling the mysteries of the human mind.",
                "release_date"=> "2025-11-12",
                "ticket_price"=> 14.99,
                "country"=> "United States",
                "genre"=> "Thriller",
                "photo"=> "https://occ-0-2794-2219.1.nflxso.net/dnm/api/v6/E8vDc_W8CLv7-yMQu8KMEC7Rrr8/AAAABRvkaGqB5-K2Qn494BkpIK4dqHoxJa0ygKZfz3vSffRTSgzjFH5tF5JNaGvnizz-XOikkTWPa5sIxzU9_6J5yEyUvaryvtsj1Pfl.jpg?r=bbf"
            ],
            [

                "name"=> "Munich: The Edge of War (2022)",
                "description"=> "An animated adventure exploring the balance of nature and magic.",
                "release_date"=> "2025-12-06",
                "ticket_price"=> 11.99,
                "country"=> "Canada",
                "genre"=> "Animation",
                "photo"=> "data:image/jpeg;base64,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"
            ],
            [

                "name"=> "Your Place or Mine (2023)",
                "description"=> "A time-traveling love story that transcends the boundaries of time.",
                "release_date"=> "2026-01-22",
                "ticket_price"=> 13.99,
                "country"=> "United Kingdom",
                "genre"=> "Romance",
                "photo"=> "data:image/jpeg;base64,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"
            ],
            [

                "name"=> "The Sea Beast (2022)",
                "description"=> "A metaphysical journey through the echoes of time and space.",
                "release_date"=> "2026-02-15",
                "ticket_price"=> 14.99,
                "country"=> "Japan",
                "genre"=> "Fantasy",
                "photo"=> "https://occ-0-2794-2219.1.nflxso.net/dnm/api/v6/E8vDc_W8CLv7-yMQu8KMEC7Rrr8/AAAABcdFQ-WTOibBPL8W2Q3J9FQsBJaA9J2mD1HY7JCc2uj2xlYUP1Dp7I1vAHI4ROTvi50GaTqBK8Dx2IIuGARwC2iT6k1pKC54Oa9v.jpg?r=3f5"
            ],
            [

                "name"=> "Enola Holmes (2020)",
                "description"=> "A cyberpunk thriller exploring the dark side of technological advancements.",
                "release_date"=> "2026-03-10",
                "ticket_price"=> 15.99,
                "country"=> "United States",
                "genre"=> "Sci-Fi",
                "photo"=> "data:image/jpeg;base64,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"
            ],
            [

                "name"=> "Roald Dahl's Matilda the Musical (2022)",
                "description"=> "A heartwarming comedy set against the backdrop of a rainy romance.",
                "release_date"=> "2026-04-04",
                "ticket_price"=> 12.99,
                "country"=> "France",
                "genre"=> "Comedy",
                "photo"=> "data:image/jpeg;base64,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"
            ],
            [

                "name"=> "The Ballad of Buster Scruggs (2018)",
                "description"=> "A mind-bending exploration of quantum physics and parallel realities.",
                "release_date"=> "2026-05-20",
                "ticket_price"=> 11.99,
                "country"=> "Germany",
                "genre"=> "Sci-Fi",
                "photo"=> "https://m.media-amazon.com/images/M/MV5BMjQwNDI4MTA3NF5BMl5BanBnXkFtZTgwMTQ1OTEzNjM@._V1_.jpg"
            ],
            [

                "name"=> "Glass Onion: A Knives Out Mystery (2022)",
                "description"=> "A soul-stirring drama portraying the search for inner peace.",
                "release_date"=> "2026-06-15",
                "ticket_price"=> 14.99,
                "country"=> "Italy",
                "genre"=> "Drama",
                "photo"=> "data:image/jpeg;base64,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"
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
