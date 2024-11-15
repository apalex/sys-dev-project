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
    <link rel="stylesheet" href=<?= $path . "/CSS/location.css" ?>>
</head>

<body>
    <?php include_once dirname(__DIR__) . "/nav.php"; ?>
    <div class="container">
        <h1>Pierre Elliott Trudeau Airport</h1>
        <p>Near Gate 53</p>

        <div class="location-image-map">
            <img src=<?=$path."/Images/YULAirport.png"?> id="YULmap" alt="Map Image">
        </div>

    </div>

    <?php include_once dirname(__DIR__) . "/footer.php"; ?>
</body>

</html>