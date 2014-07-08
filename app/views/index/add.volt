<h1>Vraag toevoegen</h1>

<?=Phalcon\Tag::form(array("method" => "post"));?>
	<p>
		<label for="Vraag">Vraag: </label>
		<?=Phalcon\Tag::textField("name");?>
	</p>
	<p>
		<?=Phalcon\Tag::linkTo('', '&laquo Ga terug')?>
		&nbsp;
		<?=Phalcon\Tag::submitButton("submit")?>
	</p>
</form>