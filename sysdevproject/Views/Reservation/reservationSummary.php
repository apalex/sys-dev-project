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
    <link rel="stylesheet" href=<?= $path . "/CSS/reserve.css" ?>>
</head>
<body>
    <?php include_once dirname(__DIR__)."/nav.php"; ?>

    <h1>Thank You!</h1>

    <p>A confirmation has been sent to your email.</p>

    <fieldset style="text-align: left; margin: 0 auto;">
        <h1>Summary</h1>

        <label>Station: </label>
        <input type="text" disabled value="<?php echo $data['station']?>"><br>
        <label>Name:</label>
        <div class="name-inputs">
            <input type="text" disabled value="<?php echo $data['firstName']?>">
            <input type="text" disabled value="<?php echo $data['lastName']?>">
        </div>
        <label>Email:</label>
        <input type="text" disabled value="<?php echo $data['email']?>"><br>
        <label>Phone:</label>
        <input type="text" disabled value="<?php echo $data['phone']?>"><br>
        <label>Time of Reservation:</label>
        <input type="text" disabled value="<?php echo $data['hour'].":".$data['minute']." ".$data['morningOrNight']?>"><br>
        <label>Length of Reservation:</label>
        <input type="text" disabled value="<?php
            switch($data['length']){
                case "30":
                    echo "30 minutes";
                    break;
                case "60":
                    echo "1 hour";
                    break;
                case "120":
                    echo "2 hours";
                    break;
            }
        ?>"><br>
        <label>Reservation Date:</label>
        <input type="text" disabled value="<?php echo $data['reservationDate']?>"><br>
    </fieldset>

    <?php include_once dirname(__DIR__) . "/footer.php"; ?>
</body>
</html>