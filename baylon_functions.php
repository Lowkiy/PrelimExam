<?php

function insertM(){
    if(!empty($_GET['message'])){
        $insert = new insert($_GET['message']);
        if($insert->insertM()){
          echo '<div class="col-md-9 alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Nice!</strong> You have successfully sent the message!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
        }else{
            echo '<div class="col-md-9 alert alert-danger alert-dismissible fade show" role="alert">
            <strong>What.</strong> Insert Message Error.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>';
        }
    }
}

function deleteM(){
    if(!empty($_GET['delete'])){
        $delete = new delete($_GET['delete']);
        if($delete->deleteM()){
          echo '<div class="col-md-9 alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Great!</strong> You have successfully deleted a message!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
        }else{
            echo '<div class="col-md-9 alert alert-danger alert-dismissible fade show" role="alert">
            <strong>What.</strong> Delete Message Error.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>';
        }
    }
}

function viewTable() {
    $view = new view();
    $view->viewData();
}

function deleteListener(){
        if (isset($_GET['delete'])) {
        $id = $_GET['delete'];
        $delete = new delete($id);
        if ($delete->deleteM()) {
            echo "<div class='alert alert-success'>Message deleted successfully.</div>";
        } else {
            echo "<div class='alert alert-danger'>Failed to delete the message.</div>";
        }
    }
}

?>