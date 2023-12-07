<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuário - Loja virtual</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <script src="formControl.js"></script>
</head>
<body>
    <div id="div-form" >
       
       <!--class="mb-3"
        class="w-50 p-3"
        class="align-middle"
       -->

        <form id="formulario" class="align-middle">

                <div class="w-100 p-2">
                    <label for="formGroupCPF" class="form-label">CPF</label>
                    <input type="text" class="form-control" id="formGroupCPF" name="formGroupCPF" placeholder="Digite seu CPF">
                </div>

                <div class="w-100 p-2">
                    <label for="formGroupCEP" class="form-label">CEP</label>
                    <input type="text" class="form-control" id="formGroupCEP" name="formGroupCEP" onblur="puxarDados()" placeholder="Digite seu CEP"> 
                </div>

                <div class="w-100 p-2">
                    <label for="formGroupEndereco" class="form-label">Endereço</label>
                    <input type="text" class="form-control" id="formGroupEndereco" name="formGroupEndereco" placeholder="Digite seu endereço">
                </div>

                <div class="w-100 p-2">
                    <label for="formGroupNum" class="form-label">Número da Casa</label>
                    <input type="text" class="form-control" id="formGroupNum" name="formGroupNum" placeholder="Digite o n° da casa">
                </div>

                <div class="w-100 p-2">
                    <label for="formGroupBairro" class="form-label">Bairro</label>
                    <input type="text" class="form-control" id="formGroupBairro" name="formGroupBairro" placeholder="Digite seu bairro">
                </div>

                <div class="w-100 p-2">
                    <label for="formGroupUF" class="form-label">Endereço</label>
                    <input type="text" class="form-control" id="formGroupUF" name="formGroupUF" placeholder="Digite sua UF">
                </div>

                <div class="w-100 p-2">
                    <label for="formGroupCidade" class="form-label">Cidade</label>
                    <input type="text" class="form-control" id="formGroupCidade" name="formGroupCidade" placeholder="Digite sua cidade">
                </div>

                <div class="text-center p-2">

                    <button type="submit" class="btn btn-primary" >Cadastrar </button>

                    <button type="reset" class="btn btn-secondary">Limpar</button>

                    <a href="index.html">
                        <button type="button" class="btn btn-success"> Voltar</button>
                    </a>   
                    
                </div>

        </form>
    </div>
    
</body>
</html>