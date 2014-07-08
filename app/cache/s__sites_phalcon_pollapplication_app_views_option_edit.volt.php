<h1>Wijzig: <?=$option->name?></h1>

<form action="" method="post">

	<p>
		<label for="Optie">Optie</label>
		<?=Phalcon\Tag::textField(array('name', 'value' => $option->name))?>
	</p>
	<p>
		<label for="Vraag">Vraag</label>
		<?php
			echo Phalcon\Tag::select(array(
			    "question",
			    Questions::find(), "using" => array("id", "name")
		    ));
		?>
	</p>
	<p>
		<?=Phalcon\Tag::linkTo('option/show/'.$option->question_id, '&laquo Ga terug')?>
		&nbsp;
		<?=Phalcon\Tag::submitButton(array('Wijzigen', 'class' => 'submitButton'))?>
	</p>

</form>