<?php include 'components/header.php'; ?>

<div class="card">
    <h2>Welcome to the <?php echo $theme; ?> Fan Page!</h2>
    <p>This is a fan page dedicated to the amazing anime series <?php echo $theme; ?>.</p>
    <p>Explore the characters, episodes, and more!</p>
</div>

<div class="card">
    <h3>PHP Basics</h3>
    <?php
    $members = [
        'Gotoh Hitori',
        'Ikuyo Kita',
        'Ichiji Nijika',
        'Yamada Ryo'
    ];
    if ($isBind) {
        echo "<p>Kessoku Band Members:</p><ul>";
        for ($i = 0; $i < count($members); $i++) {
            echo "<li>" . $members[$i] . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Not a member of Kessoku Band</p>";
    }
    ?>
</div>

<?php include 'components/footer.php'; ?>