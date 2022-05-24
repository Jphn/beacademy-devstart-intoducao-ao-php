<form action="" method="post">
	<input type="text" name="nome" placeholder="Digite seu nome" required><br>
	<input type="text" name="cidade" placeholder="Digite sua cidade" required><br>
	<button type="submit">Enviar</button>
</form>

<?php

if (isset($_POST['nome']) && isset($_POST['cidade'])) {
	echo "Oi {$_POST['nome']} de {$_POST['cidade']}.";
}
