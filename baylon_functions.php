<?php

function clean(){
    insertT();
    deleteT();
    editT();
}
function insertT(){
    if(!empty($_GET['Items'])){
        $insert = new insert($_GET['Items']);
        if($insert->insertTask()){
          echo '<div class="col-md-9 alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Nice!</strong> You have successfully inserted a task!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
        }else{
            echo '<div class="col-md-9 alert alert-danger alert-dismissible fade show" role="alert">
            <strong>What.</strong> Insert Task Error.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>';
        }
    }
}

function deleteT(){
    if(!empty($_GET['delete'])){
        $delete = new delete($_GET['delete']);
        if($delete->deleteTask()){
          echo '<div class="col-md-9 alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Great!</strong> You have successfully deleted a task!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
        }else{
            echo '<div class="col-md-9 alert alert-danger alert-dismissible fade show" role="alert">
            <strong>What.</strong> Delete Task Error.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>';
        }
    }
}

function editT(){
    if(!empty($_GET['edit'])){
        $edit = new edit($_GET['edit']);
        if($edit->editTask()){
          echo '<div class="col-md-9 alert alert-info alert-dismissible fade show" role="alert">
                    <strong>Great!</strong> You have successfully completed your task!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
        }else{
            echo '<div class="col-md-9 alert alert-danger alert-dismissible fade show" role="alert">
            <strong>What.</strong> Completing a Task Error.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>';
        }
    }
}

function viewTable(){
    $view = new View();
    $view->viewData();
    $view->viewCompletedData();
}
?>