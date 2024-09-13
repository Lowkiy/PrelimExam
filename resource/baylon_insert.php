<?php
class insert extends config {
    public $name, $email, $subject, $message;

    public function __construct($name, $email, $subject, $message) {
        $this->name = $name;
        $this->email = $email;
        $this->subject = $subject;
        $this->message = $message;
    }
    public function insertTask() {
        $con = $this->con();
        $sql = "INSERT INTO customer_tbl(name, email, subject, message)VALUES('$this->name','$this->email','$this->subject','$this->message')";
        $data = $con->prepare($sql);
        if($data->execute()){
            return true;
        }else{
            return false;
        }

    }
}
?>