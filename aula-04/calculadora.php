<form action="" method="post">
	<input type="number" name="n1" placeholder="Digite um número" required><br>
	<select name="op" required>
		<option selected disabled>Selecione uma operação</option>
		<option value="+">Somar</option>
		<option value="-">Subtrair</option>
		<option value="*">Multiplicar</option>
		<option value="/">Dividir</option>
	</select><br>
	<input type="number" name="n2" placeholder="Digite um número" required><br>
	<button type="submit">Ver o resultado</button>
</form>

<?php

if (isset($_POST['n1']) && isset($_POST['n2']) && isset($_POST['op'])) {
	$n1 = $_POST['n1'];
	$n2 = $_POST['n2'];

	switch ($_POST['op']) {
		case '+':
			$result = $n1 + $n2;
			break;

		case '-':
			$result = $n1 - $n2;
			break;

		case '*':
			$result = $n1 * $n2;
			break;

		case '/':
			$result = $n1 / $n2;
			break;

		default:
			echo "Ocorreu um erro.";
			break;
	}

	echo "{$_POST['n1']} {$_POST['op']} {$_POST['n2']} = {$result}";
}
