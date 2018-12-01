<?php include_once "init.php" ?> 
<?php include_once "header.php" ?>

<?php $dataPerfil = $_SESSION['data']['perfil'][0]?>

<div class="pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Inscrição</h1>
</div>

<div class="card">
    <div class="card-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col col-md-12">
                <form method="post" action="inscricao-ok.php">
                    
                    <h4>Roteiro <strong>Futebol</strong></h4>                
                    <hr>

                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="nome" class="form-control" id="nome" readonly value="<?=$dataPerfil['nome']?>">
                    </div>
                    
                    <div class="form-group">
                        <label for="data">Data</label>
                        <input type="data" class="form-control" id="data" readonly value="15/01/2019" >
                    </div>                        
                    
                    <button type="submit" class="btn btn-sm btn-danger">Confirmar Inscrição</button>
                    
                </form>                    
            </div>                
        </div>
    </div>
</div>
</div>
<?php include_once "footer.php" ?>