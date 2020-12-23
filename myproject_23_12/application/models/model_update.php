<?php 
class ModelUpdate extends Model
 {

	protected $db;
    public function __construct($db)
     {
        $this->db = $db;
    }
    
	public  function updateUser()
	{
   
    $query = "UPDATE `user`
  	SET `name` = :name,
     `surname` = :surname,
   `city` = :city,
   `email` = :email,
   `password` = :password,
   `avatar` = :avatar
  	WHERE `id_user` = :id_user";
	 $id_user= file_get_contents('application/views/content2_view.php');
	$args = [
    'id_user' => $id_user,
	'name' => $_POST['name'],
	'surname' => $_POST['name_2'],
	'city' => $_POST['city'],
	'email' => $_POST['email'],
	'password' => $_POST['password'],
	'avatar' =>  'avatar'];
 	$this->db->sql($query, $args);
    }
    //option 2. Update data using ActiveRecord
    protected $name;
   	protected $name_2;
    protected $city;
    protected $email;
  	 protected $password;
      //update name
    public  function setName($name)
    {
   	 $this->name = $name;
     $query = "UPDATE `user`
 	 SET `name` = :name
 	 WHERE `id_user` = :id_user";
 	$id_user= file_get_contents('application/views/content2_view.php');
	$args = [
 	 'id_user' => $id_user,
	'name' => $name];
	echo $id_user;
	echo $name;
	$this->db->sql($query, $args);
    }
    //update surname
	public  function setSurname($name_2)
	{
    $this->name_2 = $name_2;
     $query = "UPDATE `user`
  	SET  `surname` = :surname
 	 WHERE `id_user` = :id_user";
 	$id_user= file_get_contents('application/views/content2_view.php');
	$args = [
	  'id_user' => $id_user,
	'surname' => $name_2];
	$this->db->sql($query, $args);
    }
      //update city
	public  function setCity($city)
	{
    $this->city = $city;
     $query = "UPDATE `user`
  	SET  `city` = :city
 	 WHERE `id_user` = :id_user";
 	$id_user= file_get_contents('application/views/content2_view.php');
	$args = [
 	 'id_user' => $id_user,
	'city' => $city];
	$this->db->sql($query, $args);
    }
      //update email
	public  function setEmail($email)
	{
    $this->email = $email;
     $query = "UPDATE `user`
 	 SET `email` = :email
  	WHERE `id_user` = :id_user";
 	$id_user= file_get_contents('application/views/content2_view.php');
	$args = [
 	 'id_user' => $id_user,
	'email' => $email];
	$this->db->sql($query, $args);
    }
      //update password
	public  function setPassword($email)
	{
    $this->password = $passord;
     $query = "UPDATE `user`
 	 SET `password` = :password
	  WHERE `id_user` = :id_user";
 	$id_user= file_get_contents('application/views/content2_view.php');
	$args = [
  	'id_user' => $id_user,
	'passwordl' => $password
	];
	$this->db->sql($query, $args);
    }
    
    } 
    ?>