<?php

class Model_post extends Model
{
	protected $db;
    public function __construct($db)
    {
        $this->db = $db;  
    }
    // posts output
	public function get_data()
	{	
    return $post=$this->db->getRows("SELECT * FROM post");
	}
}
?>