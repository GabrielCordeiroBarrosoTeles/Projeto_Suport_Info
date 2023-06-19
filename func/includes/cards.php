<style>
    #card {
        border-radius: 0%;
        text-align: center;
        border-left: none;
        border-top: none;
        border-right: none;
        border-bottom: 6px solid #38AAF2;
    }

    #cardtext {
        color: #747474;
        margin-top: -10px;
    }

    #b {
        background-color: #38AAF2;
        border: #38AAF2;
        text-decoration: none;
    }

    #a {
        color: #000;
        border: #38AAF2;
        text-decoration: none;
    }
</style>

<section class="container">
    <h1 style="text-align: center;" id="eventos">Possibilidades</h1>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card" id="card">
                <img src="../img/onew.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title btn btn-brand ms-lg-3" id="b">
                        <a href="ocorrencia_view.php" id="a">Exibir Ocorrência</a>
                    </h5>
                    <p class="card-text" id="cardtext"></p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card" id="card">
                <img src="../img/clientenew.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title btn btn-brand ms-lg-3" id="b">
                        <a href="exibir.php" id="a">Exibir Cliente</a>
                    </h5>
                    <p class="card-text" id="cardtext"></p>
                </div>
            </div>
        </div>
        
        <div class="col-md-3">
            <div class="card" id="card">
                <img src="../img/agendamentenew.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title btn btn-brand ms-lg-3" id="b">
                        <a href="exibir_agend.php" id="a">Exibir Agendamento</a>
                    </h5>
                    <p class="card-text" id="cardtext"></p>
                </div>
            </div>
        </div>
        <!-- Adicione mais colunas de cards aqui, se necessário -->

    </div>
</section>
<br>