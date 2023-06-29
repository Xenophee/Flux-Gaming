<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@500&family=Noto+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../public/assets/bootstrap-icons-1.10.3/bootstrap-icons.css">
    <link rel="stylesheet" href="../public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/assets/css/theme/<?= $css ?>.css">
    <link rel="stylesheet" href="../public/assets/css/main.css">
    <title>Accueil</title>
</head>

<body>

    <header>
        <div class="container px-0">
            <span class="siteTitle">FLUX-GAMING</span>
            <nav class="navbar navbar-expand-md navbar-dark">
                <button class="navbar-toggler ms-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav main-nav ms-2">
                            <li class="nav-item">
                                <a class="nav-link px-5 <?php if (basename($_SERVER['PHP_SELF']) == 'home_controller.php') echo ' active'; ?>" aria-current="page" href="../controllers/home_controller.php">Accueil</a>
                            </li>

                            <?php
                            foreach ($subjects as $key => $value) { ?>
                                <li class="nav-item">
                                    <a class="nav-link px-5 <?php if ((basename($_SERVER['PHP_SELF']) == 'page_controller.php') && (isset($_GET['flux']) && $_GET['flux'] == $key)) echo ' active'; ?>" href="../controllers/page_controller.php?flux=<?= $key ?>"><?= $subjects[$key]->title ?></a>
                                </li>
                            <?php } ?>

                            

                        </ul>
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-lg-3">
                            <li class="nav-item">
                                <a class="nav-link px-5 <?php if (basename($_SERVER['PHP_SELF']) == 'parameters_controller.php') echo ' active'; ?>" href="../controllers/parameters_controller.php"><i class="bi bi-gear"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>