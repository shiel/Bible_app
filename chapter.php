<?php
include 'config.php';
include 'BibleDAO.php';

$book_id=(isset($_GET['book_id'])) ? $_GET['book_id'] : false;

$chapter=BibleDAO::getChapterNumbers($book_id);
$verse=BibleDAO::getVerseNumbers($book_id,$chapter);

if($chapter == false){
	echo json_encode(
		array(
			'status' => 'failed',
			'message' => 'Failed to retrieve data.'
			)

		);
}else{
	echo json_encode(
		 array(
		 	'status' =>'successful',
		 	'chapter' => $chapter,
		 	'verse' => $verse

		 	)
		);
}
?>
