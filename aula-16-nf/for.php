<select>
	<option selected disabled>Selecione o ano</option>
	<?php
	for ($i=1900; $i <= 2022; $i++) { 
		echo "<option value='{$i}'>{$i}</option>";
	}
	?>
</select>