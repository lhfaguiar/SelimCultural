<?php include_once "init.php" ?> 
<?php include_once "header.php" ?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Contratos</h1>
    </div>
    
    <div class="pt-3 pb-2 mb-3" >
        <a href="passeio-novo.php" class="btn btn-sm btn-success">Novo Passeio</a>
    </div>

    <div class="card">
        
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Outorgante</th>
                        <th>Outorgado</th>                    
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1</th>
                        <td>Rodrigo Arantes</td>
                        <td>Marcelo Guimarães</td>
                        <td><a class="btn btn-sm" href="contrato.php">Exibir Contrato</a></td>
                    </tr>
                    <tr>
                        <th>2</th>
                        <td>Rafael Guimarães</td>
                        <td>Rafale Ltda.</td>
                        <td><a class="btn btn-sm" href="contrato.php">Exibir Contrato</a></td>
                    </tr>
                    <tr>
                        <th>3</th>
                        <td>Roberto Souza Filho</td>
                        <td>Banco Real S.A.</td>
                        <td><a class="btn btn-sm" href="contrato.php">Exibir Contrato</a></td>
                    </tr>
                </tbody>
            </table>

    </div>

</main>

<?php include_once "footer.php" ?>