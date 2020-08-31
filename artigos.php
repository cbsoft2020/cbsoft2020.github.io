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
	$msc_ctd = array();
	$phd_ctd = array();
	$ug_ctic = array();
	foreach($data->papers as $p) {
		if (strcmp($p->id_event, $evento) == 0) {
			switch ($p->category) {
				case "short":
					array_push($short_papers, $p);
					break;
				case "full":
					array_push($full_papers, $p);
					break;
				case "master":
					array_push($msc_ctd, $p);
					break;
				case "phd":
					array_push($phd_ctd, $p);
					break;
				case "ug":
					array_push($ug_ctic, $p);
					break;
			}
		}
	}

	$evento_short = strstr($evento, 'sbes') ? 'sbes' : $evento;
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
					<?php 
							echo "<span data-i18n='menu.artigos_aceitos'></span>";
							if (strstr($evento_short, 'sbes')) {
								$pos = strpos($evento, '-');
								if ($pos !== false) {
									$evento = str_replace('-', '.trilha_', $evento);
									echo " &ndash; <span data-i18n='$evento'></span>";
								}
							}
						?>
					</h4>
					
					<?php if (count($full_papers) != 0) { ?>
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
					<?php } ?>
					
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
					
					<?php if (count($ug_ctic) != 0) { ?>
					<br />
					<strong><span style="font-size: 20px; font-weight: bold" data-i18n="ctic-es.selected"></span></strong>
					<div class="description-one" style="margin-top: 20px">
						<?php for ($i=0; $i < count($ug_ctic); $i++) { ?>
							<p style="line-height: 22px; margin-bottom: 20px">
								<span style="font-size: 17px"><?php echo $ug_ctic[$i]->title; ?><br/>
								<span style="font-size: 14px" data-i18n="ctic-es.autor"></span>
								<span style="font-size: 14px"><?php echo $ug_ctic[$i]->author; ?></span><br/>
								<span style="font-size: 14px" data-i18n="ctic-es.orientador"></span>
								<span style="font-size: 14px"><?php echo $ug_ctic[$i]->advisors; ?></span>
							</p>
						<?php } ?>
					</div>
					<?php } ?>
					
					<?php if (count($phd_ctd) != 0) { ?>
					<br />
					<strong><span style="font-size: 20px; font-weight: bold" data-i18n="ctd-es.categorias_selected.0"></span></strong>
					<div class="description-one" style="margin-top: 20px">
						<?php for ($i=0; $i < count($phd_ctd); $i++) { ?>
							<p style="line-height: 22px; margin-bottom: 20px">
								<span style="font-size: 17px"><?php echo $phd_ctd[$i]->title; ?><br/>
								<span style="font-size: 14px" data-i18n="ctd-es.autor"></span>
								<span style="font-size: 14px"><?php echo $phd_ctd[$i]->author; ?></span><br/>
								<span style="font-size: 14px" data-i18n="ctd-es.orientador"></span>
								<span style="font-size: 14px"><?php echo $phd_ctd[$i]->advisors; ?></span>
							</p>
						<?php } ?>
					</div>
					<?php } ?>
					
					<?php if (count($msc_ctd) != 0) { ?>
					<br />
					<strong><span style="font-size: 20px; font-weight: bold" data-i18n="ctd-es.categorias_selected.1"></span></strong>
					<div class="description-one" style="margin-top: 20px">
						<?php for ($i=0; $i < count($msc_ctd); $i++) { ?>
							<p style="line-height: 22px; margin-bottom: 20px">
								<span style="font-size: 17px"><?php echo $msc_ctd[$i]->title; ?><br/>
								<span style="font-size: 14px" data-i18n="ctd-es.autor"></span>
								<span style="font-size: 14px"><?php echo $msc_ctd[$i]->author; ?></span><br/>
								<span style="font-size: 14px" data-i18n="ctd-es.orientador"></span>
								<span style="font-size: 14px"><?php echo $msc_ctd[$i]->advisors; ?></span>
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



