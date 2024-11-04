<?php
    include_once "Controllers/Controller.php";
    include_once "Models/AdminModel.php";
    include_once "Models/ReservationModel.php";

    class AdminController extends Controller{
        function route(){
            $action = isset($_GET['action']) ? $_GET['action'] : "index";
            
            if($action == "index"){
                $this->render("Admin", "login");
            } else if($action == "login"){
                $reservations = ReservationModel::list();

                if(Admin::validateAdmin($_POST)){
                    $this->render("Admin", "admin", $reservations);
                } else {
                    $this->render("Admin", "login");
                }
            }
        }
    }
?>