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
                        ReservationModel::sendReservationEmail($_POST);
                        $this->render("Reservation", "reservationSummary", $_POST);
                    } else {
                        $this->render("Reservation", "reserve", $stations);
                    }
                } else {
                    $this->render("Reservation", "reserve", $stations);
                }
            }
        }
    }
?>