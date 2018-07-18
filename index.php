<?php 

require_once(__DIR__.'/config.php');
require_once(__DIR__.'/Quiz.php');



$quiz = new Myapp\Quiz();
$data = $quiz->getCurrentQuiz();
shuffle($data["a"]);


?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>Quiz</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<div id="container">
		<h1>Q. <?= h($data["q"]); ?></h1>
		<ul>
			<?php foreach($data["a"] as $a) : ?>
				<li class="answer"><?= h($a); ?></li>
			<?php endforeach; ?>
		</ul>
		<div id="btn" class="disabled">Next Question</div>
	</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="quiz.js"></script>
</body>
</html>