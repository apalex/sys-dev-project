<?php
$path = dirname($_SERVER['SCRIPT_NAME']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Cyber Station</title>
    <link rel="icon" type="image/x-icon" href="Images/cyberStation.ico">
    <link rel="stylesheet" href=<?=$path."/CSS/contact.css"?>>
</head>
<body>
    <?php include_once dirname(__DIR__) . "/nav.php"; ?>
    <main>
        <h2>Contact Us</h2>
        <p>Please be sure to use the dropdown menu and select the appropriate option so we can better assist you.</p>

        <!-- Display a success message if the email was sent -->
        <?php if (isset($_GET['status']) && $_GET['status'] == 'success'): ?>
            <p style="color: green; font-weight: bold;">Your message has been sent successfully!</p>
        <?php endif; ?>

        <form action="?controller=contact&action=mail" method="POST" class="contact-form">
            <label for="inquiry-type">* Indicates required fields</label>
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
            
            <button type="submit" class="submit-btn" value="Send">Submit</button>    
        </form>
    </main>
</div>

</body>
</html>
