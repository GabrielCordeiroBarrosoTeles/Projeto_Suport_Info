
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
                Info-ADM
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
                    <a class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal"  aria-hidden="true">Cadastro Cliente</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal2"  aria-hidden="true">Cadastro Funcionario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal3"  aria-hidden="true">Cadastro de Usuario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="exibir.php">Exibir Cliente</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="exibir_func.php">Exibir Funcionario</a>
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
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cadastro Cliente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="code.php" method="post">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" name="nome" id="nome" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="cpf" class="form-label">CPF</label>
                        <input type="text" name="cpf" id="cpf" class="form-control" required>
                        <script>
                            // Mascara CPF
                            document.addEventListener('DOMContentLoaded', function() {
                                var cpfInput = document.getElementById('cpf');
                                cpfInput.addEventListener('input', function(e) {
                                    var value = e.target.value.replace(/\D/g, '');
                                    value = value.replace(/(\d{3})(\d)/, '$1.$2');
                                    value = value.replace(/(\d{3})(\d)/, '$1.$2');
                                    value = value.replace(/(\d{3})(\d{1,2})$/, '$1-$2');
                                    e.target.value = value;
                                });
                            });
                        </script>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="telefone" class="form-label">Telefone:</label>
                        <input type="tel" name="telefone" id="telefone" class="form-control" required>
                        <script>
                            // Mascara Telefone
                            document.addEventListener('DOMContentLoaded', function() {
                                var telefoneInput = document.getElementById('telefone');
                                telefoneInput.addEventListener('input', function(e) {
                                    var value = e.target.value.replace(/\D/g, '');
                                    value = value.replace(/^(\d{2})(\d)/g, '($1) $2');
                                    value = value.replace(/(\d)(\d{4})$/, '$1-$2');
                                    e.target.value = value;
                                });
                            });
                        </script>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" name="save_cliente" class="btn btn-primary submit">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


    <!-- Modal Cadastro de Funcionario -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-body p-0">
            <div class="container">
    <h1 style="text-align:center;">Cadastro de Funcionario</h1>
    <form  action="code.php" method="post">
      <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome">
      </div>
      <div class="form-group">
        <label for="telefone">Cpf:</label>
        <input type="text" class="form-control" id="cpf_func" name="cpf" placeholder="Digite o cpf">
        <script>
            // Mascara CPF
            document.addEventListener('DOMContentLoaded', function() {
                var cpfInput = document.getElementById('cpf_func');
                cpfInput.addEventListener('input', function(e) {
                    var value = e.target.value.replace(/\D/g, '');
                    value = value.replace(/(\d{3})(\d)/, '$1.$2');
                    value = value.replace(/(\d{3})(\d)/, '$1.$2');
                    value = value.replace(/(\d{3})(\d{1,2})$/, '$1-$2');
                    e.target.value = value;
                });
            });
        </script>
      </div>
      <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Digite o e-mail">
      </div>
      <div class="form-group">
        <label for="endereco">Setor:</label>
        <input type="text" class="form-control" id="setor" name="setor"placeholder="Digite o setor">
      </div>
      <div class="form-group">
        <label for="cidade">Usuario:</label>
        <select class="form-control" id="usuario" name="usuario">
            <?php
            // Conexão com o banco de dados
            $conn = new mysqli("localhost", "root", "", "cordeiro");

            // Verifica a conexão
            if ($conn->connect_error) {
                die("Falha na conexão: " . $conn->connect_error);
            }

            // Consulta para buscar os logins da tabela usuario que não estão atrelados à tabela funcionario
            $sql = "SELECT u.id, u.login FROM usuario u LEFT JOIN funcionarios f ON u.id = f.usuario_id WHERE f.usuario_id IS NULL";
            $result = $conn->query($sql);

            // Verifica se há resultados
            if ($result->num_rows > 0) {
                // Loop pelos resultados e cria as opções do select
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['id'] . "'>" . $row['login'] . "</option>";
                }
            } else {
                echo "<option value=''>Nenhum usuário disponível</option>";
            }

            // Fecha a conexão
            $conn->close();
            ?>
        </select>
      </div>
      <div style="text-align:center;">
      <br>
        <button type="submit"  name="save_func" class="btn btn-primary">Enviar</button>
      </div>
      
      <br>
    </form>
  </div>

                </div>
            </div>
        </div>
    </div>   

    <!-- Modal Cadastro de Usuario -->
    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-body p-0">
            <div class="container">
    <h1 style="text-align:center;">Cadastro de Usuario</h1>
    <form  action="code.php" method="post">
      <div class="form-group">
        <label for="login">Login:</label>
        <input type="text" class="form-control" id="login" name="login" placeholder="Digite o seu login">
      </div>
      <div class="form-group">
        <label for="senha">Senha:</label>
        <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite a senha" required>
        <script>
            // Mascara Senha
            document.addEventListener('DOMContentLoaded', function() {
                var senhaInput = document.getElementById('senha');
                senhaInput.addEventListener('input', function(e) {
                    var value = e.target.value.replace(/\D/g, '');
                    e.target.value = value;
                });
            });
        </script>
      </div>

      <div style="text-align:center;">
      <br>
        <button type="submit"  name="save_login" class="btn btn-primary">Enviar</button>
      </div>
      
      <br>
    </form>
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
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>

<script src="../js/app.js"></script>