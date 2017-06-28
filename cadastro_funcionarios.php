<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Cadastro de Funcionários</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="content">
            <?php include 'components/header.php';?>
            <form class="form-horizontal" method="POST" action="salva_funcionario.php">
                <h2 class="row">Dados Pessoais</h2>
                <div class="form-group row">
                    <label class="control-label col-sm-2" for="nome">Nome:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome" required/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-sm-2" for="email">Data de Nascimento:</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="dt_nascimento" name="dt_nascimento" required/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-sm-2" for="email">Sexo:</label>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <label for="M" class="form-check-label">
                                <input type="radio" class="form-check-input" id="M" name="sexo" value="M" required/>
                                Masculino
                            </label>
                        </div>
                        <div class="form-check">
                            <label for="F" class="form-check-label">
                                <input type="radio" class="form-check-input" id="F" name="sexo" value="F" required/>
                                Feminino
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row" style="display: 'none'">
                    <label class="control-label col-sm-2" for="mensagem">Estado Civil:</label>
                    <div class="col-sm-10 msg">
                        <select class="form-control" id="estado_civil" name="estado_civil">
                            <option value="solteiro">Solteiro(a)</option>
                            <option value="casado">Casado(a)</option>
                            <option value="viuvo">Viúvo(a)</option>
                            <option value="divorciado">Divorciado(a)</option>
                            <option value="separado">Separado(a)</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-sm-2" for="mensagem">Cargo:</label>
                    <div class="col-sm-10 msg">
                        <select class="form-control" id="cargo" name="cargo">
                            <option value="medico">Médico(a)</option>
                            <option value="enfermeiro">Enfermeiro(a)</option>
                            <option value="secretario">Secretário(a)</option>
                            <option value="outro">outro(a)</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-sm-2" for="mensagem">Especialidade:</label>
                    <div class="col-sm-10 msg">
                        <select class="form-control" id="especialidade" name="especialidade">
                            <option value="clinico">Clínico Geral</option>
                            <option value="cardiologista">Cardiologista</option>
                            <option value="ortopedista">Ortopedista</option>
                            <option value="pediatra">Pediatra</option>
                        </select>
                    </div>
                </div>
                <h2 class="row">Documentos</h2>
                <div class="form-group row">
                    <label class="control-label col-sm-2" for="cpf">CPF:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cpf" name="cpf" required/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-sm-2" for="rg">RG:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="rg" name="rg" required/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-sm-2" for="outro">Outro:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="outro" name="outro" required/>
                    </div>
                </div>
                <h2 class="row">Endereço</h2>
                <div class="form-group row">
                    <label class="control-label col-sm-2" for="cep">CEP:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cep" name="cep" value=""  onkeydown="buscaCep(this.value)" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="tipo">Tipo de Logradouro:</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="tipo" name="tipo" required>
                            <option value="rua">Rua</option>
                            <option value="avenida">AV.</option>
                            <option value="praca">Praça</option>
                            <option value="alameda">Alameda</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-sm-2" for="logradouro">Logradouro:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="logradouro" name="logradouro" required/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-sm-2" for="numero">Número:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="numero" name="numero" required/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-sm-2" for="complemento">Complemento:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="complemento" name="complemento"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-sm-2" for="bairro">Bairro:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="bairro" name="bairro" required/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-sm-2" for="cidade">Cidade:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cidade" name="cidade" required/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-sm-2" for="estado">Estado:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="estado" name="estado" required/>
                    </div>
                </div>
                <input type="submit" class="btn btn-info salvar" value="Enviar">
            </form>
            <hr/>
            <div class="footer-bar-btns">
                <p>© Desenvolvimento 2017</p>
            </div>
        </div>
        <script>
            function buscaCep(cep) {
                if(cep.length >= 8) {
                    $.ajax({
                        url: 'consulta_cep.php?cep='+cep,
                        type: 'GET',
                        dataType: 'json',
                        data: {},
                        success: function(response) {
                            console.log(response);
                        },
                        error: function(xhr, status, error) {
                            console.log(error);
                        }
                    });
                }
            }
        </script>
    </body>
</html>