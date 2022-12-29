<?php
    require_once 'database/database.php';
    require_once 'dao/ProdutoDAO.php';
    require_once 'model/Produto.php';

    $produtoDAO = new ProdutoDAU($pdo);
    $produtos = $produtoDAO->findAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="src/css/style.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5 mb-5 text-center colorTextWhite">Produtos Informática</h1>
        <div class="input-group text-center mb-5">
            <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">Cadastrar Produto </button>
        </div>
            

        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Digite a sua pesquisa..." aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn-outline-dark" type="button" id="button-addon2">Pesquisar</button>
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
            <?php foreach($produtos as $produto) : ?>
            <tbody>
                <tr>
                    <td><?= $produto->getNome(); ?></td>
                    <td><?= $produto->getPreco(); ?></td>
                    <td><?= $produto->getQuantidade(); ?></td>
                    <td class="text-center">
                        <a class="btns" data-bs-toggle="modal" data-bs-target="#exampleModal2"><ion-icon name="create-outline"></ion-icon></a>
                        <a class="btns" data-bs-toggle="modal" data-bs-target="#exampleModal3"><ion-icon name="trash-outline"></a>
                    </td>
                </tr>                
            </tbody>

            <?php endforeach ?>
        </table>
    </div>

    <!--MODAL CADASTRAR-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Cadatrar Produto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <form id="formCadastrar">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nome Produto</label>
                            <input type="text" class="form-control" name="nome" id="nomeId" placeholder="Digite o nome do Produto...">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Preço</label>
                            <input type="text" class="form-control" name="preco" id="precoId" placeholder="R$ 00,00">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Quantidade</label>
                            <input type="text" class="form-control" name="quantidade" id="quantidadeId" placeholder="Quantidade">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <input type="submit" class="btn btn-primary" value="Salvar"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--FIM MODAL CADASTRAR-->

    <!--MODAL EDITAR-->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Produto</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="formEditar">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nome Produto</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Digite o nome do Produto...">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Preço</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="R$ 00,00">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Quantidade</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Quantidade">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-primary">Salvar</button>
                    </div>
                </form>    
            </div>
        </div>
    </div>
    <!--FIM MODAL EDITAR-->

    <!--MODAL DELETAR-->
    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Deletar Produto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Deseja realmente deletar?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-danger">Sim</button>
            </div>
            </div>
        </div>
    </div>
    <!--FIM MODAL DELETAR-->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="src/jquery/jquery-3.6.3.min.js"></script>

    <script>
        $('#formCadastrar').submit(function(e){
            e.preventDefault();
            var formulario = $(this);
            var retorno = InsertDados(formulario);

            function InsertDados(dados){
                $.ajax({
                    type:"POST",
                    data:dados.serialize(),
                    url:"create.php",
                    async: false
                }).then(sucesso, falha);

                function sucesso(data){                   
                    $('#exampleModal').hide();
                }

                function falha(){
                    console.log("Deu ruim");
                }
            }
        });
    </script>
</body>
</html>