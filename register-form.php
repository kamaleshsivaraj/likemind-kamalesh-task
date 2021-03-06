<?php
  define('PROJECT_ROOT_PATH', __DIR__);
	include_once (PROJECT_ROOT_PATH. '/classes/User.class.php');

	$userObj = new User();


	$success = "";
	$error = "";

if (isset($_POST['submit'])) {
		$username  = $_POST['username'];
		$emailid = $_POST['emailid'];
		$contactno = $_POST['contactno'];
		$address = $_POST['address'];
		$gender = $_POST['gender'];
		$birthday = $_POST['birthday'];
		$password = md5($_POST['password']);

        $sql=$userObj->registration($username,$emailid,$contactno,$address,$gender,$birthday,$password);
	       if ($sql) {
                 $success = "Your Registration Successfully Please login";
                 echo "<script>window.location.href='dashboard.php'</script>";
	       } else {
		  $error = "Registration failed  try again!";
          // echo "<script>window.location.href='register.php'</script>";
	      }
	   }
?>
<div class="col-sm-12 col-md-12 col-xs-12">
    <?php
         if (!empty($error)) {
         	echo "<div class='alert alert-danger alert-dismissible'>
                     <button type='button' class='close' data-dismiss='alert'>&times;</button>$error
                  </div>";
         } elseif (!empty($success)) {
         	echo "<div class='alert alert-success alert-dismissible'>
                     <button type='button' class='close' data-dismiss='alert'>&times;</button>$success
                  </div>";
         }
      ?>
  <div class="container row">
    <div class="col-md-6 offset-md-3">
      <form action="" method="POST" id="form-reg">
        <div class="form-group" id="name">
          <label for="name">Name</label>
          <input type="text" name="username" class="form-control" placeholder="Name" required="">
          <span class="form-error" id="name-errormsg"></span>
	</div>
        <div class="form-group" id="Email">
          <label for="Email">E-mail</label>
          <input type="email" name="emailid" class="form-control" placeholder="email" required="">
          <span class="form-error" id="Email-errormsg"></span>
        </div>
        <div class="form-group" id="Phone">
          <label for="Phone">Phone Number</label>
	   <input type="tel" name="contactno" class="form-control" placeholder="phone number" required="">
          <span class="form-error" id="Phone-errormsg"></span>
        </div>

        <div class="form-group">
          <input type="hidden" name="AddressCheck" id="addcheck">
          <div id="addrsline">
            <label for="address1">Address</label>
         <input type="text" name="address" class="form-control" placeholder="address" required="">
<span class="form-error" id="addcheck-errormsg"></span>
          </div>
        </div>

        <div class="form-group" id="gender">
          <label class="form-check-label">Gender</label>
               <div class="form-check pl-3">
                  <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                  <label class="form-check-label mr-4" for="male">Male</label>
 
                  <input  class="form-check-input" type="radio" name="gender" id="female" value="female">
                  <label for="female">Female</label>
          <span class="form-error" id="gender-errormsg"></span>
              </div>
        </div>
       <div class="form-group" id="birthday">
          <label for="birthday">Birthday:</label>
	  <input type="date" name="birthday" class="form-control" placeholder="" required="">
          <span class="form-error" id="birthday-errormsg"></span>
        </div>

	 <div class="form-group" id="password">
          <label for="password">Password</label>
          <input type="text" name="password" placeholder="password" class="form-control"><br>
          <span class="form-error" id="password-errormsg"></span>
	</div>
        <button class="btn btn" type="submit" id="submit" value="Submit" name="submit">Submit</button>
    </div>
    <div class="control-group">
		<!-- Button -->
			<div class="controls">
			Have an Account <a href="signin.php">Signin Here</a>
			</div>
		</div>
    <div>
      
    </div>
    </form>
  </div>
</div>
</div>  

