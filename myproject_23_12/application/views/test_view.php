<h1>Регистрация</h1>
<form action="insert" method='POST' accept-charset="utf-8">
            <!-- <input type='hidden' name= id_otzuv' value=' $id_otzuv' />-->
            <p>Name:<br> 
            <input name='name' type='text'  value='' /></p>
            <p>Surname: <br> 
            <input name='name_2' type='text'  value='' /></p>
            <p>city: <br> 
            <input name='city' type='text'  value='' /></p>
            <p>Email: <br> 
            <input name='email' type='text'  value='' /></p>
            <p>Password: <br> 
            <input name='password' type='password'  value='' /></p>
          <!--  <input type="file" name="avatar" /></p>-->
            <input type='submit' value='Сохранить'>
            </form>
<?php /*
//data for test ActiveRecord (function insert)
include ('application/models/model_insert.php');
$db=new DB();
$insert=new Model_insert($db);
$insert->setname('Aleksandr');
$insert->setSurname('Petrov');
$insert->setCity('Kiev');
$insert->setEmail('vcv@df.com');
$insert->setPassword('qwerty');
$insert->insert();
*/
?>


