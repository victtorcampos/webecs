<!DOCTYPE html>
<html lang="pt-br">
<head>

<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"> -->
<style>
    <?php //echo file_get_contents('https://sitecontabil.com.br/docs/support/support.min.css'); ?>
    #politica { width: 100%; height: 0%; position: fixed; display: inline-block; z-index: 9999999; right: 0; bottom: 0; background: white; overflow-y: scroll; }
    .tit1,.tit2,p{ font-family: sans-serif; font-size: initial; }
    .for-cookie input, .for-cookie select, .for-cookie textarea{ font-family: sans-serif; background:white; border:none; border-radius:3px; padding:8px; margin:2px; flex: 1;}
    .for-cookie input::placeholder, .for-cookie select::placeholder, .for-cookie textarea::placeholder{ color: inherit; background-color: white; }
    .bt-cookie{ font-family: sans-serif; background: #edbd00; color: #000; padding: 5px 10px; border-radius: 3px; text-decoration: none; border:none; cursor: pointer; }
</style>

</head>
<body>

<!-- Política de cookies  -->
<script>
    (function() {
        if (!localStorage.getItem('cookie-bar')) {
            document.body.innerHTML += '\
            <div class="cookie-bar" style="box-sizing: border-box; position: fixed; left: 0; bottom: 0; z-index: 9999; width: 100%; text-align: center; font-family: sans-serif; font-size: 14px;padding: 15px; color: #ddd; background-color: rgba(0,0,0,.8);">\
                Utilizamos cookies essenciais e tecnologias semelhantes de acordo com a <a class="cookie" style="cursor:pointer; display: inline-block; background: #edbd00; color: #000; padding: 5px 10px; border-radius: 3px; text-decoration: none;">Política de Privacidade</a> e, ao continuar navegando, você concorda com estas condições. \
                <a href="#" class="cookie-bar-aceitar" style="display: inline-block; background: #edbd00; color: #000; padding: 5px 10px; border-radius: 3px; text-decoration: none;">Sim, concordo</a>\
            </div>\
            ';
            document.querySelector('.cookie-bar a.cookie-bar-aceitar').onclick = function(e) {
                e.preventDefault();
                document.querySelector('.cookie-bar').style.display = 'none';
                localStorage.setItem('cookie-bar', true);
            };
        }
    })();
</script>

    <!-- Política de cookies  -->

    <article id="politica" style="text-align: justify;">
        <div style="padding: 60px;">
            <a class="fecha" style="cursor:pointer; display: inline-block; background: #edbd00; color: #000; padding: 6px 9px; margin-bottom:20px; border-radius: 3px; text-decoration: none; font-family: sans-serif; font-size: 14px;"> Fechar </a>
            
            <div style="border-bottom:2px solid #d0d0d0;">
                <div class="accordion-btn" style="cursor: pointer; display:flex; align-items:center; justify-content: space-between; padding:10px 0;"> <h5 class="tit2 d-flex align-items-center" style="margin: 0;"> Socilitações </h5> <i class="fas fa-fw fa-chevron-down"></i> </div>
                <div class="accordion-cont">
                    <div style="background-color: #f0f0f0; padding:40px; margin-top:10px">
                        <form id="formcookie" class="for-cookie" method="post">
                            <div style="width: 100%; display:flex; flex-wrap:wrap;">
                                <input type="text" name="nome" id="formnome" placeholder="Digite seu Nome" required>
                                <input type="text" name="email" id="formemail" placeholder="Digite seu eMail" required>
                                <input type="text" name="telefone" id="formtelefone" class="celular-mask-cookie" placeholder="Digite seu Telefone" required>
                                <input type="celular" name="celular" id="formcelular" class="celular-mask-cookie" placeholder="Digite seu Celular">
                            </div>
                            <div style="width: 100%; display:flex; flex-wrap:wrap;">
                                <input type="text" name="assunto" id="formassunto" placeholder="Digite seu Assunto" required>
                                <select id="forsolicitar" name="solicitar" required>
                                    <option value="Quero atualizar meus dados"> Quero atualizar meus dados</option>
                                    <option value="Quero confirmar a existência meus dados"> Quero confirmar a existência meus dados </option>
                                    <option value="Quero solicitar a exclusão dos meus dados"> Quero solicitar a exclusão dos meus dados </option>
                                    <option value="Quero solicitar a portabilidade dos meus dados"> Quero solicitar a portabilidade dos meus dados </option>
                                    <option value="Quero ter acesso aos meus dados pesssoais"> Quero ter acesso aos meus dados pesssoais </option>
                                </select>
                            </div>
                            <div style="width: 100%;">
                                <textarea style="width: -webkit-fill-available;" name="mensagem" id="formmensagem" cols="30" rows="5" placeholder="Digite sua Mensagem" required></textarea>
                            </div>
                            <div>
                                <button class="bt-cookie" type="submit"> Enviar Solicitação</button>
                                <button class="bt-cookie" type="reset">  Limpar</button>
                            </div>
                            <div style="width: 100%;">
                                <div id="resultadoCookie" class="mt-2"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <h3 class="tit1"> Política de Cookies </h3>
            <h5 class="tit2"> Seção 1 - O que faremos com esta informação?</h5>
            <p> Esta Política de Cookies explica o que são cookies e como os usamos. Você deve ler esta política para entender o que são cookies, como os usamos, os tipos de cookies que usamos, ou seja, as informações que coletamos usando cookies e como essas informações são usadas e como controlar as preferências de cookies. Para mais informações sobre como usamos, armazenamos e mantemos seus dados pessoais seguros, consulte nossa Política de Privacidade. Você pode, a qualquer momento, alterar ou retirar seu consentimento da Declaração de Cookies em nosso site.Saiba mais sobre quem somos, como você pode entrar em contato conosco e como processamos dados pessoais em nossa Política de Privacidade.  </p>
            <h5 class="tit2"> Seção 2 - Coleta de dados</h5>
            <p> Coletamos os dados do usuário conforme ele nos fornece, de forma direta ou indireta, no acesso e uso dos sites, aplicativos e serviços prestados. Utilizamos Cookies e identificadores anônimos para controle de audiência, navegação, segurança e publicidade, sendo que o usuário concorda com essa utilização ao aceitar essa Política de Privacidade. </p>
            <h5 class="tit2"> Seção 3 - Consentimento </h5>
            <p> Como vocês obtêm meu consentimento? Quando você fornece informações pessoais como nome, telefone e endereço, para completar: uma solicitação, enviar formulário de contato, cadastrar em nossos sistemas ou procurar um contador. Após a realização de ações entendemos que você está de acordo com a coleta de dados para serem utilizados pela nossa empresa. Se pedimos por suas informações pessoais por uma razão secundária, como marketing, vamos lhe pedir diretamente por seu consentimento, ou lhe fornecer a oportunidade de dizer não. E caso você queira retirar seu consentimento, como proceder? Se após você nos fornecer seus dados, você mudar de ideia, você pode retirar o seu consentimento para que possamos entrar em contato, para a coleção de dados contínua, uso ou divulgação de suas informações, a qualquer momento, entrando em contato conosco. </p>
            <h5 class="tit2"> Seção 4 - Divulgação </h5>
            <p> Podemos divulgar suas informações pessoais caso sejamos obrigados pela lei para fazê-lo ou se você violar nossos Termos de Serviço. </p>
            <h5 class="tit2"> Seção 5 - Serviços de terceiros</h5>
            <p> No geral, os fornecedores terceirizados usados por nós irão apenas coletar, usar e divulgar suas informações na medida do necessário para permitir que eles realizem os serviços que eles nos fornecem. Entretanto, certos fornecedores de serviços terceirizados, tais como gateways de pagamento e outros processadores de transação de pagamento, têm suas próprias políticas de privacidade com respeito à informação que somos obrigados a fornecer para eles de suas transações relacionadas com compras. Para esses fornecedores, recomendamos que você leia suas políticas de privacidade para que você possa entender a maneira na qual suas informações pessoais serão usadas por esses fornecedores. Em particular, lembre-se que certos fornecedores podem ser localizados em ou possuir instalações que são localizadas em jurisdições diferentes que você ou nós. Assim, se você quer continuar com uma transação que envolve os serviços de um fornecedor de serviço terceirizado, então suas informações podem tornar-se sujeitas às leis da(s) jurisdição(ões) nas quais o fornecedor de serviço ou suas instalações estão localizados. Como um exemplo, se você está localizado no Canadá e sua transação é processada por um gateway de pagamento localizado nos Estados Unidos, então suas informações pessoais usadas para completar aquela transação podem estar sujeitas a divulgação sob a legislação dos Estados Unidos, incluindo o Ato Patriota. Uma vez que você deixe o site da nossa loja ou seja redirecionado para um aplicativo ou site de terceiros, você não será mais regido por essa Política de Privacidade ou pelos Termos de Serviço do nosso site. Quando você clica em links em nosso site, eles podem lhe direcionar para fora do mesmo. Não somos responsáveis pelas práticas de privacidade de outros sites e lhe incentivamos a ler as declarações de privacidade deles. </p>
            <h5 class="tit2"> Seção 6 - Segurança</h5>
            <p> Para proteger suas informações pessoais, tomamos precauções razoáveis e seguimos as melhores práticas da indústria para nos certificar que elas não serão perdidas inadequadamente, usurpadas, acessadas, divulgadas, alteradas ou destruídas. </p>
            <h5 class="tit2"> Seção 7 - Alterações para essa política de privacidade</h5>
            <p> Reservamos o direito de modificar essa política de privacidade a qualquer momento, então por favor, revise-a com frequência. Alterações e esclarecimentos vão surtir efeito imediatamente após sua publicação no site. Se fizermos alterações de materiais para essa política, iremos notificá-lo aqui que eles foram atualizados, para que você tenha ciência sobre quais informações coletamos, como as usamos, e sob que circunstâncias, se alguma, usamos e/ou divulgamos elas. Se nosso site for adquirido ou fundido com outra empresa, suas informações podem ser transferidas para os novos proprietários para que possamos continuar a vender produtos e serviços para você </p>
        </div>
    </article>

</body>
</html>

<script>
    //ACORDION
    $(document).ready(function() {
        $('.accordion-cont').hide();
        $('.accordion-btn').click(function(){
            if($(this).next('.accordion-cont').is(':visible')){
                $('.accordion-cont').slideUp(500);
                $(".accordion-btn i.fas").removeClass("fa-chevron-up").addClass('fa-chevron-down');
            } else {
                $('.accordion-cont').slideUp(500);
                $(this).next('.accordion-cont').slideDown(500);
                $(".accordion-btn i.fas").removeClass("fa-chevron-up").addClass('fa-chevron-down');
                $(this).children("i.fas").addClass('fa-chevron-up');
            }
        });
    })
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
<script src="assets/js/jquery.min.js" language="javascript"></script>
<script src="assets/js/jquery.mask.js" language="javascript"></script>

<script>
    //COOKIE
    $(document).ready(function() {
        $(".cookie").click(function(){
            $("#politica").animate({height: "100%"}, 200);
            $('body').css({overflow: 'hidden'});
        });

        $(".fecha").click(function(){
            $("#politica").animate({height: "0"}, 200);
            $('body').css({overflow: 'auto'});
        });
    })

    //FORMULARIO
    $(document).ready(function() {
        var SPMaskBehavior = function (val) {
            return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
        },
        spOptions = {
            onKeyPress: function(val, e, field, options) {
                field.mask(SPMaskBehavior.apply({}, arguments), options);
            }
        };
        $('.celular-mask-cookie').mask(SPMaskBehavior, spOptions);
        
        $('#formcookie').submit(function(){
            var dados = $(this).serialize();

            $.ajax({
                type: "POST",
                url: "enviar-cookie.php",
                data: dados,
                dataType: 'json',
                beforeSend: function(){
                    $("#resultadoCookie").removeClass('alert-white alert-danger alert-success alert-warning').addClass('alert alert-white');
                    $("#resultadoCookie").html('Aguarde, enviando a mensagem');
                    $("#resultadoCookie").fadeIn(250);
                },
                success: function(respostaCookie){
                    $("#resultadoCookie").removeClass("alert-white alert-danger alert-success alert-warning").addClass(respostaCookie.tipo);
                    $("#resultadoCookie").html(respostaCookie.mensagem);
                    console.log(respostaCookie);
                },
                error: function(respostaCookie){
                    $("#resultadoCookie").removeClass("alert-white alert-danger alert-success alert-warning").addClass('alert-danger');
                    $("#resultadoCookie").html('Um erro desconhecido aconteceu e sua mensagem não pode ser enviada');
                    console.log(respostaCookie);
                    $('#resposta-erro-cookie').html(respostaCookie.responseText);
                }
            });
            return false;
        });
    });
</script>