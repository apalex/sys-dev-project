<?php
    include_once "Controllers/Controller.php";
    include_once "Models/AdminModel.php";
    include_once "Models/ReservationModel.php";

    class AdminController extends Controller{
        function route(){
            $action = isset($_GET['action']) ? $_GET['action'] : "index";
            $id = isset($_GET['id']) ? $_GET['id'] : -1;
            
            if($action == "index"){
                $this->render("Admin", "login");
            } else if($action == "login"){
                $reservations = ReservationModel::list();
                session_start();
                $_SESSION['username'] = $_POST['username'];
                $_SESSION['password'] = $_POST['password'];

                if(Admin::validateAdmin($_SESSION)){
                    $this->render("Admin", "home", $reservations);
                }
            } else if ($action == "home"){
                $reservations = ReservationModel::list();
                $this->render("Admin", "home", $reservations);
            } else if($action == "reservationInfo"){
                $reservation = new ReservationModel($id);

                $this->render("Admin", "reservationInfo", array($reservation));
            } else if($action == "delete"){
                $reservation = new ReservationModel($id);
                $reservation->delete();

                header("Location: ". dirname($_SERVER['SCRIPT_NAME'])."/admin/home");
            } else if($action == "logout"){
                session_start();

                $_SESSION = array();
                session_destroy();

                header("Location: ". dirname($_SERVER['SCRIPT_NAME'])."/admin");
            }
        }
    }
?>