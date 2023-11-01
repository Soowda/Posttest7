<?php
session_start();
date_default_timezone_set("Asia/Makassar");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Terarria</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="posttest2.css">
    <link rel="stylesheet" href="styles.css">
</head>


<body>
    
    <div id="popup" class="popup">
        <div class="popup-content">
            <span class="close" id="close-popup">&times;</span>
            <h2>Postingan Belum Tersedia</h2>
            <p>Silahkan Coba Nanti.</p>
        </div>
    </div>
    <button id="open-popup">Buka Postingan Terbaru</button>
    <nav>
        <div class="container">
           
            <ul class="menu">
                
                <li class="nav-item"><a href="#">Beranda</a></li>
                <li class="nav-item"><a href="aboutme.html">Tentang Saya</a></li>
                <li class="nav-item"><a href="index1.php">Tambah Item</a></li>
                <li class="nav-item"><a href="index.php">Log Out</a></li>
                    <?php
                    echo date('l '). date('Y-m-d').", ";
                        echo date_default_timezone_get();
                        echo date(' H:i:sa');
                    ?>
            </ul>
            
        </div>
        <div class="toggle-container">
            <label class="switch">
                <input type="checkbox" id="modeToggle">
                <span class="slider round"></span>
            </label>
            <p id="modeText">Light Mode</p>
        </div>
        <div class="content">
        </div>
        <script src="script.js"></script>
        
        
 
    </nav>
    <header>
        <nav class="maincontent">
            <div class="container">
                <h1 class="logo">TERRARIA LIST ITEM</h1>
                <ul class="nav-menu">
                    <li class="nav-item"><a href="#">Search :</a></li>
                    <li class="nav-item"><a href="#about"><td><input type="text"></td></a></li>
                </ul>
                
            </div>
            
        </nav>
    </header>

    <main class="container">
        
    
        <section id="about">
            <h2>Halaman Items</h2>
            <p>Welcome to the Fandom Terraria Wiki</p>
        </section>
        <section class="item-list">
            
            <h2>Daftar Items : </h2>
            <div class="item">
                <div class="atas">
                    <p>ALL SWORD</p>
                    <p>Sword of the Hero</p>  <img src="Zenith.png" alt="">  
                    <p>Star Wrath</p>
                    <img src="Star_Wrath.png" alt="">
                    <p>Terra Blade</p><img src="Terra_Blade.png" alt="">
                    <p>Meowmere </p><img src="Meowmere.png" alt="">
                    <p>Influx Waver</p><img src="Influx_Waver.png" alt="">
                    <p>Daybreak</p><img src="Daybreak.png" alt="">
                   
                </div>
                <div class="atas">
                    <p>ALL BOWS</p>
                    <p>Ash Wood Bow</p>  <img src="Ash_Wood_Bow.png" alt="">  
                    <p>Blood Rain Bow</p>
                    <img src="Blood_Rain_Bow.png" alt="">
                    <p>Daedalus Stormbow</p><img src="Daedalus_Stormbow.png" alt="">
                    <p>Demon Bow</p><img src="Demon_Bow.png" alt="">
                    <p>Eventide</p><img src="Eventide.png" alt="">
                    <p>The Bee's Knees</p><img src="The_Bee's_Knees.png" alt="">
                   
                </div>
                <div class="atas">
                    <p>ALL GUNS</p>
                    <p>Boomstick</p>  <img src="Boomstick_(old).png" alt="">  
                    <p>Candy Corn Rifle</p>
                    <img src="Candy_Corn_Rifle.png" alt="">
                    <p>Chain Gun</p><img src="Chain_Gun.png" alt="">
                    <p>Dart Rifle</p><img src="Dart_Rifle.png" alt="">
                    <p>Megashark</p><img src="Megashark.png" alt="">
                    <p>Vortex Beater</p><img src="Vortex_Beater.png" alt="">
                
                </div>
                <div class="atas">
                    <p>ALL ROD</p>
                    
                    <p>Rod of Discord</p>  <img src="Rod_of_Discord.png" alt="">  
                    <p>Actuation Rod</p>
                    <img src="Actuation_Rod.png" alt="">
                    <p>Ice Rod</p><img src="Ice_Rod_(old).png" alt="">
                    <p>Rainbow Rod </p><img src="Rainbow_Rod.png" alt="">
                    <p>Crimson Rod</p><img src="Crimson_Rod.png" alt="">
                    <p>Nimbus Rod</p><img src="Nimbus_Rod.png" alt="">
                </div>
                <div class="atas">
                    <p>ALL FLAILS</p>
                  
                    <p>Flaming Mace</p>  <img src="Flaming_Mace.png" alt="">  
                    <p>The Meatball</p>
                    <img src="The_Meatball.png" alt="">
                    <p>Ball O' Hurt</p><img src="Ball_O'_Hurt.png" alt="">
                    <p>Dark Blue Moon </p><img src="Blue_Moon.png" alt="">
                    <p>Sunfury Phoenix</p><img src="Sunfury.png" alt="">
                    <p>Chain of Knife</p><img src="Chain_Knife.png" alt="">
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="container">
            <p>&copy; 2023 Daftar Item Terraria</p>
        
        </div>
    </footer>
 
</body>
</html>