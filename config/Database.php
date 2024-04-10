<?php
// Проверяем, активна ли уже сессия
if (session_status() == PHP_SESSION_NONE) {
  // Если сессия не активна, запускаем её
  session_start();
}

class Database{
	
	  private $host  = 'localhost';
    private $user  = 'root';
    private $password   = "(101010)";
    private $database  = "system_crm"; 
    
    public function getConnection(){		
		$con = new mysqli($this->host, $this->user, $this->password, $this->database);
		if($con->connect_error){
			die("Error failed to connect to MySQL: " . $con->connect_error);
		} else {
			return $con;
		}
    }
}