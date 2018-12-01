<?php include_once "init.php" ?> 
<?php include_once "header.php" ?>

    <div class="pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Roteiro</h1>
    </div>  

    <div class="mb-5 pb-5">
        <h3 class="float-left">Futebol</h3>
        
        <a href="inscricao.php?id=10" class="btn btn-bg btn-danger float-right "><strong>Inscreva-se</strong></a>
    </div>

    <div class="clearfix"></div>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    </ol>                   
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="img/roteiro-futebol-slides/slide1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/roteiro-futebol-slides/slide2.jpg" alt="Second slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>        
        </div>
        <hr>

        <div class="row">
            <div class="col-md-4">
                <ul class="list-group">
                    <li class="list-group-item">Kilometragem<br><strong>12Km</strong></li>
                    <li class="list-group-item">Duração<br><strong>4h</strong></li>
                    <li class="list-group-item">Nível<br><strong>Médio</strong></li>
                    <li class="list-group-item">Saída<br><strong>Estação da Luz</strong></li>
                    <li class="list-group-item">Final<br><strong>Estação da Luz</strong></li>
                    <li class="list-group-item">Roteiro<br>
                        <strong>
                        Assertively enhance team building synergy after mission-critical meta-services.<br> 
                        Intrinsicly actualize timely web-readiness for premium convergence.<br> 
                        Energistically redefine ethical quality vectors rather than state of the.
                        </strong>
                    </li>
                </ul>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Rota</h4>
                    </div>
                    <div class="card-body">
                        <img src="/img/roteiro-futebol-mapa.png" class="img-fluid rounded" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <hr>

<?php include_once "footer.php" ?>