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
<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top" style="border-bottom: 0%;">
    <div class="container">
        <a class="navbar-brand" href="index.php"><img src="./img/logo.png" alt="" srcset="" style="width: 90px;">Suport's <span class="dot"  style="color: #38AAF2;">Info</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pesq_cliente.php">Exibir</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  data-bs-toggle="modal" data-bs-target="#exampleModal6"  aria-hidden="true">Agendamento</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  data-bs-toggle="modal" data-bs-target="#exampleModal2"  aria-hidden="true">Ocorrência</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  data-bs-toggle="modal" data-bs-target="#exampleModal5"  aria-hidden="true">FAQ</a>
                </li>
            </ul>
            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"  style="background-color: #38AAF2;border: #38AAF2" class="btn btn-brand ms-lg-3">Login</a>
        </div>
    </div>
</nav>

<!-- Modal FAQ-->
<div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="container-fluid">
                    <div class="row gy-4">
                        <div class="col-lg-4 col-sm-12 bg-cover" style="background-image: url('img/faq.png'); min-height: 250px;"></div>
                        <div class="col-lg-8">
                            <h4>Perguntas Frequentes
                                <a href="./" class="btn btn-danger float-end">VOLTAR</a>
                            </h4>
                            <p>Aqui estão algumas perguntas frequentes de suporte técnico:</p>
                            <div class="card mb-3" style="max-width: 1040px;">
                                <div class="row g-0">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Meu computador está lento. O que posso fazer para melhorar o desempenho?
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    1. Verifique se há programas desnecessários sendo executados em segundo plano e desinstale-os.<br>
                                                    2. Limpe os arquivos temporários e a lixeira.<br>
                                                    3. Execute uma verificação de vírus e malware.<br>
                                                    4. Pressione novamente o botão de energia para ligar o roteador.<br>
                                                    5. Considere atualizar a memória RAM ou substituir o disco rígido por um SSD.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Meu computador está apresentando tela azul. O que devo fazer?
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    1. Verifique se há drivers desatualizados e atualize-os.<br>
                                                    2. Execute uma verificação de disco para verificar se há erros no sistema de arquivos<br>
                                                    3. Verifique se há conflitos de hardware ou problemas de compatibilidade.<br>
                                                    4. Se o problema persistir, pode ser necessário reinstalar o sistema operacional.<br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Meu computador não está reconhecendo dispositivos USB. O que devo verificar?
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    1. Verifique se o dispositivo USB está funcionando corretamente em outro computador.<br>
                                                    2. Teste diferentes portas USB no computador.<br>
                                                    3. Verifique se os drivers USB estão atualizados.<br>
                                                    4. Execute uma verificação de vírus para descartar possíveis infecções.<br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Login-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="container-fluid">
                    <div class="row gy-4">
                        <div class="col-lg-4 col-sm-12 bg-cover"
                                style="background-image: url('https://raw.githubusercontent.com/GabrielCordeiroBarrosoTeles/gfngf/main/cordeirue%20(1).png'); min-height:250px;">
                        </div>
                        <div class="col-lg-8">
                            <form class="p-lg-5 col-12 row g-3" action="./receber_login.php" method="post">
                            <div>
                                    <h1>Login
                                    <a href="./" class="btn btn-danger float-end">VOLTAR</a>
                                    </h1>
                                    <p>Registre aqui seu login no sistema</p>
                                </div>
                                <div class="col-lg-12">
                                    <label for="userName" class="form-label">Nome</label>
                                    <input type="text" class="form-control" name="login" id="userName"
                                            aria-describedby="emailHelp">
                                </div>
                                <div class="col-12">
                                    <label for="userName" class="form-label">Senha</label>
                                    <input type="password" class="form-control" name="senha" id="userName"
                                            aria-describedby="emailHelp">
                                </div>   
                                <div class="col-12">
                                    <button type="submit" class="btn btn-brand" style="background-color: #38AAF2;border: #38AAF2">Logar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>   

<!-- Modal Agendamento -->
<?php include './adm/message.php'; ?>
<div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Agendar atendimento para domicilio
                                    <a href="./" class="btn btn-danger float-end">VOLTAR</a>
                                </h4>
                            </div>
                            <div class="card-body">
                                <form action="code.php" method="POST">
                                    <div class="mb-3">  
                                        <label>Nome</label>
                                        <input type="text" name="nome" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Endereço</label>
                                        <input type="text" name="endereco" class="form-control">
                                    </div>
                                    <label>Data e hora</label>
                                    <input type="date" name="data" class="form-control">
                                    </div>
                                    <label for="message"><b>Conte um pouco do seu problema:</b></label>
                                    <br>
                                    <textarea name="mensagem" id="message" class="input" required style="width: 100%; border: 2px solid black;"></textarea>
                                    <br>
                                    <button type="submit" name="save_agend" class="btn btn-primary">Agendar</button>
                                    <br>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Ocorrencia-->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="container-fluid">
                    <div class="row gy-4">
                        <div class="col-lg-4 col-sm-12 bg-cover"
                                style="background-image: url('img/ocor2.png'); min-height:250px;">
                        </div>
                        <div class="col-lg-8">
                            <form class="p-lg-4 col-12 row g-3" action="./code.php" method="post">

                                <div>
                                    <h1>Ocorrência
                                    <a href="./" class="btn btn-danger float-end">VOLTAR</a>
                                    </h1>
                                    <p>Registre aqui sua ocorrência</p>
                                </div>
                                <div class="col-lg-12">
                                    <label for="userName" class="form-label">Nome</label>                                        
                                    <input type="text" class="form-control" name="nome" id="userName"
                                            aria-describedby="emailHelp">
                                </div>                                  
                                <div class="col-12">
                                    <label for="userName" class="form-label">Descreva o problema:</label>
                                    <input type="textarea" class="form-control" name="observacao_cliente" id="userName"
                                            aria-describedby="emailHelp">
                                </div>
                                
                                <div class="col-12">
                                    <label for="userName" class="form-label">Data de registro:</label>
                                    <input type="date" class="form-control" name="data" id="userName"
                                            aria-describedby="emailHelp" >
                                </div> 
                                
                                <div class="inputBox">
                                <label for="inputState" class="form-label">Setor:</label>
                                <select id="inputState" class="input" name="dep" id="userName">
                                    <option selected disabled>Selecione</option>
                                    <option>Financeiro</option>
                                    <option>Vendas</option>
                                    <option>RH</option>
                                    <option>Marketing</option>
                                </select>
                                <br>
                            </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-brand" name="save_ocorrncia" style="background-color: #38AAF2;border: #38AAF2">registrar ocorrência</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>







<script>
const dataAtual = new date();
const anoAtual = dataAtual.toLocaleDateString();
docuement.getElementById('anoAtual').innerHTML=anoAtual;

</script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/app.js"></script>