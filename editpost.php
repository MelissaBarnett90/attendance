<?php 


    require_once 'db/conn.php'; 


    
    //get values from post operation
    if(isset($_POST['submit'])){
       //extract values from the $_POST array
        $id =  $_POST['id'];
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $contact = $_POST['phone'];
        $specialty = $_POST['specialty'];

        //call Crud function
        $result = $crud->editAttendee($id,$fname, $lname, $dob, $email, $contact, $specialty);

        //Redirect to index.php
        if($result){
            header("Location: viewrecords.php");
        }
        else
        {
            //echo 'error';
            include 'includes/errormessage.php';
        }
      }
    else
    {
        //echo 'error';
        include 'includes/errormessage.php';
    }
?>




<br/>   <br/>   <br/>   <br/>   <br/>   <br/>

<?php require_once 'includes/footer.php'; ?>