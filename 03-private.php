<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>03 - Private</title>
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
            <h1 class="text-2xl">03 - Private </h1>
        </header>
        <section class="overflow-y-auto h-[524px]">
            <h2 class="text-center text-2xl mb-6">Table Maker</h2>
            <form class="p-2 mb-4 ring-1 grid grid-col-2 gap-4 justify-center bg-white/20 ring-white/50 rounded-md" action="" method="post">
            <div class="flex flex-col gap-4 items-center">
                <label>Rows: </label>
                <input type="range" min="1" max="20" step="1" oninput="onr.value=this.value" name="nr">
                <output id="onr" class="text-2xl"></output>
            </div>
            <div class="flex flex-col gap-4 items-center">
                <label>Columns: </label>
                <input type="range" min="1" max="20" step="1" oninput="onc.value=this.value" name="nc">
                <output id="onc" class="text-2xl"></output>
            </div>
            <button class="p-2 bg-green-500 w-[320px] rounded-md hover:scale-95 transition-all">Make Table</button>
            </form>
            <?php
            
            class table{
                private $nr;
                private $nc;

                public function __construct($nr,$nc ){
                    $this->nr = $nr;
                    $this->nc = $nc;
                    $this->makeTable(); 
                }
                private function makeTable(){
                    echo "<table class='border-collapse mx-auto'>";
                    for($r = 1; $r <= $this->nr; $r++){
                        echo "<tr>";
                        for($c = 1; $c <= $this->nc; $c++){
                            echo "<td class='p-1 ring-1'> $r-$c </td>";
                        }
                        echo "</tr>";
                    }
                    
                    
                    echo "</table>";
                }

            }
            if($_POST){
                $table = new Table($_POST['nr'], $_POST['nc']);
            }
            
            
            ?>
        </section>
    </main>
    <script src="js/tailwind-3.2.4.js"></script>
</body>

</html>