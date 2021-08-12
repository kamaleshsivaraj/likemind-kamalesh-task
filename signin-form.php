<?php
define('PROJECT_ROOT_PATH', __DIR__);
include_once (PROJECT_ROOT_PATH. '/classes/User.class.php');


$success ="";
$error="";

$logindata=new User();

if(isset($_POST['submit']))
{
	$emailid = $_POST['emailid'];
	$password = md5($_POST['password']);

	$sql=$logindata->signin($emailid,$password);
	$num=mysqli_fetch_array($sql);
	if($num>0){
		$_SESSION['id']=$num['id'];
		$_SESSION['username']=$num['UserName'];

		$success = "success login";
	echo "<script>window.location.href='dashboard.php'</script>";
	} else {
		$error = "error";
	echo "<script>window.location.href='signin.php'</script>";
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
