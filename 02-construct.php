<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02 - Construct</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body class="min-h-[100vh] flex justify-center items-center text-white">
    <main class="w-[380px] h-[600px] bg-white/40 rounded">
        <header class="flex gap-4 justify-center items-center border-b pb-5">
            <a href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-10 h-10 text-green-400 hover:-translate-x-3 transition-all">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </a>
            <h1 class="text-2xl">02 - Construct</h1>
        </header>
        <section class="overflow-y-auto h-[524px]">

        <?php
        class PlayList {
            // Atributes
            private $name;
            private $artist = Array();
            private $album = Array();
            private $cover = Array();
            private $year = Array();

            //Methods
            public function __construct($name){
                $this->name = $name;
            }

            public function setPlayList($artist, $album, $cover, $year){
                $this->artist[] = $artist;
                $this->album[] = $album;
                $this->cover[] = $cover;
                $this->year[] = $year;
            }

            public function getPlayList(){
                     echo "<div class='p-2 flex felx-col items-center gap-2 ring-1 ring-white/75 rounded-md text-white/100'>
                            <h2 class='my-2 text-center'>
                                Play List: $this->name
                            </h2>";
                         for($i = 0; $i < count($this->artist); $i++){
                            echo "<div class='bg-white/20  flex flex-col items-center gap-2 rounded'>
                            <img src='".$this->cover[$i]."' alt='Album Cover' width='100px'>
                            <p><strong>Artist: </strong> ".$this->artist[$i]." </p>
                            <p><strong>Album: </strong> ".$this->album[$i]." </p>
                            <p><strong>Year: </strong> ".$this->year[$i]." </p>
                            </div>";
                         }
                    echo "</div>";
            }
        }
        $playList = new PlayList('Pop Music');
        $playList->setPlayList('Charlie Puth', 'CHARLIE', 'https://tinyurl.com/45yyab5b', '2022');
        $playList->getPlayList();

        $playList2 = new PlayList('Electronic');
        $playList2->setPlayList('Charlie Puth', 'CHARLIE', 'https://tinyurl.com/45yyab5b', '2022');
        $playList2->getPlayList();

        $playList3 = new PlayList('Reggaeton');
        $playList3->setPlayList('Bad Bunny', 'UN VERANO SIN TI', 'https://tinyurl.com/3ez6f7ht', '2022');
        $playList3->getPlayList();

        $playList4 = new PlayList('Alternative');
        $playList4->setPlayList('The Weeknd', 'Starboy', 'https://tinyurl.com/2p88n92v', '2016');
        $playList4->getPlayList();

        $playList5 = new PlayList('Pop Music');
        $playList5->setPlayList('Charlie Puth', 'CHARLIE', 'https://tinyurl.com/45yyab5b', '2022');
        $playList5->getPlayList();
        
        ?>
            
        </section>
    </main>
    <script src="js/tailwind-3.2.4.js"></script>
</body>
</html>