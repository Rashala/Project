<?php

/**
 * @author Rajya Laxmi Maharjan &lt;
 * Created on Jan 11, 2016, 11:47:20 PM
 *
 */


class DB {

    protected $connection;
    protected $servername = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $dbname = "yummy_lunch";
    protected $conn = null;
    protected $result = array();
    private $myQuery = ""; 
    private $numResults = ""; 

    function __construct() {
//        echo "inside constructor<br>";

        $this->connect();
    }

    public function connect() {

        $this->connection = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($this->connection->connect_error) {
            die("Connection failed :" . $this->connection->connect_error);
        } else {

//            echo "connection successful!<br>" . $this->connection->select_db($this->dbname);
        }
    }
	public function login($username, $password){

       
        $loginWhereQuery = " SELECT * FROM login WHERE user_name='" . $username . "' AND password='" . $password . "'";

       
		 $query = $this->connection->query($loginWhereQuery);
		  $this->results = null;
                        while ($line = mysqli_fetch_object($query)) {
                            $this->results[] = $line;
							
                        }
                        return $this->results;

       }
	public function insert_order($foodname,$firstname,$middlename,$lastname,$email,$contact,$address){
			$sql = "INSERT INTO yummy_lunch.order (food_name, first_name, middle_name,last_name,address,contact_no,email)
			VALUES ('".$foodname."','".$firstname."','".$middlename."','".$lastname."','".$address."','".$contact."','".$email."')";

		if ($this->connection->query($sql) === TRUE) {
			return true;
		} else {
		   echo "Error: " . $sql . "<br>" . $conn->error;
		}
			}
	public function retrieve_order(){
	
			$sql = "SELECT order_id, food_name, first_name, middle_name,last_name,address,contact_no,email FROM yummy_lunch.order";
			$query = $this->connection->query($sql);

			$this->results = null;
								   
			   while ($line = mysqli_fetch_object($query)) {
					$this->results[] = $line;
							
					}
				return $this->results;
 
	}
}


$db = new DB();
$db->connect();

?>
