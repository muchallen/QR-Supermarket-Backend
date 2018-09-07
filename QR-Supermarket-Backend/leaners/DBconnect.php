<?php

define('DB_Host', 'localhost');
define('DB_Name', 'leaners');
define('DB_User', 'root');
define('DB_Pass', 'chemistry17');

class Mysql 
{	
	
private $conn;
public $query_id;
	function __construct()
	{
		$this->dbconnect();
	}



public function dbconnect(){
$this->conn=mysqli_connect(DB_Host,DB_User,DB_Pass,DB_Name);
if(!$this->conn){
	echo "Database connection failed try again";
}
else
echo "Database connection successfull";

}

public function query($sql){

if (trim($sql != "")) {
          $this->query_id = $this->conn->query($sql);
      }
      if (!$this->query_id)
        // only for Develope mode
              die("Error on this Query :<pre> " . $sql ."</pre>");
       // For production mode
        //  die("Error on Query");

       return $this->query_id;
   }

   public function fetch_assoc($result){
   	$resultset = $this->conn->fetch_assoc($result);
   	return $resultset;
   }

   public function prepare($sql2){

    $prpstm=$this->conn->prepare($sql2);
    return $prpstm;

   }
}

$dcon=new Mysql()


?>
