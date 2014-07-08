<h1>Poll Applicatie</h1>

<p>Klik op een vraag om door te gaan: </p>

<?php
	
	foreach($questions as $question)
	{
		echo "<li>"; 
			echo Phalcon\Tag::linkTo("option/show/". $question->id, $question->name);
			echo Phalcon\Tag::linkTo('question/delete/' . $question->id, '<img src="img/delete.png" width="20" />'); 
		echo "</li>";
	}

	echo "<p>".Phalcon\Tag::linkTo('question/add', 'Voeg een vraag toe &raquo')."</p>";

?>