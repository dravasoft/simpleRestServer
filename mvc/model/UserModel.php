<?php


class UserModel
{

	public function __construct(){
		
		$servername = DATABASE_HOST;
		$dbname = DATABASE_NAME;
		$username = DATABASE_USERNAME;
		$password = DATABASE_PASSWORD;
		
		$this->db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}



    public function getUser($id = null)
    {

			$stmt = $this->db->prepare("SELECT name,surname,email,country,country_code FROM user WHERE id = :id");
		    $resultSet = $stmt->execute(array('id' => $id));
		    $result = $stmt->fetch();
			
			return $result;
    }

}