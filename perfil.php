<?php include_once "init.php" ?> 
<?php include_once "header.php" ?>

<?php $dataPerfil = $_SESSION['data']['perfil'][0]?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Perfil</h1>
    </div> 
    <div class="card">
        <div class="card-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col col-md-4">
                    <img src="img/perfil.jpg" class="img-fluid img-thumbnail rounded" >
                </div>
                <div class="col col-md-8">
                <form method="post">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="nome" class="form-control" id="nome" value="<?=$dataPerfil['nome']?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Data de Nascimento</label>
                        <input type="email" class="form-control" id="email" value="<?=$dataPerfil['nascimento']?>" >
                    </div>                        
                    <div class="form-group">
                        <label for="email">E-Mail</label>
                        <input type="email" class="form-control" id="email" value="<?=$dataPerfil['email']?>" >
                    </div>
                    <button type="submit" class="btn btn-sm btn-danger">Gravar</button>
                    </form>                    
                </div>                
            </div>
        </div>
    </div>
</main>

<?php include_once "footer.php" ?>