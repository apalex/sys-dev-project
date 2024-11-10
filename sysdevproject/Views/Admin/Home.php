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
        <thead>
            <tr>
                <th>Station ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Reservation Time</th>
                <th>Reservation Date</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach($data as $row){
                    echo "<tr>";
                    echo "<td>".$row->stationId."</td>";
                    echo "<td>".$row->u_name."</td>";
                    echo "<td>".$row->u_phone."</td>";
                    echo "<td>".$row->reservationTime."</td>";
                    echo "<td>".$row->reservationDate."</td>";
                    echo "<td><a href='".$path."/admin/reservationInfo/".$row->reservationId."'>View</a></td>";
                    echo "<td><a href='".$path."/admin/delete/".$row->reservationId."'>Delete</a></td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>

</main>
</body>
</html>
