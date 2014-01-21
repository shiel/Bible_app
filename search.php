<?php
include 'config.php';
include 'BibleDAO.php';

$keyword=(isset($_GET['search'])) ? $_GET['search'] :false;
$result=BibleDAO::search($keyword);

foreach($result as $key){
	echo '<h4>'.$key['book_id'].' '.$key['chapter_number'].':'.$key['verse_number'].'</h4><br>';
	echo '<p>'.$key['verse_text'].'</p>';
}
?>
