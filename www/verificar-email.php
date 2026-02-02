<?php
// /public_html/verificar-email.php
if (isset($_GET['a']) && isset($_GET['id'])) {
    $conta = urlencode($_GET['a']);
    $id = urlencode($_GET['id']);
    
    // Sua página customizada
    ?>
    <!DOCTYPE html>
    <html>
    <head><title>✅ Email Verificado!</title></head>
    <body style="font-family:Arial;text-align:center;padding:50px;">
        <h1>✅ Verificação Concluída</h1>
        <p>Seu email foi <strong>liberado com sucesso</strong> para %acct%.</p>
        <p>Futuros emails não precisarão de verificação.</p>
        <meta http-equiv="refresh" content="3;url=/cgi-sys/bxd.cgi?a=<?php echo $conta;?>&id=<?php echo $id;?>">
    </body>
    </html>
    <?php
} else {
    http_response_code(400);
    echo "Parâmetros inválidos";
}
?>
