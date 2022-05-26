<select>
	<option selected disabled>Selecione o ano</option>
	<?php
	$ano = 1900;

	while ($ano <= 2022) {
		echo "<option value='{$ano}'>{$ano}</option>";

		$ano++;
	}
	?>
</select>