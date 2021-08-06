<?php
define('PROJECT_ROOT_PATH', __DIR__);
include_once (PROJECT_ROOT_PATH. '/classes/User.class.php');

$success = "";
$error = "";

$updatedata = new User();

if(isset($_POST['update']))
{
$id=intval($_GET['id']);

		$username  = $_POST['username'];
		$emailid = $_POST['emailid'];
		$contactno = $_POST['contactno'];
		$address = $_POST['address'];
		$gender = $_POST['gender'];
		$birthday = $_POST['birthday'];
		$password = md5($_POST['password']);

$sql=$updatedata->updateUser($username,$emailid,$contactno,$address,$gender,$birthday,$password,$id);
if($sql){
    $success = "Record Updated successfully";
echo "<script>window.location.href='dashboard.php'</script>";
} else {
    $error = "Error In DB Update";
echo "<script>window.location.href='dashboard.php'</script>";
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
<?php
// Get the userid
$id=intval($_GET['id']);
$onerecord=new User();
$sql=$onerecord->getUser($id);
$cnt=1;
while($row=mysqli_fetch_array($sql))
  {
  ?>

<div class="container row">
<div class="col-md-6 offset-md-3">
<form name="insertrecord" method="post">
     <div class="form-group">
		  <label for="name">Name</label>
		  <input class="form-control" type="text"  name="username" value="<?php echo htmlentities($row['UserName']);?>" required=""><br>
		  <span class="form-error" id="name-errormsg"></span>
		</div>
		<div class="form-group">
		  <label for="Email">E-mail</label>
		  <input type="email" name="emailid" class="form-control" value="<?php echo htmlentities($row['EmailId']);?>" required=""><br>
		  <span class="form-error" id="Email-errormsg"></span>
		</div>
		<div class="form-group">
		  <label for="Phone">Phone Number</label>
		   <input type="tel" name="contactno" class="form-control" value="<?php echo htmlentities($row['ContactNumber']);?>" required=""><br>
		  <span class="form-error" id="Phone-errormsg"></span>
		</div>
		<div class="form-group">
		  <label for="addcheck">Edit Address</label>
		  <div id="addrsline">
		   <input type="text" name="address" class="form-control" value="<?php echo htmlentities($row['Address']);?>" required="">
		  </div>
		</div>
		  <label class="form-check-label">Gender</label>
		<div class="form-group pl-3">

			 <input class="form-check-input" type="radio" name="gender" value="male" <?php if($row['Gender']=="male"){ echo "checked";}?>/>
      <label class="form-check-label mr-4">Male</label>
      
		  <input class="form-check-input" type="radio" name="gender" value="female" <?php if($row['Gender']=="female"){ echo "checked";}?>/>
             <label class="form-check-label">Female</label>
		</div>
		<div class="form-group">
		  <label for="birthday">Birthday:</label>
		  <input type="date" name="birthday" class="form-control" value="<?php echo htmlentities($row['Birthday']);?>" required="">
		  <span class="form-error" id="birthday-errormsg"></span>
		</div>

		 <div class="form-group">
		  <label for="password">Password</label>
		  <input class="form-control" type="text" name="password" value="<?php echo htmlentities($row['Password']);?>" id="name"><br>
		  <span class="form-error" id="password-errormsg"></span>
		</div>
<?php } ?>
<div class="row" style="margin-top:1%">
<div class="col-md-8">
<input class="btn btn" type="submit" name="update" value="Update">
</div>
</div>
     </form>
            
      
	</div>
</div>
