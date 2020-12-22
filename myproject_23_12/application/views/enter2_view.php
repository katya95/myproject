<?php
//session_start();
//include_once('content3.php');

$id=0;
include_once ('application/config.php');
$name=$_POST['name'];
$password=$_POST['password'];
$db=new DB();
//$_SESSION['name'] = $_POST['name'];
// переписать этот же контент без условия и формы
	//if (isset($_GET['name'])&&isset($_GET['password'])){
		foreach($db->query('SELECT * FROM user') as $row) {
			if (($row['name']==$name)&&($row['password']==$password)){
		echo $row['name'] . ' ' . $row['surname'].$row['avatar'].'</br>';
		echo "<td>".$row['id_user']."</td>";
            //  echo "<td><a href='index.php?id=page8'>Update</a>"."</br>"."</td>";
			  //$_SESSION['id'] = $row['id_user'];
		
             $b= $row['id_user'];
			 $user=$row['name'];
			 $filename_user='application/views/name_view.php';
			 file_put_contents($filename_user, $user);
			 $filename='application/views/content2_view.php';
			file_put_contents($filename, $b);
		}}
			/*else {
				echo 'password incorrect';
				//$_SESSION['id'] = 0;
				$id=0;
				 header('Location:  index.php?id=page7');
				exit;*/
			
		//}
		//}
		
	//}
	//else {
		//header('Location: index.php?id=page7');
		//exit;
		//echo 'to login you must register';
	//}
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv='refresh' content='5; URL=<?php echo $_SERVER['HTTP_REFERER'];?> '  />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
