<?php
include "../controller/PedidoController.php";
include '../Util.class.php';

Util::verify();

$pedido = new PedidoController();

if(!empty($_POST['id'])){
    $pedido->update($_POST);
    header("location: PedidoList.php");
}
elseif(!empty($_POST)){
    $pedido->salvar($_POST);
    header("location: PedidoList.php");
}

if(!empty($_GET['id'])){
    $data = $pedido->buscar($_GET['id']);
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ERythm - Pedidos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-dark bg-dark static-top">
        <div class="container">
            <a class="navbar-brand" href="./main.php">ERythm</a>
            <div class="btn-group">
                <a class="btn btn-dark" href="./UsuarioList.php">Usuários</a>
                <a class="btn btn-dark" href="./DiscoList.php">Discos</a>
                <a class="btn btn-dark" href="./PedidoList.php">Pedidos</a>
                <a class="btn btn-danger" href='./login.php?sair=1'>Sair</a>             
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h1>Formulário de pedido</h1>
        <form action="PedidoForm.php" method="POST">
            <input type="hidden" name="id" value="<?php echo !empty($data->id) ?$data->id : "" ?>">
            
            <div class="mb-3 col-6">
                <label class="form-label" for="cliente">Cliente: </label></br>
                <input class="form-control" type="text" name="cliente" value="<?php echo !empty($data->cliente) ?$data->cliente : "" ?>"/></br>
            </div>

            <div class="mb-3 col-6">
                <label class="form-label" for="endereco">Endereço: </label></br>
                <input class="form-control" type="text" name="endereco" value="<?php echo !empty($data->endereco) ?$data->endereco : "" ?>"/></br>
            </div>

            <div class="mb-3 col-6">
                <label class="form-label" for="telefone">Telefone: </label></br>
                <input class="form-control" type="text" name="telefone" value="<?php echo !empty($data->telefone) ?$data->telefone : "" ?>"/></br>
            </div>
            
            </br>

            <input class="btn btn-success" type="submit" value="Salvar"/>
            <a class="btn btn-primary" href="./PedidoList.php">Voltar</a>

        </form>
    







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    </div>
</body>
</html>