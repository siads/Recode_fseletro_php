
<?php
require_once("link.php");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Produtos - Full Stack</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="CSS/estilo.css">
    <script type="text/javascript" src="./JS/funcoes.js" charset="8"></script>
</head>

<body>

    <!--Menu-->
    <?php
    include_once("menu.html");
    ?>


    <header>
        <h2>Produtos</h2>
    </header>
    <hr>
    <br>

    <section class="categorias">
        <h3>Categorias</h3>
        <ul class="mag">
            <li onclick="exibir_tudo()" onmouseover="upScaleMenu(this)" onmouseout="downScaleMenu(this)">Todas (12)</li>
            <li onclick="exibir_categoria ('geladeira')" onmouseover="upScaleMenu(this)" onmouseout="downScaleMenu(this)">Geladeiras (3)</li>
            <li onclick="exibir_categoria ('fogao')"onmouseover="upScaleMenu(this)" onmouseout="downScaleMenu(this)">Fogões (2)</li>
            <li onclick="exibir_categoria ('microondas')"onmouseover="upScaleMenu(this)" onmouseout="downScaleMenu(this)">Microondas (3)</li>
            <li onclick="exibir_categoria('Lava roupas')"onmouseover="upScaleMenu(this)" onmouseout="downScaleMenu(this)">Lavadora de roupas (2)</li>
            <li onclick="exibir_categoria ('Lava-louca')"onmouseover="upScaleMenu(this)" onmouseout="downScaleMenu(this)">Lava-louças (2)</li>
        </ul>
    </section>

<section class="produtos">     
<?php 
              
$sql = "SELECT * FROM produtos;";
$result = $link->query($sql);

if ($result->num_rows > 0){
       while($rows = $result->fetch_assoc()) {
          
?>

    <div class="box_produto" id="<?php echo $rows["categoria"]; ?>">                
    <img src="<?php echo $rows["imagem"]; ?>" alt="<?php echo $rows["descricao"]; ?>" class="img" onclick="zoom(this)">
    <br>
    <p class="descricao"><?php echo $rows["descricao"]; ?></p>
    <hr>
    <p class="descricao"><strike>R$ <?php echo $rows["preco"]; ?></strike></p>
    <p class="descricao">R$ <?php echo $rows["precofinal"]; ?> </p>                 
</div>
       

<?php
       }
    } else {
        echo "Nenhum produto cadastrado!";
    }
?>

<br><br>

</section>

<footer id="rodape">
        <p id="formas_pagamento"><b>Formas de pagamento</b></p>
        <img src="./Imagens/Formas de pagamento.png" alt="Formas de pagamento">
        <p>&copy Recode Pro </p>
</footer>

    </body>
</html>

<!-- descrição anterior

<section>
    <div class="produtos">
        <div class="box_produto" id="geladeira" onmouseover="upScale(this)" onmouseout="downScale(this)">
            <img src="Imagens/produtos/geladeiraBrastemp.jpg" alt="Geladeira Brastemp">
            <br>
            <p class="descricao">Geladeira Brastemp Frost Free Inverse 443L</p>
            <hr>
            <p class="preco">R$ 4.179,00</p>
            <p class="preco_final">R$ 3.339,10</p>
        </div>

        <div class="box_produto" id="geladeira" onmouseover="upScale(this)" onmouseout="downScale(this)">
            <img src="Imagens/produtos/geladeiraEletrolux.jpg" alt="Geladeira Electrolux">
            <br>
            <p class="descricao">Refrigerador Electrolux Side by Side Frost Free 504L</p>
            <hr>
            <p class="preco">R$ 5.999,00</p>
            <p class="preco_final">R$ 4.269,00</p>
        </div>

        <div class="box_produto" id="geladeira" onmouseover="upScale(this)" onmouseout="downScale(this)">
            <img src="Imagens/produtos/geladeiraSamsungSide.jpg" alt="Geladeira Samgung">
            <br>
            <p class="descricao">Refrigerador Samsung Side by Side Inox Look 501L</p>
            <hr>
            <p class="preco">R$ 8.999,00</p>
            <p class="preco_final">R$ 6.389,99</p>
        </div>

        <div class="box_produto" id="fogao" onmouseover="upScale(this)" onmouseout="downScale(this)">
            <img src="Imagens/produtos/fogãoBrastemp.jpg" alt="Fogão Brastemp">
            <br>
            <p class="descricao">Fogão Brastemp 4 bocas Inox com grill e timer digital</p>
            <hr>
            <p class="preco">R$ 1.999,00</p>
            <p class="preco_final">R$ 1.349,00</p>
        </div>
    </div>

        <div class="produtos">
        <div class="box_produto" id="fogao" onmouseover="upScale(this)" onmouseout="downScale(this)">
            <img src="Imagens/produtos/fogãoAtlas.jpg" alt="Fogão Atlas">
            <br>
            <p class="descricao">Fogão à Gás 4 Bocas Atlas Mônaco Acendimento Automático Inox</p>
            <hr>
            <p class="preco">R$ 1.109,00</p>
            <p class="preco_final">R$ 849,00</p>
        </div>

        <div class="box_produto" id="microondas" onmouseover="upScale(this)" onmouseout="downScale(this)">
            <img src="Imagens/produtos/microondasEletrolux.jpg" alt="Forno Microondas Electrolux">
            <br>
            <p class="descricao">Forno de Micro-ondas Electrolux com Painel Blue Touch 31L</p>
            <hr>
            <p class="preco">R$ 999,00</p>
            <p class="preco_final">R$ 949,00</p>
        </div>
    

        <div class="box_produto" id="microondas" onmouseover="upScale(this)" onmouseout="downScale(this)">
            <img src="Imagens/produtos/microondasConsul.jpg" alt="Forno Microondas Consul">
            <br>
            <p class="descricao">Forno de Micro-ondas Consul com Puxador na Porta 20L</p>
            <hr>
            <p class="preco">R$ 599,00</p>
            <p class="preco_final">R$ 449,00</p>
        </div>

        <div class="box_produto">
            <img src="Imagens/produtos/microondasLG.jpg" alt="Forno Microondas LG">
            <br>
            <p class="descricao">Micro-ondas LG Solo 30L com Revestimento Easyclean e Tecnologia I Wave</p>
            <hr>
            <p class="preco">R$ 799,00</p>
            <p class="preco_final">R$ 699,00</p>
        </div>
    </div>

    <div class="produtos">
        <div class="box_produto" id="lavadora" onmouseover="upScale(this)" onmouseout="downScale(this)">
            <img src="Imagens/produtos/lavadoraSamsung.jpg" alt="Lavadora Samsung">
            <br>
            <p class="descricao">Lavadora de Roupas Samsung 11Kg com EcoBubble</p>
            <hr>
            <p class="preco">R$ 4.999,00</p>
            <p class="preco_final">R$ 3.699,00</p>
    </div>

        <div class="box_produto" id="lavadora" onmouseover="upScale(this)" onmouseout="downScale(this)">
            <img src="Imagens/produtos/lavadoraMidea.jpg" alt="Lavadora Midea">
            <br>
            <p class="descricao">Lavadora de Roupas Midea Storm Wash 11kg com 16 Programas de Lavagem</p>
            <hr>
            <p class="preco">R$ 3.999,00</p>
            <p class="preco_final">R$ 3.659,00</p>
        </div>

        <div class="box_produto" id="lavaloucas" onmouseover="upScale(this)" onmouseout="downScale(this)">
            <img src="Imagens/produtos/lavaLouçasEletrolux.jpg" alt="Lava-louças Electrolux">
            <br>
            <p class="descricao">Lava-Louças Electrolux 8 Serviços Cinza</p>
            <hr>
            <p class="preco">R$ 2.989,00</p>
            <p class="preco_final">R$ 2.355,00</p>
        </div>

        <div class="box_produto" id="lavaloucas" onmouseover="upScale(this)" onmouseout="downScale(this)">
            <img src="Imagens/produtos/lavalouçasBrastemp.jpg" alt="Lava-louças Brastemp">
            <br>
            <p class="descricao">Lava-Louças 14 Serviços Brastemp Preta com Ciclo Pesado</p>
            <hr>
            <p class="preco">R$ 3.696,00</p>
            <p class="preco_final">R$ 3.634,10</p>
        </div>
    </div>
    </section>

    <br> <br> <br> <br> <br>
    <hr>
    <br> <br> <br> <br> <br>

    <footer id="rodape">
        <p id="formas_pagamento"><b>Formas de pagamento</b></p>
        <img src="./Imagens/Formas de pagamento.png" alt="Formas de pagamento">
        <p>&copy Recode Pro </p>
    </footer>
</body>

</html>