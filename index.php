

<?php 
    $title = 'Index';
    require_once 'includes/header.php'; 
?>


    <h1 class="text-center">Registration For IT Conference</h1>

 <form method="post" action="success.php">
    <div class="form-group">
    <label for="firstname">First Name</label>
    <input type="text" class="form-control" id="firstname" Name="firstname">
  
  </div>

  <div class="form-group">
    <label for="lastname">Last Name</label>
    <input type="text" class="form-control" id="lastname" name="lastname">
</div>

  <div class="form-group">
    <label for="dob">Date Of Birth</label>
    <input type="text" class="form-control" id="dob" name="dob">
  </div>

  <div class="form-group">
    <label for="specialty">Area of Specialty</label>
      <select class="form-control" id="specialty" name="specialty">
            <option>Database Admin</option>
            <option>Software Developer</option>
            <option>Web Administrator</option>
            <option>Other</option>
        </select>   
      </div>

  <div class="form-group">
    <label for="email">Email</label>
     <input type="text" class="form-control" id="email" name="email"
        aria-describedby="emailHelp" >
      <small id="emailHelp" class="form-text text-muted">We'll never
        share your email with anyone else.</small>
    </div>

  <div class="form-group">
    <label for="phone">Contact Number</label>
      <input type="text" class="form-control" id="phone" name="phone"
        aria-describedby="phoneHelp" placeholder="Enter phone">
      <small id="phoneHelp" class="form-text text-muted">We'll never
        share your  phone number with anyone else.</small>
    </div>


  <button type="submit"  name="submit" class="btn btn-primary btn-block">Register</button>
  </form>

  <br/>   <br/>   <br/>   <br/>   <br/>   <br/>

<?php require_once 'includes/footer.php'; ?>
