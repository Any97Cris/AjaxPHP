<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="src/style.css">
</head>
<body class="bg-dark">
    <div class="container">
        <h1 class="mt-5 mb-5 text-center">Produtos Informática</h1>
        <div class="input-group text-center mb-5">
            <button class="btn btn-warning">Cadastrar Produto </button>
        </div>
            

        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Digite a sua pesquisa..." aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Pesquisar</button>
        </div>

        <table class="table table-dark" width="100%">
            <thead>
                <tr>
                    <th>Produto</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th width="15%" class="text-center">Ações</th>
                </tr>                
            </thead>
            <tbody>
                <tr>
                    <td>Teste</td>
                    <td>Teste</td>
                    <td>Teste</td>
                    <td class="text-center">
                        <a href="#" class="btns"><ion-icon name="create-outline"></ion-icon></a>
                        <a href="#" class="btns"><ion-icon name="trash-outline"></a>
                    </td>
                </tr>                
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>