<?php
    session_start();
    require 'dbcon.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home - Suport's Info</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/footer.css">
        <link rel="stylesheet" href="../css/owl.carousel.min.css">
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet"><!--Importante, faz os icons aparecerem no footrer-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet"><!--Importante, faz os icons aparecerem no footrer-->
        <style>
            ::-webkit-scrollbar{
                width: 10px;
            }::-webkit-scrollbar-track{
                background: #E7DFDD;
                border-radius: 30px;
            }::-webkit-scrollbar-thumb{
                background: #000000;
                border-radius: 30px;
            }
        </style>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
    </head>
    <body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">

        <?php include './includes/navbar_modal.php'?><!--Navbar-->
        
        <?php include './includes/carousel.php'?><!--Cards-->

        <?php include './includes/cards.php'?><!--Cards-->
    <br>
        <?php include './includes/footer.php'?><!--Footer-->
 
 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    </body>
</html>