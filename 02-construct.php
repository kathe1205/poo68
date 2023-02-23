<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02 - Construct</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="flex min-h-[100vh] justify-center items-center text-black/90">
    <main class="bg-white/60 h-[600px] w-[380px] rounded">
        <header class="flex justify-center items-center py-5 bg-pink-500 rounded-t-md">
            <a href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-pink-200 hover:-translate-x-4 transition-all ">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                  
            </a>
            <h1 class="text-2xl">02 - Construct</h1>
        </header>
        <section class="p-5 my-2 overflow-y-auto h-[524px]">
            <?php 
                class PlayList {
                    //Atributos 
                    private $name;
                    private $artist;
                    private $album;
                    private $cover;
                    private $year;

                    //Metodos
                    public function __construct($name) {
                        $this ->name   = $name;
                    }
                    public function setPlayList($artist, $album, $cover, $year) {
                        $this ->artist[] = $artist;
                        $this ->album[]  = $album;
                        $this ->cover [] = $cover;
                        $this ->year[]   = $year;
                    }
                    public function getPlayList() {
                        echo "<div class='p-2 ring-1 ring-black/80 rounded-md'>
                                    <h2 class='text.center text-2x1 my-4'> $this->name </h2>";
                                    for($i = 0; $i < count($this-> artist);$i++) {
                                    echo "<div class='p-2 mb-4 flex flex-col gap-4 bg-black/50 rounded-md'>
                                        <p> <strong>Artist: </strong>".$this->album[$i]."</p>
                                        <img class='rounded-md' src='".$this->cover[$i]."' alt='Cover' widt='280px'>
                                        <p> <strong>Album: </strong>".$this->artist[$i]."</p>
                                        <p> <strong>Year: </strong>".$this->year[$i]."</p>
                                        </div>";
                                    }
                                "</div>";
                    }
                }
                $myPlayList = new PlayList ('My Favorite Music');
                $myPlayList -> setPlayList ( 'Lo mejor que hay en mi vida', 'Andres Cepeda', 'https://tinyurl.com/3y5s952j', 2012);
                $myPlayList -> setPlayList ( 'Balas perdidas', 'Morat', 'https://tinyurl.com/2p92m9uk', 2018);
                $myPlayList -> setPlayList ( 'Entre mar y palmeras', 'Juan Luis Guerra', 'https://tinyurl.com/ytku4xu8', 2019);
                $myPlayList -> setPlayList ( 'Vestirte de amor', 'Pipe pelaez', 'https://tinyurl.com/yuj7ytbx', 2012);
                $myPlayList -> setPlayList ( 'Resiliencia', 'Beret', 'https://tinyurl.com/mr2j3b9a', 2022);
                $myPlayList -> getPlayList ();             
                ?>
                </section>
        <script src="js/Tailwind-3.2.4.js"></script>
    </main>
</body>
</html>