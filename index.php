<?php include_once "init.php" ?> 
<?php include_once "header.php" ?>
    
<section class="pt-3 pb-2 mb-3 border-bottom">
    
    <h1 class="h2">Novos Roteiros</h1>
    <hr>
    
    <div class="card-deck">
        <div class="card">
            <img src="img/roteiro-futebol.jpg" class="img-fluid" >           
            <div class="card-body">
                <h5 class="card-title">Roteiro<br><strong>Futebol</strong></h5>
                <p class="card-text"><small class="text-muted">Próximo <strong> 11/12/2018</strong></small></p>
                <a href="roteiro.php?id=10" class="btn btn-sm btn-danger">Detalhes</a>
            </div>
        </div>
        
        <div class="card">
            <img src="img/roteiro-moderna.jpg" class="img-fluid" > 
            <div class="card-body">
                <h5 class="card-title">Roteiro<br><strong>Arquitetura Modernista</strong></h5>
                <p class="card-text"><small class="text-muted">Próximo <strong> 11/12/2018</strong></small></p>
                <a href="roteiro.php?id=11" class="btn btn-sm btn-danger">Detalhes</a>
            </div>
        </div>
        
        <div class="card">
            <img src="img/roteiro-industrial.jpg" class="img-fluid" > 
            <div class="card-body">
                <h5 class="card-title">Roteiro<br><strong>Patrimônio Industrial</strong></h5>
                <p class="card-text"><small class="text-muted">Próximo <strong> 15/01/2019</strong></small></p>
                <a href="roteiro.php?id=12" class="btn btn-sm btn-danger">Detalhes</a>
            </div>
        </div>

    </div>

</section>  

<section class="pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Seus Últimos Passeios</h1>
    <hr>
    
    <div class="card-deck">

        <div class="card">                
            <div class="card-body">
                <h5 class="card-title">Roteiro<br><strong>Gastronômico</strong></h5>
                <p class="card-text"><small class="text-muted">Próximo <strong> 11/12/2018</strong></small></p>
                <a href="passeio.php?id=10" class="btn btn-sm btn-danger">Detalhes</a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Roteiro<br><strong>Belle Époque</strong></h5>
                <p class="card-text"><small class="text-muted">Próximo <strong> 15/12/2018</strong></small></p>
                <a href="passeio.php?id=11" class="btn btn-sm btn-danger">Detalhes</a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Roteiro<br><strong>Minhocão</strong></h5>
                <p class="card-text"><small class="text-muted">Próximo <strong> 18/01/2018</strong></small></p>
                <a href="passeio.php?id=12" class="btn btn-sm btn-danger">Detalhes</a>
            </div>
        </div>

    </div>

</section>

<?php include_once "footer.php" ?>