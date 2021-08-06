<?php
include_once "DB.class.php";

class User extends DB {

	public $userTable;
	public $dbObj;
	public $con;

	public function __construct() {
	    $this->userTable = "users";
	    $this->dbObj = new DB();
	    $this->con = $this->dbObj->dbconnection();
	}

	public function registration() {

        $username  = $_POST['username'];
        $emailid = $_POST['emailid'];
        $contactno = $_POST['contactno'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $birthday = $_POST['birthday'];
        $password = md5($_POST['password']);		

	$query ="INSERT INTO $this->userTable (UserName,EmailId,ContactNumber,Address,Gender,Birthday,Password)
		VALUES('$username','$emailid','$contactno','$address','$gender','$birthday','$password')";
	if ($this->con->query($query)) {
	    return true;
	} else {
	    return false;
	    }
	}

	public function signin() {
        $emailid = $_POST['emailid'];
	    $password = md5($_POST['password']);

	    $query = "SELECT * FROM $this->userTable WHERE EmailId = '$emailid' && Password = '$password'";
	    $result = $this->con->query($query);
	    while ($user_data = $result->fetch_assoc()) {
			$_SESSION['id']=$num['id'];
	        $_SESSION['UserName']=$num['UserName'];
	    }
	if ($result->num_rows > 0) {
	    return true;
	} else {
	    return false;
	    }
	}

	/* If email is exist */
	public function isUserExist($email) {
        $query = "SELECT * FROM $this->userTable WHERE EmailId ='$email'";
        $result = $this->con->query($query);
        if ($result->num_rows > 0) {
	     return true;
	    } else {
	        return false;
	    }
	}
    public function getUserAll() {
	    $query = "SELECT * from $this->userTable";
	    $result = $this->con->query($query);
        return $result;
	}

    public function getUser($id)
        {
            $query = "SELECT * from $this->userTable WHERE id=$id";
            $result = $this->con->query($query);
            return $result;
        }

    public function updateUser($username,$emailid,$contactno,$address,$gender,$birthday,$password,$id)
        {
        $query="UPDATE $this->userTable SET UserName='$username',EmailId='$emailid',ContactNumber='$contactno',Address='$address',Gender='$gender',Birthday='$birthday',Password='$password' WHERE id='$id'";
        $result = $this->con->query($query);
        return $result;
        }

    public function deleteUser($id)
        {
            $deleterecord="DELETE from $this->userTable WHERE id=$id";
            $result = $this->con->query($deleterecord);
            return $result;
        }
			
}


$userObj = new User();