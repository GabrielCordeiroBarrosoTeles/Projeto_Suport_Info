<!DOCTYPE html>
<html>
<head>
	<title>Confirmação de ocorrencia</title>
	<script type="text/javascript">
		function ok(){
			setTimeout("window.location='func/home.php'",3000);
		}
		function okk(){
			setTimeout("window.location='adm/home.php'",3000);
		}
		function erro(){
			setTimeout("window.location='index.php'",3000);
		}
	</script>
	<meta charset="utf-8">
	<style type="text/css">
		img{
            margin-top: 2%;
        }
        h2{  
            margin-top: 10%;            
        }
	</style>
</head>
<body>
</body>
</html>
<?php 
	require './conexao.php';
	

?>