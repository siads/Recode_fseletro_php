<?php

require_once('link.php');

if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['msg'])){
    $nome = $_POST['nome']; 
    $email = $_POST['email'];	
    $msg = $_POST['msg'];

    $sql = "INSERT INTO mensagens (nome, email, msg) VALUES ('$nome','$email','$msg')";
    $resultado = $link->query($sql);

    echo "<script>alert('Obrigado! Recebemos sua mensagem, vamos responder em breve. :)');</script>";
}
?>


<!DOCTYPE html>
<html lang="pt-br">

    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Produtos - Full Stack</title>
        <link rel="stylesheet" href="CSS/estilo.css">
        <script type="text/javascript" src="./JS/funcoes.js" charset="8"></script>
    </head>

<body>

  
    <!--Menu-->
    <?php
    include_once ("menu.html");
    ?>
        <section class="contatos">
            <span class="email">
                <p class="contp"><img src="Imagens/contatoEmail.jpg" width="40px">
                contato@fullstackeletro.com</p>
            </span>
            <span class="tel">
                <p class="contp"><img src="Imagens/contatoWhatsapp.jpg" width="40px">
                (11) 9999-9999</p>                
            </span>
        </section>             
     
        <br><br><br>

        <section class="formulario">            
        <form method="post" action="">
            <legend><b>Mande suas dúvidas ou sugestões</b></legend>
            <br><br>
            <label>Nome:</label><input class="nome" type="text">
            <br><br>
            <label>Email:</label><input class="email" type="text">
            <br><br>
            <label>Mensagem:</label><br><textarea class="msg" placeholder="Digite sua mensagem aqui" cols="35" rows="8" ></textarea>
            <br><br>
            <input class="btn_submit" type="submit" value="Enviar">

        </form>

        </section> 
<br><br>
<hr>

<h3>Mensagens</h3>
<br>
<?php 
              
$sql = "SELECT * FROM mensagens";
$resultado = $link->query($sql);

if ($resultado->num_rows > 0){
       while($rows = $resultado->fetch_assoc()) {
           echo "<div>";
           echo "Data: ", $rows['data'],"<br>";
           echo "Nome: ", $rows['nome'],"<br>";
           echo "Email: ", $rows['email'],"<br>";
           echo "Mensagem: ", $rows['msg'],"<br><br>";          
           echo "</div>";         
       }
} else {
    echo "Nenhum comentário ainda!";
}

?>
<hr>
        <footer id="rodape">
        <p id="formas_pagamento"><b>Formas de pagamento</b></p>
        <img src="./Imagens/Formas de pagamento.png" alt="Formas de pagamento">
        <p>&copy Recode Pro </p>
    </footer>
</body>

</html>

    