<?php
session_start();
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'likemindkamalesh');
class DB_con
{
function __construct()
{
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
$this->dbh=$con;

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
}

public function registration($username,$emailid,$contactno,$address,$gender,$birthday,$password)
	{
	$ret=mysqli_query($this->dbh,"insert into users(UserName,EmailId,ContactNumber,Address,Gender,Birthday,Password) VALUES ('$username','$emailid','$contactno','$address','$gender','$birthday','$password')");
	return $ret;
	}

public function fetchdata()
	{
	$result=mysqli_query($this->dbh,"select * from users");
	return $result;
	}

public function fetchonerecord($userid)
	{
	$oneresult=mysqli_query($this->dbh,"select * from users where id=$userid");
	return $oneresult;
	}

public function update($username,$emailid,$contactno,$address,$gender,$birthday,$password,$userid)
	{
	$updaterecord=mysqli_query($this->dbh,"update users set UserName='$username',EmailId='$emailid',ContactNumber='$contactno',Address='$address',Gender='$gender',Birthday='$birthday',Password='$password' where id='$userid' ");
	return $updaterecord;
	}

public function delete($rid)
	{
	$deleterecord=mysqli_query($this->dbh,"delete from users where id=$rid");
	return $deleterecord;
	}

public function signin($emailid,$password)
	{
		$result=mysqli_query($this->dbh,"select id,UserName from users where EmailId='$emailid' and Password='$password'");
		return $result;
	}
   
}
?>
