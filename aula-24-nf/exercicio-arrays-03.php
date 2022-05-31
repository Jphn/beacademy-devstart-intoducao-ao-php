<?php

$a1 = [
    'nome' => 'João',
    'email' => 'email@email.com',
    'contato' => '(88) 8 8888-8888',
    'notas' => [
        9,
        4.5,
        3,
        2.3,
    ],
];

$a2 = [
    'nome' => 'Pedro',
    'email' => 'email@email.com',
    'contato' => '(88) 8 8888-8888',
    'notas' => [
        1,
        2.5,
        5,
        3.3,
    ],
];

$a3 = [
    'nome' => 'Bonifácio',
    'email' => 'email@email.com',
    'contato' => '(88) 8 8888-8888',
    'notas' => [
        1,
        2.5,
        5,
        3.3,
    ],
];

$a4 = [
    'nome' => 'Henrique',
    'email' => 'email@email.com',
    'contato' => '(88) 8 8888-8888',
    'notas' => [
        1,
        2.5,
        5,
        3.3,
    ],
];

$alunos = [
    $a1,
    $a2,
    $a3,
    $a4,
];

?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
<div class="container">
	<h1>ALUNOS</h1>
	<hr>
	<table class="table table-hover table-striped mt-5">
		<thead class="table-dark">
			<th>Nome</th>
			<th>Email</th>
			<th>Contato</th>
		</thead>
		<tbody>
			<?php

foreach ($alunos as $aluno) {
    echo '<tr>';
    echo "<td>{$aluno['nome']}</td>";
    echo "<td>{$aluno['email']}</td>";
    echo "<td>{$aluno['contato']}</td>";
    echo '</tr>';
}

?>
		</tbody>
	</table>
</div>
