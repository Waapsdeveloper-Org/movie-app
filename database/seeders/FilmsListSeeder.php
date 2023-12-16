<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Film;

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
                "photo"=> "https://i0.wp.com/dmtalkies.com/wp-content/uploads/2023/07/Happiness-For-Beginners-Review-Ellie-Kemper-as-Helen-and-Luke-Grimes-as-Jake.jpg"
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
                "photo"=> "https://occ-0-2794-2219.1.nflxso.net/dnm/api/v6/E8vDc_W8CLv7-yMQu8KMEC7Rrr8/AAAABZ6ND88pZdT9v-gbiVfmMr8vowAHFfr8ujruNpYcF3Wv3LRAZtC9MRPHiYrREQWia2AAG29hUmfPvn73DDFyhcmjDCR0N47ivOvB.jpg?r=965"
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
                "photo"=> "https://images.squarespace-cdn.com/content/v1/5bbcad0f2727be3646b9fee1/aab5fb2f-addb-4d6c-88f2-ce399670ea68/1829D564-0474-4EDD-A03C-915ED1637FFF.jpeg"
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
                "photo"=> "https://images.bauerhosting.com/empire/2023/02/your-place-2.jpg?ar=16%3A9&fit=crop&crop=top&auto=format&w=1440&q=80"
            ],
            [

                "name"=> "Your Place or Mine (2023)",
                "description"=> "A time-traveling love story that transcends the boundaries of time.",
                "release_date"=> "2026-01-22",
                "ticket_price"=> 13.99,
                "country"=> "United Kingdom",
                "genre"=> "Romance",
                "photo"=> "https://d.newsweek.com/en/full/2177982/your-place-mine-cast.webp?w=1600&h=900&q=88&f=96e2a1a8e769332cca09d86437e0b3c0"
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
                "photo"=> "https://static01.nyt.com/images/2020/09/23/arts/enola1/enola1-superJumbo.jpg"
            ],
            [

                "name"=> "Roald Dahl's Matilda the Musical (2022)",
                "description"=> "A heartwarming comedy set against the backdrop of a rainy romance.",
                "release_date"=> "2026-04-04",
                "ticket_price"=> 12.99,
                "country"=> "France",
                "genre"=> "Comedy",
                "photo"=> "https://www.thecoretheatresolihull.co.uk/media/5862/matilda_musical_web.jpg?anchor=center&mode=crop&width=825&height=440&rnd=133207747030000000"
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
                "photo"=> "https://s3.amazonaws.com/static.rogerebert.com/uploads/review/primary_image/reviews/glass-onion-a-knives-out-mystery-2022/glass-onion-knives-out-mystery-movie-review-2022.jpeg"
            ],
            [

                "name"=> "Midnight Mirage",
                "description"=> "A neo-noir mystery unfolding in the enigmatic streets of a city at midnight.",
                "release_date"=> "2026-07-10",
                "ticket_price"=> 13.99,
                "country"=> "United States",
                "genre"=> "Mystery",
                "photo"=> "https://thumbs.dreamstime.com/z/step-world-enchantment-midnight-mirage-mesmerizing-display-dance-illusion-digital-illustration-291801469.jpg"
            ],
            [

                "name"=> "Celestial Rhythms",
                "description"=> "An intergalactic musical journey with cosmic rhythms and melodies.",
                "release_date"=> "2026-08-05",
                "ticket_price"=> 15.99,
                "country"=> "Canada",
                "genre"=> "Musical",
                "photo"=> "https://img.freepik.com/premium-photo/celestial-rhythms-harmony-copy-space_147933-11982.jpg"
            ],
            [

                "name"=> "Whispering Winds",
                "description"=> "A poetic exploration of nature's whispers and untold stories.",
                "release_date"=> "2026-09-01",
                "ticket_price"=> 12.99,
                "country"=> "Spain",
                "genre"=> "Poetry",
                "photo"=> "https://resource.rentcafe.com/image/upload/x_0,y_0,w_1152,h_654,c_crop/q_auto,f_auto,c_lfill,w_576,ar_1.975,g_auto/s3/2/55533/2902-whispering-winds-dr-pearland-tx-high-res-1%20(medium).jpg"
            ],
            [

                "name"=> "Neon Dreams",
                "description"=> "A visually stunning journey through the neon-lit landscapes of a cyberpunk city.",
                "release_date"=> "2026-10-18",
                "ticket_price"=> 11.99,
                "country"=> "Japan",
                "genre"=> "Sci-Fi",
                "photo"=> "https://images.genius.com/33571f8738751f4790d58997f1856b63.1000x1000x1.jpg"
            ],
            [

                "name"=> "Mystic Waters",
                "description"=> "A mystical adventure uncovering the secrets hidden beneath ancient waters.",
                "release_date"=> "2026-11-12",
                "ticket_price"=> 14.99,
                "country"=> "Australia",
                "genre"=> "Fantasy",
                "photo"=> "https://kiukija.com/wp-content/uploads/2022/01/luminous-lagoon.jpg"
            ],
            [

                "name"=> "Cinematic Dreamscape",
                "description"=> "An immersive experience blending reality and dreams in a surreal dreamscape.",
                "release_date"=> "2026-12-06",
                "ticket_price"=> 11.99,
                "country"=> "United States",
                "genre"=> "Fantasy",
                "photo"=> "https://californiaherps.com/films/filmimages/dreamscape.jpg"
            ],
            [

                "name"=> "Echoes of Silence",
                "description"=> "A silent film that speaks volumes, exploring the power of non-verbal communication.",
                "release_date"=> "2027-01-22",
                "ticket_price"=> 13.99,
                "country"=> "France",
                "genre"=> "Drama",
                "photo"=> "https://images.genius.com/5d7d545481e271c28a5b180cdf9754f9.1000x563x1.png"
            ],
            [

                "name"=> "Cosmic Chronicles",
                "description"=> "An epic space saga chronicling the rise and fall of civilizations across the cosmos.",
                "release_date"=> "2027-02-15",
                "ticket_price"=> 14.99,
                "country"=> "United Kingdom",
                "genre"=> "Sci-Fi",
                "photo"=> "https://englishpluspodcast.com/wp-content/uploads/2023/08/The-Story-of-Our-Solar-System-jpg.webp"
            ],
            [
              "name" => "The Dark Knight",
              "description" => "A gripping tale of Gotham's vigilante, Batman.",
              "release_date" => "2008-07-18",
              "ticket_price" => 12,
              "country" => "USA",
              "genre" => "Action",
              "photo" => "https://assets.gqindia.com/photos/5cdc19cd54004319c73c4e01/16:9/w_2560%2Cc_limit/Batman-movie.jpg"
            ],
            [
              "name" => "Inception",
              "description" => "A mind-bending heist within dreams.",
              "release_date" => "2010-07-16",
              "ticket_price" => 14,
              "country" => "USA",
              "genre" => "Sci-Fi",
              "photo" => "https://www.escapistmagazine.com/wp-content/uploads/2020/07/inception1.jpg?fit=1920%2C1080"
            ],
            [
              "name" => "La La Land",
              "description" => "A romantic musical set in Los Angeles.",
              "release_date" => "2016-12-09",
              "ticket_price" => 10,
              "country" => "USA",
              "genre" => "Musical",
              "photo" => "https://www.theasburycollegian.com/wp-content/uploads/2023/02/via-Getty-Images.jpeg"
            ],
            [
              "name" => "Parasite",
              "description" => "A darkly comedic thriller about class struggle.",
              "release_date" => "2019-11-08",
              "ticket_price" => 11,
              "country" => "South Korea",
              "genre" => "Thriller",
              "photo" => "https://media.newyorker.com/photos/5da4a5c756dcd400082a63ba/master/pass/Brody-Parasite.jpg"
            ],
            [
              "name" => "The Shawshank Redemption",
              "description" => "The tale of hope and friendship in Shawshank Prison.",
              "release_date" => "1994-09-23",
              "ticket_price" => 11,
              "country" => "USA",
              "genre" => "Drama",
              "photo" => "https://i0.wp.com/www.michigandaily.com/wp-content/uploads/2023/10/Shawshank-photo.png?fit=1170%2C645&ssl=1"
            ],
            [
              "name" => "Avatar",
              "description" => "A visually stunning journey to the alien world of Pandora.",
              "release_date" => "2009-12-18",
              "ticket_price" => 13,
              "country" => "USA",
              "genre" => "Fantasy",
              "photo" => "https://pyxis.nymag.com/v1/imgs/51b/28a/622789406b8850203e2637d657d5a0e0c3-avatar-rerelease.rhorizontal.h600.jpg"
            ],
            [
              "name" => "Pulp Fiction",
              "description" => "Quentin Tarantino's iconic non-linear crime film.",
              "release_date" => "1994-10-14",
              "ticket_price" => 12,
              "country" => "USA",
              "genre" => "Crime",
              "photo" => "https://i.guim.co.uk/img/static/sys-images/Film/Pix/pictures/2010/1/28/1264699251256/John-Travolta-and-Samuel--001.jpg?width=465&dpr=1&s=none"
            ],
            [
              "name" => "The Matrix",
              "description" => "A sci-fi action film exploring the concept of reality.",
              "release_date" => "1999-03-31",
              "ticket_price" => 11,
              "country" => "USA",
              "genre" => "Sci-Fi",
              "photo" => "https://miro.medium.com/v2/resize:fit:800/1*x8AEe4tUKNSbLiffur5i6w.jpeg"
            ],
            [
              "name" => "Forrest Gump",
              "description" => "The life journey of a simple man with extraordinary experiences.",
              "release_date" => "1994-07-06",
              "ticket_price" => 10,
              "country" => "USA",
              "genre" => "Drama",
              "photo" => "https://cdn.aarp.net/content/dam/aarp/entertainment/movies-for-grownups/2022/03/1140-forrest-gump-bench.jpg"
            ],
            [
              "name" => "Interstellar",
              "description" => "A space odyssey to save humanity.",
              "release_date" => "2014-11-07",
              "ticket_price" => 13,
              "country" => "USA",
              "genre" => "Sci-Fi",
              "photo" => "https://s.abcnews.com/images/Technology/ht_interstellar_2_kab_141106_16x9_1600.jpg"
            ],
            [
              "name" => "Titanic",
              "description" => "A timeless love story set against the backdrop of a sinking ship.",
              "release_date" => "1997-12-19",
              "ticket_price" => 12,
              "country" => "USA",
              "genre" => "Romance",
              "photo" => "https://services.meteored.com/img/article/titanic-10-curiosidades-sobre-el-naufragio-mas-famoso-de-la-historia-1681429632845_1280.jpg"
            ],
            [
              "name" => "The Godfather",
              "description" => "A crime epic about the Corleone family.",
              "release_date" => "1972-03-24",
              "ticket_price" => 11,
              "country" => "USA",
              "genre" => "Crime",
              "photo" => "https://api.time.com/wp-content/uploads/2022/03/the-godfather-anniversary.jpg"
            ],
            [
              "name" => "Gladiator",
              "description" => "A Roman general seeks justice and revenge.",
              "release_date" => "2000-05-05",
              "ticket_price" => 12,
              "country" => "USA",
              "genre" => "Action",
              "photo" => "https://image.jimcdn.com/app/cms/image/transf/dimension=2080x10000:format=jpg/path/s2217cd0bb1220415/image/i1f8a44dd5ee0a217/version/1696589143/a-roman-gladiator-wearing-a-detailed-bronze-helmet-with-intricate-engravings.jpg"
            ],
            [
              "name" => "The Grand Budapest Hotel",
              "description" => "Wes Anderson's whimsical tale set in a European hotel.",
              "release_date" => "2014-03-07",
              "ticket_price" => 10,
              "country" => "USA",
              "genre" => "Comedy",
              "photo" => "https://static01.nyt.com/images/2014/03/05/multimedia/budapest-anatomy/budapest-anatomy-superJumbo.jpg"
            ],
            [
              "name" => "The Silence of the Lambs",
              "description" => "A psychological thriller about a brilliant but insane serial killer.",
              "release_date" => "1991-02-14",
              "ticket_price" => 11,
              "country" => "USA",
              "genre" => "Thriller",
              "photo" => "https://cdn.vox-cdn.com/thumbor/6hBL2SiKQPfwW69nt2wwiToOdw0=/0x0:1600x900/1200x800/filters:focal(659x115:915x371)/cdn.vox-cdn.com/uploads/chorus_image/image/56672659/silence_of_the_lambs.0.png"
            ],
            [
              "name" => "The Social Network",
              "description" => "The creation and rise of Facebook and its founder, Mark Zuckerberg.",
              "release_date" => "2010-09-24",
              "ticket_price" => 10,
              "country" => "USA",
              "genre" => "Drama",
              "photo" => "https://media.timeout.com/images/68649/750/422/image.jpg"
            ],
            [
              "name" => "Dunkirk",
              "description" => "Christopher Nolan's gripping World War II drama.",
              "release_date" => "2017-07-21",
              "ticket_price" => 13,
              "country" => "USA",
              "genre" => "War",
              "photo" => "https://i.ytimg.com/vi/F-eMt3SrfFU/maxresdefault.jpg"
            ],
            [
              "name" => "The Revenant",
              "description" => "A tale of survival and revenge in the American wilderness.",
              "release_date" => "2015-12-25",
              "ticket_price" => 12,
              "country" => "USA",
              "genre" => "Adventure",
              "photo" => "https://www.ft.com/__origami/service/image/v2/images/raw/http%3A%2F%2Fcom.ft.imagepublish.upp-prod-eu.s3.amazonaws.com%2F4ec0e866-babe-11e5-b151-8e15c9a029fb?source=next-article&fit=scale-down&quality=highest&width=700&dpr=1"
            ],
            [
              "name" => "Schindler's List",
              "description" => "Steven Spielberg's powerful portrayal of the Holocaust.",
              "release_date" => "1993-12-15",
              "ticket_price" => 11,
              "country" => "USA",
              "genre" => "Drama",
              "photo" => "https://bayflicks.files.wordpress.com/2017/09/091717_1911_revisitings1.jpg"
            ],
            [
              "name" => "The Incredibles",
              "description" => "An animated adventure of a family of superheroes.",
              "release_date" => "2004-11-05",
              "ticket_price" => 10,
              "country" => "USA",
              "genre" => "Animation",
              "photo" => "https://cinemashock.files.wordpress.com/2012/02/incredibles.jpg"
            ]
        ];


        foreach ($list as $film) {
            Film::create($film);
        }

    }
}
