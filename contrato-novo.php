<?php include_once "init.php" ?> 
<?php include_once "header.php" ?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Contratos</h1>
    </div>  

    <h3>Novo Contrato</h3>

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="contrato.php" method="post">
                            
                            <div class="form-group">
                                <label for="tipo">Tipo de Contrato</label>
                                <select class="form-control" id="tipo">
                                    <option value="1" >Contrato de outorga de opção de subscrição social (compra)</option>
                                    <option value="2" disabled >Contrato de compartilhamento de receita (Em Breve)</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="outorgante">Outorgante</label>
                                <input type="text" class="form-control" id="outorgante" value="Rodrigo da Silva">
                            </div>
                            
                            <div class="form-group">
                                <label for="outorgado">Outorgado</label>
                                <input type="text" class="form-control" id="outorgado" value="Marcelo Guimarães">
                            </div>
                            
                            <div class="form-group">
                                <label for="quotas">Número de quotas</label>
                                <input type="text" class="form-control" id="quotas" value="30">
                            </div>

                            <div class="form-group">
                                <label for="execucao_opcao">Prazo para exercício da opção</label>
                                <input type="text" class="form-control" id="execucao_opcao" value="11/11/2020">
                            </div>                            

                            <div class="form-group">
                                <label for="valor">Valor do Pagamento</label>
                                <input type="text" class="form-control" id="valor" value="R$50.000,00">
                            </div>                            

                            <div class="form-group">
                                <label for="valor">Prazo para subscrição das cotas sociais</label>
                                <input type="text" class="form-control" id="valor" value="30 Dias">
                            </div>

                            <button type="submit" class="btn btn-sm btn-primary">Gravar</button>

                        </form>                       
                    </div>
                </div>
            </div>
        </div>
    </div>
              
</main>

<?php include_once "footer.php" ?>