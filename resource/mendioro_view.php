<?php
class view extends config{
    public function viewData(){
        $con = $this->con();
        $sql = "SELECT * FROM customer_tbl WHERE status = 'PENDING'";
        $data = $con->prepare($sql);
        $data->execute();
        $result = $data->fetchAll(PDO::FETCH_ASSOC);
        echo "<h1 class='mb-4'>Membership Request</h1>";
        echo "<table class='table table-dark table-stripe table-sm'>";
        echo "<thead>
            <tr>
                <th>Member Name</th>
                <th>Action</th>
            </tr>
        </thead><tbody>";
        foreach ($result as $data){
            echo "<tr>";
            echo "<td>$data[ITEM]</td>";
            echo "<td>
            <a class='btn btn-info btn-sm' href='index.php?edit=$data[ID]'>Membership Approved</a>
            <a class='btn btn-danger btn-sm' href='index.php?delete=$data[ID]'>Membership Denied</a>
            </td>";
            echo "</tr>";
        }
        echo "</tbody></table>";
    }

        public function viewCompletedData(){
            $con = $this->con();
            $sql = "SELECT * FROM customer_tbl WHERE status = 'COMPLETED'";
            $data = $con->prepare($sql);
            $data->execute();
            $result = $data->fetchAll(PDO::FETCH_ASSOC);
            echo "<h1 class='mb-4 mt-5'>Completed Task</h1>";
            echo "<table class='table table-dark table-stripe table-sm'>";
            echo "<thead>
                <tr>
                    <th>Task Item</th>
                    <th>Date Completed</th>
                </tr>
            </thead><tbody>";
            foreach ($result as $data){
                echo "<tr>";
                echo "<td>$data[ITEM]</td>";
                echo "<td>$data[DATE_COMPLETED]</td>";
                echo "</tr>";
            }
            echo "</tbody></table>";
        }

}
?>