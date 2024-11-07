<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require "referencias.php" ?>
    
</head>
<body>
    <form method="post">
    <div class="container">
        <div class="row">

            <?php require "cabecalho_pagina.php" ?>

            <div class="col-md-6" style="text-align: left;">
            <label  class="label">Nome completo</label>
                <input type="text" class="form-control" required name="txtNome" placeholder="Nome" />
            </div>
            
            <div class="col-md-6" style="text-align: left;">
            <label class="label">Informe seu login(e-mail)</label>
                <input type="email" class="form-control" required name="txtEmail" placeholder="E-mail" />
            </div>

            <div class="col-md-6" style="text-align: left;">
            <label class="label">Senha</label>
                <input type="password" class="form-control"  required name="txtSenha" placeholder="Senha" />
            </div>

            <div class="col-md-6" style="text-align: left;">
            <label class="label">Telefone paa contato</label>
                <input type="text" class="form-control" required onkeyup="formataTelefone(this,event)" maxlength="15"  name="txtTelefone" placeholder="Telefone" />
            </div>

           

            <div class="col-md-6" style="text-align: left;" >
            <label class="label">Logradouro</label>
                <input type="text" class="form-control"  name="txtLogradouro" placeholder="Logradouro (Ex.: Rua, Av. Praça)" />
            </div>

            <div class="col-md-6" style="text-align: left;">
            <label class="label">Bairro</label>
                <input type="text" class="form-control"  name="txtBairro" placeholder="Bairro" />
            </div>

            <div class="col-md-6" style="text-align: left;">
                    <label class="label">Estado</label>

                    <select class="form-control" name="txtEstado">
                        <option value="">Selecione</option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espirito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                    </select>


                </div>

            <div class="col-md-6" style="text-align: left;">
            <label class="label">Município</label>
                <input type="text" class="form-control"  name="txtMunicipio" placeholder="Municipio" />
            </div>

           

        </div>

        <div class="row">
            <div class="col-md-12" style="text-align: left;">


                <input type="submit" formaction="../controller/usuario_criar_conta_salvar.php" class="btn btn-success" value="Criar">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="text-align: left;">

                <a href="conta_criar.php">
                <input  type="button" class="btn btn-danger" value="Cancelar">
                </a>
            </div>
        </div>

    </div>
    </form>
</body>
</html>