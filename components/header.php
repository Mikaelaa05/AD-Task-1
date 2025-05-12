<?php include_once __DIR__ . '/../utils/config.php'; ?>
<!DOCTYPE html>
<html>

    <head>
        <title><?php echo $theme; ?> Fan Page</title>

        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">

        <?php
        $currentPage = basename($_SERVER['PHP_SELF'], '.php');
        $cssPath = BASE_URL . "page/assets/css/$currentPage.css";
        if (file_exists(__DIR__ . "/../page/assets/css/$currentPage.css")) {
            echo "<link rel='stylesheet' href='$cssPath'>";
        } else {
            echo "<link rel='stylesheet' href='" . BASE_URL . "assets/css/default.css'>";
        }
        ?>
        <link rel="stylesheet" href="<?php echo $cssPath; ?>">
    </head>

    <body>
        <header>
            <h1><?php echo $theme; ?></h1>
            <nav>
                <ul>
                    <li><a href="<?php echo BASE_URL; ?>index.php">Home</a></li>
                    <li><a href="<?php echo BASE_URL; ?>page/about.php">About</a></li>
                    <li><a href="<?php echo BASE_URL; ?>page/characters.php">Characters</a></li>
                </ul>
            </nav>
        </header>