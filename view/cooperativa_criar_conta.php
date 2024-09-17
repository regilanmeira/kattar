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

            <div class="col-md-6">
                <input type="text" class="form-control" required name="txtNome" placeholder="Informe o nome da cooperativa" />
            </div>
            <div class="col-md-6">
                <input type="text" onkeyup="formataCNPJ(this,event)" maxlength="18" class="form-control" required  name="txtCNPJ" placeholder="Informe o cnpj da cooperativa" />
            </div>
            <div class="col-md-6">
                <input type="email" class="form-control" required name="txtEmail" placeholder="E-mail para acesso" />
            </div>
            <div class="col-md-6">
                <input type="password" class="form-control"  required name="txtSenha" placeholder="Senha para acesso" />
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" required onkeyup="formataTelefone(this,event)" maxlength="15"  name="txtTelefone" placeholder="Telefone para contato" />
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control"  name="txtEstado" placeholder="Estado" />
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control"  name="txtMunicipio" placeholder="Municipio" />
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control"  name="txtBairro" placeholder="Informe o bairro" />
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control"  name="txtLogradouro" placeholder="Informe o logradouro(Ex. Rua, Av. Praça)" />
            </div>

        </div>

        <div class="row">
            <div class="col-md-12" style="text-align: left;">


                <input type="submit" formaction="../controller/cooperativa_criar_conta_salvar.php" class="btn btn-success" value="Criar">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="text-align: left;">

                <a href="index.php">
                <input  type="button" class="btn btn-danger" value="Cancelar">
                </a>
            </div>
        </div>

    </div>
    </form>
</body>
</html>