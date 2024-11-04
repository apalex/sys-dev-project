<?php

include_once "db.php";

class ReservationModel{
    public $reservationId;
    public $stationId;
    public $u_name;
    public $u_email;
    public $u_phone;
    public $reservationTime;
    public $lengthOfReservation;
    public $reservationDate;

    function __construct($id = -1)
    {
        if($id < 0){
            $this->stationId = "";
            $this->u_name = "";
            $this->u_email = "";
            $this->u_phone = "";
            $this->reservationTime = "";
            $this->lengthOfReservation = "";
            $this->reservationDate = "";
        } else {
            global $conn;
            $sql = "SELECT * FROM `reservation` WHERE `reservationId` = " . $id;

            $result = $conn->query($sql);
            $data = ReservationModel::castToReservation($result->fetch_object());

            $this->reservationId = $id;
            $this->stationId = $data->stationId;
            $this->u_name = $data->u_name;
            $this->u_email = $data->u_email;
            $this->u_phone = $data->u_phone;
            $this->reservationTime = $data->reservationTime;
            $this->lengthOfReservation = $data->lengthOfReservation;
            $this->reservationDate = $data->reservationDate;
        }
    }

    static function castToReservation($obj){
        $reservation = new ReservationModel();

        $reservation->reservationId = $obj->reservationId;
        $reservation->stationId = $obj->stationId;
        $reservation->u_name = $obj->u_name;
        $reservation->u_email = $obj->u_email;
        $reservation->u_phone = $obj->u_phone;
        $reservation->reservationTime = $obj->reservationTime;
        $reservation->lengthOfReservation = $obj->lengthOfRes;
        $reservation->reservationDate = $obj->reservationDate;

        return $reservation;
    }

    static function list(){
        global $conn;
        $list = array();

        $sql = "SELECT * FROM `reservation`";
        $result = $conn->query($sql);

        while($row = $result->fetch_object()){
            $reservation = ReservationModel::castToReservation($row);

            array_push($list, $reservation);
        }

        return $list;
    }

    static function validateReservation($data){
        global $conn;

        $stmt = $conn->prepare("SELECT * FROM `reservation` WHERE `stationID` LIKE ? AND `reservationTime` LIKE ? AND `reservationDate` LIKE ?");

        $reservationTime = $data['hour'].":".$data['minute']." ".$data['morningOrNight'];

        $stmt->bind_param("sss", $data['station'], $reservationTime, $data['reservationDate']);

        $stmt->execute();

        $result = $stmt->get_result();

        if($result->num_rows < 1){
            ReservationModel::addSave($data);
            return true;
        } else {
            echo "<script>alert('The selected time is already reserved. Please choose a different time.');</script>";
            return false;
        }
    }

    static function addSave($data) {
        global $conn;

        $stmt = $conn->prepare("INSERT INTO `reservation` (`reservationId`, `stationId`, `u_name`, `u_email`, `u_phone`, `reservationTime`, `lengthOfRes`, `reservationDate`) 
                               VALUES (NULL,?,?,?,?,?,?,?)");

        $name = $data['lastName'].", ".$data['firstName'];
        $reservationTime = $data['hour'].":".$data['minute']." ".$data['morningOrNight'];

        $stmt->bind_param("issssss", $data['station'], $name, $data['email'], $data['phone'], $reservationTime, $data['length'], $data['reservationDate']);

        $stmt->execute();
    }

    function delete(){
        global $conn;
        $sql = "DELETE FROM `reservation` WHERE `reservationId` = ". $this->reservationId;

        $conn->query($sql);
    }
}

?>