<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="icon" type="png/" href="../assets/images/icone-bullying.png">
    <link rel="stylesheet" href="../assets/css/faq.css">
    <title>FAQ</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container-fluid">
                <img src="../assets/images/icone-bullying.png" alt="" class="image_navbar">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="../index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../src/sobre-nos.php">Sobre Nós</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../src/denuncias.php">Denuncie</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="../src/faq.php">FAQ</a>
                        </li>
                        <?php

             if (isset($_SESSION["isAdmin"])) {
                 if ($_SESSION["isAdmin"] == true) {
                     echo " <li class='nav-item'>
                    <a class='nav-link' href='./painel.php'>Painel</a>

                </li>";
                 }
             }
             ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container">
            <h2>Perguntas frequentes(FAQ)</h2>
        </div>
        <div class="container container__box">

            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <p>
                        <h6>Como denunciar?</h6>
                        </p>
                        <p>
                           Entre na pagina "Denuncie", e preencha com os dados necessarios. (Nome, RA, E-mail)
                        </p>
                    </div>
                    <div class="col-sm">
                        <p>
                        <h6>Não tenho meu RA</h6>
                        </p>
                        <p>
                            Caso você não saiba seu RA, entre na secretaria digital e consulte seu RA. <p> <a class="link" href="https://www.bing.com/ck/a?!&&p=84e890dde95cf9a3JmltdHM9MTY2OTkzOTIwMCZpZ3VpZD0xZTJmNjUzOS03ZDBlLTYzNzQtMjQ0ZS03NzVlN2M2NTYyYmEmaW5zaWQ9NTE3NA&ptn=3&hsh=3&fclid=1e2f6539-7d0e-6374-244e-775e7c6562ba&psq=consultar+meu+ra&u=a1aHR0cHM6Ly9zZWQuZWR1Y2FjYW8uc3AuZ292LmJyL05DQS9DYWRhc3Ryb0FsdW5vL0NvbnN1bHRhUkFBbHVubw&ntb=1">Consultar RA</a>
                        </p>
                    </div>
                    <div class="col-sm">
                        <p>
                        <h6>Como funciona as denuncias?</h6>
                        </p>
                        <p>
                            As denúncias são anõnimas de forma que só professores e usuários administradores possam ver.
                        </p>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <p>
                        <h6>Privacidade do usuário</h6>
                        </p>
                        <p>
                            Sobre a privacidade do usuário, manteremos sigilo total em relação as denincias, ou seja, apenas usuarios permitidos conseguirão ver as denúncias.
                        </p>
                    </div>
                    <div class="col-sm">
                        <p>
                        <h6>Como alterar minha senha?</h6>
                        </p>
                        <p>
                           Entre na páigna "Perfil" e e selecione a opção "alterar senha" 
                           <p><a href=""></a></p>
                        </p>
                    </div>
                    <div class="col-sm">
                        <p>
                        <h6>Preciso ter uma cota para utilizar o APP?</h6>
                        </p>
                        <p>
                            Não é preciso ter uma conta para acessar o APP, porem você pode escolher ter uma conta ou não.
                        </p>
                    </div>
                </div>
            </div>

        </div>


    </main>

    <footer class="main_footer container_footer">

        <div class="content">
            <div class="colfooter">

                <h3 class="titleFooter"> Menu</h3>

                <ul>

                    <li><a href="../index.php" title="Página Inícial">Página Inícial</a></li>
                    <li><a href="../src/sobre-nos.php" title="Sobre a Empresa">Sobre a Empresa</a></li>
                    <li><a href="../src/denuncias.php" title="Denuncie">Denuncie</a></li>
                    <li><a href="../src/faq.php" title="Fale Conosco">Fale Conosco</a></li>

                </ul>
            </div>
            <!--Col Footer 1-->
            <div class="colfooter">

                <h3 class="titleFooter"> Contato</h3>
                <p><i class="icon icon-mail"></i> contato@seusite.com.br</p>
                <p><i class="icon icon-phone"></i> 19 9XXXX-XXXX</p>
                <p><i class="icon icon-whatsapp"></i> 21 9XXXX-XXXX</p>
            </div>
            <!--Col Footer 2-->
            <div class="colfooter">
                <h3 class="titleFooter"> Redes Sociais</h3>
                <a href="https://github.com/caiobga99" class="botao"><span> <img
                            src="../assets/images/image-logo-git-hub.png" alt="" class="image__logo_github"> <i
                            class="icon icon-pinterest"></i> </span></a>
                <a href="https://github.com/caiobga99" class="botao"><span> <img
                            src="../assets/images/image-logo-git-hub.png" alt="" class="image__logo_github"> <i
                            class="icon icon-pinterest"></i> </span></a>
                <a href="https://github.com/caiobga99" class="botao"><span> <img
                            src="../assets/images/image-logo-git-hub.png" alt="" class="image__logo_github"> <i
                            class="icon icon-pinterest"></i> </span></a>
                <a href="https://github.com/caiobga99" class="botao"><span> <img
                            src="../assets/images/image-logo-git-hub.png" alt="" class="image__logo_github"> <i
                            class="icon icon-pinterest"></i> </span></a>
            </div>
            <!--Col Footer 3-->
            <div class="clear"></div>

        </div>
        <!--Contant-->
        <div class="main_footer_copy">

            <p class="m-b-footer"> Report Bullying - 2022, todos os direitos reservados.</p>
            <p class="by"><i class="icon icon-heart-3"></i> Desenvolvido por: <a href="https://github.com/caiobga99"
                    title="Seu nome">Caio</a></p>

        </div>
    </footer>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <script src="../src/js/scripts.js"></script>
</body>

</html>