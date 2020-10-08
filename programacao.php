<?php
	function getKeynote($keynoteId) {
		$file = "conteudo/palestrantes.json";
    	$info = file_get_contents($file);
    	$keynoteData = json_decode($info);
		foreach($keynoteData->speakers as $speaker) {
			if (strcmp($speaker->id, $keynoteId) == 0) {
				return $speaker;
			}
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

<!--==============================
=            Schedule            =
===============================-->
<section id="programacao" class="section schedule">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h3 style="margin-top: 50px; margin-bottom: 30px" data-i18n="menu.programacao">Programação</h3>
					<p style="text-align: center" data-i18n="schedule.time_zone"></p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="schedule-tab">
					<ul class="nav nav-pills text-center">
						<li class="nav-item">
					    	<a class="nav-link active" href="#oct19" data-toggle="pill" data-i18n="schedule.dia_1">19/10/2020</a>
					  	</li>
						<li class="nav-item">
							<a class="nav-link" href="#oct20" data-toggle="pill" data-i18n="schedule.dia_2">20/10/2020</a>
					  	</li>
						<li class="nav-item">
					    	<a class="nav-link" href="#oct21" data-toggle="pill" data-i18n="schedule.dia_3">21/10/2020</a>
					  	</li>
					  	<li class="nav-item">
					    	<a class="nav-link" href="#oct22" data-toggle="pill" data-i18n="schedule.dia_4">22/10/2020</a>
					  	</li>
					  	<li class="nav-item">
						  	<a class="nav-link" href="#oct23" data-toggle="pill" data-i18n="schedule.dia_5">23/10/2020</a>
					  	</li>
					</ul>
				</div>
				<div class="schedule-contents bg-schedule">
					<div class="tab-content" id="pills-tabContent">
						<div class="tab-pane fade show active schedule-item" id="oct19">
							<table class="table table-hover" id="program-table" style="background-color: white">
								<thead style="background-color: #f4b321; color: white">
									<tr>
										<th scope="col" class="align-middle"></th>
										<th scope="col" class="align-middle" width="15%">
											<p style="text-align: left; margin-left: -10px" data-i18n="schedule.horario"></p>
										</th>
										<th scope="col" class="align-middle" width="17%">
											<p data-i18n="schedule.sala_1"></p>
										</th>
										<th scope="col" class="align-middle" width="17%">
											<p data-i18n="schedule.sala_2"></p>
										</th>
										<th scope="col" class="align-middle" width="17%">
											<p data-i18n="schedule.sala_3"></p>
										</th>
										<th scope="col" class="align-middle" width="17%">
											<p data-i18n="schedule.sala_4"></p>
										</th>
										<th scope="col" class="align-middle" width="17%">
											<p data-i18n="schedule.sala_5"></p>
										</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><i class="fa fa-clock-o"></i></td>
										<td style="text-align: left"><span style="margin-left: -10px" class="time">08:00-09:00</span></td>
										<td colspan="5">
											<a href="sessao.php?id=opening">
												<span data-i18n="schedule.opening"></span> - <span data-i18n="events.cbsoft"></span>
											</a>
										</td>
									</tr>
									<tr>
										<td><i class="fa fa-clock-o"></i></td>
										<td style="text-align: left"><span style="margin-left: -10px" class="time">09:00-10:30</span></td>
										<td><a href="sessao.php?id=vem-1" data-i18n="events.vem"></a></td>
										<td><a href="sessao.php?id=mssis-1" data-i18n="events.mssis"></a></td>
										<td><a href="sessao.php?id=wtdsoft-1" data-i18n="events.wtdsoft"></a></td>
										<td><a href="sessao.php?id=sbcars-1" data-i18n="events.sbcars"></a></td>
										<td><a href="sessao.php?id=sblp-1" data-i18n="events.sblp"></a></td>
									</tr>
									<tr>
										<td><i class="fa fa-clock-o"></i></td>
										<td style="text-align: left"><span style="margin-left: -10px" class="time">10:30-10:45</span></td>
										<td colspan="5"><a href="#" data-i18n="schedule.intervalo"></a></td>
									</tr>
									<tr>
										<td><i class="fa fa-clock-o"></i></td>
										<td style="text-align: left"><span style="margin-left: -10px" class="time">10:45-12:15</span></td>
										<td><a href="sessao.php?id=vem-2" data-i18n="events.vem"></a></td>
										<td><a href="sessao.php?id=mssis-2" data-i18n="events.mssis"></a></td>
										<td><a href="sessao.php?id=wtdsoft-2" data-i18n="events.wtdsoft"></a></td>
										<td><a href="sessao.php?id=sbcars-2" data-i18n="events.sbcars"></a></td>
										<td><a href="sessao.php?id=sblp-2" data-i18n="events.sblp"></a></td>
									</tr>
									<tr>
										<td><i class="fa fa-clock-o"></i></td>
										<td style="text-align: left"><span style="margin-left: -10px" class="time">12:15-14:00</span></td>
										<td colspan="5"><a href="#" data-i18n="schedule.intervalo"></a></td>
									</tr>
									<tr>
										<td class="align-middle"><i class="fa fa-clock-o"></i></td>
										<td class="align-middle" style="text-align: left"><span style="margin-left: -10px" class="time">14:00-15:30</span></td>
										<td colspan="5">
											<a href="sessao.php?id=sbcars-palestra">
												<span data-i18n="schedule.palestra"></span> - <span data-i18n="events.sbcars"></span><br/>
												<?php $keynote = getKeynote('diomidis'); ?>
												<span style="font-style: italic; font-size: 15px"><?php echo $keynote->title;?></span><br/>
												<span style="font-size: 13px"><?php echo "$keynote->name ($keynote->institution)"; ?></span>
											</a>
										</td>
									</tr>
									<tr>
										<td><i class="fa fa-clock-o"></i></td>
										<td style="text-align: left"><span style="margin-left: -10px" class="time">15:30-15:45</span></td>
										<td colspan="5"><a href="#" data-i18n="schedule.intervalo"></a></td>
									</tr>
									<tr>
										<td><i class="fa fa-clock-o"></i></td>
										<td style="text-align: left"><span style="margin-left: -10px" class="time">15:45-17:50</span></td>
										<td><a href="sessao.php?id=vem-3" data-i18n="events.vem"></a></td>
										<td><a href="sessao.php?id=mssis-3" data-i18n="events.mssis"></a></td>
										<td><a href="sessao.php?id=wtdsoft-3" data-i18n="events.wtdsoft"></a></td>
										<td><a href="sessao.php?id=sbcars-3" data-i18n="events.sbcars"></a></td>
										<td><a href="sessao.php?id=sblp-3" data-i18n="events.sblp"></a></td>
									</tr>
								</tbody>
							</table>
					</div>
					<div class="tab-pane fade schedule-item" id="oct20">
						<table class="table table-hover" id="program-table" style="background-color: white">
							<thead style="background-color: #f4b321; color: white">
								<tr>
									<th scope="col" class="align-middle"></th>
									<th scope="col" class="align-middle" width="15%">
										<p style="text-align: left; margin-left: -10px" data-i18n="schedule.horario"></p>
									</th>
									<th scope="col" class="align-middle" width="17%">
										<p data-i18n="schedule.sala_1"></p>
									</th>
									<th scope="col" class="align-middle" width="17%">											
										<p data-i18n="schedule.sala_2"></p
									</th>
									<th scope="col" class="align-middle" width="17%">
										<p data-i18n="schedule.sala_3"></p>
									</th>
									<th scope="col" class="align-middle" width="17%">
										<p data-i18n="schedule.sala_4"></p>
									</th>
									<th scope="col" class="align-middle" width="17%">
										<p data-i18n="schedule.sala_5"></p>
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="align-middle"><i class="fa fa-clock-o"></i></td>
									<td class="align-middle" style="text-align: left"><span style="margin-left: -10px" class="time">09:00-10:30</span></td>
									<td colspan="5">
										<a href="sessao.php?id=sblp-palestra">
											<span data-i18n="schedule.palestra"></span> - <span data-i18n="events.sblp"></span><br/>
											<?php $keynote = getKeynote('philip'); ?>
											<span style="font-style: italic; font-size: 15px"><?php echo $keynote->title;?></span><br/>
											<span style="font-size: 13px"><?php echo "$keynote->name ($keynote->institution)"; ?></span>
										</a>
									</td>
								</tr>
								<tr>
									<td><i class="fa fa-clock-o"></i></td>
									<td style="text-align: left"><span style="margin-left: -10px" class="time">10:30-10:45</span></td></td>
									<td colspan="5"><a href="#" data-i18n="schedule.intervalo"></a></td>
								</tr>
								<tr>
									<td><i class="fa fa-clock-o"></i></td>
									<td style="text-align: left"><span style="margin-left: -10px" class="time">10:45-12:15</span></td></td>
									<td><a href="sessao.php?id=sbcars-4" data-i18n="events.sbcars"></a></td>
									<td><a href="sessao.php?id=sast-1" data-i18n="events.sast"></a></td>
									<td><a href="sessao.php?id=trilha-industria-1" data-i18n="events.trilha-industria"></a></td>
									<td>SBLP</td>
									<td><a href="sessao.php?id=ctd-es-1" data-i18n="events.ctd-es"></a></td>
								</tr>
								<tr>
									<td><i class="fa fa-clock-o"></i></td>
									<td style="text-align: left"><span style="margin-left: -10px" class="time">12:15-14:00</span></td></td>
									<td colspan="5"><a href="#" data-i18n="schedule.intervalo"></a></td>
								</tr>
								<tr>
									<td><i class="fa fa-clock-o"></i></td>
									<td style="text-align: left"><span style="margin-left: -10px" class="time">14:00-15:30</span></td></td>
									<td colspan="5">
										<a href="sessao.php?id=trilha-industria-palestra">
											<span data-i18n="schedule.palestra"></span> - <span data-i18n="events.trilha-industria"></span><br/>
											<?php $keynote = getKeynote('davi'); ?>
											<span style="font-style: italic; font-size: 15px"><?php echo $keynote->title;?></span><br/>
											<span style="font-size: 13px"><?php echo "$keynote->name ($keynote->institution)"; ?></span>
										</a>
									</td>
								</tr>
								<tr>
									<td><i class="fa fa-clock-o"></i></td>
									<td style="text-align: left"><span style="margin-left: -10px" class="time">15:30-15:45</span></td></td>
									<td colspan="5"><a href="#" data-i18n="schedule.intervalo"></a></td>
								</tr>
								<tr>
									<td class="align-middle"><i class="fa fa-clock-o"></i></td>
									<td class="align-middle" style="text-align: left"><span style="margin-left: -10px" class="time">15:45-17:15</span></td></td>
									<td>
										<a href="sessao.php?id=sbcars-5">
											<span data-i18n="events.sbcars"></span><br/>
											<span style="font-size: 15px; line-height: 0px" data-i18n="schedule.reuniao_steering"></span>
										</a>
									</td>
									<td><a href="sessao.php?id=sast-2" data-i18n="events.sast"></a></td>
									<td>
										<a href="sessao.php?id=trilha-industria-2">
											<span data-i18n="events.trilha-industria"></span><br/>
											<span data-i18n="schedule.painel"></span>
										</a>
									</td>
									<td><a href="sessao.php?id=ctic-es-1" data-i18n="events.ctic-es"></a></td>
									<td><a href="sessao.php?id=ctd-es-2" data-i18n="events.ctd-es"></a></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="tab-pane fade schedule-item" id="oct21">
						<table class="table table-hover" id="program-table" style="background-color: white">
							<thead style="background-color: #f4b321; color: white">
								<tr>
									<th scope="col" class="align-middle"></th>
									<th scope="col" class="align-middle" width="15%">
										<p style="text-align: left; margin-left: -10px" data-i18n="schedule.horario"></p>
									</th>
									<th scope="col" class="align-middle" width="17%">
										<p data-i18n="schedule.sala_1"></p>
									</th>
									<th scope="col" class="align-middle" width="17%">											
										<p data-i18n="schedule.sala_2"></p
									</th>
									<th scope="col" class="align-middle" width="17%">
										<p data-i18n="schedule.sala_3"></p>
									</th>
									<th scope="col" class="align-middle" width="17%">
										<p data-i18n="schedule.sala_4"></p>
									</th>
									<th scope="col" class="align-middle" width="17%">
										<p data-i18n="schedule.sala_5"></p>
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="align-middle"><i class="fa fa-clock-o"></i></td>
									<td class="align-middle" style="text-align: left"><span style="margin-left: -10px" class="time">09:00-10:30</span></td>
									<td colspan="5">
										<a href="sessao.php?id=sbes-palestra-1">
											<span data-i18n="schedule.palestra"></span> - <span data-i18n="events.sbes"></span><br/>
											<?php $keynote = getKeynote('alexander'); ?>
											<span style="font-style: italic; font-size: 15px"><?php echo $keynote->title;?></span><br/>
											<span style="font-size: 13px"><?php echo "$keynote->name ($keynote->institution)"; ?></span>
										</a>
									</td>
								</tr>
								<tr>
									<td><i class="fa fa-clock-o"></i></td>
									<td style="text-align: left"><span style="margin-left: -10px" class="time">10:30-10:45</span></td>
									<td colspan="5"><a href="#" data-i18n="schedule.intervalo"></a></td>
								</tr>
								<tr>
									<td><i class="fa fa-clock-o"></i></td>
									<td style="text-align: left"><span style="margin-left: -10px" class="time">10:45-12:15</span></td>
									<td><a href="sessao.php?id=sast-3" data-i18n="events.sast"></a></td>
									<td><a href="sessao.php?id=sbes-1a" data-i18n="events.sbes"></a></td>
									<td><a href="sessao.php?id=sbes-1b" data-i18n="events.sbes"></a></td>
									<td><a href="sessao.php?id=sbes-1c" data-i18n="events.sbes"></a></td>
									<td>&ndash;</td>
								</tr>
								<tr>
									<td><i class="fa fa-clock-o"></i></td>
									<td style="text-align: left"><span style="margin-left: -10px" class="time">12:15-14:00</span></td>
									<td colspan="5"><a href="#" data-i18n="schedule.intervalo"></a></td>
								</tr>
								<tr>
									<td><i class="fa fa-clock-o"></i></td>
									<td style="text-align: left"><span style="margin-left: -10px" class="time">14:00-15:30</span></td>
									<td><a href="sessao.php?id=sast-4" data-i18n="events.sast"></a></td>
									<td><a href="sessao.php?id=sbes-2a" data-i18n="events.sbes"></a></td>
									<td><a href="sessao.php?id=sbes-2b" data-i18n="events.sbes"></a></td>
									<td><a href="sessao.php?id=sbes-2c" data-i18n="events.sbes"></a></td>
									<td>&ndash;</td>
								</tr>
								<tr>
									<td><i class="fa fa-clock-o"></i></td>
									<td style="text-align: left"><span style="margin-left: -10px" class="time">15:30-15:45</span></td>
									<td colspan="5"><a href="#" data-i18n="schedule.intervalo"></a></td>
								</tr>
								<tr>
									<td class="align-middle"><i class="fa fa-clock-o"></i></td>
									<td class="align-middle" style="text-align: left"><span style="margin-left: -10px" class="time">15:45-17:15</span></td>
									<td colspan="5">
										<a href="sessao.php?id=sast-palestra">
											<span data-i18n="schedule.palestra"></span> - <span data-i18n="events.sast"></span><br/>
											<?php $keynote = getKeynote('baishakhi'); ?>
											<span style="font-style: italic; font-size: 15px"><?php echo $keynote->title;?></span><br/>
											<span style="font-size: 13px"><?php echo "$keynote->name ($keynote->institution)"; ?></span>
										</a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="tab-pane fade schedule-item" id="oct22">
						<table class="table table-hover" id="program-table" style="background-color: white">
							<thead style="background-color: #f4b321; color: white">
								<tr>
									<th scope="col" class="align-middle"></th>
									<th scope="col" class="align-middle" width="15%">
										<p style="text-align: left; margin-left: -10px" data-i18n="schedule.horario"></p>
									</th>
									<th scope="col" class="align-middle" width="17%">
										<p data-i18n="schedule.sala_1"></p>
									</th>
									<th scope="col" class="align-middle" width="17%">											
										<p data-i18n="schedule.sala_2"></p
									</th>
									<th scope="col" class="align-middle" width="17%">
										<p data-i18n="schedule.sala_3"></p>
									</th>
									<th scope="col" class="align-middle" width="17%">
										<p data-i18n="schedule.sala_4"></p>
									</th>
									<th scope="col" class="align-middle" width="17%">
										<p data-i18n="schedule.sala_5"></p>
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="align-middle"><i class="fa fa-clock-o"></i></td>
									<td class="align-middle" style="text-align: left"><span style="margin-left: -10px" class="time">09:00-10:30</span></td>
									<td colspan="5">
										<a href="sessao.php?id=sbes-palestra-2">
											<span data-i18n="schedule.palestra"></span> - <span data-i18n="events.sbes"></span><br/>
											<?php $keynote = getKeynote('ana-regina'); ?>
											<span style="font-style: italic; font-size: 15px"><?php echo $keynote->title;?></span><br/>
											<span style="font-size: 13px"><?php echo "$keynote->name ($keynote->institution)"; ?></span>
										</a>
									</td>
								</tr>
								<tr>
									<td><i class="fa fa-clock-o"></i></td>
									<td style="text-align: left"><span style="margin-left: -10px" class="time">10:30-10:45</span></td>
									<td colspan="5"><a href="#" data-i18n="schedule.intervalo"></a></td>
								</tr>
								<tr>
									<td><i class="fa fa-clock-o"></i></td>
									<td style="text-align: left"><span style="margin-left: -10px" class="time">10:45-12:15</span></td>
									<td><a href="sessao.php?id=sbes-3a" data-i18n="events.sbes"></a></td>
									<td><a href="sessao.php?id=sbes-3b" data-i18n="events.sbes"></a></td>
									<td><a href="sessao.php?id=sbes-3c" data-i18n="events.sbes"></a></td>
									<td>&ndash;</td>
									<td>&ndash;</td>
								</tr>
								<tr>
									<td><i class="fa fa-clock-o"></i></td>
									<td style="text-align: left"><span style="margin-left: -10px" class="time">12:15-14:00</span></td>
									<td colspan="5"><a href="#" data-i18n="schedule.intervalo"></a></td>
								</tr>
								<tr>
									<td><i class="fa fa-clock-o"></i></td>
									<td style="text-align: left"><span style="margin-left: -10px" class="time">14:00-15:30</span></td>
									<td colspan="5">
										<a href="sessao.php?id=painel-cbsoft">
											<span data-i18n="schedule.painel"></span> - <span data-i18n="events.cbsoft"></span>
										</a>
									</td>
								</tr>
								<tr>
									<td><i class="fa fa-clock-o"></i></td>
									<td style="text-align: left"><span style="margin-left: -10px" class="time">15:30-15:45</span></td>
									<td colspan="5"><a href="#" data-i18n="schedule.intervalo"></a></td>
								</tr>
								<tr>
									<td><i class="fa fa-clock-o"></i></td>
									<td style="text-align: left"><span style="margin-left: -10px" class="time">15:45-17:15</span></td>
									<td><a href="sessao.php?id=sbes-4a" data-i18n="events.sbes"></a></td>
									<td><a href="sessao.php?id=sbes-4b" data-i18n="events.sbes"></a></td>
									<td><a href="sessao.php?id=sbes-4c" data-i18n="events.sbes"></a></td>
									<td>&ndash;</td>
									<td>&ndash;</td>
								</tr>
								<tr>
									<td><i class="fa fa-clock-o"></i></td>
									<td style="text-align: left"><span style="margin-left: -10px" class="time">17:15-19:00</span></td>
									<td colspan="5"><a href="#" data-i18n="schedule.intervalo"></a></td>
								</tr>
								<tr>
									<td><i class="fa fa-clock-o"></i></td>
									<td style="text-align: left"><span style="margin-left: -10px" class="time">19:00-20:30</span></td>
									<td colspan="5"><a href="sessao.php?id=assembleia-cees" data-i18n="schedule.assembleia"></a></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="tab-pane fade schedule-item" id="oct23">
						<table class="table table-hover" id="program-table" style="background-color: white">
							<thead style="background-color: #f4b321; color: white">
								<tr>
									<th scope="col" class="align-middle"></th>
									<th scope="col" class="align-middle" width="15%">
										<p style="text-align: left; margin-left: -10px" data-i18n="schedule.horario"></p>
									</th>
									<th scope="col" class="align-middle" width="17%">
										<p data-i18n="schedule.sala_1"></p>
									</th>
									<th scope="col" class="align-middle" width="17%">											
										<p data-i18n="schedule.sala_2"></p
									</th>
									<th scope="col" class="align-middle" width="17%">
										<p data-i18n="schedule.sala_3"></p>
									</th>
									<th scope="col" class="align-middle" width="17%">
										<p data-i18n="schedule.sala_4"></p>
									</th>
									<th scope="col" class="align-middle" width="17%">
										<p data-i18n="schedule.sala_5"></p>
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="align-middle"><i class="fa fa-clock-o"></i></td>
									<td class="align-middle" style="text-align: left"><span style="margin-left: -10px" class="time">09:00-10:30</span></td>
									<td colspan="5">
										<a href="sessao.php?id=sbes-palestra-3">
											<span data-i18n="schedule.palestra"></span> - <span data-i18n="events.sbes"></span><br/>
											<?php $keynote = getKeynote('paulo'); ?>
											<span style="font-style: italic; font-size: 15px"><?php echo $keynote->title;?></span><br/>
											<span style="font-size: 13px"><?php echo "$keynote->name ($keynote->institution)"; ?></span>
										</a>
									</td>
								</tr>
								<tr>
									<td><i class="fa fa-clock-o"></i></td>
									<td style="text-align: left"><span style="margin-left: -10px" class="time">10:30-10:45</span></td>
									<td colspan="5"><a href="#" data-i18n="schedule.intervalo"></a></td>
								</tr>
								<tr>
									<td><i class="fa fa-clock-o"></i></td>
									<td style="text-align: left"><span style="margin-left: -10px" class="time">10:45-12:15</span></td>
									<td><a href="sessao.php?id=sbes-5a" data-i18n="events.sbes"></a></td>
									<td><a href="sessao.php?id=sbes-5b" data-i18n="events.sbes"></a></td>
									<td><a href="sessao.php?id=sbes-5c" data-i18n="events.sbes"></a></td>
									<td>&ndash;</td>
									<td>&ndash;</td>
								</tr>
								<tr>
									<td><i class="fa fa-clock-o"></i></td>
									<td style="text-align: left"><span style="margin-left: -10px" class="time">12:15-14:00</span></td>
									<td colspan="5"><a href="#" data-i18n="schedule.intervalo"></a></td>
								</tr>
								<tr>
									<td><i class="fa fa-clock-o"></i></td>
									<td style="text-align: left"><span style="margin-left: -10px" class="time">14:00-15:30</span></td>
									<td><a href="sessao.php?id=sbes-6a" data-i18n="events.sbes"></a></td>
									<td><a href="sessao.php?id=sbes-6b" data-i18n="events.sbes"></a></td>
									<td><a href="sessao.php?id=sbes-6c" data-i18n="events.sbes"></a></td>
									<td>&ndash;</td>
									<td>&ndash;</td>
								</tr>
								<tr>
									<td><i class="fa fa-clock-o"></i></td>
									<td style="text-align: left"><span style="margin-left: -10px" class="time">15:30-15:45</span></td>
									<td colspan="5"><a href="#" data-i18n="schedule.intervalo"></a></td>
								</tr>
								<tr>
									<td><i class="fa fa-clock-o"></i></td>
									<td style="text-align: left"><span style="margin-left: -10px" class="time">15:45-17:15</span></td>
									<td colspan="5">
										<a href="sessao.php?id=closing">
											<span data-i18n="schedule.closing_award"></span> - <span data-i18n="events.cbsoft"></span>
										</a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ====  End of Schedule  ==== -->


<!--============================
=            Footer            =
=============================-->

<?php 
	include_once ("footer.php");
?>
</body>

</html>



