<?php
$path = dirname($_SERVER['SCRIPT_NAME']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href=<?=$path."/CSS/adminHome.css"?>>
</head>
<body>
    <?php include_once dirname(__DIR__)."/nav.php"; ?>

    <main class="admin-container">
    <h1>Cyber Station</h1>
    <p>Admin</p>

    <table>
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
    </table>
</main>
</body>
</html>
