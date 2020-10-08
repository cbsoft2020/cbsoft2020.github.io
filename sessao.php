<?php
	$session_id = $_GET["id"];
	
	// Carregando as informacoes das sessoes
    $file = "conteudo/sessoes.json";
    $info = file_get_contents($file);
    $sessionData = json_decode($info);

	$session = array();
	foreach($sessionData->sessions as $s) {
		if (strcmp($s->id, $session_id) == 0) {
			array_push($session, $s);
		}
	}

	$keynote = array();
	foreach ($session as $s) {
		if (strcmp($s->type, "keynote") == 0) {
			$file = "conteudo/palestrantes.json";
			$info = file_get_contents($file);
			$keynoteData = json_decode($info);
			foreach($keynoteData->speakers as $speaker) {
				if (strcmp($speaker->id, $s->speaker_id) == 0) {
					array_push($keynote, $speaker);
				}
			}
		}
	}

	$panelists = array();
	foreach ($session as $s) {
		if (strcmp($s->type, "panel") == 0) {
			$file = "conteudo/palestrantes.json";
			$info = file_get_contents($file);
			$keynoteData = json_decode($info);
			foreach($s->panelists as $panelist_id) {
				foreach($keynoteData->speakers as $speaker) {
					if (strcmp($speaker->id, $panelist_id) == 0) {
						array_push($panelists, $speaker);
					}
				}
			}			
		}
	}

	function getPaper($eventId, $paperId) {
		$file = "conteudo/papers.json";
    	$info = file_get_contents($file);
    	$paperData = json_decode($info);
		foreach($paperData->papers as $paper) {
			if (strcmp($paper->id_event, $eventId) == 0 && strcmp($paper->paperId, $paperId) == 0) {
				return $paper;
			} else {
				$evento = substr($paper->id_event, 0, strpos($paper->id_event, '-'));
				if (strcmp($evento, $eventId) == 0 && strcmp($paper->paperId, $paperId) == 0) {
					return $paper;
				}
			}
		}
	}

	$sbes_tracks = array(
		"sbes-pesquisa" => "trilha_pesquisa",
		"sbes-ideias" => "trilha_ideias",
		"sbes-educacao" => "trilha_educacao",
		"sbes-ferramentas" => "trilha_ferramentas",
	);
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
					<h2 style="line-height: 50px" data-i18n="menu.programacao"></h2>
					<?php foreach($session as $s) {
						if (strcmp($s->type, "general") == 0) { ?>
							<h5 style="margin-bottom: 20px">
								<span data-i18n="events.<?php echo $s->id_event;?>"></span> - 
								<span data-i18n="schedule.<?php echo $s->title_id;?>"></span>
							</h5>
							<div class="description-one">
								<i class="fa fa-clock-o fa-lg"></i>
								<span style="margin-left: 10px; margin-right: 10px" data-i18n="schedule.<?php echo $s->day_id; ?>"></span>| 
								<span style="margin-left: 10px; margin-right: 10px"><?php echo $s->time; ?></span><br/>
								<i style="margin-top: 10px" class="fa fa-user fa-lg"></i>
								<span style="margin-left: 11px" data-i18n="schedule.chair"></span>: 
								<span><?php echo $s->chair; ?></span>
							</div>
						<?php 
						} else if (strcmp($s->type, "technical-session") == 0) { ?>
							<h5 data-i18n="schedule.<?php echo $s->id; ?>"></h5>
							<div class="description-one">
								<i style="margin-top: 10px" class="fa fa-clock-o fa-lg"></i>
								<span style="margin-left: 10px; margin-right: 10px" data-i18n="schedule.<?php echo $s->day_id; ?>"></span>| 
								<span style="margin-left: 10px; margin-right: 10px"><?php echo $s->time; ?></span><br/>
								<?php if (isset($s->chair)) { ?>
									<i style="margin-top: 10px" class="fa fa-user fa-lg"></i>
									<span style="margin-left: 11px" data-i18n="schedule.chair"></span>: 
									<span><?php echo $s->chair; ?></span>
								<?php } ?>
							</div>
							<br/>
							<div class="description-one">
								<?php for ($i=0; $i < count($s->papers); $i++) {
									$evento = substr($s->id, 0, strrpos($s->id, '-'));
									$paper = getPaper($evento, $s->papers[$i]);
									echo '<p style="line-height: 22px; margin-bottom: 20px">';
									echo '<span style="font-size: 17px">'.$paper->title.'</span><br/>';
									if (strcmp($evento, "sbes") == 0) {
										echo '<span style="font-style:italic; font-size: 14px" data-i18n="sbes.'.$sbes_tracks[$paper->id_event].'"></span>';
										if (strcmp($paper->category, "short") == 0) {
											echo ', <span style="font-style:italic; font-size: 14px" data-i18n="schedule.short_paper"></span>';
										}
									}
									echo '<br/>';
									if (isset($paper->authors)) {
										echo '<span style="font-size: 14px">'.$paper->authors.'</span></p>';
									} else if (isset($paper->author) && isset($paper->advisors)) {
										echo '<span style="font-size: 14px">'.$paper->author.', '.$paper->advisors.'</span></p>';
									}
								} ?>
							</div>
						<?php
						} else if (strcmp($s->type, "keynote") == 0) { ?>
							<h5 style="margin-bottom: 20px">
								<span data-i18n="events.<?php echo $s->id_event;?>"></span> - 
								<span data-i18n="schedule.palestra"></span>: 
								<span style="font-style: italic"><?php echo $keynote[0]->title; ?></span>
							</h5>
							<i class="fa fa-clock-o fa-lg"></i>
							<span style="margin-left: 10px; margin-right: 10px" data-i18n="schedule.<?php echo $s->day_id; ?>"></span>| 
							<span style="margin-left: 10px; margin-right: 10px"><?php echo $s->time; ?></span><br/>
							<i style="margin-top: 10px" class="fa fa-user fa-lg"></i>
							<span style="margin-left: 10px"><?php echo $keynote[0]->name; ?> (<?php echo $keynote[0]->institution; ?>)</span>
							<div class="container" style="margin-left: -45px">
								<div class="block">
									<div class="row">
										<div class="col-lg-5 col-md-6 align-self-md-top">
											<div class="image-block" style="border-width: 0px">
												<img src="images/speakers/<?php echo $keynote[0]->image;?>" style="width: 80%; border-radius: 0" class="img-fluid" alt="speaker">
											</div>
										</div>
										<div class="col-lg-7 col-md-6 align-self-center" style="margin-left: -100px; margin-top: 20px">
											<div class="content-block">
												<div class="details">
													<p style="font-style: italic"><?php echo $keynote[0]->abstract;?></p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php	
						} else if (strcmp($s->type, "panel") == 0) { ?>
							<h5 style="margin-bottom: 20px">
								<span data-i18n="schedule.painel"></span> - 
								<span data-i18n="events.<?php echo $s->id_event;?>"></span>:
								<span style="font-style: italic"><?php echo $s->title; ?></span>
							</h5>
							<i class="fa fa-clock-o fa-lg"></i>
							<span style="margin-left: 10px; margin-right: 10px" data-i18n="schedule.<?php echo $s->day_id; ?>"></span>| 
							<span style="margin-left: 10px; margin-right: 10px"><?php echo $s->time; ?></span>
							<?php if (!empty($s->abstract)) {
								echo '<h6 style="margin-top: 30px" data-i18n="schedule.descricao"></h6>';
								echo '<p>'.$s->abstract.'</p>';
							} 
							if (!empty($panelists)) {
								echo '<h6 style="margin-top: 30px" data-i18n="schedule.painelistas"></h6>';
								for($i=0; $i < count($panelists); $i++) { ?>
								<div class="container" style="margin-left: -45px">
									<div class="block">
										<div class="row">
											<div class="col-lg-5 col-md-6 align-self-md-top">
												<div class="image-block" style="border-width: 0px">
													<img src="images/speakers/<?php echo $panelists[$i]->image;?>" style="width: 80%; border-radius: 0" class="img-fluid" alt="speaker">
												</div>
											</div>
											<div class="col-lg-7 col-md-6 align-self-center" style="margin-left: -100px; margin-top: 20px">
												<div class="content-block">
													<div class="details">
														<p style="font-weight: bold; color: black"><?php echo $panelists[$i]->name; ?></p>
														<p><?php echo $panelists[$i]->institution; ?></p><br/>
														<p><?php echo $panelists[$i]->bio;?></p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<?php
								}
							}
						}
						echo '<div style="height: 50px"></div>';
					} ?>
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



