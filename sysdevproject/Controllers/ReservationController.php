<?php
    include_once "Controllers/Controller.php";
    include_once "Models/Station.php";
    include_once "Models/ReservationModel.php";

    class ReservationController extends Controller{
        function route(){
            $action = isset($_GET['action']) ? $_GET['action'] : "index";
            
            if($action == "index"){
                $stations = Station::list();

                $this->render("Reservation", "reserve", $stations);
            } else if($action == "add"){
                $stations = Station::list();
                
                if(ReservationModel::validateReservation($_POST)){
                    $this->render("Reservation", "reservationSummary", $_POST);
                } else {
                    $this->render("Reservation", "reserve", $stations);
                }
            }
        }
    }
?>