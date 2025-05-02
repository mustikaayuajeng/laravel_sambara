<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sambara resto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oleo+Script:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Afacad+Flux:wght@100..1000&family=Oleo+Script:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Afacad+Flux:wght@100..1000&family=Alegreya+Sans:ital,wght@0,100;0,300;0,400;0,500;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,700;1,800;1,900&family=Oleo+Script:wght@400;700&display=swap"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href={{ asset('css/style.css')}}>

</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg logo fixed-top" style="background-color: #B99470;">
        <div class="container logo">
            <a class="navbar-brand" href="#">
                <img src="img/logo_sambara-removebg-preview.png" height="45" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="index.php" style="color: white;">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about_sambara" style="color: white;">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact" style="color: white;">CONTACT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="menu_sambara" style="color: white;">MENU</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/sambara 2 (1).jpg" class="d-block w-100" alt="..." style="width: 100%; height: 50rem;">
                <div class="carousel-caption d-none d-md-block">
                    <h1>"MAKANAN YANG BERBICARA DENGAN KEUNIKANNYA"<h1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/sambara 3.jpeg" class="d-block w-100" alt="..." style="width: 100%; height: 50rem;">
                <div class="carousel-caption d-none d-md-block">
                    <h1>SAMBARA ALAM SUTRA</h1>
                    <p>INOVASI DALAM SAJIANNYA DAN RASA YANG TAK TERLUPAKAN</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/samba2-transformed.png" class="d-block w-100" alt="..."
                    style="width: 100%; height: 50rem;">
                <div class="carousel-caption d-none d-md-block">
                    <h1>SAMBARA ALAM SUTRA</h1>
                    <p>KELEZATAN YANG MENGUNDANG EKSPLORASI!!!</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

    </div>


    <h1 class="text-center font-weight-bold m-4" style="color: #000;">BEST SELLER</h1>
    <div class="container text-center">
        <div class="row">
            <div class="card" style="width: 20rem;">
                <img src="img/liwetfix1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">SEGO KATROL</h5>
                    <p class="card-text">Sego liwet dengan rasa gurih dan pedas dari ikan peda</p>
                    <button type="button" class="btn btn-primary" id="liveAlertBtn" onclick="location.href='menu_sambara'">hargae</button>
                </div>
            </div>
            <div class="card" style="width: 20rem;">
                <img src="img/liwetfix2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">SEGO KATROL</h5>
                    <p class="card-text">Sego liwet dengan rasa gurih dan pedas dari ikan peda</p>
                    <button type="button" class="btn btn-primary" id="liveAlertBtn" onclick="location.href='menu_sambara'">hargae</button>
                </div>
            </div>
            <div class="card" style="width: 20rem;">
                <img src="img/liwetfix3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">AYAM TANGKAP</h5>
                    <p class="card-text">Sego liwet dengan rasa gurih dan pedas dari ikan peda</p>
                    <button type="button" class="btn btn-primary" id="liveAlertBtn" onclick="location.href='menu_sambara'">hargae</button>
                </div>
            </div>
            <div class="card" style="width: 20rem;">
                <img src="img/liwetfix3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">AYAM TANGKAP</h5>
                    <p class="card-text">Sego liwet dengan rasa gurih dan pedas dari ikan peda</p>
                    <button type="button" class="btn btn-primary" id="liveAlertBtn" onclick="location.href='menu_sambara'">hargae</button>
                </div>
            </div>
        </div>
    </div>


    <div id="about" class="container-fluid mt-5 pb-5 mb-5" style="background-color: #8f847e;">
        <div class="container" id="about_sambara">
            <div class="row text-center">
                <div class="col-md-12">
                    <h1 class="title mt-3" style="font-size: 50px;color: white;" id="scrollspyHeading1">ABOUT US</h1>
                </div>
                <div class="col-md-6 mt-5 mb-5s">
                    <img src="img/ayampop.jpg" alt="" style="height: 50VH;width: 100%;">
                </div>
                <div class="col-md-6 mt-5 d-flex align-items-center text-start mb-5"
                    style="font-size: 30 px; color: white;">
                    AYAM POP adalah salah satu masakan yang berbahan dasar daging ayam dari provinsi Sumatera
                    Barat. Ayam pop termasuk salah satu bentuk hidangan ayam goreng, tetapi yang membedakan ayam
                    pop dengan ayam goreng pada umumnya adalah ayam pop memiliki warna yang masih putih pucat
                    ketika selesai dimasak. Hal ini dikarenakan sebelum digoreng, ayam pop yang sudah diberi
                    bumbu direbus terlebih dahulu di dalam rebusan air kelapa dan bawang putih cincang. Setelah
                    itu, ayam baru digoreng sebentar di dalam minyak panas agar matang sempurna dan memperoleh
                    sedikit tekstur renyah. Ayam pop biasanya dihidangkan dengan didampingi samba lado (sambal)
                    tomat dan sayur daun singkong rebus.
                </div>
            </div>
        </div>
    </div>

    <div id="contact" container-fluid mt-3 pb-2 mb-5>
        <div class="row p-5">
            <div class="col-4">
                <img src="img/cndol durian.webp" alt="" style="height: 100%; width: 100%;">
            </div>
            <div class="col-4">
                <img src="img/samba2-transformed.png" alt="" style="height: 100%; width: 100%;">
            </div>
            <div class="col-4 mt-5">
                <h1 style="font-size: 30px;" class="text-center"><strong>CONTACT</strong></br>

                    Kami menerima reservasi meja
                    dan juga melayani untuk berbagai acara.<br>
                    Hubungi admin kami melalui telepon atau<br>
                    whatsapp untuk informasi lebih jelasnya.</h1>
                <div class="pt-5 d-flex gap-5" style="list-style-type: none;">
                    <a href="https://www.instagram.com/sajian_sambara?igsh=a3dteWZzaGhjZHBq">
                        <li class="d-flex gap-2 align-items-center"><i class="fa-brands fa-instagram"></i>INSTAGRAM</li>
                    </a>
                    <a href="https://www.tiktok.com/@sambaraalamsutera?_t=8qbzkniqZtf&_r=1">
                        <li class="d-flex gap-2 align-items-center"><i class="fa-brands fa-tiktok"></i>TIKTOK</li>
                    </a>
                    <a href="https://www.youtube.com/watch?v=MvTMXoyP_f4&pp=ygUUc2FqaWFuIHNhbWJhcmEgcmVzdG8%3D">
                        <li class="d-flex gap-2 align-items-center"><i class="fa-brands fa-youtube"></i>YOUTUBE</li>
                    </a>
                    <a href="https://m.facebook.com/newsajiansambara/">
                        <li class="d-flex gap-2 align-items-center"><i class="fa-brands fa-facebook"></i>FACEBOOK</li>
                    </a>

                </div>
            </div>
        </div>
    </div>


    <div class="col-md-12 mt-3">
        <img src="img/resto.jpg" alt="" style="height: 90vh;width: 100%;">
    </div>

    <div class="footer" id="footer">
        <div class="container-fluid p-5" style="background-color: #B99470;">
            <div class="row d-flex align-items-center justify-content-center ">
                <div class="col-4">
                    <img src="img/logo_sambara-removebg-preview.png " width="60%">
                </div>
                <div class="col-5 text-center">
                    <p style="font-family: Alegreya Sans; font-size: 18px;">Woodlake Shophouse, Alam Sutera,</br>
                        Jl Kavling Barat Kav 5 No.1,</br>
                        Panunggangan Tim., Kec. Pinang,Kota Tangerang, Banten 15143</br></p>

                    <p style="font-family: Alegreya Sans; font-size: 20px;">Buka : Senin - Minggu</br>
                        Jam : 10.00 - 22.00</p>

                    <p style="font-family: Alegreya Sans; font-size: 20px;">(022) 20456465</br>
                        info@sambaraboga.com</p>
                </div>
                <div class="col-3 d-flex align-self-end">
                    <span>Copyright © 2024 | sajiansambaraofficial.com</span>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
