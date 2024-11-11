<?php
$path = dirname($_SERVER['SCRIPT_NAME']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?=$path."/CSS/location.css"?>>
    <title>Cyber Station</title>
    <div class="dynamic-content">
    </div>
</head>

<body>
    <?php include_once dirname(__DIR__) . "/nav.php"; ?>
    <div class="container">
        <h1>Locations</h1>
        <p>A grandiose time awaits you at CyberStation!</p>

        <div class="location-icon">
            <img src=<?=$path."/Images/placeholder.png"?> alt="Location Icon">
        </div>
    </div>
    <h2 class="airport-header">Pierre Elliott Trudeau Airport</h2>
    <div class="location-section">
        <div class="location-details">
            <p>Pierre Elliott Trudeau Airport</p>
            <h2>YUL</h2>
            <p>Near Gate (X)</p>
            <div class="status">
                <span class="open">Open</span>
                <span>6:00am - 9:00pm EST</span>
            </div>
            <a href=<?=$path."/location/YULAirport"?> class="more-info">MORE INFO →</a>
        </div>
        <div class="location-image">    
            <img src=<?=$path."/Images/CyberStation.png"?> id="cyberStation" alt="Airport Image">
        </div>
    </div>

    <!-- <div class="hex-background">
        <div class="hex-left">
            <img class="hex" src="Grey-Hexagon-9x10-1.jpg" alt="hex">
            <img class="hex" src="Grey-Hexagon-9x10-1.jpg" alt="hex">
        </div>
        <div class="hex-right">
            <img class="hex" src="Grey-Hexagon-9x10-1.jpg" alt="hex">
            <img class="hex" src="Grey-Hexagon-9x10-1.jpg" alt="hex">
        </div>
    </div> -->

</body>

</html>