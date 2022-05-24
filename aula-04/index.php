<form action="" method="post" hidden>
	<input type="text" name="nome" required><br>
	<input type="text" name="cidade" required><br>
	<button type="submit">Enviar</button>
</form>

<form action="" method="post">
	<input type="number" name="n1" required><br>
	<input type="number" name="n2" required><br>
	<button type="submit">Somar</button>
</form>
<?php

if (isset($_POST['nome'])) {
	echo "Oi " . $_POST['nome'] . " de " . $_POST['cidade'] . ".";
} elseif ($_POST['n1'] && $_POST['n2']) {
	echo ($_POST['n1'] . " + " . $_POST['n2'] . " = ") . ($_POST['n1'] + $_POST['n2']);
}
