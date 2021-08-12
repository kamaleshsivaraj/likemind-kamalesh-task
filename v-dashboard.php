<?php 
	define('PROJECT_ROOT_PATH', __DIR__);
  include_once (PROJECT_ROOT_PATH. '/classes/User.class.php');

  $success = "";
  $error = "";

  $userObj = new User();
  $result = $userObj->getUserAll();
  if (isset($_GET['del'])) {
    $id=$_GET['del'];
  
    $sql=$userObj->deleteUser($id);
    if ($sql) {
      $success = "Data deleted Successfully";
      echo "<script>window.location.href='dashboard.php'</script>";
    } else {
      $error = "Unbale to deleted make sure database conn";
      echo "<script>window.location.href='dashboard.php'</script>";
    }
  }

?>

<div class="col-sm-12 col-md-12 col-xs-12">
   <div class="container">


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

 <div class="user pt-2">
   <table class="table table-bordered">
    <div class="tableHeader">
      <tr> 
          <th>ID</th>
          <th>NAME</th>
          <th>EMAIL-ID</th>
          <th>ADDRESS</th>
          <th>PHONE NUMBER</th>
          <th>GENDER</th>
          <th>BIRTHDAY</th>
          <th>ACTION</th>

        </tr>
      </div>
      <tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
      
        ?>
        
        <td><?php echo htmlentities($row['id']);?></td>
          <td><?php echo htmlentities($row['UserName']);?></td>
          <td><?php echo htmlentities($row['EmailId']);?></td>
          <td><?php echo htmlentities($row['Address']);?></td>
          <td><?php echo htmlentities($row['ContactNumber']);?></td>
          <td><?php echo htmlentities($row['Gender']);?></td>
          <td><?php echo htmlentities($row['Birthday']);?></td>
          <td>
              <a href="dashboard.php?del=<?php echo htmlentities($row['id']);?>" class="card-link">Delete</a>
              <a href="update-user.php?id=<?php echo htmlentities($row['id']);?>" class="card-link">Edit</a>
            </td>
          </tr>
      <?php } ?>
         </table>
        </div>
       </div>
     </div>
</div>