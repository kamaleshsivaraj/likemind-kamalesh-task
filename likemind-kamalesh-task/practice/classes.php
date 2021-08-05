<!-- <?php
	class first {
	public function __construct() {
	      	    echo 'class	"'.__CLASS__.'" is intialized';
		    
	      }
	    
	} 
  $obj  = new first;

?> --!>
<!--
<?php
	class firsts {
	public function __construct(){
		print 'class "'.__CLASS__.'"was initia';
	}
}
$obj = new firsts;
?>
--!>
<!-- init paras in constructor
<?php
	class test {
	      	   private $num1;
		   private $num2;
		   
		   public function __construct($n1, $n2) {
		   	  $this->num1 = $n1;	    
			  $this->num2 = $n2;

		   }
		   public function tests(){
		    	 echo "Num1" . $this->num1 ."<br>";
			 echo "Num2" . $this->num2 ."<br>";

		   }

	}
$n = new test(10,20);
$n->tests();
?> --!>
<!-- creating a obj using consruct --!>
<?php
	class pclass {
	      function  __construct()  {
	      	    print "print parent";
	      }
	}
	class cclass extends pclass {
	      function __construct() {
	      	       parent ::__construct();
		       print "print child";  
		}
	      }
	
$obj = new pclass();
$obj = new cclass();
?>
<!-- when creating the object  the subclass  will created automatically	 --!>
