<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $mensagem = htmlspecialchars($_POST["message"]);

    $destinatario = "renatoguiarsilva02@gmail.com";
    $assunto = "Nova mensagem do Portfólio";

    $corpo = "Você recebeu uma nova mensagem do seu portfólio:\n\n";
    $corpo .= "Nome: $nome\n";
    $corpo .= "Email: $email\n";
    $corpo .= "Mensagem:\n$mensagem\n";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($destinatario, $assunto, $corpo, $headers)) {
        header("Location: agradecimento.html");
        exit();
    } else {
        echo "Erro ao enviar mensagem. Tente novamente mais tarde.";
    }
} else {
    echo "Método inválido.";
}
?>
