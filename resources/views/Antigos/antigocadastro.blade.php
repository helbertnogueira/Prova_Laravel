<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body class=body-cadastro>
    <div class="box">
        <form action="">
            <fieldset class=fieldset-cadastro>
                <legend><b>Cadastro Cliente</b></legend>
                <br><br>
                <div class="input-box">
                    <input type="text" name="cpf-cnpj" id="cpf-cnpj" class="input-user" required>
                    <label for="cpf-cnpj" class=label-input>CFP/CNPJ</label>
                </div>
                <br>
                <div class="input-box">
                    <input type="text" name="nome" id="nome" class="input-user" required="false">
                    <label for="nome" class=label-input>Nome/Razão Social</label>
                </div>
                <br>
                <div class="input-box">
                    <input type="text" name="rg" id="rg" class="input-user" required="false">
                    <label for="rg" class=label-input>Reg. Geral(RG)</label>
                </div>
                <br>
                <div class="input-box">
                    <input type="text" name="ie" id="ie" class="input-user" required="false">
                    <label for="ie" class=label-input>Inscr. Estad.(I.E)</label>
                </div>
                <br>
                <div class="input-box">
                    <input type="text" name="rua" id="rua" class="input-user" required>
                    <label for="rua" class=label-input>Rua/Avenida</label>
                </div>
                <br>
                <div class="input-box">
                    <input type="text" name="numero" id="numero" class="input-user" required>
                    <label for="numero" class=label-input>Número(N°)</label>
                </div>
                <br>
                <div class="input-box">
                    <input type="text" name="bairro" id="bairro" class="input-user" required>
                    <label for="bairro" class=label-input>Bairro</label>
                </div>
                <br>
                <div class="input-box">
                    <input type="zipcode" name="cep" id="cep" class="input-user" required>
                    <label for="cep" class=label-input>CEP</label>
                </div>
                <br>
                <div class="input-box">
                    <input type="text" name="complemento" id="complemento" class="input-user" required="false">
                    <label for="complemento" class=label-input>Complemento</label>
                </div>
                <br>
                <div class="input-box">
                    <input type="text" name="cidade" id="cidade" class="input-user" required>
                    <label for="cidade" class=label-input>Cidade</label>
                </div>
                <br>
                <div class="input-box">
                    <input type="text" name="estado" id="estado" class="input-user" required>
                    <label for="estado" class=label-input>Estado</label>
                </div>
                <br>
                <br>
                <input type="submit" name="submit" class="button-cadastro">
                <br>
                <br>
            </fieldset>
        </form>
    </div>
</body>
</html>