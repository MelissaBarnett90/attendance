<?php 
    require_once 'db/conn.php';
    if(!$_GET['id']){
        echo 'error';
    }
    else
    {
       //Get ID values
       $id =$_GET['id'];


       //Call delete function
        $result = $crud->deleteAttendee($id);

       //Redirect to list
       if($result){
        header("Location: viewrecords.php");
    }
    else
    {
        echo 'error';
    }
  }

?>