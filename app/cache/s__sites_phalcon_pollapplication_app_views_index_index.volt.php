<h1>Poll Applicatie</h1>

<p>Klik op een vraag om door te gaan: </p>

<?php
	
	foreach($questions as $question)
	{
		echo "<li>" .Phalcon\Tag::linkTo("option/show/". $question->id, $question->name). "</li>";
	}

	echo "<p>".Phalcon\Tag::linkTo('question/add', 'Voeg een vraag toe &raquo')."</p>";

?>