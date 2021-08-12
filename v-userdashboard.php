<?php
  session_start();
  if(isset($_SESSION['id']) == '')
  {
    header ('location:logout.php');
  } else {

  ?>
    <form class="form-horizontal" action='' method="POST">
      <fieldset>
        <div id="legend">
      <legend style="text-align: center";><?php  echo  $_SESSION['username'];?></legend>
        </div>

        <div class="control-group" align="center">
          <!-- Button -->
          <div class="controls">
            <a href="logout.php" class="btn btn" type="submit" name="signin">Logout</a>
          </div>
        </div>

      </fieldset>
    </form>
<?php } ?>