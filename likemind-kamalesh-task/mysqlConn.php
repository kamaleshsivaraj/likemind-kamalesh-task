<?php
class DbCOnn {
	
	protected $db_name = 'likemindkamalesh';
	protected $db_user = 'root';
	protected $db_pass = '';
	protected $db_host = 'localhost';
	
    public function connection() {	
		$connect_db = new mysqli( $this->db_host, $this->db_user, $this->db_pass, $this->db_name );
		
		if (mysqli_connect_errno() ) {
			printf("Connection failed: %s\
", mysqli_connect_error());
			exit();
		}
		return true;
		
	}

}