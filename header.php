<header class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1>
                <a href="http://localhost/4000/dinamic-site/">my Card</a>
                    </h1>

            </div>
            <nav class="col-8">
                <ul>
                    <li><a href="http://localhost/4000/dinamic-site/">Главная </a></li>
                    <li><a href="about.php">О нас</a></li>
                    <li><a href="#">услуги </a></li>


                    <li>

                        <?php if (isset($_SESSION['login'])):?>
                        <a href="#">
                            <i class="fa fa-user"></i>
                            <?php echo $_SESSION['admin']; ?>

                        </a>
                        <ul>
                            <li><a href="login.php">Регистрация</a></li>
                            <li><a href="reg.php">Войти </a></li>


                            <?php else: ?>
                            <a href="#">
                                <i class="fa fa-user"></i>
                             ...
                            </a>

                            <ul>

                                <li><a href="reg.php">выход </a></li>
                            </ul>
                                <?php endif; ?>

                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>



