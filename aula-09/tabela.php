<?php

$nome1 = "Alfreds Futterkiste";
$idade1 = 20;
$cidade1 = "Fortaleza";

$nome2 = "Francisco Chang";
$idade2 = 98;
$cidade2 = "California";

echo "
<table>
<tr>
	<th>Nome</th>
	<th>Idade</th>
	<th>Cidade</th>
</tr>
<tr>
	<td>{$nome1}</td>
	<td>{$idade1}</td>
	<td>{$cidade1}</td>
</tr>
<tr>
	<td>{$nome2}</td>
	<td>{$idade2}</td>
	<td>{$cidade2}</td>
</tr>
</table>
";
