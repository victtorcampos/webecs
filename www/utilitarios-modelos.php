<?php $titulo_pagina = "Modelos de Documentos" ?>
<?php $url_json = "https://sitecontabil.com.br/json/?db=sc_mod_documentos"; ?>

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
            
            <?php $counter = 0; ?>
            <?php do { ?>
                <h2><?= $json[$counter]->titulo; ?></h2>
                <?= html_entity_decode($json[$counter]->texto); ?>
                <?php $counter++; ?>
            <?php } while($counter == 0); ?>
        <?php endif; ?>
    </div>
</div>

<?php include "footer.php" ?>