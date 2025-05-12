<?php include '../components/header.php'; ?>

<div class="card">
    <h2>About <?php echo $theme ?></h2>
    <p><?php echo $theme ?> is a Japanese anime series that follows the story of Gotoh Hitori, a shy and introverted
        girl who dreams of becoming a rock star. She joins the Kessoku Band and embarks on a journey of self-discovery,
        friendship, and music.</p>

    <div class="about-images">
        <figure>
            <img src="<?php echo BASE_URL; ?>assets\img\Hamaji Aki 1.jpg" alt="Hamaji Aki 1" width="225" height="350">
            <figcaption>Hamaji Aki is the mangaka and creator of <?php echo $theme ?>.</figcaption>
        </figure>
        <figure>
            <img src="<?php echo BASE_URL; ?>assets/img/about_2.jpg" alt="Screenshot 2" width="400" height="400">
            <figcaption>Kita Ikuyo, the rhythm guitarist and lead singer of Kessoku Band.</figcaption>
        </figure>
        <figure>
            <img src="<?php echo BASE_URL; ?>assets/img/about_3.jpg" alt="Screenshot 3" width="400" height="400">
            <figcaption>Ichiji Nijika, the drummer and leader of Kessoku Band.</figcaption>
        </figure>
        <figure>
            <img src="<?php echo BASE_URL; ?>assets/img/about_4.jpg" alt="Screenshot 4" width="400" height="400">
            <figcaption>Yamada Ryo, the bassist and composer of Kessoku Band.</figcaption>
        </figure>
    </div>
</div>

<?php include '../components/back_button.php'; ?>
<?php include '../components/footer.php'; ?>