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
            <form class="form-horizontal" method="POST" action="salva_contato.php">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="nome">Nome:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Email:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Digite o e-mail" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="mensagem">Motivo:</label>
                    <div class="col-sm-10 msg">
                        <select class="selectpicker" name="motivo">
                            <option value="reclamação">Reclamação</option>
                            <option value="sugestão">Sugestão</option>
                            <option value="elogio">Elogio</option>
                            <option value="duvida">Dúvida</option>
                        </select>
                    </div>
                    <input type="submit" class="btn btn-info salvar" value="Enviar">
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="mensagem">Mensagem:</label>
                    <div class="col-sm-10 msg">
                        <textarea class="form-control" id="textarea" name="mensagem" required></textarea>
                    </div>
                    <input type="submit" class="btn btn-info salvar" value="Enviar">
                </div>
            </form>
            <hr/>
            <div class="footer-bar-btns">
                <p>© Desenvolvimento 2017</p>
            </div>
        </div>
    </body>
</html>