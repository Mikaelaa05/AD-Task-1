<?php include 'components/header.php'; ?>

<section>
    <h2>Welcome to the <?php echo $theme; ?> Fan Page!</h2>
    <p>This is a fan page dedicated to the amazing anime series <?php echo $theme; ?>.</p>
    <p>Explore the characters, episodes, and more!</p>

    <?php
    echo "<p>This project demonstrates declarations, conditionals, and loops.</p>";

    $band = "Kessoku Band";

    echo "<p>The main band is: $band, consisting of: </p>";

    $members = ["Gotoh Hitori", "Ikuyo Kita", "Ichiji Nijika", "Yamada Ryo"];

    echo "<ul>";
    for ($i = 0; $i < count($members); $i++) {
        echo "<li>Member " . $members[$i] . ": $members[$i]</li>";
    }
    echo "</ul>";

    $episodes = [
        "Episode 1" => "Bocchi-chan is a loner.",
        "Episode 2" => "Bocchi-chan meets the band.",
        "Episode 3" => "The band prepares for their first gig.",
        "Episode 4" => "Bocchi-chan faces her fears.",
    ];

    $featured = "Gotoh Hitori";
    if ($featured == "Gotoh Hitori") {
        echo "<p>Featured character: $featured, also known as Bocchi-chan!</p>";
    } else {
        echo "<p>Featured character: This is NOT Gotoh Hitori</p>";
    }

    ?>
</section>
<?php include 'components/footer.php'; ?>