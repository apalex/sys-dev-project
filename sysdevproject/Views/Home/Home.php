<?php
$path = dirname($_SERVER['SCRIPT_NAME']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyber Station</title>
    <link rel="icon" type="image/x-icon" href="Images/cyberStation.ico">
    <link rel="stylesheet" href=<?= $path . "/CSS/homepage.css" ?>>
</head>
<body>
    <?php include_once dirname(__DIR__) . "/nav.php"; ?>

    <main>
        <!-- Top Image Section -->
        <div class="top-image">
            <img src="<?=$path?>/Images/headerimage.png" alt="Main CyberStation Image">
        </div>

        <!-- How It Works Section -->
        <section class="how-it-works">
    <h2>How Cyber Station Works</h2>
    <div class="features">
        <!-- Replace each image source with your actual image paths -->
        <div class="feature-item">
            <img src="<?=$path?>/Images/placeholder.png" alt="placeholder">
            <p>Find a CyberStation
            location at YUL Airport</p>
        </div>
        <div class="feature-item">
            <img src="<?=$path?>/Images/hour.png" alt="Time">
            <p>Decide how long you
would like to play video
games.</p>
        </div>
        <div class="feature-item">
            <img src="<?=$path?>/Images/wifi.png" alt="High-Speed WiFi">
            <p>Sit back and enjoy
gaming at your
sanitized station.</p>
        </div>
        <div class="feature-item">
            <img src="<?=$path?>/Images/airplane.png" alt="Airplane">
            <p>Time to board your
flight relaxed and
entertained.</p>
        </div>
    </div>
</section>

        <!-- Location Section -->
        <section class="location">
    <h2>Landing at YUL airport.</h2>
    <div class="location-images">
        <img src="<?=$path?>/Images/CyberStation2.png" alt="Left Image">
        <img src="<?=$path?>/Images/CyberStation.png" alt="right Image">
    </div>
</section>


        <!-- Amenities Section -->
        <section class="amenities">
    <h2>Sit back and enjoy the wait.</h2>
    <p>To level up your experience, CyberStation provides the following amenities.</p>
    <div class="amenity-items">
        <div class="amenity-box">
            <img src="<?=$path?>/Images/playstation.png" alt="Current Gen Gaming">
            <p>Current Gen Gaming</p>
        </div>
        <div class="amenity-box">
            <img src="<?=$path?>/Images/clean.png" alt="Meticulous Cleaning">
            <p>Meticulous Cleaning and Disinfecting</p>
        </div>
        <div class="amenity-box">
            <img src="<?=$path?>/Images/headphones.png" alt="Premium Gaming Headphones">
            <p>Premium Gaming Headphones</p>
        </div>
        <div class="amenity-box">
            <img src="<?=$path?>/Images/charging.png" alt="Charging Stations">
            <p>Charging Stations</p>
        </div>
        <div class="amenity-box">
            <img src="<?=$path?>/Images/snacks.png" alt="Snacks & Beverages">
            <p>Snacks & Beverages</p>
        </div>
        <div class="amenity-box">
            <img src="<?=$path?>/Images/wifi.png" alt="High Speed Internet">
            <p>High Speed Internet</p>
        </div>
    </div>
</section>


        <!-- Pricing Section -->
        <section class="pricing">
            <h2>Prices starting at just $7.99</h2>
            <p>All prices include taxes and apply to all ages.</p>
        </section>

        <!-- About Section -->
        <section class="about">
            <h2>About CyberStation</h2>
            <p>CyberStation is the world’s first premium video game lounge <br>
                    located in airports. Based on how much time they have until
                    their next flight, passengers can enjoy <br> a first class video game
                    experience to make time fly by.</p>
        </section>
    </main>

    <?php include_once dirname(__DIR__) . "/footer.php"; ?>
</body>
</html>
