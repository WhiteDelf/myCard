<?php include("path.php"); ?>
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


<div class="container">
    <h4 class="text-center my-5 "><strong>ЧАСТО ЗАДАВАЕМЫЕ</strong></h4>

    <div class="row text-center">
        <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
                <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light" data-mdb-ripple-color="light">
                    <img src="images/113.png" class="img-thumbnail" alt=" ">
                    <a href=" !">
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
                    <a href="https://serpstat.com/ru/promo/start-trial/?admitad_uid=b1b13e285296770802e5c9692aa0b100&utm_source=admitad&utm_medium=cpa" class="text-reset">
                        <h5 class="card-title mb-3"><?php
                            include_once ('simplehtmldom_1_9_1/simple_html_dom.php');
                            $url = "https://serpstat.com/ru/promo/start-trial/?admitad_uid=b1b13e285296770802e5c9692aa0b100&utm_source=admitad&utm_medium=cpa"; // замените на URL-адрес вашего сайта

                            $ch = curl_init();
                            curl_setopt($ch, CURLOPT_URL, $url);
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                            $response = curl_exec($ch);

                            if($response === false) {
                                echo 'Ошибка CURL: ' . curl_error($ch);
                            } else {
                                $html = str_get_html($response); // создаем объект HTML-документа
                                //echo "<pre>";print_r($html->find('div'));die;
                                $title = $html->find('title', 0)->plaintext; // находим заголовок страницы

                                echo $title;
                            }

                            curl_close($ch);?> </h5>
                    </a>
                    <a href="" class="text-reset">
                        <p>NEW</p>
                    </a>

                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <div class="bg-image hover-zoom ripple ripple-surface-light" data-mdb-ripple-color="light" style="">
                    <img src="images/113.png" class="img-thumbnail" alt="...">
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
                    <a href="https://allrival.com/" class="text-reset">
                        <h5 class="card-title mb-3"><?php
                            include_once ('simplehtmldom_1_9_1/simple_html_dom.php');
                            $url = "https://allrival.com/"; // замените на URL-адрес вашего сайта

                            $ch = curl_init();
                            curl_setopt($ch, CURLOPT_URL, $url);
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                            $response = curl_exec($ch);

                            if($response === false) {
                                echo 'Ошибка CURL: ' . curl_error($ch);
                            } else {
                                $html = str_get_html($response); // создаем объект HTML-документа
                                //echo "<pre>";print_r($html->find('div'));die;
                                $title = $html->find('title', 0)->plaintext; // находим заголовок страницы

                                echo $title;
                            }

                            curl_close($ch);?></h5>
                    </a>
                    <a href="" class="text-reset">
                        <p>NEW</p>
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
                    <a href="https://allrival.com/" class="text-reset">
                        <h5 class="card-title mb-3"><?php
                            include_once ('simplehtmldom_1_9_1/simple_html_dom.php');
                            $url = "https://allrival.com/"; // замените на URL-адрес вашего сайта

                            $ch = curl_init();
                            curl_setopt($ch, CURLOPT_URL, $url);
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                            $response = curl_exec($ch);

                            if($response === false) {
                                echo 'Ошибка CURL: ' . curl_error($ch);
                            } else {
                                $html = str_get_html($response); // создаем объект HTML-документа
                                //echo "<pre>";print_r($html->find('div'));die;
                                $title = $html->find('title', 0)->plaintext; // находим заголовок страницы

                                echo $title;
                            }

                            curl_close($ch);?></h5>
                    </a>
                    <a href="" class="text-reset">
                        <p>OLD</p>
                    </a>

                </div>
            </div>
        </div>
    </div>

    <div class="row text-center">
        <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
                <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
                    <img src="images/113.png" class="img-thumbnail" alt="...">
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
                    <a href="https://allpositions.ru/" class="text-reset">
                        <h5 class="card-title mb-3"><?php
                            include_once ('simplehtmldom_1_9_1/simple_html_dom.php');
                            $url = "https://allpositions.ru/"; // замените на URL-адрес вашего сайта

                            $ch = curl_init();
                            curl_setopt($ch, CURLOPT_URL, $url);
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                            $response = curl_exec($ch);

                            if($response === false) {
                                echo 'Ошибка CURL: ' . curl_error($ch);
                            } else {
                                $html = str_get_html($response); // создаем объект HTML-документа
                                //echo "<pre>";print_r($html->find('div'));die;
                                $title = $html->find('title', 0)->plaintext; // находим заголовок страницы

                                echo $title;
                            }

                            curl_close($ch);?></h5>
                    </a>
                    <a href="" class="text-reset">
                        <p>NEW</p>
                    </a>

                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light" data-mdb-ripple-color="light">
                    <img src="images/113.png" class="img-thumbnail" alt="...">
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
                    <a href="https://topvisor.com/ru/" class="text-reset">
                        <h5 class="card-title mb-3"><?php
                            include_once ('simplehtmldom_1_9_1/simple_html_dom.php');
                            $url = "https://topvisor.com/ru/#"; // замените на URL-адрес вашего сайта

                            $ch = curl_init();
                            curl_setopt($ch, CURLOPT_URL, $url);
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                            $response = curl_exec($ch);

                            if($response === false) {
                                echo 'Ошибка CURL: ' . curl_error($ch);
                            } else {
                                $html = str_get_html($response); // создаем объект HTML-документа
                                //echo "<pre>";print_r($html->find('div'));die;
                                $title = $html->find('title', 0)->plaintext; // находим заголовок страницы

                                echo $title;
                            }

                            curl_close($ch);?></h5>
                    </a>
                    <a href="" class="text-reset">
                        <p>NEW</p>
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
                    <a href="https://seolib.ru/?ref_id=25758" class="text-reset">
                        <h5 class="card-title mb-3"><?php
                            include_once ('simplehtmldom_1_9_1/simple_html_dom.php');
                            $url = "https://seolib.ru/?ref_id=25758"; // замените на URL-адрес вашего сайта

                            $ch = curl_init();
                            curl_setopt($ch, CURLOPT_URL, $url);
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                            $response = curl_exec($ch);

                            if($response === false) {
                                echo 'Ошибка CURL: ' . curl_error($ch);
                            } else {
                                $html = str_get_html($response); // создаем объект HTML-документа
                                //echo "<pre>";print_r($html->find('div'));die;
                                $title = $html->find('title', 0)->plaintext; // находим заголовок страницы

                                echo $title;
                            }

                            curl_close($ch);?></h5>
                    </a>
                    <a href="" class="text-reset">
                        <p>NEW</p>
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>

<!--tver -->
<!--
<div class="container">
    <div class="center">
<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
    <div class="btn-group me-2" role="group" aria-label="First group">
        <button type="button" class="btn btn-primary">1</button>
        <button type="button" class="btn btn-primary">2</button>
        <button type="button" class="btn btn-primary">3</button>
        <button type="button" class="btn btn-primary">4</button>
    </div>
</div>
</div>
-->

<!-- Pagination
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <li class="page-item disabled">
            <a class="page-link">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="111.php">1</a></li>
        <li class="page-item"><a class="page-link" href="111(2).php">2</a></li>
        <li class="page-item"><a class="page-link" href="111(3).php">3</a></li>
        <li class="page-item">
            <a class="page-link" href="111(2).php">Next</a>
        </li>
    </ul>
</nav>



 Pagination -->
<!-- FOOTER -->

<link rel="stylesheet" href="hi.css">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>About Us</h3>
                <p>We are a team of passionate coders who love to build amazing things with technology. Our goal is to share our knowledge and help others become better developers.</p>
            </div>
            <div class="col-md-3">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/blog/">Blog</a></li>
                    <li><a href="/contact/">Contact Us</a></li>
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