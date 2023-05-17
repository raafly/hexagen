<?php 
require 'functions.php';
$resep = query("SELECT * FROM resep LIMIT 6");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dasboard</title>

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- STYLE -->
    <link rel="stylesheet" href="css/style.css">


</head>
<body>
    
    <!-- start page home -->
    <section>
        <nav id="navbar" class="navbar fixed-top">
            <div class="container-fluid d-flex">
              <a href="index.php"><img src="img/logo.png" class="logo"></a>
              <a class="navbar-brand " href="#">Icepee</a>
              <form  action="tampil.php" class="search-nav" method="post">
               
                    <input type="text" class="search" name="keyword" size="27" placeholder="cari resep anda" autocomplete="off">
                    <button type="submit" class="button-keyword" name="cari">Cari</button>
                 
                </form>
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                  <a href="#"><img src="img/logo.png" class="logo"></a>
                  <h5 class="offcanas-title" id="offcanvasNavbarLabel">Icepee</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <ul class="navbar-nav flex-grow-1 pe-3">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#"> <i class="bi bi-house"></i> Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#favorite"> <i class="bi bi-heart"></i> Favorite</a>
                    </li>              
                    <li class="nav-item">
                      <a class="nav-link" href="#about11"> <i class="bi bi-info-circle"></i> About</a>
                    </li>              
                  </ul>
                </div>
              </div>
            </div>
        </nav>
      
        <div class="content">
            <div class="textBox">
                <div class="test">
                  <h1 class="lead"></h1>
                </div>
                <div class="test2">
                  <p>"Makanan bukan hanya masakan yang ada berakhir di <br>
                      perutmu, melainkan sebuah petualangan
                      yang patut dinikmati <br> dan dihargai." <span>-Winda Krisnadefa</span>
                  </p>
                </div>
                <!-- <input type="text" placeholder="cari resep anda" class="search"> -->
                
                <form  action="tampil.php" method="post">
               
                    <input type="text" class="search" name="keyword" size="27" autofocus placeholder="cari resep anda" autocomplete="off">
                    <button type="submit" class="button-keyword" name="cari">Cari</button>
                 
                </form>


            </div>
          
            <div class="imgBox">
                <img src="img/orangmasak.png" width="645px" class="starbucks" alt="logo">
            </div>
        </div>
    </section>

    <!-- favorite -->
    <section id="favorite" class="favorite">
      <div class="container">
          <div class="row text-center mb-5 mt-n3">
              <div class="col mt-4" data-aos="fade-down">
                  <h2>Paling Banyak Dicari</h2>
                  <p>berdasarkan pencarian pengguna dalam seminggu, kami menampilkan 6 resep yang sering dicari </p>
                </div>
          </div>
          <div class="row">
          <?php foreach( $resep as $rsp ) : ?>
            <div class="col-md-4 mb-3" data-aos="zoom-in" data-aos-duration="1300">
                  <div class="card h-80 mb-4 mx-3" style="width: 22rem;">
                      <img src="img/favorite/<?= $rsp['gambar'] ?>" class="card-img-top">
                      <div class="card-body">
                        <h5 class="card-title"><?= $rsp['judul'] ?></h5>
                        <p class="card-text"><?= $rsp['deskripsi'] ?></p>
                          <a href="favorite.php?name=<?= $rsp['judul'] ?>" class="btn btn-primary" style="--bs-btn-padding-y: .20em; --bs-btn-padding-x: .8rem; --bs-btn-font-size: .95rem;">Lihat Selengkapnya</a>
                      </div>
                  </div>
              </div>
          <?php endforeach; ?>
             
          </div>
      </div>
    </section>

    <!-- start page about -->
    <div id="about11" class="container-satu">
        <div class="kolom-satu" data-aos="fade-down"  data-aos-duration="1500">
            <p id="bagian2">Kami di sini untuk Anda <br><span>tidak peduli di mana Anda berada
</span></p>
        </div>
        
        <div class="kolom-dua">
            <img src="img/petas.png" class="peta" data-aos="zoom-in" data-aos-duration="1500">
        </div>
    
        <div class="kolom-tiga">
            <h3>Tugas <span>Kami</span></h3>
            <br>
            <div class="saya">
                <p class="specific">Spesifik</p>
                <p class="wulan">Memperkenalkan resep masakan Indonesia kepada generasi muda agar tertarik mencoba dan melestarikan resep masakan Indonesia</p>
            </div>
        </div>
    </div>
    <!-- end page about -->

    <!-- script Typed JS -->
    <script src="https://unpkg.com/typed.js@2.0.15/dist/typed.umd.js"></script>

    <script>
      var typed = new Typed(".auto-type", {
        strings: ["masak apa hari ini"],
        typeSpeed: 170,
        backSpeed: 160,
        loop: true
      })

    </script>

    <!-- script AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        once: true,
      })
    </script>  

    <!-- script GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/TextPlugin.min.js"></script>
    <script>
        gsap.registerPlugin(TextPlugin);
        gsap.from('.imgBox', { duration: 1, y: -120, opacity: 0, ease: 'bounce' });
        gsap.to('.lead', {duration: 3.7, delay: 2, text: 'Mau masak apa hari ini'});
    </script>

    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="script/script.js"></script>

</body>
</html>