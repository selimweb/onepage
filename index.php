<?php
/* 	
	Prendo il valore "p" dell'array $_GET, che corrisponde alla pagina che voglio visualizzare.
	Se non e' stato impostato, visualizzo la Home
*/
if (isset($_GET['p'])) {
	$currentPage = 	$_GET['p'];
}
else {
	$currentPage = 	'home';
}
?>
<html>
	<head>
		<title>Esempio di struttura con Onepage</title>
	</head>
	<body>
		<?php /* Qui includo il menu' */ ?>
		<?php include('structure/menu.php'); ?>
		
		<?php /* Qui includo la pagina che voglio visualizzare, contenuta nella variabile "p" dell'array $_GET */ ?>
		<?php include('pages/' . $currentPage . '.php'); ?>
	</body>
</html>
