<?php
	include_once "php-register.php";

$success = "";
$error = "";
if (isset($_GET['del'])) {
    $rid=$_GET['del'];
    $deletedata = new DB_con();

    $sql=$deletedata->delete($rid);
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
   <table style="
    border-collapse: collapse;
    width: 100%;
    border-collapse: inherit;
    border: 1px solid #ddd; 
     ">
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
  <?php
  $fetchdata=new DB_con();
  $sql=$fetchdata->fetchdata();
  $cnt=1;
while($row=mysqli_fetch_array($sql))
{
  ?>
  
        <tr>
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
      
 <?php
   $cnt++;
 } ?>
         </table>
        </div>
       </div>
     </div>
</div>