<?php
	include_once('models/php-register.php');
	
?>

<div class="col-sm-12 col-md-12 col-xs-12">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" id="form-reg">
        <div>
          <label for="name">Name</label>
          <input type="text" name="name" id="name"><br>
          <span class="form-error" id="name-errormsg"></span>
	</div>
        <div>
          <label for="Email">E-mail</label>
          <input type="email" name="email" id="Email"><br>
          <span class="form-error" id="Email-errormsg"></span>
        </div>
        <div>
          <label for="Phone">Phone Number</label>
          <input type="tel" name="phoneNumber" id="Phone"><br>
          <span class="form-error" id="Phone-errormsg"></span>
        </div>
        <div>
          <label for="addcheck">Add Address</label>
          <input type="checkbox" name="AddressCheck" id="addcheck"><br>
          <span class="form-error" id="addcheck-errormsg"></span>
          <div id="addrsline">
            <input type="text" name="address1" id="address1">
            <label for="address1">Address line-1</label>
            <input type="text" name="address2" id="address2">
            <label for="address2">Address line-2</label>
          </div>
        </div>
        <div>
          <label>Gender</label>
          <input class="radioBtnClass" type="radio" name="gender" id="male" value="male">
          <label for="male">Male</label>
          <input  class="radioBtnClass" type="radio" name="gender" id="female" value="female">
          <label for="female">Female</label>
          <span class="form-error" id="gender-errormsg"></span>
        </div>
        <div>
          
          <label for="birthday">Birthday:</label>
          <input type="date" id="birthday" name="birthday">
          <span class="form-error" id="birthday-errormsg"></span>
        </div>
        <button type="submit" id="submit" value="register" name="">Submit</button>
    </div>
    <div>
      
    </div>
    </form>
  </div>
</div>
</div>  



