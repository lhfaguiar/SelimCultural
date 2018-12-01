<?php include_once "init.php" ?> 
<?php include_once "header.php" ?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Seus Últimos Passeios</h1>
        <hr>
        
        <div class="card-deck">

            <div class="card">
                <img src="img/roteiro-futebol.jpg" class="img-fluid" >           
                <div class="card-body">
                <h5 class="card-title">Roteiro<br><strong>do Futebol</strong></h5>
                <p class="card-text"><small class="text-muted">Data de Realização<strong> 01/01/2018</strong></small></p>
                <a href="passeio.php" class="btn btn-sm btn-danger">Detalhes</a>
                </div>
            </div>
            
            <div class="card">
                <img src="img/roteiro-arq-moderna.jpg" class="img-fluid" > 
                <div class="card-body">
                <h5 class="card-title">Roteiro<br><strong>Arquitetura Modernista</strong></h5>
                <p class="card-text"><small class="text-muted">Data de Realização<strong> 01/02/2018</strong></small></p>
                <a href="contrato.php" class="btn btn-sm btn-danger">Detalhes</a>
                </div>
            </div>
            
            <div class="card">
                <img src="img/roteiro-industrial.jpg" class="img-fluid" > 
                <div class="card-body">
                <h5 class="card-title">Roteiro<br><strong>Patrimônio Industrial</strong></h5>
                <p class="card-text"><small class="text-muted">Data de Realização<strong> 05/05/2018</strong></small></p>
                <a href="contrato.php" class="btn btn-sm btn-danger">Detalhes</a>
                </div>
            </div>

        </div>
    
    </div>  

    <div class="pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Novos Roteiros</h1>
        <hr>
        
        <div class="card-deck">

            <div class="card">                
                <div class="card-body">
                <h5 class="card-title">Roteiro<br><strong>Gastronômico</strong></h5>
                <p class="card-text"><small class="text-muted">Próximo <strong> 11/12/2018</strong></small></p>
                <a href="inscricao.php?roteiro=10&data=20181211" class="btn btn-sm btn-danger">Inscreva-se</a>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Roteiro<br><strong>Belle Époque</strong></h5>
                <p class="card-text"><small class="text-muted">Próximo <strong> 15/12/2018</strong></small></p>
                <a href="inscricao.php?roteiro=11&data=20181215" class="btn btn-sm btn-danger">Inscreva-se</a>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Roteiro<br><strong>Minhocão</strong></h5>
                <p class="card-text"><small class="text-muted">Próximo <strong> 18/01/2018</strong></small></p>
                <a href="inscricao.php?roteiro=12&data=20180118" class="btn btn-sm btn-danger">Inscreva-se</a>
                </div>
            </div>

        </div>
    
    </div>

</main>

<?php include_once "footer.php" ?>