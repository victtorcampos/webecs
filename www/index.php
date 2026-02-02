<?php
$titulo_pagina = "Conheça nossa Empresa";
$descricao_pagina = "Atuamos no mercado auxiliando as empresas, quanto a sua constituição, administração, consultorias e quando necessário, no encerramento das mesmas. Possuímos uma equipe de profissionais gabaritados nas áreas contábil, fiscal, trabalhista e de assessoria.";
?>

<?php $home = true ?>

<?php require_once("header.php") ?>

<div class="background-white py-8">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<h2 class="titulo mt-0">
					Conheça nossa Empresa
					<span>Um pouco sobre nós</span>
				</h2>
				<p>No Mundo atual, conquista seu espaço os que se destacam pela eficiência e qualificação. O objetivo principal de nossa empresa é atender de maneira rápida e com total segurança todos os clientes que nos confiam suas empresas, utilizando de softwares em todos os departamentos e nos atualizamos através de assinaturas específicas de todos os segmentos. Uma escolha cuidadosa dos recursos humanos e materiais são aspectos fundamentais para se obtiver resultados e conquistar o crescimento vitorioso de uma.</p>
				<a href="empresa.php" class="btn btn-cor">Saiba mais</a>
			</div>
			<div class="col-lg-6 mt-lg-0 mt-3">
				<h3 class="h5">Missão</h3>
				<p>Fornecer serviços de qualidade aos nossos clientes, para que multipliquem seus resultados e tenham uma boa visão de organização, pois sabemos que o empresário necessita ter tranquilidade para poder tomar decisões.</p>

				<h3 class="h5">Visão</h3>
				<p>Ser reconhecido pela disponibilidade de soluções contábeis, agregando valor econômico para o cliente, garantindo seu fortalecimento e solidez, firmando uma aliança séria e duradoura.</p>

				<h3 class="h5">Valores</h3>
				<p>Ética profissional, Comprometimento e qualidade, Trabalho em equipe, Relacionamento de parceria com o cliente, Dinamismo, Transparência, Integridade e Responsabilidade.</p>
			</div>
		</div>
	</div>
</div>

<div class="py-10 container texto-white text-align-center">
	<h2 class="h1 m-0"><span class="texto-cor2">Venha</span> fazer uma parceria de Sucesso!</h2>
	<h3 class="h4 mt-1 mb-0 text-transform-uppercase font-weight-300">Encontre em nossa empresa tudo o que precisa.</h3>
</div>

<div class="background-white py-8">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<h2 class="titulo mt-0">
					Soluções para sua Empresa!
					<span>Sempre nos preocupamos em atender suas necessidades</span>
				</h2>
				<p>•	Folha de Pagamento</p>
				<p>•	Validação e Reestruturação de Empresas</p>
				<p>•	Contabilidade Gerencial</p>
				<p>•	Possíveis Restituições no Âmbito Tributário</p>
				<p>•	Assessoria Empresarial</p>
				<p>•	Identificação de Benefícios no Âmbito Tributário</p>
				<p>•	Controles Internos</p>
				<p>•	Perícias Judiciais e Extrajudiciais</p>
				<p>•	Imposto de Renda</p>
				<p>•	Planejamento Financeiro e Tributário</p>
				<p>•	Consultoria</p>
				<p>•	Auditoria e Serviços Contábeis em Geral</p>

				<a href="servicos.php" class="btn btn-cor">Saiba mais</a>
			</div>
			<div class="col-lg-6 mt-lg-0 mt-3">
				<div class="row no-gutters">
					<div class="col-md-6 mb-1 text-align-center">
						<a href="utilitarios-agendas.php" class="utilitarios">
							<i class="far fa-fw fa-3x fa-calendar-alt"></i>
							<h3 class="h5">Agenda de Obrigações</h3>
							<p>Agendas estaduais, trabalhistas e federal.</p>
						</a>
					</div>
					<div class="col-md-6 mb-1 text-align-center">
						<a href="utilitarios-tabelas.php" class="utilitarios">
							<i class="fas fa-fw fa-3x fa-briefcase"></i>
							<h3 class="h5">Tabelas Práticas</h3>
							<p>Simples Nacional, Imposto de Renda e Alíquotas.</p>
						</a>
					</div>
					<div class="col-md-6 mb-1 text-align-center">
						<a href="utilitarios-facilitador.php" class="utilitarios">
							<i class="fas fa-fw fa-3x fa-folder-open"></i>
							<h3 class="h5">Facilitador Contábil</h3>
							<p>Links diversos da área contábil e empresarial.</p>
						</a>
					</div>
					<div class="col-md-6 mb-1 text-align-center">
						<a href="utilitarios-modelos.php" class="utilitarios">
							<i class="fas fa-fw fa-3x fa-file-alt"></i>
							<h3 class="h5">Modelos de Documentos</h3>
							<p>Contratos, Declarações, Editais, Procurações, Recibos, etc.</p>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="background-light py-8">
	<div class="container">
		<h2 class="titulo mt-0">
			Notícias Empresariais
			<span>Fique informado com nossas notícias atualizadas diariamente!</span>
		</h2>
		<div class="noticias mt-3 owl-carousel owl-theme">
            <?php
            $json = get_materias('https://sitecontabil.com.br/json/?db=sc_noticias&limite=6');
            foreach ( $json as $item ) { ?>
                <div>
                    <h4 class="h6"><?= $item->titulo ?></h4>
                    <p><?= limitar_texto(strip_tags(html_entity_decode($item->texto)), 250); ?></p>
                    <p><small><em>Publicado em <?= mostra_data($item->pubdate); ?></em></small></p>
                    <a href="utilitarios-noticias-ler.php?id=<?= $item->id; ?>" class="btn btn-dark">Leia na íntegra</a>
                </div>
            <?php } ?>
        </div>
        <div class="text-align-right mt-3"><a href="utilitarios-noticias.php" class="btn btn-cor">Confira todas as notícias</a></div>
	</div>
</div>

<!-- <div class="ebook texto-white" style="background-image: url('assets/imgs/ebook.jpg')">
	<div class="container pt-10 pb-10">
		<div class="row">
			<div class="ebook-descricao col-md-12 col-lg-7 offset-lg-1 order-lg-2">
				<h2 class="h1">O que é o serviço de contabilidade online?</h2>
				<p>É basicamente a troca de informações de forma digital, geralmente através de plataformas oferecidas pela empresa de serviços contábeis. Com o avanço das inovações tecnológicas o auxilio de plataformas online tem despertado interesse de contadores e empresários, na busca de agilidade na troca de informações, velocidades e segurança. Além da redução de custos, que em alguns casos pode ser discutido nesse processo...</p>
			</div>
			<div class="ebook-form col-md-12 col-lg-4 order-lg-1 py-4 px-2">
				<form action="/link-arquivo/sucesso2.php" method="post">
					<h2 class="text-align-center mt-0">Baixe o E-book Gratuitamente</h2>
					<p>Preencha seus dados abaixo para realizar o download do nosso e-book!</p>
					<label>Nome
					<input type="text" name="nome" placeholder="Informe seu nome" required class="form-campo mb-1"></label>
					<label>E-mail
					<input type="email" name="email" placeholder="Informe seu e-mail" required class="form-campo mb-1"></label>
					<button type="submit" class="mt-1 btn btn-cor width-100">Acessar Material Completo</button>
					<p style="opacity: .7;"><small>Suas informações não serão utilizadas para envio de qualquer tipo de mensagem de SPAM.</small></p>
				</form>
			</div>
		</div>
	</div>
</div> -->

<!-- <div class="background-cor py-5">
	<div class="container texto-white">
		<h2 class="titulo mt-0 mb-3">
			Newsletter
			<span>Cadastre-se e receba nossas Newsletters. Fique atento as novidades!</span>
		</h2>
		<form action="/newsletter/cadastro/index.php" method="post" target="_blank">
			<div class="form-row">
				<div class="col-lg-5 col-md-6">
					<input type="text" id="nome_user" name="nome_user" class="form-campo" placeholder="Informe seu nome" required>
				</div>
				<div class="col-lg-5 col-md-6 mt-1 mt-md-0">
					<input type="text" id="email_user" name="email_user" class="form-campo" placeholder="Informe seu e-mail" required>
				</div>
				<div class="col-lg-2 text-align-left text-align-lg-right">
					<button type="submit" class="btn btn-light width-lg-100 width-auto mt-1 mt-lg-0">Cadastrar</button>
				</div>
			</div>
		</form>
	</div>
</div> -->

<?php require_once("footer.php") ?>