<h1>Редактирование</h1>
<form action="update" method='POST' accept-charset="utf-8">
            <!-- <input type='hidden' name= id_user' value=' $id_user' />-->
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
            <!-- <input type="file" name="avatar" /></p>-->
            <input type='submit' value='‘Сохранить'>
            </form>

            <?php 
            //Data for testing
            /*
            include ('application/models/model_update.php');
            $db=new DB();
            $name='vasya';
			$user=new ModelUpdate($db);
			$user->setName($name);
			*/
            ?>