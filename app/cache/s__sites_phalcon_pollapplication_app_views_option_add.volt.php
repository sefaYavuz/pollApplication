<h1>Optie toevoegen aan: <?=$question->name?></h1>

<?=Phalcon\Tag::form(array("method" => "post"));?>
	<p>
		<label for="Optie">Optie: </label>
		<?=Phalcon\Tag::textField("name");?>
	</p>

	<p>
		<?=Phalcon\Tag::linkTo('option/show/'.$question->id, '&laquo Ga terug')?>
		&nbsp;
		<?=Phalcon\Tag::submitButton(array("Toevoegen", 'class' => 'submitButton'))?>

	</p>
</form>