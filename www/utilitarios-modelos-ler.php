<?php $titulo_pagina = "Modelos de Documentos" ?>

<?php $id = (isset($_GET["id"])) ? $_GET["id"] : 1; ?>
<?php $url_json = "https://sitecontabil.com.br/json/?db=sc_mod_documentos"; ?>
<?php $url_json_ler = "https://sitecontabil.com.br/json/?db=sc_mod_documentos&id=$id"; ?>

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
            <div class="mb-3">
                <?php foreach ($json as $item): ?>
                    <a href="modelos-documentos-ler.php?id=<?= $item->id; ?>" class="btn btn-outline-dark"><?= $item->titulo; ?></a>
                <?php endforeach; ?>
            </div>
            
            <?php if(array_key_exists("error", $json_ler)): ?>
                <p><?= $json_ler->error; ?></p>
            <?php else: ?>
                <?php foreach($json_ler as $ler): ?>
                    <h2><?= $ler->titulo; ?></h2>
                    <?= html_entity_decode($ler->texto) ?>
                <?php endforeach; ?>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</div>

<?php include "footer.php" ?>