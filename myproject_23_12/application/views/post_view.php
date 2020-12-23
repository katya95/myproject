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
$post=new Model_post($db);

        foreach ($post->get_data() as $item) {
        echo '<tr><td><b>Тема поста:'.' '. $item['title'].'</b><br/>';
        echo '<p>'. $item['text'].'</p></td></tr>';
      }
echo '</table>';
	$post->get_title(3);
	$post->get_text(3);
	echo $post->get_title(3);
	echo $post->get_text(3);
	
	
?>



