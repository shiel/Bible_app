<?php
include 'config.php';
include 'BibleDAO.php';
include 'ajax.php';
include 'links.php';


$books=BibleDAO::getBooks();
$defaultChapter=BibleDAO::getChapterNumbers(1);
$defaultVerse=BibleDAO::getVerseNumbers(1,1);
$defaultVerseText=BibleDAO::getVerseText(1,1,1);

?>
<script type="text/javascript" src='js/jquery.1.10.2.js'></script>
<script type="text/javascript" src = 'js/search.js'></script>
<html>
	<title>Bible Application</title>

<body style='background:url("img/forest.jpg");'>
<div class='navbar'>
	<div class='navbar-inner primary'>
		<div class='page-header header'>
			<h1><b><center>Bible Hub</center></b></h1>
		</div>
		<form class='span9'>
		<div>
			<table class='forlabel'>
				<td >Book
					<select id='books' name='books'>
						<?php
						foreach($books as $id => $book):
						?>
						<option value='<?= $id ?>'><?= $book ?></option>
						<?php endforeach ?>
						</select>
				</td>
				<td class='forlabel'>Chapters
					<select id='chapter' name ='chapter'>
						<?php
						for($i=1;$i <= $defaultChapter ; $i++):
						?>
						<option value='<?= $i ?>'><?= $i ?></option>
						<?php endfor ?>
						</select>
				</td>
				<td class='forlabel'>Verse
					<select id='verse' name='verse'>
						<?php
						for($i=1;$i <= $defaultVerse; $i++):
						?>
						<option value='<?= $i ?>'><?= $i ?></option>
						<?php endfor ?>
						</select>
				</td>

			</table>
		</div>
	</form>
	</div>
</div>
<div class='span12 '>
	<div class='span3 pull-right'>
			<form class='form-search pull-right' method='get'>
			<input type='search' placeholder='Search...' id='search' name='search'>
		</form>
		<div class='thumbnail' id='result'>
			<p><h4>Result Here..</h4>
			</p><br>
		</div>
	</div>
		<div class='content well span8 pull-left'>
			<div id='verse_text'>
				<?= $defaultVerseText ?>
			</div>
		</div>
</div>
<!-- <div class='footer'>Footer to</div> -->
</body>
</html>
