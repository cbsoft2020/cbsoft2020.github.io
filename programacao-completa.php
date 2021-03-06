<?php
	include_once("plugins/functions.php");

	function printSessions($sessions) {
		$sbes_tracks = array(
			"sbes-pesquisa" => "trilha_pesquisa",
			"sbes-ideias" => "trilha_ideias",
			"sbes-educacao" => "trilha_educacao",
			"sbes-ferramentas" => "trilha_ferramentas",
		);
		
		$currentEvent = null;
        foreach($sessions as $session) {
            if (strcmp($session->id_event, $currentEvent) != 0) {
                echo '<table class="table table-hover" id="program-table" style="background-color: white">
                        <thead style="background-color: #f4b321; color: white">
                            <tr>
                                <th scope="col" colspan="2" class="align-middle">
                                    <span data-i18n="events.'.$session->id_event.'"></span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>';
                $currentEvent = $session->id_event;
            }
            if (strcmp($session->type, "general") == 0 && strcmp($session->id_event, $currentEvent) == 0) {
                echo '<tr><td width="15%" style="text-align: left">
                          <i style="margin-right: 10px" class="fa fa-clock-o"></i><span class="time">'.$session->time.'</span>
                          </td>
                          <td style="text-align: left"><span data-i18n="schedule.'.$session->title_id.'"></span><br/>
                          <i class="fa fa-map-marker"></i>
                          <span style="font-size: 14px" data-i18n="schedule.'.$session->room_id.'"></span>
                      </td></tr>';
            } else if (strcmp($session->type, "technical-session") == 0) {
                echo '<tr><td width="15%" style="text-align: left">
                          <i style="margin-right: 10px" class="fa fa-clock-o"></i><span class="time">'.$session->time.'</span>
                          </td>
                          <td style="text-align: left"><span data-i18n="schedule.'.$session->id.'"></span><br/>
                          <i style="margin-bottom: 15px" class="fa fa-map-marker"></i>
                          <span style="font-size: 14px" data-i18n="schedule.'.$session->room_id.'"></span>';
				echo '<ul id="papers-list" style="margin-left: -25px; list-style: none">';
                for ($i=0; $i < count($session->papers); $i++) {
                    $evento = substr($session->id, 0, strrpos($session->id, '-'));
                    $paper = getPaper($evento, $session->papers[$i]);
					echo '<li class="paper-li">'.$paper->title.'<br/>';
                    if (strcmp($evento, "sbes") == 0) {
                        echo '<span style="font-style:italic; font-size: 14px" data-i18n="sbes.'.$sbes_tracks[$paper->id_event].'"></span>';
                        if (strcmp($paper->category, "short") == 0) {
                            echo ', <span style="font-style:italic; font-size: 14px" data-i18n="schedule.short_paper"></span>';
                        }
						echo '<br/>';
                    }
                    if (isset($paper->authors)) {
                        echo '<span style="font-size: 14px">'.$paper->authors.'</span>';
                    } else if (isset($paper->author) && isset($paper->advisors)) {
                        echo '<span style="font-size: 14px">'.$paper->author.', '.$paper->advisors.'</span>';
                    }
					echo '</li>';
                }
                echo '</ul></td></tr>';
            } else if (strcmp($session->type, "keynote") == 0) {
                $keynote = getKeynote($session->speaker_id);
                echo '<tr>
                      <td width="15%" style="text-align: left">
                      <i style="margin-right: 10px" class="fa fa-clock-o"></i><span class="time">'.$session->time.'</span>
                      </td>
                      <td style="text-align: left">
                      <span data-i18n="schedule.palestra"></span>:
                      <span style="font-style: italic">'.$keynote->title.'</span><br/>
                      <span style="font-size: 15px">'.$keynote->name.' ('.$keynote->institution.')</span><br/>
                      <i class="fa fa-map-marker"></i>
                      <span style="font-size: 13px" data-i18n="schedule.'.$session->room_id.'"></span>
                      </td>
                      </tr>';
            } else if (strcmp($session->type, "panel") == 0) {
				$panelists = getPanelists($session);
				echo '<tr>
                      <td width="15%" style="text-align: left">
                      <i style="margin-right: 10px" class="fa fa-clock-o"></i><span class="time">'.$session->time.'</span>
                      </td>
                      <td style="text-align: left">
                      <span data-i18n="schedule.painel"></span>:
                      <span style="font-style: italic">'.$session->title.'</span><br/>
					  <i style="margin-bottom: 15px" class="fa fa-map-marker"></i>
					  <span style="font-size: 13px" data-i18n="schedule.'.$session->room_id.'"></span><br/>';
				if ($panelists[0] != null) {
					echo '<span data-i18n="schedule.moderador"></span>: '.$panelists[0]->name.' ('.$panelists[0]->institution.')<br/>';
				}
				echo '<span data-i18n="schedule.painelistas"></span>:';
				echo '<ul id="papers-list" style="margin-left: -25px; list-style: none">';
				for ($i=1; $i < count($panelists); $i++) {
					echo '<li class="paper-li">'.$panelists[$i]->name.' ('.$panelists[$i]->institution.')</li>';
				}
				echo '</ul>';
                echo'</td></tr>';
			}
        }
        echo '</tbody></table>';
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
				<div class="section-title" style="margin-top: 50px">
					<h3 data-i18n="menu.programacao"></h3>
				</div>
					
				<div class="description-one" style="margin-top: 40px">
					<p style="text-align: center" data-i18n="schedule.info"></p><br/>
					<p style="text-align: center" data-i18n="schedule.calendar"></p>
				</div>
			</div>
		</div>
		<br/>
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
				<div class="schedule-contents">
					<div class="tab-content" id="pills-tabContent">
						<div class="table-responsive tab-pane fade show active schedule-item" id="oct19">
							<?php 
								$sessions = getSessions('dia_1');
								printSessions($sessions);
							?>
						</div>
						<div class="table-responsive tab-pane fade schedule-item" id="oct20">
							<?php 
								$sessions = getSessions('dia_2');
								printSessions($sessions);
							?>
						</div>
						<div class="table-responsive tab-pane fade schedule-item" id="oct21">
							<?php 
								$sessions = getSessions('dia_3');
								printSessions($sessions);
							?>
						</div>
						<div class="table-responsive tab-pane fade schedule-item" id="oct22">
							<?php 
								$sessions = getSessions('dia_4');
								printSessions($sessions);
							?>
						</div>
						<div class="table-responsive tab-pane fade schedule-item" id="oct23">
							<?php 
								$sessions = getSessions('dia_5');
								printSessions($sessions);
							?>
						</div>
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



