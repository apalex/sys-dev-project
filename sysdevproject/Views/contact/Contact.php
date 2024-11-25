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
    <link rel="stylesheet" href=<?= $path . "/CSS/contact.css" ?>>
</head>

<body>
    <?php include_once dirname(__DIR__) . "/nav.php"; ?>

    <h1>Contact Us</h1>
    <p>Please be sure to use the dropdown menu and select the appropriate option so we can better assist you.</p>

    <main>

        <?php if (isset($_GET['status']) && $_GET['status'] == 'success'): ?>
            <p style="color: green; font-weight: bold;">Your message has been sent successfully!</p>
        <?php endif; ?>

        <form action="<?= $path . "/contact/mail"?>" method="POST" class="contact-form">
            <p id="reminder">"<span class="asterix-higlighted">*</span>" indicates required fields</p>
            <select name="subject" id="inquiry-type" required>
                <option value="General Inquiry">General Inquiry</option>
                <option value="Support">Careers</option>
                <option value="Feedback">Complains</option>
            </select>

            <div class="name-fields">
                <input type="text" name="first_name" placeholder="First Name" required>
                <input type="text" name="last_name" placeholder="Last Name" required>
            </div>

            <input type="email" name="email" placeholder="Email" required>
            <textarea name="message" placeholder="Your message here..." required></textarea>

            <div class="button">
                <input type="submit" value="Submit" class="submit-btn">
            </div>
        </form>
        </div>
    </main>

    <?php include_once dirname(__DIR__) . "/footer.php"; ?>
</body>

</html>