    <div class="py-8 rodape">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <h2><span class="texto-cor">E.C.S</span> Escritório Contábil Sorriso</h2>			
                    <p>Venha fazer uma parceria de Sucesso! Encontre em nossa empresa tudo o que precisa.</p>
                </div>
                <div class="col-lg-6">
                    <ul class="links_importantes">
                        <li><a href="utilitarios-crcs.php">CRC's Estaduais</a></li>
                        <li><a href="http://idg.receita.fazenda.gov.br/orientacao/tributaria/cadastros/cadastro-nacional-de-pessoas-juridicas-cnpj/classificacao-nacional-de-atividades-economicas-2013-cnae" target="_blank">CNAE Fiscal</a></li>
                        <li><a href="http://www.previdencia.gov.br/servicos-ao-cidadao/informacoes-gerais/formularios-solicitados-pelo-inss/" target="_blank">Formulários do INSS</a></li>
                        <li><a href="http://www.debit.com.br/" target="_blank">Indicadores Econômicos</a></li>
                        <li><a href="http://economia.uol.com.br/" target="_blank">Índices, Cotações e Finanças</a></li>
                        <li><a href="http://www4.planalto.gov.br/legislacao" target="_blank">Legislação da Receita Federal</a></li>
                        <li><a href="http://www.leigeral.com.br/" target="_blank">Micro e Pequena Empresa</a></li>
                        <li><a href="http://portal.mte.gov.br/portal-mte/" target="_blank">Ministério do Trabalho</a></li>
                        <li><a href="http://www.pgfn.fazenda.gov.br/" target="_blank">PGFN</a></li>
                        <li><a href="http://www.portaldoempreendedor.gov.br/" target="_blank">Portal do Empreendedor</a></li>
                        <li><a href="http://www.previdencia.gov.br/" target="_blank">Previdência Social</a></li>
                        <li><a href="http://idg.receita.fazenda.gov.br/" target="_blank">Receita Federal</a></li>
                        <li><a href="utilitarios-sindicatos.php">Sindicatos e Associações</a></li>
                        <li><a href="http://www8.receita.fazenda.gov.br/SimplesNacional/" target="_blank">Simples Nacional</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h3 class="h5">Redes Sociais</h3>
                    <p>Conheça e siga nossos canais. Interaja, fale conosco pelos nossos perfis e saiba de todas as novidades.</p>
                    <div class="redes_sociais mt-3">
                        <?php if(isset($facebook) && !empty($facebook)): ?><a href="<?= $facebook ?>" title="Facebook" target="_blank" class="facebook"><i class="fab fa-fw fa-lg fa-facebook-f"></i></a><?php endif; ?>
                        <?php if(isset($instagram) && !empty($instagram)): ?><a href="<?= $instagram ?>" title="Instagram" target="_blank" class="instagram"><i class="fab fa-fw fa-lg fa-instagram"></i></a><?php endif; ?>
                        <?php if(isset($linkedin) && !empty($linkedin)): ?><a href="<?= $linkedin ?>" title="Linkedin" target="_blank" class="linkedin"><i class="fab fa-fw fa-lg fa-linkedin-in"></i></a><?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-2 text-align-center copyright">
        <p>Copyright © <?= (date('Y') > $ano_dev) ? $ano_dev . ' - ' . date('Y') : $ano_dev; ?> <strong><?= $escritorio ?></strong> | Desenvolvido por <a href="https://sitecontabil.com.br/modelos/" target="_blank" class="font-weight-700">Sitecontabil</a> <!-- <a href="https://mpmsistema.com.br/painel" target="_blank" class="ml-2"><i class="fas fa-user-lock"></i></a> --></p>
    </div>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.mask.js"></script>
    <script src="assets/owl-carousel2/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="assets/owl-carousel2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owl-carousel2/owl.theme.default.min.css">

    <?php if (isset($pagina_agenda)) : ?>
    <link rel="stylesheet" href="assets/fullcalendar/fullcalendar.min.css" />
    <script src="assets/fullcalendar/moment.min.js"></script>
    <script src="assets/fullcalendar/fullcalendar.min.js"></script>
    <script src="assets/fullcalendar/pt-br.js"></script>
    <script>
        var get_data = '<?= json_encode($json) ?>';

        $(function() {
            $("#calendar").fullCalendar({
                locale: "pt-br",
                header: {
                    left: "prev,next today",
                    center: "title",
                    right: "month,list",
                },
                height: "auto",
                contentHeight: "auto",
                aspectRatio: 2.5,
                events: JSON.parse(get_data),
                eventLimit: 5
            });
        });

        /* JANELA MODAL SCRIPT */
        var modal = document.getElementById('modal'); /* Pega o id da janela modal */

        function janela_modal(janela) {
            modal.style.display = "flex";
            $(".modal-janela").hide();
            $("#modal_agenda_"+janela).show();
        };

        // Quando clicar no <Fechar X> irá fechar o modal
        $(".modal-close").click(function() {
            modal.style.display = "none";
        });

        // Quando clicar fora da janela irá fechar o modal
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        $(".combobox-estados").change(function(){
            window.open("agendas.php?cat=" + $(this).val(), "_self");
        });
    </script>
    <?php endif; ?>
    <script src="assets/js/scripts.js"></script>
</body>
</html>