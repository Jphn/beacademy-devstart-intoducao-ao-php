<?php

$p1 = [
    'nome' => 'GTX 1050 Ti',
    'preco' => 1650.68,
    'desc' => '4gb',
    'img' => 'https://gamernareal.com.br/wp-content/uploads/2021/09/Placa-de-Video-Palit-Nvidia-GeForce-GTX-1050-Ti-StormX-4GB-GDDR5-128bit.png',
];

$p2 = [
    'nome' => 'GTX 1660 Ti',
    'preco' => 2299.97,
    'desc' => '8gb',
    'img' => 'https://www.galax.com/media/catalog/product/cache/20/image/500x500/9df78eab33525d08d6e5fb8d27136e95/d/s/dsc_4427_gtx_5.png',
];

$p3 = [
    'nome' => 'RTX 3060',
    'preco' => 3550.0,
    'desc' => '12gb',
    'img' => 'https://dlcdnwebimgs.asus.com/gain/b0ab04ce-cc67-424a-99a2-2c41d5492fa3/w328',
];

$p4 = [
    'nome' => 'RYZEN 5 5600X',
    'preco' => 1367.9,
    'desc' => '3.70ghz',
    'img' => 'https://ae01.alicdn.com/kf/H5950c2e7962949caa47331923efd79c3g/Processador-amd-ryzen-5-5600x-r5-5600x-3-7-ghz-processador-cpu-six-core-twelve-thread.png',
];

$p5 = [
    'nome' => 'I9 9900K',
    'preco' => 3329.1,
    'desc' => '3.60ghz',
    'img' => 'http://plusvisionpc.com/wp-content/uploads/2019/10/INTEL%C2%AE-CORE%E2%84%A2-I9-9900K.png',
];

$produtos = [
    $p1,
    $p2,
    $p3,
    $p4,
    $p5,
];
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
<div class="container">
	<h1>ALUNOS</h1>
	<hr>
	<table class="table table-hover table-striped mt-5">
		<thead class="table-dark">
			<th>Nome</th>
			<th>Preço</th>
			<th>Descrição</th>
			<th>Imagem</th>
		</thead>
		<tbody>
			<?php

foreach ($produtos as $produto) {
    echo '<tr>';
    echo "<td>{$produto['nome']}</td>";
    echo "<td>{$produto['preco']}</td>";
    echo "<td>{$produto['desc']}</td>";
    echo "<td><img width='100' height='100' src='{$produto['img']}'></td>";
    echo '</tr>';
}

?>
		</tbody>
	</table>
</div>
