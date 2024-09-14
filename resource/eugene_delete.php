<?php

class delete extends baylon_config{
    public $id;
    
    public function __construct($id) {
        $this->id = $id;
    }
    
    public function deleteM(){
        $con = $this->con();
        $sql = "DELETE FROM `customer_tbl` WHERE `id` = $this->id";
        $data = $con->prepare($sql);
        if ($data->execute()) {
            return true;
        } else {
            return false;
        }
    }
}


?>