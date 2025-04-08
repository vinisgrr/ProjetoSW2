<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    

</head>
<body>

 <div class="container-fluid bg-dark text-white text-center p-5">
    <h1> Projeto SW2 <h1>

    <p>
        Elaborado por Vinícius Silva Guerra.
    </p>
 </div>

<div class="container mt-5">

<div class="row">

        <div class="col-sm-4">

            <h1 class="bg-primary text-white">Administração</h1>
            <p class="text-primary">
                ultilize esta opçao para realizar o cadastro
                 de novos administradores, ou edita-los.
            </p>
                 <p>
                    <a href="administrador.php" class="btn btn-primary">Clque</a>
                 </p>
        </div>

        <div class="col-sm-4">
            <h1 class="bg-danger text-white">Categorias</h1>
            <p class="text-danger">Ultile esta opçao para cadastrar as categoria
                 dos produtos que serão vendidos on-line.
                </p>

                <p>
                    <a href="categoria.php" class="btn btn-danger">Clque</a>
                </p>


        </div>

        <div class="col-sm-4">
            <h1 class="bg-success text-white">Fornecedor</h1>
            <p class="text-success">Ultilize esta informação para cadastrar os
                 fornecedores dos produtos que serão vendidos on-line.
                    </p>

                    <p>
                    <a href="fornecedor.php" class="btn btn-success">Clque</a>
                    </p>
        </div>

        </div>

        <div class= "row">

            <div class="col-sm-6">
                <h1 class="bg-warning">Produtos</h1>
                <p class="text-warning">
                    Ultilize esta opçao para cadastrar os produtos 
                    que serão vendidos no site.
                </p>

                <p>
                    <a href="produto.php" class="btn btn-warning">Clque</a>
                </p>

            </div>

            <div class="col-sm-6">
                <h1 class="bg-secondary">Vendas</h1>
                <p class="text-secondary">
                    Ultilize esta opço para vizualizar as vendas 
                    realizadas pelos clientes
                </p>
                

                <div class="col-sm-10">
            <h1 class="bg-primary text-white">Forma de Pagamento</h1>
            <p class="text-success">ultilize essa opçao pra escolher sua forma de pagamento
                    </p>

                    <p>
                    <a href="formapagamento.php" class="btn btn-success">Clque</a>
                    </p>
       
                </div>


            
                
            </div>

    </div>
<!-- Início do Rodapé -->
<footer>
    <div class="rodape-conteudo">
        <!-- Coluna de Sobre -->
        <div class="rodape-coluna">
            <h3>Sobre</h3>
            <p>Somos uma empresa especializada em soluções web, proporcionando aos nossos clientes sites modernos e eficientes.</p>
        </div>

        <!-- Coluna de Links Úteis -->
        <div class="rodape-coluna">
            <h3>Links Úteis</h3>
            <ul>
                <li><a href="sobre.php">Sobre nós</a></li>
                <li><a href="servicos.php">Serviços</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="contato.php">Contato</a></li>
                <li><a href="privacidade.php">Política de Privacidade</a></li>
            </ul>
        </div>

        <!-- Coluna de Contato -->
        <div class="rodape-coluna">
            <h3>Contato</h3>
            <p>Email: viniguerra2008@gmail.com</p>
            <p>Telefone: (19) 995740483</p>
            <p>Endereço: Rua Julieta Lima Dias, 71 - Mococa, SP</p>
        </div>

        <!-- Coluna de Redes Sociais -->
        <div class="rodape-coluna">
            <h3>Redes Sociais</h3>
            <ul>
                <li><a href="https://www.facebook.com/minhaempresa" target="_blank">Facebook</a></li>
                <li><a href="https://www.instagram.com/_vinisgrr/?next=%2F" target="_blank">Instagram</a></li>
                <li><a href="https://www.linkedin.com/company/minhaempresa" target="_blank">LinkedIn</a></li>
                <li><a href="https://twitter.com/minhaempresa" target="_blank">Twitter</a></li>
            </ul>
        </div>
    </div>

    <div class="rodape-final">
        <p>&copy; <?php echo date("Y"); ?> Minha Empresa. Todos os direitos reservados.</p>
    </div>
</footer>
<!-- Fim do Rodapé -->

<!-- Estilos do Rodapé -->
<style>
    footer {
        background-color: #333;
        color: white;
        padding: 40px 20px;
        font-family: Arial, sans-serif;
    }

    .rodape-conteudo {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 20px;
    }

    .rodape-coluna {
        flex: 1;
        min-width: 200px;
    }

    .rodape-coluna h3 {
        font-size: 1.2em;
        margin-bottom: 15px;
    }

    .rodape-coluna p, .rodape-coluna ul {
        font-size: 0.9em;
        line-height: 1.6;
    }

    .rodape-coluna ul {
        padding-left: 0;
        list-style-type: none;
    }

    .rodape-coluna ul li {
        margin-bottom: 10px;
    }

    .rodape-coluna ul li a {
        color: white;
        text-decoration: none;
    }

    .rodape-coluna ul li a:hover {
        text-decoration: underline;
    }

    .rodape-final {
        text-align: center;
        margin-top: 20px;
        font-size: 0.8em;
    }

    .rodape-final p {
        margin: 0;
    }

    footer a {
        color: white;
        text-decoration: none;
    }

    footer a:hover {
        text-decoration: underline;
    }
</style>


</body>
</html>