<?php
if (PATH_SEPARATOR == ";") {
  $quebraLinha = "\r\n";
} else {
  $quebraLinha = "\n";
}

if ($_GET["flag"]) {
  $destino = $_GET["e-mail"];
  $email = "atendimento@revistamaua.com.br";
  $assunto = "Revista Mauá e Região: um amigo lhe enviou esta mensagem";
} else {
  $destino = "atendimento@revistamaua.com.br";
  $email = $_GET["e-mail"];
  $assunto = "CONTATO (" . $nome . "): Revista Mauá e Região";
}

$nome = $_GET["nome"];
$mensagem = "Mensagem:<br><pre>" . $_GET["mensagem"] . "</pre>";

$headers = "";
$headers .= "MIME-Version: 1.1" . $quebraLinha;
$headers .= "Content-type: text/html; charset=utf-8" . $quebraLinha;
$headers .= "From: " . $email . $quebraLinha;

if(!mail($destino, $assunto, $mensagem, $headers , "-r" . $destino)) {
  mail($destino, $assunto, $mensagem, $headers);
}
?>