<?php
$titulo_pagina = "Agendas de Obrigações";
$descricao_pagina = "Agendas Trabalhista, Estaduais e Federal.";
?>

<?php require_once("header.php") ?>

<div class="background-white py-8 conteudo">
	<div class="container">
		<h1 class="titulo mt-0 mb-4">Agendas de Obrigações</h1>
		<?php
			$id = (isset($_GET["id"])) ? $_GET["id"] : 0;
			$json = json_decode(file_get_contents("https://sitecontabil.com.br/json/?db=sc_agendas&id=$id"));
		?>
		<?php if(array_key_exists("error", $json)): ?>
			<p><?= $json->error; ?></p>
		<?php else: ?>
			<?php foreach($json as $item): ?>
				<h2><?= $item->titulo; ?></h2>
				<?= html_entity_decode($item->texto) ?>
			<?php endforeach; ?>
			<a href="utilitarios-agendas.php?cat=<?= $_GET["cat"] ?>" class="btn btn-cor mt-3 d-inline-block">Voltar para as agendas</a>
		<?php endif; ?>
	</div>
</div>

<?php require_once("footer.php") ?>