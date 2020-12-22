<?php

class Model_insert extends Model
{
	protected $db;
    public function __construct($db)
    {
        $this->db = $db;  
    }
    //adding a new user-data is read on the form
	public function get_data()
	{	
		$query = "INSERT INTO `user` (
		`id_user`,	
 		 `name`,
 		 `surname`,
 		 `city`,
 		 `email`,
 		 `password`,
	 	 `avatar`
 		 )
		VALUES (
 		 :id_user,
 		 :name,
 		 :surname,
		  :city,
 		 :email,
		  :password,
		  :avatar
		)";
 
		$args = [
		'id_user'=>NULL,
 		 'name' => $_POST['name'],
 		 'surname' => $_POST['name_2'],
 		 'city' => $_POST['city'],
 		 'email' =>$_POST['email'],
  		'password' =>$_POST['password'],
		'avatar'=>NULL
		];
 $this->db->sql($query, $args);	
	}
}

?>