<form method = "post" action=" <?php $_SERVER['PHP_SELF']; ?>">
	<input type = "text" name = "naam" placeholder = "Naam"></input>
	<input type = "text" name = "kleur" placeholder = "Vul kleur in (engels)"></input>
	<input type = "submit" name = "submit" value = "Submit"></input>
</form>

<?php

	if(isset($_POST['submit']))
	{
		echo "<font color = '".$_POST['kleur'] . "'>Ingevulde naam: ". $_POST['naam']. "</font>";
	}

?>