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
//}

public function get_title($id)
{
return $this->db->getValue("SELECT `title` FROM `post` WHERE `id_post` > ?", [$id]);
}

public function get_text($id)
{
return $this->db->getValue("SELECT `text` FROM `post` WHERE `id_post` > ?", [$id]);
}
}

?>