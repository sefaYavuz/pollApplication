<h1>Vraag toevoegen</h1>

<form action="" method="post">
	<p>
		<label for="Vraag">Vraag: </label>
		<?=Phalcon\Tag::textField("name");?>
	</p>
	<p>
		<?=Phalcon\Tag::linkTo('', '&laquo Ga terug')?>
		&nbsp;
		<?=Phalcon\Tag::submitButton(array("Toevoegen", 'class' => 'submitButton'))?>
	</p>
</form>