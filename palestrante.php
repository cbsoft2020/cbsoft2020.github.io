<?php
	// Palestrante em questao
	$id_speaker = $_GET['id'];

	if (!isset($id_speaker)) {
		$host  = $_SERVER['HTTP_HOST'];
		if (strcmp($host, "localhost:8080") == 0) {
			$host = $host."/cbsoft2020";
		}
		header("Location: http://$host/404.html", true, 302);
		exit;
	}

	// Carregando os dados dos palestrantes
    $file = "conteudo/palestrantes.json";
    $info = file_get_contents($file);
    $data = json_decode($info);

	$speaker = null;
	foreach($data->speakers as $s) {
		if (strcmp($s->id, $id_speaker) == 0) {
			$speaker = $s;
			break;
		}
	}
?>

<!DOCTYPE html>
<html lang="en">

<!-- HEAD -->
<?php 
	include_once ("header.php");
?>

<body class="body-wrapper">


<!--========================================
=      Navigation Section 			       =
=========================================-->

<?php 
	include_once ("menu.php");
?>

<!--====  End of Navigation Section ====-->
	
<!--========================================
=      			Speaker 			       =
=========================================-->
	
<?php 
	include_once("speaker.php");
	echo '<div style="margin-top: 250px"></div>';
 ?>	

<!--====  End of Speaker  ====-->

<!--============================
=            Footer            =
=============================-->

<?php 
	include_once ("footer.php");
?>
</body>

</html>



