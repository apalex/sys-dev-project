<?php
include_once "Controllers/Controller.php";
include_once "Models/AdminModel.php";
include_once "Models/ReservationModel.php";

class AdminController extends Controller
{
    function route()
    {
        // Check login state for all actions except "index" and "login"
        $action = isset($_GET['action']) ? $_GET['action'] : "index";
        $language = isset($_GET['lang']) ? $_GET['lang'] : 'en';
        if (!isset($_SESSION['username']) && !isset($_SESSION['password']) && $action !== "index" && $action !== "login") {
            // Redirect to login page if not logged in
            header("Location: " . dirname($_SERVER['SCRIPT_NAME']) . "/admin");
            exit;
        }

        // Process actions
        $id = isset($_GET['id']) ? $_GET['id'] : -1;

        if ($action == "index") {
            $this->render("Admin", "login");
        } else if ($action == "login") {
            if(isset($_SESSION['username'])){
                header("Location: " . dirname($_SERVER['SCRIPT_NAME']) ."/". $language . "/admin/home");
                return;
            }
            if (!isset($_POST['username']) || !isset($_POST['password'])) {
                // Render login page if form data is missing
                $this->render("Admin", "login");
                return;
            }

            // Validate login credentials
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['password'] = $_POST['password'];

            if (Admin::validateAdmin($_SESSION)) {
                header("Location: " . dirname($_SERVER['SCRIPT_NAME']) ."/". $language . "/admin/home");
                exit;
            } else {
                // Render login page if validation fails
                $this->render("Admin", "index");
            }
        } else if ($action == "home") {
            if (!isset($_SESSION['username']) || !isset($_SESSION['password'])) {
                header("Location: " . dirname($_SERVER['SCRIPT_NAME']) ."/".$language."/admin");
                exit;
            }
            // Display home page with reservations
            $reservations = ReservationModel::list();
            $this->render("Admin", "home", $reservations);
        } else if ($action == "reservationInfo") {
            // Ensure the user is logged in before accessing reservation info
            if (!isset($_SESSION['username']) || !isset($_SESSION['password'])) {
                header("Location: " . dirname($_SERVER['SCRIPT_NAME']) ."/".$language."/admin");
                exit;
            }

            // Display reservation details
            $reservation = new ReservationModel($id);
            $this->render("Admin", "reservationInfo", array($reservation));
        } else if ($action == "delete") {
            // Ensure the user is logged in before attempting to delete
            if (!isset($_SESSION['username']) || !isset($_SESSION['password'])) {
                header("Location: " . dirname($_SERVER['SCRIPT_NAME']) ."/".$language."/admin");
                exit;
            }

            // Delete a reservation and redirect to home
            $reservation = new ReservationModel($id);
            $reservation->delete();
            header("Location: " . dirname($_SERVER['SCRIPT_NAME']) ."/".$language."/admin/home");
        } else if ($action == "search") {
            // Ensure the user is logged in before attempting to delete
            if (!isset($_SESSION['username']) || !isset($_SESSION['password'])) {
                header("Location: " . dirname($_SERVER['SCRIPT_NAME']) ."/".$language."/admin");
                exit;
            }

            if(isset($_POST["reservationDate"])) {
                if($_POST['reservationDate'] == ''){
                    $reservations = ReservationModel::list();
                    $this->render("Admin", "home", $reservations);
                } else {
                    $reservations = ReservationModel::listByDate($_POST);
                    $this->render("Admin", "home", $reservations);
                }
            } else {
                header("Location: " . dirname($_SERVER['SCRIPT_NAME']) ."/".$language."/admin/home");
            }
        } else if ($action == "logout") {
            // Log out the user
            $_SESSION = array();
            session_destroy();
            header("Location: " . dirname($_SERVER['SCRIPT_NAME']) ."/".$language."/admin");
        }
    }
}
?>
