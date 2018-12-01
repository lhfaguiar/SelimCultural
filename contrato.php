<?php include_once "init.php" ?> 
<?php include_once "header.php" ?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Contratos</h1>
    </div>  

    <h3>Rodrigo Arantes vs. <strong>Marcelo Guimarães</strong></h3>

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col col-md-6">
                <div class="card">
                    <div class="card-body">
                        <img src="img/contrato-thumb.png" class="img-fluid" >
                    </div>
                    <a href="#!" class="btn btn-sm btn-light">Baixar PDF</a>
                </div>
            </div>
            <div class="col col-md-6">
                <div class="card mt-2">
                    <div class="card-body">
                    <h5 class="card-title">Smart Contract</h5>
                    <hr>
                    <pre style="height:528px">
pragma  solidity 0.4.25;

/**
@title Clevera
@notice Contrato Inteligente para investimento em start ups
@author HaCKING tunes
*/
contract Clevera {

    struct Contracto {
        uint id;
        address statup;
        address acelaradora;
        uint invest;
        uint quotas;
        string payment_maturity;
        string buy_maturity;
        string public_deadline;
    }

    
    Contracto[] contractos;
    
    
    function incluiContrato(uint id, address statup, address acelaradora, uint invest, uint quotas, string payment_maturity, string buy_maturity, string public_deadline) {
        Contracto memory novoContrato = Contracto(id, statup, acelaradora, invest, quotas, payment_maturity, buy_maturity, public_deadline);
        contractos.push(novoContrato);
    }
    
    function pesquisarContrato(uint id) public view returns (uint, address, address, uint, uint, string, string, string)  {
        Contracto memory contractoTemporario = contractos[id];
        return (id, contractoTemporario.statup, contractoTemporario.acelaradora, contractoTemporario.invest, contractoTemporario.quotas, contractoTemporario.payment_maturity, contractoTemporario.buy_maturity, contractoTemporario.public_deadline);
    }
    
}
                    </pre>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <ul class="list-group">
                    <li class="list-group-item">Tipo <strong>Contrato de Opção</strong></li>
                    <li class="list-group-item">Situação <strong>Ativo</strong></li>
                    <li class="list-group-item">Assinatura <strong>Confirmada</strong></li>
                    <li class="list-group-item">Opção <strong>Aceita</strong></li>
                </ul>
            </div>
        </div>
    </div>
                     
</main>

<?php include_once "footer.php" ?>