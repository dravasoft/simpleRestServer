<?php

require __DIR__ . '/../model/UserModel.php';

use \Jacwright\RestServer\RestException;

class UserController
{
	
    /**
     * Gets the user by id 
     *
     * @url GET users/$id
     */
    public function getUser($id = null)
    {
		$um = new UserModel();
		$userData = $um->getUser($id);
		//error_log("Pokazi result ".print_r($result, 1));
			
		return array("id" => $id, "name" => $userData["name"],"surname"=>$userData["surname"] ,"email"=>$userData["email"],"country"=>$userData["country"],"country_code"=>$userData["country_code"]); // serializes object into JSON
    }

    /**
     * Throws an error
     * 
     * @url GET /error
     */
    public function throwError() {
        throw new RestException(401, "Empty password not allowed");
    }
}