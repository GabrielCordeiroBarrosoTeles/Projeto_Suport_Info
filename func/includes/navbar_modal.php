<!--Ajeita os actions dos forms-->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
<style>
    /* navbar */
.top-nav {
    background-color: var(--brand);
    color: #fff;
    padding-top: 5px;
    padding-bottom: 5px;
}

.top-nav p {
    display: inline-block;
    margin-bottom: 0;
    margin-right: 10px;
}

.top-nav span,
.top-nav i {
    vertical-align: middle;
}

.navbar {
    box-shadow: var(--shadow);
}

.social-icons a {
    width: 28px;
    height: 28px;
    display: inline-flex;
    color: #fff;
    background-color: rgba(255, 255, 255, 0.25);
    text-decoration: none;
    align-items: center;
    justify-content: center;
    border-radius: 100px;
}

.social-icons a:hover {
    background-color: #fff;
    color: var(--brand);
}

.navbar .navbar-nav .nav-link {
    color: var(--dark);
}

.navbar .navbar-nav .nav-link:hover {
    color: var(--brand);
}

.navbar .navbar-nav .nav-link.active {
    color: var(--brand);
}

.navbar-brand {
    font-size: 28px;
    font-weight: 700;
}

.navbar-brand .dot {
    color: var(--brand);
}
.bg-cover {
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}
</style>
<link rel="stylesheet" href="css/cadastro.css">
<link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
<!-- Navbar 1 -->
<div class="top-nav" id="home" style="background-color: #38AAF2;">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-auto">
                <p> <i class='bx bxs-envelope'></i> suportsinfo@gmail.com</p>
                <p> <i class='bx bxs-phone-call'></i> (85) 9 1234.5678</p>
            </div>
            <div class="col-auto social-icons">
                <a href="#"><i class='bx bxl-whatsapp'></i></a>
                <a href="#"><i class='bx bxl-instagram'></i></a>
                <a href="#"><i class='bx bxl-facebook'></i></a>
                <a href="#"><i class='bx bxl-pinterest'></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Navbar 2 -->
<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
    <div class="container">
        <a class="navbar-brand" href="home.php"><img src="./img/logo.png" alt="" srcset="" style="width: 90px;">
            Suport's 
            <span class="dot"  style="color: #38AAF2;">
                Info-FUNC
            </span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal"  aria-hidden="true">Cadastro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="exibir.php">Exibir_Cliente</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="exibir_agend.php">Exibir_agendamento</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ocorrencia_view.php" >Ocorrência</a>
                </li>
            </ul>
            <a href="../index.php"   style="background-color: #38AAF2;border: #38AAF2" class="btn btn-brand ms-lg-3">Sair</a>
        </div>
    </div>
</nav>
        
<!-- Modal Cadastro -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="container-fluid">
                    <section class="container">
                        <h1 style="text-align: center;" id="eventos">Cadastro Cliente</h1><br>
                        <div class="row row-cols-1 row-cols-md-12 g-4">
                            <div class="col">
                            <div class="card" id="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col s12">
                                            <!--Formulário-->
                                            <div class="container mt-5" style="background-color: rgba(0, 0, 0, 0.185);color: white;border-radius: 15px;">
                                                <div class="card" style="background-color: rgba(0, 0, 0, 0.3);border: 4px solid dodgerblue;border-radius: 10px;">
                                                    <div class="card-header" style="text-align: center;background-color: dodgerblue;">
                                                        <legend><b>Cadastro</b></legend>
                                                    </div>
                                                    <div class="card-body" style="background-color: rgba(0, 0, 0, 0.6);color: white;border: 2px solid rgba(0, 0, 0, 0);border-radius: 3px;">
                                                        <form  action="code.php" method="post" style="text-align:center;">
                                                            <fieldset> 
                                                                <br>
                                                                <br>
                                                                <div class="inputBox">
                                                                <input type="text" name="nome" id="nome" class="inputUser" required>
                                                                <label for="nome" class="labelInput">Nome</label>
                                                            </div>
                                                            <br>
                                                            <br>
                                                            <div class="inputBox">
                                                                <input type="number" name="cpf" id="cpf" class="inputUser" required>
                                                                <label for="cpf" class="labelInput">Cpf</label>
                                                            </div>
                                                            <br>
                                                            <br>
                                                            <div class="d-grid gap-2 col-6 mx-auto">
                                                                <button  class="btn btn-primary submit" type="submit" name="save_cliente" style="margin: 10px;"> Enviar </button> 
                                                        </fieldset>
                                                    </form>
                                                </div> 
                                            </div>
                                        </div>
                                        <!--Termino do Formulário-->            
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                    </div>
                </div>
            </div>
        </div>
    </div>   




<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/app.js"></script>