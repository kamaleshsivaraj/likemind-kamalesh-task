<?php
  define('PROJECT_ROOT_PATH', __DIR__);
  include_once (PROJECT_ROOT_PATH. '/classes/User.class.php');

  if(isset($_SESSION['id'])) {
		header("Location:signin.php");
	}

  $logindata = new User();

	$success ="";
	$error="";

if(isset($_POST['submit']))
{
	$newdata['emailid'] = $_POST['emailid'];
	$newdata['password'] = md5($_POST['password']);

	if ($logindata->signin($newdata)) {
		if (!isset($_SESSION['id'])) {
			header("Location:dashboard.php");
			$success = "Sign In success";

		} else {  
			header("Location:signin.php");
		}
	} else {
		$error = "Incorrect Email or Password";
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

<div class=" container row">
<div class="col-md-6 offset-md-3">
	<form action="" method="post" id="form-reg">
	<div class="form-group">
		<label for="Email">E-mail</label>
		<input type="email" name="emailid" class="form-control" placeholder="email" required=""><br>
		<span class="form-error" id="Email-errormsg"></span>
	</div>
	<div class="form-group">
          <label for="password">Password</label>
          <input class="form-control" type="text" name="password" placeholder="password"><br>
          <span class="form-error" id="password-errormsg"></span>
	</div>
	<div>
		<div class="row" style="margin-top:1%">
			<div class="col-md-8">
				<button class="btn btn" type="submit" id="submit" value="Submit" name="submit">Submit</button>
			</div>
		</div>
		<div class="control-group">
		<!-- Button -->
			<div class="controls">
			Not Registered yet? <a href="register.php">Register Here</a>
			</div>
		</div>

	</form>
            
      
	</div>
</div>
