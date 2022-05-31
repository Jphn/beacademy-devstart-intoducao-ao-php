<select>
	<option selected disabled>Selecione o ano</option>
	<?php
	for ($i = 1900; $i <= 2022; $i++) {
		echo "<option value='{$i}'>{$i}</option>";
	}
	?>
</select>

<select>
	<option selected disabled>Selecione um dia</option>
	<?php
	for ($i = 1; $i <= 31; $i++) {
		echo "<option value='{$i}'>{$i}</option>";
	}
	?>
</select>

<select>
	<option selected disabled>Selecione um mês</option>
	<?php
	for ($i = 1; $i <= 12; $i++) {
		echo "<option value='{$i}'>", match ($i) {
			1 => "Janeiro",
			2 => "Fevereiro",
			3 => "Março",
			4 => "Abril",
			5 => "Maio",
			6 => "Junho",
			7 => "Julho",
			8 => "Agosto",
			9 => "Setembro",
			10 => "Outubro",
			11 => "Novembro",
			12 => "Dezembro",
		}, "</option>";
	}



	?>
</select>