<h1>Opties</h1>


<p>Hier kunt u alle opties bekijken en uw stem uitbrengen voor de vraag: <b><?=$question->name?></b></p>

<br />

<?php

foreach($options as $option)
{
	echo "<div id='optionsContainer'>";
	
		echo "<p class='optionNames'>".$option->name."</p>"; 
		echo "				<progress max='500' value=".$option->votes." class='html5'>
					<div class='progress-bar'>
		        		<span style='width: ".$option->votes."%;'>".$option->votes."</span>
		    		</div>
		    	</progress>
	    	";

		echo "<div id='actionsContainer'>";
			echo Phalcon\Tag::linkTo('option/vote/' . $option->id, '<img src="../../img/vote.png" width="20" />');
			echo Phalcon\Tag::linkTo('option/delete/' . $option->id, '<img src="../../img/delete.png" width="20" />');
			echo Phalcon\Tag::linkTo('option/edit/' . $option->id, '<img src="../../img/edit.png" width="20" />');
			
		echo "</div>";

	echo "</div>";
	echo "<br /><br />";
}

echo "<br />";

echo Phalcon\Tag::linkTo('', '&laquo Ga terug');
echo "&nbsp;&nbsp;&nbsp;";
echo Phalcon\Tag::linkTo('option/add/' . $question->id, 'Voeg een optie toe &raquo');


?>

<br />
<br />
