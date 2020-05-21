<!DOCTYPE html>
<html lang="en">
<!-- HEAD -->
<?php 
	include_once ("header.php");
?>

<body class="body-wrapper">


<!--========================================
=            Navigation Section and Banner         =
=========================================-->

<?php 
	include_once ("menu.php");
?>

<!--====  End of Navigation Section and Banner====-->

<section class="section about">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 align-self-center">
				<div class="content-block">
                    <h2 style="line-height: 50px" data-i18n="workshops.titulo"></h2>
                    <div class="description-one">
						<p data-i18n="workshops.descricao_1"></p>
					</div>
					
					<div class="table-responsive" style="margin-top: 30px">
						<table class="table table-hover">
							<thead style="background-color: #f4b321; color: white">
								<tr>
								  	<th scope="col" class="align-middle" width="25%">
										<p style="color: white;">Workshop</p>
									</th>
								  	<th scope="col" class="align-middle">
										<p data-i18n="workshops.deadlines_atividades.0" style="color: white;"></p>
									</th>
									<th scope="col" class="align-middle">
										<p data-i18n="workshops.deadlines_atividades.1" style="color: white;"></p>
									</th>
									<th scope="col" class="align-middle">
										<p data-i18n="workshops.deadlines_atividades.2" style="color: white;"></p>
									</th>
									<th scope="col" class="align-middle">
										<p data-i18n="workshops.deadlines_atividades.3" style="color: white;"></p>
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<a href="https://ww2.inf.ufg.br/mssis/" target="_blank">
											<p data-i18n="workshops.mssis" style="color: #f4b321"></p>
										</a>
										<br/><p style="margin-top: -20px; color: black" data-i18n="workshops.mssis_nome"></p>
									</td>
									<td>
										<p style="color: black" data-i18n="workshops.deadlines_mssis.0"></p>
									</td>
									<td>
										<p style="color: black" data-i18n="workshops.deadlines_mssis.1"></p>
									</td>
									<td>
										<p style="color: black" data-i18n="workshops.deadlines_mssis.2"></p>
									</td>
									<td>
										<p style="color: black" data-i18n="workshops.tba"></p>
									</td>
								</tr>
								<tr>
									<td>
										<a href="https://vem2020.github.io/vem2020/" target="_blank">
											<p data-i18n="workshops.vem" style="color: #f4b321"></p>
										</a>
										<br/><p style="margin-top: -20px; color: black" data-i18n="workshops.vem_nome"></p>
									</td>
									<td>
										<p style="color: black" data-i18n="workshops.tba"></p>
									</td>
									<td>
										<p style="color: black" data-i18n="workshops.tba"></p>
									</td>
									<td>
										<p style="color: black" data-i18n="workshops.tba"></p>
									</td>
									<td>
										<p style="color: black" data-i18n="workshops.tba"></p>
									</td>
								</tr>
							</tbody>
						</table>
					</div>

					<!--
					<h5 data-i18n="workshops.secao_informacoes"></h5>
					<div class="description-one">
						<p data-i18n="workshops.descricao_2"></p>
						<ol style="margin-top: 10px">
							<li data-i18n="workshops.criterios.0" style="color: black;"></li>
                            <li data-i18n="workshops.criterios.1" style="color: black;"></li>
                            <li data-i18n="workshops.criterios.2" style="color: black;"></li>
							<li data-i18n="workshops.criterios.3" style="color: black;"></li>
						</ol>
						<p style="margin-bottom: 10px" data-i18n="workshops.descricao_3"></p>
						<p data-i18n="workshops.descricao_4"></p>
					</div>
					
					<br/>
					<h5 data-i18n="workshops.secao_submissao"></h5>
					<div class="description-one">
						<p data-i18n="workshops.descricao_5"></p>
						<p data-i18n="workshops.descricao_6"></p>
						<ol style="margin-top: 10px">
							<li data-i18n="workshops.informacoes_workshop.0" style="color: black;"></li>
                            <li data-i18n="workshops.informacoes_workshop.1" style="color: black;"></li>
                            <li data-i18n="workshops.informacoes_workshop.2" style="color: black;"></li>
							<li data-i18n="workshops.informacoes_workshop.3" style="color: black;"></li>
							<li data-i18n="workshops.informacoes_workshop.4" style="color: black;"></li>
							<li data-i18n="workshops.informacoes_workshop.5" style="color: black;"></li>
							<li data-i18n="workshops.informacoes_workshop.6" style="color: black;"></li>
							<li data-i18n="workshops.informacoes_workshop.7" style="color: black;"></li>
							<li data-i18n="workshops.informacoes_workshop.8" style="color: black;"></li>
							<li data-i18n="workshops.informacoes_workshop.9" style="color: black;"></li>
						</ol>
					</div>
					
					<br/>
					<h5 data-i18n="workshops.secao_workshop_pre"></h5>
					<div class="description-one">
						<p data-i18n="workshops.descricao_7"></p>
						<ol style="margin-top: 10px">
							<li data-i18n="workshops.informacoes_workshop_pre.0" style="color: black;"></li>
                            <li data-i18n="workshops.informacoes_workshop_pre.1" style="color: black;"></li>
                            <li data-i18n="workshops.informacoes_workshop_pre.2" style="color: black;"></li>
							<li data-i18n="workshops.informacoes_workshop_pre.3" style="color: black;"></li>
						</ol>
						<p data-i18n="workshops.descricao_8"></p>
					</div>
					
					<br/>
					<h5 data-i18n="workshops.secao_deadlines"></h5>
					<div class="description-one">
						<ul style="margin-left: -20px">
							<li data-i18n="workshops.deadlines.0" style="color: black;"></li>
                            <li data-i18n="workshops.deadlines.1" style="color: black;"></li>
                            <li data-i18n="workshops.deadlines.2" style="color: black;"></li>
						</ul>
					</div>
					
					<br/>
					<h5 data-i18n="workshops.secao_comite"></h5>
					<div class="description-one">
						<ul style="margin-left: -20px">
							<li data-i18n="workshops.comite.0" style="color: black;"></li>
                            <li data-i18n="workshops.comite.1" style="color: black;"></li>
                            <li data-i18n="workshops.comite.2" style="color: black;"></li>
							<li data-i18n="workshops.comite.3" style="color: black;"></li>
						</ul>
					</div>
					-->
					
					<br/>
					<h5 data-i18n="workshops.secao_contato"></h5>
					<div class="description-one">
						<p data-i18n="workshops.descricao_9"></p>
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