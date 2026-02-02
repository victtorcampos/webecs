<?php
$titulo_pagina = "Fale conosco";
$descricao_pagina = "Entre em contato e faça uma parceria de sucesso.";
?>

<?php require_once("header.php") ?>

<div class="background-white py-8 conteudo">
	<div class="container">
		<h1 class="titulo mt-0 mb-4">
			Fale conosco
			<span>Entre em contato e faça uma parceria de sucesso</span>
		</h1>
		<h2 class="h3">Endereço</h2>
		<p><?= $endereco ?> - <?= $bairro ?> - <?= $cidade ?> - <?= $cep ?></p>
		<p><strong>Telefone</strong> <?= $telefone ?></p>
		<p><strong>Whatsapp</strong> <a href="<?= $whatsapp_link ?>"> <?= $whatsapp ?></a></p>
		<p><strong>E-mail</strong> <a href="mailto:<?= $email ?>"><?= $email ?></a></p>

		<div class="mapa">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7789.006802244542!2d-55.716667!3d-12.549023!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93a0b300f18b6c73%3A0xacf300e258832b4!2sAv.%20Natalino%20Jo%C3%A3o%20Brescansin%2C%20375%20-%20CENTRO%2C%20Sorriso%20-%20MT%2C%2078890-000!5e0!3m2!1spt-BR!2sbr!4v1639492072922!5m2!1spt-BR!2sbr" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>

		<h2 class="h3">Envie-nos uma mensagem</h2>
		<form id="formcontato" method="post">
			<div class="form-row">
				<div class="col-md-6 mb-2">
					<label for="formnome" class="form-label">Seu nome <span class="texto-danger">(obrigatório)</span></label>
					<input type="text" name="nome" id="formnome" class="form-campo">
				</div>
				<div class="col-md-6 mb-2">
					<label for="formemail" class="form-label">Seu e-mail <span class="texto-danger">(obrigatório)</span></label>
					<input type="text" name="email" id="formemail" class="form-campo">
				</div>
			</div>
			<div class="form-row">
				<div class="col-lg-4 col-sm-6 mb-2">
					<label for="formtelefone" class="form-label">Seu telefone <span class="texto-danger">(obrigatório)</span></label>
					<input type="text" name="telefone" id="formtelefone" class="form-campo celular-mask">
				</div>
				<div class="col-lg-4 col-sm-6 mb-2">
					<label for="formcelular" class="form-label">Seu celular</label>
					<input type="celular" name="celular" id="formcelular" class="form-campo celular-mask">
				</div>
				<div class="col-lg-4 mb-2">
					<label for="formassunto" class="form-label">Assunto da mensagem <span class="texto-danger">(obrigatório)</span></label>
					<input type="assunto" name="assunto" id="formassunto" class="form-campo">
				</div>
			</div>
			<div class="mb-2">
				<label for="formmensagem" class="form-label">Digite sua mensagem <span class="texto-danger">(obrigatório)</span></label>
				<textarea name="mensagem" id="formmensagem" rows="3" class="form-campo"></textarea>
			</div>
			<label for="formcaptcha" class="form-label">Digite os caracteres da imagem <span class="texto-danger">(obrigatório)</span></label>
			<a href="javascript:void(0);" onclick="reloadcaptcha();" class="small"><i class="fas fa-redo mr-1"></i> Trocar imagem</a>
			<div class="form-row">
				<div class="captcha mb-2" style="padding-left: 5px; padding-right: 5px;"><img id="imgcaptcha" src="captcha.php" class="d-block"></div>
				<div class="col mb-2"><input type="text" name="captcha" id="formcaptcha" class="form-campo height-100"></div>
			</div>
			<div class="mb-2">
				<button type="submit" class="btn btn-cor">Enviar mensagem</button>
			</div>
			<div id="resultado"></div>
		</form>
	</div>
</div>

<?php require_once("footer.php") ?>