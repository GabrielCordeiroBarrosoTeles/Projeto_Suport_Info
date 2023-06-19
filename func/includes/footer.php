<style>
  .tra{
    color: #38AAF2;
  }
  footer {
    background: linear-gradient(0deg, rgba(8, 32, 50, 0.9), rgba(8, 32, 50, 0.9)), url(../img/bg_banner1.jpg), #082032;;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

footer .footer-top {
    padding-top: 80px;
    padding-bottom: 40px;
}

.footer-bottom {
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    padding-bottom: 20px;
    padding-top: 20px;
}

footer .navbar-brand {
    color: #fff;
}

footer p {
    color: #ADB3B9;
}

footer .social-icons a {
    width: 50px;
    height: 50px;
    font-size: 20px;
    margin-left: 4px;
    margin-right: 4px;
    
   
}

.loader {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: red;
    z-index: 99999;
    position: fixed;
    left: 0;
    right: 0;
    
}


input.form-control {
    border-color: transparent;
    height: 44px;
}

.form-control {
    background-color: rgba(0, 0, 0, 0.04);
    border-color: rgba(0, 0, 0, 0.04);;
}

.form-control:focus {
    box-shadow: none;
    border-color: var(--brand);
}
</style>
<link rel="stylesheet" href="./css/footer.css">
<footer class="text-center text-lg-start" style="color:white;background-color:#38AAF2;">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0" style="text-align:center;">
        <div class="tra">
          <h3 style="color:#38AAF2;text-decoration: underline;text-decoration-color: #38AAF2;text-underline-offset: 20px;">Navegue</h3>
        </div>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" style="color:#fff;"aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
             <a class="nav-link active" style="color:#fff;"aria-current="page"  href="cadastro.php">Cadastro</a>
          </li>
          <li class="nav-item">
                    <a class="nav-link" href="exibir.php">Exibir_Cliente</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="exibir_agend.php">Exibir_agendamento</a>
                </li>
          <li class="nav-item">
            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"  style="background-color: #38AAF2;border: #38AAF2" class="btn btn-brand">Login</a>
          </li>
        </ul>
        
      </div>
        
      <!--Grid column-->
      <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
        <div class="tra">
          <h3 id="contato" style="color:#38AAF2;text-decoration: underline;text-decoration-color: #38AAF2;text-underline-offset: 20px;">Contato</h3>
        </div>
        <ul class="list-unstyled mb-0">
          
          <li>
            <a href="#!" class="text-light"> 
              <div class="single-cta">
                <a class="ri-map-pin-2-line icon" id=""  style="color:#38AAF2;" href="#"></a>
                <div class="cta-text">
                  <h4>Vá para:</h4>
                  <span class="text-light">
                    R.  Júlio Siqueira, 390,  -  Dionísio Torres
                  </span>
                </div>
              </div>
            </a>
          </li>
          
          <li>
            <a href="#!" class="text-light">
              <div class="single-cta">
                <a class="ri-phone-line icon" id=""  style="color:#38AAF2;" href="#"></a>
                <div class="cta-text">
                  <h4>Ligue para:</h4>
                  <span class="text-light">
                    (85) 9 98876-4948
                    <br>
                    (85) 9 99756-4948
                  </span>
                </div>
              </div>
            </a>
          </li>
          
          <li>
            <a href="#!" class="text-light">
              <div class="single-cta">
                <a class="ri-mail-line icon" id=""   style="color:#38AAF2;" href="#"></a>
                <div class="cta-text">
                  <h4>Envie-nos um e-mail:</h4>
                  <span class="text-light">
                    suportsinfo@gmail.com
                  </span>
                </div>
              </div>
            </a>
          </li>

        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
        <div class="tra">
          <h3 style="color:#38AAF2;text-decoration: underline;text-decoration-color: #38AAF2;text-underline-offset: 20px;">Dionísio Torres</h3>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.2789059068086!2d-38.51217718515231!3d-3.74932084432935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c748ea35637fef%3A0x7eb2e63b55439b21!2sEEEP%20Professor%20Joaquim%20Ant%C3%B4nio%20Albano!5e0!3m2!1spt-BR!2sbr!4v1675872324277!5m2!1spt-BR!2sbr" width="420" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"" width="150" height="250" style="border-radius:10px;" allowfullscreen="" class="card-img-top" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="footer-social-icon" style="text-align:center;">
          <a class="ri-whatsapp-line icon" id="zap" href="https://wa.me/qr/D5Z5M43METFVG1" ></a>
          <a class="ri-instagram-line icon" id="insta" href="https://instagram.com/espacomixparangaba"></a>
          <a href="https://maps.app.goo.gl/dpZ9RM35KbdjUBes9"> <iconify-icon icon="mdi:google-my-business" class="icon" style="color: white;"></iconify-icon></a>
        </div>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: #04001b;">
    Copyright &copy; <span id="anoatual"></span> - Suport's Info - Todos os Direitos Reservados 
    </div>
  <!-- Copyright -->
</footer>
<script>
  const dataAtual = new Date();
  const anoAtual = dataAtual. getFullYear();
  document.getElementById('anoatual').innerHTML=anoAtual 
</script>
<script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>