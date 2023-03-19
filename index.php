<?php include("path.php");
    include 'app/database/db.php';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/hi.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>my Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap');
    </style>
</head>
<link rel="stylesheet" href="hi.css">
<body>



<!--php kod -->

<?php include("app/include/header.php"); ?>

<!--block karuseli start -->
<div class="container">
    <div class="row">
        <h2 class="slider-title">Магазин Видеокарт</h2>
        <div id="carouselExampleCaptions " class="carousel slide">



                    <img src="images/1953.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>my Card</h5>
                        <p>Сайт где ты можеш искать аналитиков </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
<!--
        <div  class="section search">
            <h3>Serach</h3>
            <form action="/" metod="post">
                <input type="text" name="search-term" class="text-input" placeholder="Serach...">
            </form>

            <h3>Часто задаваемые предложения</h3>
            <ul>
        <li><a href="#">Дорогие</a></li>
        <li><a href="#">Дешовие</a></li>
        <li><a href="#">Средние</a></li>
        <li><a href="#">Редкие</a></li>
        <li><a href="#">Новые</a></li>
        <li><a href="#">Старые</a></li>
        <li><a href="#">Использование</a></li>
            </ul>

    </div>
    -->











        <div class="container">
                    <h4 class="text-center my-5 "><strong>ЧАСТО ЗАДАВАЕМЫЕ</strong></h4>

                                <div class="row text-center">
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card">
                        <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light" data-mdb-ripple-color="light">
                            <img src="images/111.png" class="img-thumbnail" alt="...">
                            <a href="#!">
                                <div class="mask">
                                    <div class="d-flex justify-content-start align-items-end h-100">
                                        <h5><span class="badge bg-primary ms-2"></span></h5>
                                    </div>
                                </div>
                                <div class="hover-overlay">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </div>
                            </a>
                        </div>
                        <div class="card-body">
                            <a href="http://localhost/4000/dinamic-site/please%20register.php/" class="text-reset">
                                <h5 class="card-title mb-3">Allrival </h5>
                            </a>
                            <a href="" class="text-reset">

                            </a>

                        </div>
                    </div>
                </div>




                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <div class="bg-image hover-zoom ripple ripple-surface-light" data-mdb-ripple-color="light" style="">
                            <img src="images/112.png" class="img-thumbnail" alt="...">
                            <a href="#!">
                                <div class="mask">
                                    <div class="d-flex justify-content-start align-items-end h-100">
                                        <h5><span class="badge bg-success ms-2"></span></h5>
                                    </div>
                                </div>
                                <div class="hover-overlay">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </div>
                            </a>
                        </div>
                        <div class="card-body">
                            <a href="http://localhost/4000/dinamic-site/please%20register.php/" class="text-reset">
                                <h5 class="card-title mb-3">Allpositions</h5>
                            </a>
                            <a href="" class="text-reset">

                            </a>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
                            <img src="images/113.png" class="img-thumbnail" alt="...">
                            <a href="#!">
                                <div class="mask">
                                    <div class="d-flex justify-content-start align-items-end h-100">
                                        <h5><span class="badge bg-danger ms-2"></span></h5>
                                    </div>
                                </div>
                                <div class="hover-overlay">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </div>
                            </a>
                        </div>
                        <div class="card-body">
                            <a href="http://localhost/4000/dinamic-site/please%20register.php/" class="text-reset">
                                <h5 class="card-title mb-3">Topvisor.ru</h5>
                            </a>
                            <a href="" class="text-reset">

                            </a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card">
                        <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
                            <img src="images/112.png" class="img-thumbnail" alt="...">
                            <a href="#!">
                                <div class="mask">
                                    <div class="d-flex justify-content-start align-items-end h-100">
                                        <h5>
                                            <span class="badge bg-success ms-2"></span><span class="badge bg-danger ms-2"></span>
                                        </h5>
                                    </div>
                                </div>
                                <div class="hover-overlay">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </div>
                            </a>
                        </div>
                        <div class="card-body">
                            <a href="http://localhost/4000/dinamic-site/please%20register.php/" class="text-reset">
                                <h5 class="card-title mb-3">Top-inspector.ru</h5>
                            </a>
                            <a href="" class="text-reset">

                            </a>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light" data-mdb-ripple-color="light">
                            <img src="images/111.png" class="img-thumbnail" alt="...">
                            <a href="#!">
                                <div class="mask">
                                    <div class="d-flex justify-content-start align-items-end h-100"></div>
                                </div>
                                <div class="hover-overlay">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </div>
                            </a>
                        </div>
                        <div class="card-body">
                            <a href="" class="text-reset">
                                <h5 class="card-title mb-3">Seolib.ru</h5>
                            </a>
                            <a href="" class="text-reset">

                            </a>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
                            <img src="images/113.png" class="img-thumbnail" alt="...">
                            <a href="#!">
                                <div class="mask">
                                    <div class="d-flex justify-content-start align-items-end h-100">
                                        <h5>
                                            <span class="badge bg-primary ms-2"></span><span class="badge bg-success ms-2"></span><span class="badge bg-danger ms-2"></span>
                                        </h5>
                                    </div>
                                </div>
                                <div class="hover-overlay">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </div>
                            </a>
                        </div>
                        <div class="card-body">
                            <a href="http://localhost/4000/dinamic-site/please%20register.php/" class="text-reset">
                                <h5 class="card-title mb-3">Seoplane.ru</h5>
                            </a>
                            <a href="" class="text-reset">

                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>




<div class="container" >
    <h4 class="text-center mb-5"><strong>Популярние</strong></h4>

    <div class="row text-center">
        <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
                <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light" data-mdb-ripple-color="light">
                    <img src="images/114.png" class="img-thumbnail" alt="...">
                    <a href="#!">
                        <div class="mask">
                            <div class="d-flex justify-content-start align-items-end h-100">
                                <h5><span class="badge bg-primary ms-2"></span></h5>
                            </div>
                        </div>
                        <div class="hover-overlay">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </div>
                    </a>
                </div>
                <div class="card-body">
                    <a href="http://localhost/4000/dinamic-site/please%20register.php/" class="text-reset">
                        <h5 class="card-title mb-3">Semrush</h5>
                    </a>
                    <a href="" class="text-reset">

                    </a>

                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <div class="bg-image hover-zoom ripple ripple-surface-light" data-mdb-ripple-color="light" style="">
                    <img src="images/111.png" class="img-thumbnail" alt="...">
                    <a href="#!">
                        <div class="mask">
                            <div class="d-flex justify-content-start align-items-end h-100">
                                <h5><span class="badge bg-success ms-2"></span></h5>
                            </div>
                        </div>
                        <div class="hover-overlay">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </div>
                    </a>
                </div>
                <div class="card-body">
                    <a href="http://localhost/4000/dinamic-site/please%20register.php/" class="text-reset">
                        <h5 class="card-title mb-3">Serpstat</h5>
                    </a>
                    <a href="" class="text-reset">

                    </a>

                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
                    <img src="images/113.png" class="img-thumbnail" alt="...">
                    <a href="#!">
                        <div class="mask">
                            <div class="d-flex justify-content-start align-items-end h-100">
                                <h5><span class="badge bg-danger ms-2"></span></h5>
                            </div>
                        </div>
                        <div class="hover-overlay">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </div>
                    </a>
                </div>
                <div class="card-body">
                    <a href="http://localhost/4000/dinamic-site/please%20register.php/" class="text-reset">
                        <h5 class="card-title mb-3">Mozenda </h5>
                    </a>
                    <a href="" class="text-reset">

                    </a>

                </div>
            </div>
        </div>
    </div>

    <div class="row text-center">
        <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
                <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
                    <img src="images/111.png" class="img-thumbnail" alt="...">
                    <a href="#!">
                        <div class="mask">
                            <div class="d-flex justify-content-start align-items-end h-100">
                                <h5>
                                    <span class="badge bg-success ms-2"></span><span class="badge bg-danger ms-2"></span>
                                </h5>
                            </div>
                        </div>
                        <div class="hover-overlay">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </div>
                    </a>
                </div>
                <div class="card-body">
                    <a href="http://localhost/4000/dinamic-site/please%20register.php/" class="text-reset">
                        <h5 class="card-title mb-3">Automation Anywhere </h5>
                    </a>
                    <a href="" class="text-reset">

                    </a>

                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light" data-mdb-ripple-color="light">
                    <img src="images/112.png" class="img-thumbnail" alt="...">
                    <a href="#!">
                        <div class="mask">
                            <div class="d-flex justify-content-start align-items-end h-100"></div>
                        </div>
                        <div class="hover-overlay">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </div>
                    </a>
                </div>
                <div class="card-body">
                    <a href="http://localhost/4000/dinamic-site/please%20register.php/" class="text-reset">
                        <h5 class="card-title mb-3">Beautiful Soup </h5>
                    </a>
                    <a href="" class="text-reset">

                    </a>

                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
                    <img src="images/114.png" class="img-thumbnail" alt="...">

                    <a href="#!">
                        <div class="mask">
                            <div class="d-flex justify-content-start align-items-end h-100">
                                <h5>
                                    <span class="badge bg-primary ms-2"></span><span class="badge bg-success ms-2"></span><span class="badge bg-danger ms-2"></span>
                                </h5>
                            </div>
                        </div>
                        <div class="hover-overlay">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </div>
                    </a>
                </div>
                <div class="card-body">
                    <a href="http://localhost/4000/dinamic-site/please%20register.php/" class="text-reset">
                        <h5 class="card-title mb-3">Web Harvy </h5>
                    </a>
                    <a href="" class="text-reset">

                    </a>

                </div>
            </div>
        </div>
    </div>
</div>









<!--instagram icon -->

<!--  instagram icon  -->
<!--
<span class="title_soc">
     Ծրագիր            </span>
     -->
<div class="container">
    <form class="row row justify-content-md-center" method="post" action="login.html">
        <div class="mb-3 col-md-auto">
            <head>
                <!DOCTYPE html>
                <html>
                <head>

                </head>

                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>footer</title>

            </div>
            <hr>
        </div>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>footer</title>


            <!-- FOOTER -->

            <link rel="stylesheet" href="hi.css">
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h3>About Us</h3>
                            <p>We are a team of passionate programmers who created this site so that you can see different and better analysts. Our goal is to show people the best website analysts.</p>
                        </div>
                        <div class="col-md-3">
                            <h3>Quick Links</h3>
                            <ul>
                                <li><a href="http://localhost/4000/dinamic-site/">Home</a></li>
                                <li><a href="http://localhost/4000/dinamic-site/reg.php">Reg in site</a></li>
                                <li><a href="http://localhost/4000/dinamic-site/about.php">About Us</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h3>Connect with Us</h3>
                            <ul>
                                <li><a href="https://twitter.com/cod">Twitter</a></li>
                                <li><a href="https://www.facebook.com/cod">Facebook</a></li>
                                <li><a href="https://www.linkedin.com/company/cod">LinkedIn</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p>&copy; 2023 Cod. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- FOOTER -->


</html>

<!-- FOOTER -->

</html>
</body>
</html>
