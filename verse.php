<?php
include 'config.php';
include 'BibleDAO.php';

$book_id =(isset($_GET['book_id'])) ? $_GET['book_id']: false;
$chapter_id=(isset($_GET['chapter_id'])) ? $_GET['chapter_id']: false;
$verse = BibleDAO::getVerseNumbers($book_id,$chapter_id);

if($verse == false){
	echo json_encode(
		array(
			'status' => 'failed',
			'message' => 'Unable to retrieve data.'
			)
		);
}else{
	echo json_encode(
		array(
			'status' => 'successful',
			'verse' => $verse
			)
		);
}
?>
