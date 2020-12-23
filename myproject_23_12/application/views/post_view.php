<h1>Посты</h1>
<p>
<table width='80%'><tr><td>

Вывод постов
</td></tr>
<?php 
//output posts
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
$db = new DB();
$post=new ModelPost($db);

        foreach ($post->getData() as $item) {
        echo '<tr><td><b>Тема поста:'.' '. $item['title'].'</b><br/>';
        echo '<p>'. $item['text'].'</p></td></tr>';
      }
echo '</table>';
    //Data for test Active Record
	//$post->getTitle(3);
	//$post->getText(3);
	//echo $post->getTitle(3);
	//echo $post->getText(3);
	
	
?>



