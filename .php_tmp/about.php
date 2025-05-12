<?php include '../components/header.php'; ?>

<div class="card">
    <h2>About <?php echo $theme ?></h2>
    <p><?php echo $theme ?> is a Japanese anime series that follows the story of Gotoh Hitori, a shy and introverted
        girl who dreams of becoming a rock star. She joins the Kessoku Band and embarks on a journey of self-discovery,
        friendship, and music.</p>

    <div class="about-images">
        <figure>
            <img src="<?php echo BASE_URL; ?>assets/img/Hamaji Aki 1.jpg" alt="Hamaji Aki 1" width="225" height="350">
            <figcaption>Hamaji Aki</figcaption>
            <p>Hamaji Aki is the mangaka and creator of <?php echo $theme ?>.</p>
        </figure>
        <figure>
            <img src="<?php echo BASE_URL; ?>assets\img\Kerorira 1.jpg" alt="Screenshot 2" width="400" height="400">
            <figcaption>Kerorira</figcaption>
            <p>Hamaji Aki is the mangaka and creator of <?php echo $theme ?>.</p>
        </figure>
        <figure>
            <img src="<?php echo BASE_URL; ?>assets/img/about_3.jpg" alt="Screenshot 3" width="400" height="400">
            <figcaption>CloverWorks</figcaption>
            <p>Hamaji Aki is the mangaka and creator of <?php echo $theme ?>.</p>
        </figure>
        <figure>
            <img src="<?php echo BASE_URL; ?>assets/img/about_4.jpg" alt="Screenshot 4" width="400" height="400">
            <figcaption>The anime</figcaption>
            <p>Hamaji Aki is the mangaka and creator of <?php echo $theme ?>.</p>
        </figure>
    </div>
</div>

<?php include '../components/back_button.php'; ?>
<?php include '../components/footer.php'; ?>