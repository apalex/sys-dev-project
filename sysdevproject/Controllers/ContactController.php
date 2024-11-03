<?php
    include_once "Controllers/Controller.php";
    include_once "Models/MailContact.php";

    class ContactController extends Controller {
        function route() {
            $action = isset($_GET['action']) ? $_GET['action'] : "index";
            
            if ($action == "mail") {
                $contacts = Contact::sendMail();
                header("Location: ?controller=contact&status=success");
                exit;
            } elseif ($action == "index") {
                include_once "Views/contact/Contact.php";
            }
        }
    }
?>
