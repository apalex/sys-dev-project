<?php
    include_once "Controllers/Controller.php";
    include_once "Models/StationModel.php";
    include_once "Models/ReservationModel.php";

    class ReservationController extends Controller{
        function route(){
            $action = isset($_GET['action']) ? $_GET['action'] : "index";
            $language = isset($_GET['lang']) ? $_GET['lang'] : 'en';
            
            if($action == "index"){
                $stations = Station::list();

                $this->render("Reservation", "reserve", $stations);
            } else if($action == "add"){
                $stations = Station::list();
                
                if(isset($_POST['firstName'])){
                    if(ReservationModel::validateReservation($_POST)){
                        $_SESSION['station'] = $_POST['station'];
                        $_SESSION['firstName'] = $_POST['firstName'];
                        $_SESSION['lastName'] = $_POST['lastName'];
                        $_SESSION['email'] = $_POST['email'];
                        $_SESSION['phone'] = $_POST['phone'];
                        $_SESSION['hour'] = $_POST['hour'];
                        $_SESSION['minute'] = $_POST['minute'];
                        $_SESSION['morningOrNight'] = $_POST['morningOrNight'];
                        $_SESSION['length'] = $_POST['length'];
                        $_SESSION['reservationDate'] = $_POST['reservationDate'];
                        if(ReservationModel::send2FACode($_POST, $_SESSION['2FA'])){
                            header("Location: " . dirname($_SERVER['SCRIPT_NAME']) ."/". $language . "/reservation/2FA");
                        } else {
                            $this->render("Reservation", "reserve", $stations);
                        }
                    } else {
                        $this->render("Reservation", "reserve", $stations);
                    }
                } else {
                    $this->render("Reservation", "reserve", $stations);
                }
            } else if($action == "2FA"){
                $stations = Station::list();

                if(!isset($_POST["2FA"])){
                    $this->render("Reservation", "reserve2FA", $_SESSION);
                } else {
                    if(ReservationModel::validate2FA($_POST)) {
                        $this->render("Reservation", "reservationSummary", $_SESSION);
                    } else {
                        $this->render("Reservation", "reserve", $stations);
                    }
                }
            }
        }
    }
?>