<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01 - class</title>
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
            <h1 class="text-2xl">01 - class</h1>
        </header>
        <section class="p-5 my-2 overflow-auto h-[524px]">
            <?php 

                class Vehicle {
                    // Attributes
                    public $brand;
                    public $refer;
                    public $model;
                    public $color;

                    // Methods
                    public function setAttributes($brand, $refer, $model, $color){
                        $this->brand = $brand;
                        $this->refer = $refer;
                        $this->model = $model;
                        $this->color = $color;
                    }
                    public function getAttributes() {
                        return "<div class='p-4 mb-4 flex-col border ring-white/50 rounded-md'>
                                    <p><strong>Brand:</strong> $this->brand</p>
                                    <p><strong>Reference:</strong> $this->refer</p>
                                    <p><strong>Model:</strong> $this->model</p>
                                    <p><strong>Color:</strong> $this->color</p>
                                </div>";
                    }
                }
                $vehicle1 = new Vehicle;
                $vehicle1 -> setAttributes('Volkswage', 'Tiguan', 2023, 'Black');
                echo $vehicle1->getAttributes();
                 
                $vehicle2 = new Vehicle;
                $vehicle2 -> setAttributes('Renault', 'Sander', 2022, 'Red');
                echo $vehicle2->getAttributes(); 

                $vehicle3 = new Vehicle;
                $vehicle3 -> setAttributes('Toyota', 'Hilux', 2021, 'White');
                echo $vehicle3->getAttributes(); 
            ?>


        </section>
        <script src="js/Tailwind-3.2.4.js"></script>
    </main>
</body>
</html>