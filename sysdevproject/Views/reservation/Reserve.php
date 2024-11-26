<?php
$path = dirname($_SERVER['SCRIPT_NAME']);
$language = isset($_GET['lang']) ? $_GET['lang'] : 'en';

include_once "Languages/".$language.".php";
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
    <?php include_once dirname(__DIR__) . "/nav.php"; ?>

    <h1><?=RESERVE?></h1>

    <p><?=HELP?></p>

    <main>

        <form action=<?=$path."/".$language."/reservation/add"?> method="POST">
            <fieldset style="text-align: left; width: fit-content; margin: 0 auto;">
                <p id="reminder">"<span class="asterix-higlighted">*</span>"<?=REQUIRED?></p>
                <select name="station">
                    <option disabled selected><?=STATIONNUM?></option>
                    <?php
                        foreach($data as $row){
                            echo "<option value".$row->stationId.">".$row->stationId."</option>";
                        }
                    ?>
                </select><br>
                <div class="name-inputs">
                    <input type="text" name="firstName" placeholder="<?=FIRSTNAME?>">
                    <input type="text" name="lastName" placeholder="<?=LASTNAME?>">
                </div>
                <div class="email-input">
                    <input type="text" name="email" placeholder="<?=EMAIL?>"><br>
                </div>
                <div class="phone-input">
                    <input type="text" name="phone" placeholder="<?=PHONE?>"><br>
                </div>
                <div class="reservationTime">
                    <select name="hour">
                        <option disabled selected>00</option>
                        <?php
                            for($i = 0; $i < 12; $i++){
                                if($i<9){
                                    echo "<option value='0".($i+1)."'>0".($i+1)."</option>";
                                } else {
                                    echo "<option value='".($i+1)."'>".($i+1)."</option>";
                                }
                            } 
                        ?>
                    </select>
                    <select name="minute">
                        <option value="00" selected>00</option>
                        <option value="15">15</option>
                        <option value="30">30</option>
                        <option value="45">45</option>
                    </select>
                    <select name="morningOrNight">
                        <option value="AM">AM</option>
                        <option value="PM">PM</option>
                    </select>
                </div>
                <select name="length">
                    <option disabled selected><?=RESERVATION?></option>
                    <option value="30">30 <?=MINUTES?></option>
                    <option value="60">1 <?=HOUR?></option>
                    <option value="120">2 <?=HOURS?></option>
                </select><br>
                <div class="date-input">
                    <input type="date" name="reservationDate">
                </div>
                <div class="button">
                    <input type="submit" value="<?=SUBMIT?>" class="submit-button">
                </div>
            </fieldset>
        </form>
    </main>

    <?php include_once dirname(__DIR__) . "/footer.php"; ?>
</body>
</html>