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

	// Carregando os dados dos artigos
    $file = "conteudo/papers.json";
    $info = file_get_contents($file);
    $data = json_decode($info);

	// Artigos do evento em questão
	$full_papers = array();
	$short_papers = array();
	foreach($data->papers as $p) {
		if (strcmp($p->id_event, $evento) == 0) {
			if (strcmp($p->category, "short") == 0) {
				array_push($short_papers, $p);
			} else {
				array_push($full_papers, $p);
			}
		}
	}

	if (strstr($evento, 'sbes')) {
		$evento = 'sbes';
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
		<div class="row" style="margin-top: 50px">
			<div class="col-lg-12 align-self-center">
				<div class="content-block">
					<h2 data-i18n="<?php echo $evento;?>.titulo"></h2>
					<h4 data-i18n="menu.artigos_aceitos"></h4>
					
					<br/>
					<strong><span style="font-size: 18px" data-i18n="menu.full_papers"></span></strong>
					<div class="description-one">
					<?php for ($i=0; $i < count($full_papers); $i++) { ?>
						<p style="font-size: 16px; margin-top: 10px; font-style: italic"><?php echo $full_papers[$i]->title; ?></p>
						<p style="font-size: 14px; margin-top: -5px"><?php echo $full_papers[$i]->authors; ?></p>
					<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--============================
=            Footer            =
=============================-->

<?php 
	include_once ("footer.php");
?>
</body>

</html>



