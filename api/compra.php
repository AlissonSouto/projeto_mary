<?php
    if(isset($_GET['p'])){
        $prod = $_GET['p'];
        $nome = $_GET['n'];
        $preco = $_GET['pr'];
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="imagens/compras.ico" type="image/x-icon">
    <title>Finalizar pedido</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../mobile.css">
    <style>
        #conteiner.produtos-conteiner{
            display: block;
        }
        .produto{
            margin: auto;
        }
        .produto img{
            width: 400px;
            max-height: 500px;
        }
        #opcoes-compra{
            border: solid 1px #999;
            width: 60%;
            margin: auto;
            margin-top: 20px;
            min-height: 150px;
            padding-top: 20px;
        }
        .op-itens b{
            padding-left: 50px;
        }
        input[type="submit"]{
            background-color: lightgreen;
            display: block;
            margin: auto;
            padding: 10px;
            border-radius: 8px;
            cursor: pointer;
        }
        input[type="text"]{
            width: 200px;
        }
        fieldset{
            padding: 20px;
            font-family: serif;
            width: 50%;
            margin: auto;
        }
        legend{
            text-align: center;
        }
    </style>
</head>
<body>        
  
<div id="interface">

    <header id="cabecalho">

        <div class="cabecalho-top">
            <div class="largura-conteiner-top">
                <div class="cabecalho-top-esquerda">
                    <div class="social-links">  
                        <ul>
                            <li><a href="" ><img src="../imagens/icone-facebook.png"></a></li>
                            <li><a href="" ><img src="../imagens/icone-instagram.png"></a></li>
                            <li><a href="" ><img src="../imagens/icone-twitter.png"></a></li>
                            <li><a href="" ><img src="../imagens/icone-whatsapp.png"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="cabecalho-top-direita">
                    <div class="boas-vindas-msg"><b>Quer ser diferente também?  Vem pra Empório meu bem!</b></div>       </div>
            </div>
        </div>

        <div class="cabecalho">
                <div class="largura-conteiner-cabecalho">
                    <div class="cabecalho-left">
                        <h1 class="logo"><strong>Shopping Empório</strong><a href="../index.html" title="I - Help" class="logo"><img src="../imagens/logo-sf.png" alt="Shopping Empório"></a></h1>
                    </div> 
                </div>

                <div id="conta-loja">           
                    <button class="btnConta"><a href="../login.html"><img src="../imagens/usuario.png" alt=""> Conta </a></button> 
                    <button class="btnCarrinho"><a href=""><img src="../imagens/carrinho.png" alt=""> Carrinho </a></button>  
                </div> 
        </div>

        <div class="cabecalho-bottom">
            <nav class="menu">
                <h1>Categorias <img src=""></h1>
                <ul>
                    <li class="li-linha"><a class="funcional" href="../index.html" target="_self">Início</a></li>               
                    <li class="li-linha"><a class="funcional" href="../sobre-a-empresa.html" target="_self">Sobre a Empresa</a></li> 
                    <li class="li-linha3"><a class="funcional" href="../fale-conosco.html" target="_self">Fale Conosco</a></li> 
                </ul>
            </nav>
        </div>
    
    </header>

    <section class="inicio">
        <div class="conteiner-main">
            <div class="conteiner">
                <div class="orientacao-main">
                    <div class="orientacao">
                        <ul>
                            <li class="categoria"><strong></strong></li>
                        </ul>
                    </div>
                </div> 

                <article class="produtos">
                        
                        <ul id="conteiner" class="produtos-conteiner">
    
                                <li>
                                    <div class="produto">
                                        <a href="" title="" class="imagem-produto">
                                            <img src="../imagens/produtos/<?php echo $prod;?>.jpg" alt=""></a>

                                        <h2 class="nome-produto"><a href="" title=""><?php echo $nome;?></a></h2> 
                                                
                                        <div class="caixa-preco">
                                            <span id="produto-preco"><span class="preco"><?php echo $preco;?></span>       
                                        </div>
                                    </div>
                                </li>
    
                    </article>

                    <div id="opcoes-compra">
                        <span class="op-itens">
                            <b>Quantidade: </b>&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;
                            <select name="quant" id="quant">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </span><br><br>

                        <span class="op-itens">
                            <b>Forma de pagamento:</b>&emsp;
                            <select name="pag" id="pag" required>
                                <option value=""></option>
                                <option value="1">Cartão de crédito</option>
                                <option value="2">Boleto bancário</option>
                                <option value="3">PIX</option>
                            </select>
                        </span><br><br>
                        
                        <span class="op-itens">
                            <b>CEP: </b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&emsp;
                            <input type="text" id="cep" onblur="consultaCEP()"><br><br>
                            <hr>
                            <br>
                            <fieldset>
                                <legend>Endereço de Entrega</legend>
                                UF: &ensp;&ensp;&nbsp;&nbsp;<input type="text" id="uf" disabled><br><br>
                                Cidade: <input type="text" id="cidade" disabled><br><br>
                                Bairro: &nbsp;<input type="text" id="bairro" disabled><br><br>
                                Rua: &ensp;&ensp;&nbsp;<input type="text" id="rua" required><br><br>
                                Nº: &ensp;&ensp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="nm" required><br><br>
                            </fieldset>
                        </span><br>
                        <hr>
                        <br><br>
                        <input type="submit" value="Finalizar Compra"><br><br>
                    </div>

            </div>
        </div>
    </section>
   <hr>              
                
    <footer class="rodape">
        <div class="rodape-conteiner">
            <div class="rodape">
                <address>&copy; by Shopping Empório<br>CNPJ xx.xxx.xxx/xxx-xx - Todos os direitos reservados.<br>
                </address> 
            </div>
            <div class="titulo-sociais-links">
                <h3>Nos siga nas Redes Sociais!</h3>
            </div>
            <div class="sociais-links">
                <ul>
                    <li><a href="" target="_blank"> <img src="../imagens/icone-facebook-G.png"></a></li>
                    <li><a href="" target="_blank"> <img src="../imagens/icone-youtube-G.png"></a></li>
                    <li><a href="" target="_blank"> <img src="../imagens/icone-twitter-G.png"></a></li>
                    <li><a href="" target="_blank"> <img src="../imagens/icone-instagram-G.png"></a></li>
                <ul>
            </div>
        </div>
     
    </footer>

</div>
    <script src="script.js"></script>
</body>
</html>
