<header class="container-fluid header">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div>
                    <a href="index.php" class="navbar-brad"><img src="img/лого-2-1-transformed (1).png"></a>
                </div>

                <h1>
                    <a ?php echo BASE_URL ?>"></a>
                </h1>
            </div>
            <nav class="col-8">

                <ul>

                    <li>
                        <?php if (isset($_SESSION['id'])) : ?> <a class="header-text" href="#">
                                <?php echo $_SESSION['login']; ?>
                            </a>

                            <ul>
                                <?php if ($_SESSION['admin']) : ?>
                                    <li><a href="<?php echo BASE_URL . "/admin/posts/index.php"; ?>">Админ панель</a></li>
                                <?php endif; ?>
                                <li><a class="header-text" href="<?php echo BASE_URL . "/logout.php"; ?>">Выход</a></li>
                            </ul>
                        <?php else : ?>



                    <li><a class="header-text" href="<?php echo BASE_URL . "/log.php"; ?>"><i class="fa fa-user user"></i>Войти</a></li>







                <?php endif; ?>

                </li>
                </ul>
            </nav>
        </div>
    </div>
</header>