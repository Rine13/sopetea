<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
            crossorigin="anonymous"
        />
        <!-- Bootstrap Icon -->
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"
        />
        <link rel="stylesheet" href="css/style.css" />

        <!-- AOS scrool -->
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

        <title>Sopetea Home</title>
    </head>

    <body id="home">
        <nav
            class="
                navbar navbar-expand-lg navbar-light
                fixed-top
                shadow-sm
            "
        >
            <div class="container-fluid">
                <a class="navbar-brand warna" href="#home">Sopetea</a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav"
                    aria-controls="navbarNav"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a
                                class="nav-link warna"
                                aria-current="page"
                                href="#home"
                                >Home</a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link warna" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link warna" href="#product"
                                >Product</a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link warna" href="#team">Team</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Jumbotron -->
        <section class="jumbotron text-center" >
            <img src="img/sopet.png" class="logoawal" alt="sopet" width="200"/>
            <h1 class="display-4 judul">Sopetea</h1>
            <p class="lead judul"></p>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path
                    fill="#fff"
                    fill-opacity="1"
                    d="M0,192L30,208C60,224,120,256,180,250.7C240,245,300,203,360,160C420,117,480,75,540,85.3C600,96,660,160,720,202.7C780,245,840,267,900,272C960,277,1020,267,1080,234.7C1140,203,1200,149,1260,117.3C1320,85,1380,75,1410,69.3L1440,64L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"
                ></path>
            </svg>
        </section>
        <!-- end jumbotron -->

        <!-- about -->
        <section id="about">
            <div class="container">
                <div class="row text-center">
                    <div class="col" data-aos="zoom-in-up" data-aos-duration="1000">
                        <h2>About Us</h2>
                    </div>
                </div>
                <div
                    class="
                        row
                        fs-5
                        d-flex
                        justify-content-center
                        align-items-center
                    " 
                >
                    <div class="col-md-6" data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="200">
                        <div class="imglogo">
                            <img src="img/sopetea.png" alt="earl grey" />
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="400">
                        <div class="text-center">
                            <p>
                                Sopet merupakan perusahaan termantul sontolodon
                                biji jakar Lorem ipsum dolor sit amet
                                consectetur, adipisicing elit. Ratione cum
                                voluptatibus illum corporis deserunt quibusdam
                                dolor itaque repudiandae sequi maxime.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path
                    fill="rgb(255, 181, 132)"
                    fill-opacity="1"
                    d="M0,160L40,138.7C80,117,160,75,240,96C320,117,400,203,480,245.3C560,288,640,288,720,282.7C800,277,880,267,960,218.7C1040,171,1120,85,1200,69.3C1280,53,1360,107,1400,133.3L1440,160L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
                ></path>
            </svg>
        </section>

        <!-- product -->
        <section id="product">
            <div class="container">
                <div class="row text-center">
                    <div class="col text-light" data-aos="zoom-in-up" data-aos-duration="1000">
                        <h2 id="product">Our Product</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8" data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="200">
                        <div class="kotak">
                            <h3 class="best">Best Seller</h3>
                            <h4 class="namatea">BoBoTea</h4>
                            <img
                                src="img/tea-top.png"
                                class="gambartea"
                                alt="Bobotea"
                            />
                        </div>
                    </div>
                </div>
                <div class="row mt-3 mb-5">
                    <div class="col-md-6 col-lg-4 mb-3" data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="200">
                        <div class="kotak">
                            <h4 class="namatea">Earl GTea</h4>
                            <img
                                src="img/tea-1.png"
                                class="gambartea"
                                alt="Fluttea"
                            />
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-3" data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="200">
                        <div class="kotak">
                            <h4 class="namatea">FlutTea</h4>
                            <img
                                src="img/tea-2.png"
                                class="gambartea"
                                alt="earl grey"
                            />
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-3" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="200">
                        <div class="kotak">
                            <h4 class="namatea">PyTea</h4>
                            <img
                                src="img/tea-3.png"
                                class="gambartea"
                                alt="pytea"
                            />
                        </div>
                    </div>
                </div>
            </div>
            <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="rgb(255, 255, 255)" fill-opacity="1" d="M0,64L34.3,58.7C68.6,53,137,43,206,69.3C274.3,96,343,160,411,170.7C480,181,549,139,617,117.3C685.7,96,754,96,823,106.7C891.4,117,960,139,1029,138.7C1097.1,139,1166,117,1234,112C1302.9,107,1371,117,1406,122.7L1440,128L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg> -->
        </section>

        <!-- Team -->
        <section id="team">
            <div class="container text-center justify-content-center">
                <div class="row">
                    <div class="col" data-aos="zoom-in-up" data-aos-duration="1000">
                        <h2>Our Team</h2>
                    </div>
                </div>
                <div class="row mt-3 mb-5">
                    <div class="col-md-6 col-lg-4 mb-3 centering" data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="200">
                        <div class="kotaktim">
                            <img src="img/tim1.jpg" alt="abi" />
                            <h5>Abi Ichsan Ramadhan</h5>
                            <p>CEO of Sopetea</p>
                            <div class="icon">
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-3 centering" data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="200">
                        <div class="kotaktim">
                            <img src="img/tim1.jpg" alt="abi" />
                            <h5>Abi Ichsan Ramadhan</h5>
                            <p>CEO of Sopetea</p>
                            <div class="icon">
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-3 centering" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="200">
                        <div class="kotaktim">
                            <img src="img/tim1.jpg" alt="abi" />
                            <h5>Abi Ichsan Ramadhan</h5>
                            <p>CEO of Sopetea</p>
                            <div class="icon">
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 mb-3 centering" data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="200">
                        <div class="kotaktim">
                            <img src="img/tim1.jpg" alt="abi" />
                            <h5>Abi Ichsan Ramadhan</h5>
                            <p>CEO of Sopetea</p>
                            <div class="icon">
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 centering" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="200">
                        <div class="kotaktim">
                            <img src="img/tim1.jpg" alt="abi" />
                            <h5>Abi Ichsan Ramadhan</h5>
                            <p>CEO of Sopetea</p>
                            <div class="icon">
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path
                    fill="rgb(255, 181, 132)"
                    fill-opacity="1"
                    d="M0,192L34.3,202.7C68.6,213,137,235,206,208C274.3,181,343,107,411,106.7C480,107,549,181,617,202.7C685.7,224,754,192,823,165.3C891.4,139,960,117,1029,138.7C1097.1,160,1166,224,1234,245.3C1302.9,267,1371,245,1406,234.7L1440,224L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
                ></path>
            </svg>
        </section>

        <!-- footer -->
        <footer class="footer pb-2">
            <p>
                Created by
                <a href="https://www.instagram.com/yoo.bgspr/"
                    >Bagus Prasetio</a
                >
            </p>
        </footer>

        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init({
                once: true,
            });
        </script>

        <!-- gsap -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/TextPlugin.min.js"></script>
        <script>
            gsap.registerPlugin(TextPlugin);
            gsap.to('.lead', {duration: 3, delay: 1.5, text:'Leads The Future | Launching ASAP!'})
            gsap.from('.jumbotron img', {duration: 1.5, y: -100, opacity: 0, ease:'bounce'});
            gsap.from('.navbar', {duration: 1, y: -100, opacity: 0});
            gsap.from('.display-4', {duration: 1, x: -100, opacity: 0});
        </script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"
        ></script>
        <script type="text/javascript" src="js/vanilla-tilt.min.js"></script>
        <script type="text/javascript">
            VanillaTilt.init(document.querySelector(".kotak"), {
                max: 15,
                speed: 1000,
                glare: true,
            });

            //It also supports NodeList
        </script>
    </body>
</html>
