<?php

class Controller_Update extends Controller
{


function action_index()
	{
		//$data = $this->model-> get_user();		
		$this->view->generate('update_view.php', 'template_view.php', $data);
	}
	
}
?>