<form action="" method="post">
	<input type="text" name="nome">

	<button type="submit">Enviar</button>
</form>

<?php

if (isset($_POST['nome'])) {
    echo $_POST['nome'];
}
