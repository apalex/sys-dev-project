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
    <link rel="stylesheet" href=<?= $path . "/CSS/adminReservations.css" ?>>
</head>
<body>
    <?php include_once dirname(__DIR__)."/nav.php"; ?>

    <main class="admin-container">
    <h1 id="logo">
        <span class="first-letter">C</span>yber <span class="second-letter">S</span>tation
    </h1>

    <table class="reservations">
        <tbody>
        <tr>
            <th>Reservation ID</th>
            <td><?=$_GET['id']?></td>
        </tr>
        <tr>
            <th>Station Number</th>
            <td><?=$data[0]->stationId?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?=$data[0]->u_email?></td>
        </tr>
        <tr>
            <th>Phone</th>
            <td><?=$data[0]->u_phone?></td>
        </tr>
        <tr>
            <th>Reservation Time</th>
            <td><?=$data[0]->reservationTime?></td>
        </tr>
        <tr>
            <th>Length of Reservation</th>
            <td><?=$data[0]->lengthOfReservation?></td>
        </tr>
        <tr>
            <th>Reservation Date</th>
            <td><?=$data[0]->reservationDate?></td>
        </tr>
        </tbody>
    </table>
    <a href=<?=$path."/".$language."/admin/home"?>>Back</a>
</main>
</body>
</html>
