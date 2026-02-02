<?php 
$categorias = array(
    "federal" => "Agenda Federal",
    "trabalhista" => "Agenda Trabalhista",
    "ac" => "Agenda do Estado do Acre",
    "al" => "Agenda do Estado de Alagoas",
    "am" => "Agenda do Estado do Amazonas",
    "ap" => "Agenda do Estado do Amapá",
    "ba" => "Agenda do Estado da Bahia",
    "ce" => "Agenda do Estado do Ceará",
    "df" => "Agenda do Distrito Federal",
    "es" => "Agenda do Estado do Espírito Santo",
    "go" => "Agenda do Estado do Goiás",
    "ma" => "Agenda do Estado do Maranhão",
    "mt" => "Agenda do Estado do Mato Grosso",
    "ms" => "Agenda do Estado do Mato Grosso do Sul",
    "mg" => "Agenda do Estado de Minas Gerais",
    "pa" => "Agenda do Estado do Pará",
    "pb" => "Agenda do Estado da Paraíba",
    "pr" => "Agenda do Estado do Paraná",
    "pe" => "Agenda do Estado do Pernambuco",
    "pi" => "Agenda do Estado do Piauí",
    "rj" => "Agenda do Estado do Rio de Janeiro",
    "rn" => "Agenda do Estado do Rio Grande do Norte",
    "rs" => "Agenda do Estado do Rio Grande do Sul",
    "ro" => "Agenda do Estado de Rondônia",
    "rr" => "Agenda do Estado de Roraima",
    "sc" => "Agenda do Estado de Santa Catarina",
    "sp" => "Agenda do Estado de São Paulo",
    "se" => "Agenda do Estado do Sergipe",
    "to" => "Agenda do Estado do Tocantins"
);
?>

<?php
$cat = (isset($_GET["cat"])) ? $_GET["cat"] : "federal";
$url_json = "https://sitecontabil.com.br/json/?db=sc_agendas&limite=30&cat=$cat";
?>

<?php $pagina_agenda = true; ?>
<?php $titulo_pagina = "Agendas de Obrigações - " . $categorias[$cat] ?>

<?php include "header.php" ?>

<?php
$conteudo_agenda = array();
foreach ($json as $key => $object) :
    $conteudo_agenda[$object->id] = array(
        "titulo" => strtoupper($object->categoria) . " - " . $object->titulo,
        "data" => "Obrigação do dia: " . date_format( date_create($object->pubdate_start) , "d/m/Y"),
        "texto" => $object->texto
    );

    unset($object->texto);
    unset($object->status);
    
    $object->title = strtoupper($object->categoria) . " - " . $object->titulo;
    unset($object->titulo);
    $object->start = date_format( date_create($object->pubdate_start) , "Y-m-d");
    unset($object->pubdate_start);
    $object->end = date_format( date_create($object->pubdate_end) , "Y-m-d");
    unset($object->pubdate_end);
    
    //$object->url = "agendas-ler.php?cat=" . $object->categoria . "&id=" . $object->id;
    $object->url = "javascript:janela_modal($object->id)";
endforeach;
?>

<!-- JANELA MODAL CONTEUDO DA AGENDA -->
<div id="modal" class="modal">
    <button class="modal-close btn btn-sm btn-outline-white">Fechar <i class="fas fa-times ml-1"></i></button> <!-- botão de fechar -->
    <?php foreach($conteudo_agenda as $key => $agenda): ?>
    <div class="modal-janela container background-white" id="modal_agenda_<?= $key ?>"> <!-- escurecer o fundo do modal -->
        <h4 class="mb-0"><?= $agenda["titulo"] ?></h4>
        <p class="small"><?= $agenda["data"] ?></p>
        <div class="modal-janela-texto">
            <?= html_entity_decode($agenda["texto"]); ?>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<div class="background-white py-8 conteudo">
	<div class="container">
		<h1 class="titulo mt-0">
			<?= $titulo_pagina ?>
			<span><?= $escritorio ?></span>
		</h1>
		<?php if(array_key_exists("error", $json)): ?>
            <p><?= $json->error; ?></p>
        <?php else: ?>
            <select class="combobox-estados form-campo mb-3">
                <option value="">Selecione uma opção</option>
                <option value="federal">Agenda Federal</option>
                <option value="trabalhista">Agenda Trabalhista</option>
                <option value="ac">Agenda do Estado do Acre</option>
                <option value="al">Agenda do Estado de Alagoas</option>
                <option value="am">Agenda do Estado do Amazonas</option>
                <option value="ap">Agenda do Estado do Amapá</option>
                <option value="ba">Agenda do Estado da Bahia</option>
                <option value="ce">Agenda do Estado do Ceará</option>
                <option value="df">Agenda do Distrito Federal</option>
                <option value="es">Agenda do Estado do Espírito Santo</option>
                <option value="go">Agenda do Estado do Goiás</option>
                <option value="ma">Agenda do Estado do Maranhão</option>
                <option value="mt">Agenda do Estado do Mato Grosso</option>
                <option value="ms">Agenda do Estado do Mato Grosso do Sul</option>
                <option value="mg">Agenda do Estado de Minas Gerais</option>
                <option value="pa">Agenda do Estado do Pará</option>
                <option value="pb">Agenda do Estado da Paraíba</option>
                <option value="pr">Agenda do Estado do Paraná</option>
                <option value="pe">Agenda do Estado do Pernambuco</option>
                <option value="pi">Agenda do Estado do Piauí</option>
                <option value="rj">Agenda do Estado do Rio de Janeiro</option>
                <option value="rn">Agenda do Estado do Rio Grande do Norte</option>
                <option value="rs">Agenda do Estado do Rio Grande do Sul</option>
                <option value="ro">Agenda do Estado de Rondônia</option>
                <option value="rr">Agenda do Estado de Roraima</option>
                <option value="sc">Agenda do Estado de Santa Catarina</option>
                <option value="sp">Agenda do Estado de São Paulo</option>
                <option value="se">Agenda do Estado do Sergipe</option>
                <option value="to">Agenda do Estado do Tocantins</option>
            </select>
            <div id="calendar" class="background-white p-1 shadow"></div>
        <?php endif; ?>
	</div>
</div>

<?php include "footer.php" ?>