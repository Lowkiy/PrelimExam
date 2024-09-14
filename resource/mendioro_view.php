<?php

 require_once $_SERVER['DOCUMENT_ROOT'].'/Test-Web/resource/config.php';


class view extends baylon_config{

    public function viewData(){
        $con = $this->con();
        $sql = "SELECT * FROM `customer_tbl`";
        $data = $con->prepare($sql);
        $data->execute();
        $result = $data->fetchAll(PDO::FETCH_ASSOC);
        echo "<h3 class='mb-4'>Membership Request</h3>";
        echo "<table class='table table-dark table-stripe table-sm'>";
        echo "<thead>
            <tr> 
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
            </thead><tbody>";
        foreach ($result as $data){
            echo "<tr>";
            echo "<td>$data[name]</td>";
            echo "<td>$data[email]</td>";
            echo "<td>$data[subject]</td>";
            echo "<td>$data[message]</td>";
            echo "<td> <a class='btn btn-danger btn-sm'href='index.php?delete=$data[id]'>Deny Membership</a> </td>";
            echo "</tr>";
        }
        echo "</tbody></table>";     
    }

}

?>