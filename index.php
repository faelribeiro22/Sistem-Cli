<html>
    <head>
        <title>MedTech Clinica</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="content">
            <?php include 'components/header.php';?>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="item active carrosel-item">
                        <img src="img/descricao.jpg" alt="descricao">
                            <div class="carousel-desc">
                                <h2>Sobre nós</h2>
                                <p>
                                    Clínica médica com foco no rápido atendimento e diagnostico, para melhor atender nossos pacientes.
                                </p>
                            </div>
                    </div>

                    <div class="item carrosel-item">
                        <img src="img/atendimento.jpg" alt="atendimento">
                            <h2>Nossa missão</h2>
                            <p>Foco na qualidade atendimento e bem estar de nossos pacientes,
                                isso faz parte do nosso DNA.           
                            </p>
                    </div>

                    <div class="item carrosel-item">
                        <img src="img/missao.jpg">
                        
                    </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Voltar</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Próximo</span>
                </a>
            </div>
            <hr/>
            <div class="footer-bar-btns">
                <p>© Desenvolvimento 2017</p>
            </div>
        </div>
    </body>
</html>