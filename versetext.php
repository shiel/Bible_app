<?php
include 'config.php';
include 'BibleDAO.php';

$book_id =(isset($_GET['book_id'])) ? $_GET['book_id']: false;
$chapter_id=(isset($_GET['chapter_id'])) ? $_GET['chapter_id']: false;
$verse_id =(isset($_GET['verse_id'])) ? $_GET['verse_id']: false;

$verse_text=BibleDAO::getVerseText($book_id,$chapter_id,$verse_id);

if($verse_text == false) {
	echo json_encode (
		array(
			'status' => 'failed',
			'message' => 'Unable to retrieve data.'
			)
		);
}else{
	echo json_encode(
		array(
			'status' => 'successful',
			'verse_text' => $verse_text
			)
		);
}
?>
