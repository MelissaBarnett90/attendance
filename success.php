<?php 
    $title = 'Index';
    require_once 'includes/header.php'; 
?>



 <h1 class="text-center text-success">You Have Been Registered!<h1/>

 <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5> 
        <?php echo $_GET['firstname'] .' ' . $_GET['lastname']; ?>
    </h5>

    <h6 class="card-subtitle mb-2 text-muted">
         <?php echo $_GET['specialty']; ?>
    </h6>
    
    <p class="card-text">
        <?php echo $_GET['dob']; ?>
    </p>

    <p class="card-text">
        <?php echo $_GET['email']; ?>
    </p>

    <p class="card-text">
        <?php echo $_GET['phone']; ?>
    </p>
    
    
    


  </div>
</div>

<?php 
    echo $_Get['firstname'];
    echo $_Get['lastname'];
    echo $_Get['dob'];
    echo $_Get['specialty'];
    echo $_Get['email'];
    echo $_Get['phone'];

?>

  





<br/>   <br/>   <br/>   <br/>   <br/>   <br/>

<?php require_once 'includes/footer.php'; ?>

