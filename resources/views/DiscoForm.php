
<div class="container mt-5">
    <h1>Cadastro de Discos</h1>
    <form action="DiscoForm.php" method="POST">
        <input type="hidden" name="id" value="<?php echo !empty($data->id) ?$data->id : "" ?>">
        
        <div class="mb-3 col-6">
            <label class="form-label" for="nome">Nome: </label></br>
            <input class="form-control" type="text" name="nome" value="<?php echo !empty($data->nome) ?$data->nome : "" ?>"/></br>
        </div>
        <div class="mb-3 col-6">
            <label class="form-label" for="valor">Valor: </label></br>
            <input class="form-control" type="text" name="valor" value="<?php echo !empty($data->valor) ?$data->valor : "" ?>"/></br>
        </div>
        
        <div class="mb-3 col-6">
            <label class="form-label" for="artista">Artista: </label></br>
            <input class="form-control" type="text" name="artista" value="<?php echo !empty($data->artista) ? $data->artista : "" ?>"/></br>
        </div>
        <div class="mb-3 col-6">
            <label class="form-label" for="album">Álbum: </label></br>
            <input class="form-control" type="text" name="album" value="<?php echo !empty($data->album) ? $data->album : "" ?>"/></br>
        </div>
        <div class="mb-3 col-6">
            <label class="form-label" for="ano">Ano: </label></br>
            <input class="form-control" type="text" name="ano" value="<?php echo !empty($data->ano) ? $data->ano : "" ?>"/></br>
        </div>
        
    
        
        </br>
        <input class="btn btn-success" type="submit" value="Salvar"/>
        <a class="btn btn-primary" href="./DiscoList.php">Voltar</a>
    </form>
</div>