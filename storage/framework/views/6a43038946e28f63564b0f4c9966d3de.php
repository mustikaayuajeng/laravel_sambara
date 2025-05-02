<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sambara resto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href=<?php echo e(asset('css/style.css')); ?>>

</head>

<body>
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
                        <a class="nav-link" id="/" style="color: white;">HOME</a>
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



    <!--MAKANAN-->

    <div class="container-fluid">
        <div class="container">
            <div class="row text-center ">
                <div class="col-md-12 mt-5">
                    <h2 class="title" style="font-size: 50px; margin-top: 5%;">MENU SAMBARA</h2>
                    <p class="title" style="font-size: 30px;">-All Menu-</p>
                </div>
                    <div class="col-md-3 mb-5 mt-5">
                        <div class="menu">
                            <div class="menu-item">
                                <img src="img/barongko.jpg" alt="Makanan 1" style="width: 15rem; height: 10rem; border-radius: 20px;">
                                <h4 class="menu-title">Barongko</h4>
                                <h5>
                                    <p><span style="color: rgb(213, 111, 253);">Rp36.000</span> <br><span
                                            class="text-decoration-line-through">Rp48.900</span></p>
                                </h5>
                                <a id="product_sambara" class="btn btn-primary">coyyah</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-5 mt-5">
                        <div class="menu">
                            <div class="menu-item">
                                <img src="img/bbr aym.jpg" alt="Makanan 1" style="width: 15rem; border-radius: 20px;">
                                <h4 class="menu-title">Bubur Ayam</h4>
                                <h5>
                                    <p><span style="color: rgb(213, 111, 253);">Rp36.000</span> <br><span
                                            class="text-decoration-line-through">Rp48.900</span></p>
                                </h5>
                                <a href="product.html" class="btn btn-primary">coyyah</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-5 mt-5">
                        <div class="menu">
                            <div class="menu-item">
                                <img src="img/maringgi.jpg" alt="Makanan 1" style="width: 15rem; height: 10rem; border-radius: 20px;">
                                <h4 class="menu-title">Maringgii</h4>
                                <h5>
                                    <p><span style="color: rgb(213, 111, 253);">Rp36.000</span> <br><span
                                            class="text-decoration-line-through">Rp48.900</span></p>
                                </h5>
                                <a href="product.html" class="btn btn-primary">coyyah</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-5 mt-5">
                        <div class="menu">
                            <div class="menu-item">
                                <img src="img/rames ayam bkr.png" alt="Makanan 1" style="width: 15rem; border-radius: 20px;">
                                <h4 class="menu-title">Rames Ayam Bakar</h4>
                                <h5>
                                    <p><span style="color: rgb(213, 111, 253);">Rp36.000</span> <br><span
                                            class="text-decoration-line-through">Rp48.900</span></p>
                                </h5>
                                <a href="product.html" class="btn btn-primary">coyyah</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-5 mt-5">
                        <div class="menu">
                            <div class="menu-item">
                                <img src="img/ketan.jpg" alt="Makanan 1" style="width: 15rem; height: 10rem; border-radius: 20px;">
                                <h4 class="menu-title">Ketan awewe</h4>
                                <h5>
                                    <p><span style="color: rgb(213, 111, 253);">Rp36.000</span> <br><span
                                            class="text-decoration-line-through">Rp48.900</span></p>
                                </h5>
                                <a href="product.html" class="btn btn-primary">coyyah</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-5 mt-5">
                        <div class="menu">
                            <div class="menu-item">
                                <img src="img/soto-iga.jpg" alt="Makanan 1" style="width: 15rem; height: 10rem ; border-radius: 20px;">
                                <h4 class="menu-title">Soto Iga</h4>
                                <h5>
                                    <p><span style="color: rgb(213, 111, 253);">Rp36.000</span> <br><span
                                            class="text-decoration-line-through">Rp48.900</span></p>
                                </h5>
                                <a href="product.html" class="btn btn-primary">coyyah</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-5 mt-5">
                        <div class="menu">
                            <div class="menu-item">
                                <img src="img/lumpur.jpg" alt="Makanan 1" style="width: 15rem; border-radius: 20px;">
                                <h4 class="menu-title">Lumpur</h4>
                                <h5>
                                    <p><span style="color: rgb(213, 111, 253);">Rp36.000</span> <br><span
                                            class="text-decoration-line-through">Rp48.900</span></p>
                                </h5>
                                <a href="product.html" class="btn btn-primary">coyyah</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mb-5 mt-5">
                        <div class="menu">
                            <div class="menu-item">
                                <img src="img/cinamm french.jpg" alt="Makanan 1" style="width: 15rem; height: 10rem; border-radius: 20px;">
                                <h4 class="menu-title">Cinamm French</h4>
                                <h5>
                                    <p><span style="color: rgb(213, 111, 253);">Rp36.000</span> <br><span
                                            class="text-decoration-line-through">Rp48.900</span></p>
                                </h5>
                                <a href="product.html" class="btn btn-primary">coyyah</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



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
                        Panunggangan Tim., Kec. Pinang,Kota Tangerang, Banten</br>
                        15143</br></p>

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
<?php /**PATH C:\laragon\www\projecttt\resources\views/menu.blade.php ENDPATH**/ ?>