<?php
	// Evento
	$evento = $_GET['evento'];

	if (!isset($evento)) {
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

	// Palestrantes do evento em questao
	$speakers = array();
	foreach($data->speakers as $s) {
		if (strcmp($s->id_event, $evento) == 0) {
			array_push($speakers, $s->id);
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
	
<section class="section about">
	<div class="container">
		<div class="row" style="margin-top: 50px; margin-bottom: -250px">
			<div class="col-lg-12 align-self-center">
				<div class="content-block">
					<h2 data-i18n="<?php echo $evento;?>.titulo"></h2>
					<h4 data-i18n="speakers.title"></h4>
				</div>
			</div>
		</div>
	</div>
</section>
	
<!--========================================
=      			Speakers 			       =
=========================================-->
	
<?php 
	//$speaker = null;
	for ($i=0; $i < count($speakers); $i++) {
		foreach($data->speakers as $s) {
			if (strcmp($s->id, $speakers[$i]) == 0) {
				$speaker = $s;
				break;
			}
		}
		include("speaker.php");
		if ($i == count($speakers)-1) {
			echo '<div style="margin-top: 250px"></div>';
		}
	}
 ?>	

<!--====  End of Speakers  ====-->

<!--============================
=            Footer            =
=============================-->

<?php 
	include_once ("footer.php");
?>
</body>

</html>



