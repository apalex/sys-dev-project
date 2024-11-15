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
    <link rel="stylesheet" href=<?= $path . "/CSS/adminHome.css" ?>>
</head>
<body>
    <?php include_once dirname(__DIR__)."/nav.php"; ?>

    <main class="admin-container">
    <h1>Cyber Station</h1>
    <p>Admin</p>
    
    <div class="reservations-container">
        <div class="reservations">
            <h2>Reservations</h2>
            <input type="text" placeholder="Search" class="search-box">
            <ul class="reservation-list">
                <li>Reservation 1</li>
                <li>Reservation 2</li>
                <li>Reservation 3</li>
                <li>Reservation 4</li>
                <li>Reservation 5</li>
                <li>Reservation 6</li>
            </ul>
        </div>

        <div class="reservation-info">
            <h2>Reservation Info</h2>
            <form>
                <label>Station Reserved</label>
                <input type="text" placeholder="Station Reserved">
                
                <label>First Name</label>
                <input type="text" placeholder="First Name">
                
                <label>Last Name</label>
                <input type="text" placeholder="Last Name">
                
                <label>Email</label>
                <input type="email" placeholder="Email">
                
                <label>Phone</label>
                <input type="text" placeholder="Phone">
                
                <label>Reservation Time</label>
                <input type="text" placeholder="Reservation Time">
                
                <label>Date</label>
                <input type="date">
                
                <div class="buttons">
                    <button type="button" class="edit-btn">Edit</button>
                    <button type="button" class="delete-btn">Delete</button>
                </div>
            </form>
        </div>
    </div>
</main>
</body>
</html>
