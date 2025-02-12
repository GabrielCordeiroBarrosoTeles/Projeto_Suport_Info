<?php
    $LinkZap = "https://wa.me/seunumero";
    $LinkInsta="https://instagram.com/seuusuario";
    $LinkGoogle = "https://www.google.com/maps/@-3.6550574,-38.5317037,14z?entry=ttu&g_ep=EgoyMDI0MTEyNC4xIKXMDSoASAFQAw%3D%3D";
    $CompanyName = "Suport's Info";

    // Logica que divide a string em palavras para manipular a última palavra separadamente e depois juntar tudo novamente com a última palavra em outra cor 
    $palavras = explode(" ", $CompanyName); // Divide as palavras em um array
    $UltimaPalavra = array_pop($palavras); // Remove a última palavra
    $PrimeiraParte = implode(" ", $palavras); // Junta as palavras restantes

    $CompanyTelephone1 = " (85) 9 1234.5678";
    $CompanyTelephone2 = " (85) 9 98876-4948";
    $CompanyTelephone3 = " (85) 9 99756-4948";
    $CompanyEmailAddress = " suportsinfo@gmail.com";
    $CompanyCNPJ = "00.000.000/0000-00";
    // Coloquei uma localização aleatoria
    $CompanyAddress = "R. Júlio Siqueira, 390, - Dionísio Torres";
    $IframeAddress = "<iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.2789059068086!2d-38.51217718515231!3d-3.74932084432935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c748ea35637fef%3A0x7eb2e63b55439b21!2sEEEP%20Professor%20Joaquim%20Ant%C3%B4nio%20Albano!5e0!3m2!1spt-BR!2sbr!4v1675872324277!5m2!1spt-BR!2sbr' width='420' height='320' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'' width='150' height='250' style='border-radius:10px;' allowfullscreen='' class='card-img-top' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    $MessageToSendToTheCompany = "Olá"; // Mensagem predefinida que o usuario vai te mandar
    $MessageTheCompanyWantsToPresent = "Orçamento por whattsapp";
    $LogoImagePath = "img/logo.png";
?>