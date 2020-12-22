<?php
 
class Controller_Post extends Controller
{
	//linking the DB and model, which implements data output using PDO
	protected $db;
    public function __construct()
     {
         $this->view = new View();
         $this->db = new DB();
         $this->model = new Model_post( $this->db);
    }
	//for output page "posts" using general template
	function action_index()
	{
		$data = $this->model->get_data();		
		$this->view->generate('post_view.php', 'template_view.php', $data);
	}

}
?>