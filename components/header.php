<?php include_once __DIR__ . '/../utils/config.php'; ?>
<!DOCTYPE html>
<html>

    <head>
        <title><?php echo $theme; ?> Fan Page</title>
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">
    </head>

    <body>
        <header>
            <h1><?php echo $theme; ?></h1>
            <nav>
                <ul>
                    <li><a href="<?php echo BASE_URL; ?>index.php">Home</a></li>
                    <li><a href="<?php echo BASE_URL; ?>page\characters.php">Characters</a></li>
                    <li><a href="<?php echo BASE_URL; ?>page/episodes.php">Episodes</a></li>
                    <li><a href="<?php echo BASE_URL; ?>page/about.php">About</a></li>
                </ul>
            </nav>
        </header>