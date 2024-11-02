<?php
    include_once "Controllers/Controller.php";
    include_once "Models/Station.php";

    class ReservationController extends Controller{
        function route(){
            $action = isset($_GET['action']) ? $_GET['action'] : "index";
            
            if($action == "index"){
                $stations = Station::list();

                $this->render("Reservation", "reserve", $stations);
            }
        }
    }
?>