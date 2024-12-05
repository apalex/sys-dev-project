<?php

include_once "db.php";

class Admin {
    public $username;
    public $password;

    function __construct($id = -1)
    {
        if($id < 0){
            $this->status = "";
        }
        else{
            global $conn;
            $sql = "SELECT * FROM `admin` WHERE `adminId` = " . $id;

            $result = $conn->query($sql);

            $data = Admin::castToAdmin($result->fetch_object());

            $this->username = $data->username;
            $this->password = $data->password;
        }
    }

    static function castToAdmin($obj){
        $admin = new Admin();

        $admin->username = $obj->username;
        $admin->password = $obj->password;

        return $admin;
    }

    static function list(){
        global $conn;
        $list = array();

        $sql = "SELECT * FROM `admin`";
        $result = $conn->query($sql);

        while($row = $result->fetch_object()){
            $admin = Admin::castToAdmin($row);

            array_push($list, $admin);
        }

        return $list;
    }

    static function validateAdmin($data){
        global $conn;
        $sql = "SELECT * FROM `admin` WHERE `username` LIKE ? AND `password` LIKE ?";

        $stmt = $conn->prepare($sql);

        $stmt->bind_param("ss", $data['username'], $data['password']);

        $stmt->execute();

        $result = $stmt->get_result();

        if($result->num_rows > 0){
            return true;
        } else {
            echo "<script>alert('Incorrect Admin Username or Password.');</script>";
            return false;
        }
    }
}

?>