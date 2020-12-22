<?php 

//include ('application/config.php');
include_once('application/views/content2_view.php');
 

class Update {

protected $db;
    public function __construct($db) {
        $this->db = $db;
    }
    
public  function update_user(){
   
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
 // 'avatar' =>  $_POST['$avatar']
'avatar' =>  'avatar'
];
 
 $this->db->sql($query, $args);
    }
}

$db = new DB();
$test = new Update($db);
$data = $test->update_user();
?>



<?php 
//mysqli_close( $conn);
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv='refresh' content='5; URL=<?php echo $_SERVER['HTTP_REFERER'];?> '  />
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>пост</title>
</head>

<body bgcolor="#efefef" >

<table border="0" width="100%">
	<tr>
		<td width="50%"></td>
		<td valign="middle">
<div style=" margin-top:300px; height:120px; width:500px; background:#DCDCDC; border: solid 3px #808080; font-family:Arial, Helvetica, sans-serif; font-size:18px; padding:20px;">
<?php echo 'Данные отправлены';?>
</div>
		</td>
		<td width="50%"></td>
	</tr>
</table>


</body>
</html>