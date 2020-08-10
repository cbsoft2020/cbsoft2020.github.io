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

	$evento_short = null;
	if (strstr($evento, 'sbes')) {
		$evento_short = 'sbes';
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
					<h2 style="line-height: 50px" data-i18n="<?php echo $evento_short;?>.titulo"></h2>
					<h4 style="line-height: 50px">
						<span data-i18n="menu.artigos_aceitos"></span>
						<?php 
							$pos = strpos($evento, '-');
							if ($pos !== false) {
								$evento = str_replace('-', '.trilha_', $evento);
								echo " &ndash; <span data-i18n='$evento'></span>";
							}
						?>
					</h4>
					
					<br/>
					<strong><span style="font-size: 20px; font-weight: bold" data-i18n="menu.full_papers"></span></strong>
					<div class="description-one" style="margin-top: 20px">
					<?php for ($i=0; $i < count($full_papers); $i++) { ?>
						<p style="line-height: 22px; margin-bottom: 20px">
							<span style="font-size: 17px"><?php echo $full_papers[$i]->title; ?><br/>
							<span style="font-size: 14px"><?php echo $full_papers[$i]->authors; ?></span>
						</p>
					<?php } ?>
					</div>
					
					<?php if (count($short_papers) != 0) { ?>
					<br />
					<strong><span style="font-size: 20px; font-weight: bold" data-i18n="menu.short_papers"></span></strong>
					<div class="description-one" style="margin-top: 20px">
						<?php for ($i=0; $i < count($short_papers); $i++) { ?>
							<p style="line-height: 22px; margin-bottom: 20px">
								<span style="font-size: 17px"><?php echo $short_papers[$i]->title; ?><br/>
								<span style="font-size: 14px"><?php echo $short_papers[$i]->authors; ?></span>
							</p>
						<?php } ?>
					</div>
					<?php } ?>
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



