<?php
$destinatario = "gabriel.beneficium@gmail.com";

$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$tel = $_REQUEST['tel'];

 // monta o e-mail na variavel $body

$body = "===================================" . "\n";
$body = $body . "LEAD SUPER AP - TELEMEDICINA" . "\n";
$body = $body . "===================================" . "\n\n";
$body = $body . "Nome: " . $nome . "\n";
$body = $body . "Email: " . $email . "\n";
$body = $body . "Telefone: " . $tel . "\n\n";
$body = $body . "===================================" . "\n";

// envia o email
mail($destinatario, $assunto , $body, "From: $email\r\n");

// redireciona para a página de obrigado
header("location:obrigado.html");

?>