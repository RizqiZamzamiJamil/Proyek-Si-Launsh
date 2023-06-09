<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<style>
    .section-1 .container {
        background: linear-gradient(136.6deg, #0FC598 21.76%, #BFDB38 146.07%),
            url(/img/tentang-bg1.png);
        background-blend-mode: multiply;
        background-size: cover;
        background-position: center;
        height: 630px;
        box-shadow: -18px -24px 38px rgba(0, 0, 0, 0.25);
        border-radius: 400px 0px 0px 0px;
        color: white;
        overflow: hidden;
        position: relative;
    }

    .image-wrapper img {
        position: absolute;
    }

    .hero {
        position: relative;
        top: 80px;
        width: 100%;
        max-width: 100%;
    }

    .hero .judul {
        margin-left: 250px;
    }

    .testimoni {
        position: relative;
    }

    .testimoni .col-lg-4 {
        position: relative;
        height: 316px;
    }

    .testimoni .col-lg-4 img {
        position: absolute;
        right: 30px;
        top: 0;
    }

    #bor1 {
        width: 180px;
        left: 150px;
        top: 180px;
    }

    #bor2 {
        width: 180px;
        right: 0px;
        top: 180px;
    }

    #ulasan {
        position: absolute;
        bottom: 50px;
        right: 200px;
        padding: 20px;
        background-color: white;
        border: none;
        color: black;
        border-radius: 20px;
        font-size: 20px;
    }

    #ulasan:hover {
        background-color: #0FC598;
        color: white;
    }

    .testimoni p {
        width: 600px;
        font-size: 20px;
    }

    .testimoni .col-lg-6 {
        margin-left: 50px;
    }

    .testimoni h1 {
        margin-top: 30px;
    }

    #helm {
        top: 30px;
        right: 0;
        height: 250px;

    }

    #sepatu {
        height: 230px;
        bottom: -80px;
        left: -40px;
    }

    #bulatan {
        bottom: 0;
        right: 0;
        height: 130px;
    }

    .section-2 {
        height: 630px;
    }

    .section-2 .carousel-inner img {
        width: 300px;
        height: 300px;
        border-radius: 30px;
        box-shadow: 2px 6px 20px rgba(0, 0, 0, 0.5);
    }


    .testimoni h1 {
        margin-left: 0px;
    }
</style>

<section class="section-1">
    <div class="container">
        <div class="image-wrapper">
            <img data-aos="fade-left" data-aos-delay="100" src="/img/hero-helm.png" alt="" id="helm">
            <img data-aos="fade-right" data-aos-delay="200" src="/img/hero-sepatu.png" alt="" id="sepatu">
            <img data-aos="fade-up" data-aos-delay="300" src="/img/hero-bulat.png" alt="" id="bulatan">
        </div>
        <div class="hero">
            <h3 data-aos="fade-up" data-aos-delay="200" style="margin-left: 400px;">>>>>>>></h3>
            <div class="judul">
                <h1 data-aos="fade-up" data-aos-delay="400"><b>TESTIMONI</b></h1>
                <h5 data-aos="fade-up" data-aos-delay="600" style="margin-top: -5px;">Apa Kata Mereka Tentang Pelayanan Kami?</h5>
            </div>

            <div class="testimoni">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <img id="bor1" src="/img/testimoni-testi prof1-1.png" alt="">
                                    <img src="/img/testimoni-testi prof1-2.png" alt="">
                                    <img id="bor2" src="/img/testimoni-testi prof1-3.png" alt="">
                                </div>
                                <div class="col-lg-8 col-md-6 col-sm-12">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12">
                                            <h1><b>Angela Syafitri</b></h1>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12">
                                            <br>
                                            <br>
                                            <p>Cuci Disini mantap betulsss.. pengerjaannya rapih bersih dan teliti banget. Jadi pengen cuci lagi dechhhh. Btw mas nya ganteng awwwwww</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <img id="bor1" src="/img/testimoni-testi prof1-1.png" alt="">
                                    <img src="/img/testimoni-testi prof1-2.png" alt="">
                                    <img id="bor2" src="/img/testimoni-testi prof1-3.png" alt="">
                                </div>
                                <div class="col-lg-8 col-md-6 col-sm-12">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12">
                                            <h1><b>Angela Syafitri</b></h1>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12">
                                            <br>
                                            <br>
                                            <p>Cuci Disini mantap betulsss.. pengerjaannya rapih bersih dan teliti banget. Jadi pengen cuci lagi dechhhh. Btw mas nya ganteng awwwwww</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <img id="bor1" src="/img/testimoni-testi prof1-1.png" alt="">
                                    <img src="/img/testimoni-testi prof1-2.png" alt="">
                                    <img id="bor2" src="/img/testimoni-testi prof1-3.png" alt="">
                                </div>
                                <div class="col-lg-8 col-md-6 col-sm-12">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12">
                                            <h1><b>Angela Syafitri</b></h1>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12">
                                            <br>
                                            <br>
                                            <p>Cuci Disini mantap betulsss.. pengerjaannya rapih bersih dan teliti banget. Jadi pengen cuci lagi dechhhh. Btw mas nya ganteng awwwwww</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

        </div>
        <a href=""><button id="ulasan">Berikan Ulasan Anda</button></a>
    </div>
</section>

<section class="section-2">
    <div class="container">
        <h1 data-aos="fade-up" data-aos-delay="400" style="margin: 100px 0px 0px 250px;"><b>Galeri Pelanggan</b></h1>
        <h5 data-aos="fade-up" data-aos-delay="600" style="margin: -5px 0px 80px 250px;"><b>Dokumentasi Pengerjaan Baik Sebelum Dan Sesudah</b></h5>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" style="padding: 20px;">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-3" data-aos="fade-left" data-aos-delay="800">
                            <img src="/img/galery-1.png" class="d-block w-100" alt="Gambar 1">
                        </div>
                        <div class="col-md-3" data-aos="fade-left" data-aos-delay="900">
                            <img src="/img/galery-2.png" class="d-block w-100" alt="Gambar 2">
                        </div>
                        <div class="col-md-3" data-aos="fade-left" data-aos-delay="1000">
                            <img src="/img/galery-3.png" class="d-block w-100" alt="Gambar 3">
                        </div>
                        <div class="col-md-3" data-aos="fade-left" data-aos-delay="1100">
                            <img src="/img/galery-4.png" class="d-block w-100" alt="Gambar 4">
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>