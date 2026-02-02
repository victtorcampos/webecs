<?php $titulo_pagina = "Sindicatos e Associações" ?>
<?php $url_json = "https://sitecontabil.com.br/json/?db=sc_materias&id=3"; ?>

<?php include "header.php" ?>

<div class="background-white py-8 conteudo">
    <div class="container">
        <h1 class="titulo mt-0">
			<?= $titulo_pagina ?>
			<span><?= $escritorio ?></span>
		</h1>
        <?php if(array_key_exists("error", $json)): ?>
            <p><?= $json->error; ?></p>
        <?php else: ?>
            <?php foreach ($json as $item): ?>
                <?= html_entity_decode($item->texto) ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>

<?php include "footer.php" ?>