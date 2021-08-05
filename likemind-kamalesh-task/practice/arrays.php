<html>	
  <body>

<?php
   class student {
      public function __construct($firstname, $lastname) {
         $this->firstname = $firstname;
         $this->lastname = $lastname;
      }
   }
   $myObj = new student("Alex", "Stokes");
   echo "Before conversion:".'</br>';
   var_dump($myObj);
   $myArray = json_decode(json_encode($myObj), true);
   echo "After conversion:".'</br>';
   var_dump($myArray);
   <!-- foreach ($myArray as $value){
       echo ($value);
     }
   -->
?>
     </body>
</html>
