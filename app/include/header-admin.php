<header class="container-fluid header">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div>
                    <a href="index.php" class="navbar-brad"><img src="/img/лого-2-1-transformed (1).png"></a>
                </div>

                <h1>
                    <a ?php echo BASE_URL ?></a>
                </h1>
            </div>
            <nav class="col-8">
                <ul>
                    <li>

                        <a href="#">
                            <i class="fa fa-user user">
                                <?php echo $_SESSION['login']; ?>
                        </a>
                    <li>
                        <a href="<?php echo BASE_URL . "/logout.php"; ?>">Выход</a>
                    </li>

                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>