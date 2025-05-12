<?php include '../components/header.php'; ?>

<div class="card">]
    <h2>About <?php echo $theme ?></h2>
    <p><?php echo $theme ?> is a Japanese anime series that follows the story of Gotoh Hitori, a shy and introverted
        girl who dreams of becoming a rock star. She joins the Kessoku Band and embarks on a journey of self-discovery,
        friendship, and music.</p>

    <div class="about-images">
        <figure>
            <img src="<?php echo BASE_URL; ?>assets/img/about_1.jpg" alt="Screenshot 1" width="400" height="400">
            <figcaption>Gotoh Hitori, the main character of <?php echo $theme ?>.</figcaption>
        </figure>
        <figure>
            <img src="<?php echo BASE_URL; ?>assets/img/about_2.jpg" alt="Screenshot 2" width="400" height="400">
            <figcaption>Ikuyo Kita, the rhythm guitarist and leader singer of <?php echo $theme ?>.</figcaption>
        </figure>
    </div>
</div>

<?php include '../components/back_button.php'; ?>
<?php include '../components/footer.php'; ?>