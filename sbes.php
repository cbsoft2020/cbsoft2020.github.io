<!DOCTYPE html>
<html lang="en">
<!-- HEAD -->
<?php 
	include_once ("header.php");
	
	// $file = "conteudo/topicos.json";
    // $info = file_get_contents($file);
    // $data = json_decode($info);
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
                    <h2 style="line-height: 50px" data-i18n="sbes.titulo"></h2>
                    <div class="description-one">
						<p data-i18n="sbes.descricao_1"></p>
					</div>
					
					<br/>
					<h5 data-i18n="sbes.secao_trilhas"></h5>
					<div class="description-one">
						<p data-i18n="sbes.descricao_2"></p>
						<ol style="margin-top: 10px">
							<li data-i18n="sbes.trilhas.0" style="color: black; font-size: 1rem; line-height: 26px;"></li>
                            <li data-i18n="sbes.trilhas.1" style="color: black; font-size: 1rem; line-height: 26px;"></li>
                            <li data-i18n="sbes.trilhas.2" style="color: black; font-size: 1rem; line-height: 26px;"></li>
							<li data-i18n="sbes.trilhas.3" style="color: black; font-size: 1rem; line-height: 26px;"></li>
						</ol>
						<p data-i18n="sbes.descricao_3"></p>
						<ul style="margin-top: 10px; margin-left: -20px">
							<li>
								<a href="sbes-pesquisa.php"><span style="color: #f4b321" data-i18n="sbes.trilha_pesquisa"></span></a>
							</li>
							<li>
								<a href="sbes-ideias.php"><span style="color: #f4b321" data-i18n="sbes.trilha_ideias"></span></a>
							</li>
							<li>
								<a href="sbes-educacao.php"><span style="color: #f4b321" data-i18n="sbes.trilha_educacao"></span></a>
							</li>
							<li>
								<a href="sbes-ferramentas.php"><span style="color: #f4b321" data-i18n="sbes.trilha_ferramentas"></span></a>
							</li>
						</ul>
					</div>
					
					<br/>
					<h5 data-i18n="sbes.secao_datas"></h5>
					<div class="table-responsive" style="margin-top: 30px">
						<table class="table table-hover" id="datas-sbes">
							<thead style="background-color: #f4b321; color: white">
								<tr>
								  	<th scope="col" class="align-middle" width="18.5%">
										<p data-i18n="sbes.trilha" style="color: white;"></p>
									</th>
								  	<th scope="col" class="align-middle" width="21%">
										<p data-i18n="sbes.trilha_pesquisa_short" style="color: white;"></p>
									</th>
								  	<th scope="col" class="align-middle" width="20%">
										<p data-i18n="sbes.trilha_ideias_short" style="color: white;"></p>
									</th>
								  	<th scope="col" class="align-middle" width="20%">
										<p data-i18n="sbes.trilha_educacao_short" style="color: white;"></p>
									</th>
									<th scope="col" class="align-middle" width="20%">
										<p data-i18n="sbes.trilha_ferramentas_short" style="color: white;"></p>
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><p data-i18n="sbes.deadlines_atividades.0" style="color: black;"></p></td>
									<td><p data-i18n="sbes.deadlines_pesquisa.0" style="color: black;"></p></td>
									<td><p data-i18n="sbes.deadlines_ideias.0" style="color: black;"></p></td>
									<td><p data-i18n="sbes.deadlines_educacao.0" style="color: black;"></p></td>
									<td><p data-i18n="sbes.deadlines_ferramentas.0" style="color: black;"></p></td>
								</tr>
								<tr>
									<td><p data-i18n="sbes.deadlines_atividades.1" style="color: black;"></p></td>
									<td><p data-i18n="sbes.deadlines_pesquisa.1" style="color: black;"></p></td>
									<td><p data-i18n="sbes.deadlines_ideias.1" style="color: black;"></p></td>
									<td><p data-i18n="sbes.deadlines_educacao.1" style="color: black;"></p></td>
									<td><p data-i18n="sbes.deadlines_ferramentas.1" style="color: black;"></p></td>
								</tr>
								<tr>
									<td><p data-i18n="sbes.deadlines_atividades.2" style="color: black;"></p></td>
									<td><p data-i18n="sbes.deadlines_pesquisa.2" style="color: black;"></p></td>
									<td><p data-i18n="sbes.deadlines_ideias.2" style="color: black;"></p></td>
									<td><p data-i18n="sbes.deadlines_educacao.2" style="color: black;"></p></td>
									<td><p data-i18n="sbes.deadlines_ferramentas.2" style="color: black;"></p></td>
								</tr>
								<tr>
									<td><p data-i18n="sbes.deadlines_atividades.3" style="color: black;"></p></td>
									<td><p data-i18n="sbes.deadlines_pesquisa.3" style="color: black;"></p></td>
									<td><p data-i18n="sbes.deadlines_ideias.3" style="color: black;"></p></td>
									<td><p data-i18n="sbes.deadlines_educacao.3" style="color: black;"></p></td>
									<td><p data-i18n="sbes.deadlines_ferramentas.3" style="color: black;"></p></td>
								</tr>
								<tr>
									<td><p data-i18n="sbes.deadlines_atividades.4" style="color: black;"></p></td>
									<td><p data-i18n="sbes.deadlines_pesquisa.4" style="color: black;"></p></td>
									<td><p data-i18n="sbes.deadlines_ideias.4" style="color: black;"></p></td>
									<td><p data-i18n="sbes.deadlines_educacao.4" style="color: black;"></p></td>
									<td><p data-i18n="sbes.deadlines_ferramentas.4" style="color: black;"></p></td>
								</tr>
							</tbody>
						</table>
					</div>
					
					<!--
                    <div class="description-one">
						<strong><p data-i18n="sbes.trilha_pesquisa"></p></strong>
						<ul style="margin-left: -20px">
							<li data-i18n="sbes.deadlines_pesquisa.0" style="color: black;"></li>
                            <li data-i18n="sbes.deadlines_pesquisa.1" style="color: black;"></li>
                            <li data-i18n="sbes.deadlines_pesquisa.2" style="color: black;"></li>
							<li data-i18n="sbes.deadlines_pesquisa.3" style="color: black;"></li>
							<li data-i18n="sbes.deadlines_pesquisa.4" style="color: black;"></li>
						</ul>
					</div>
					
					<div class="description-one">
						<strong><p data-i18n="sbes.trilha_ideias"></p></strong>
						<ul style="margin-left: -20px">
							<li data-i18n="sbes.deadlines_ideias.0" style="color: black;"></li>
                            <li data-i18n="sbes.deadlines_ideias.1" style="color: black;"></li>
                            <li data-i18n="sbes.deadlines_ideias.2" style="color: black;"></li>
							<li data-i18n="sbes.deadlines_ideias.3" style="color: black;"></li>
							<li data-i18n="sbes.deadlines_ideias.4" style="color: black;"></li>
						</ul>
					</div>
					
					<div class="description-one">
						<strong><p data-i18n="sbes.trilha_educacao"></p></strong>
						<ul style="margin-left: -20px">
							<li data-i18n="sbes.deadlines_educacao.0" style="color: black;"></li>
                            <li data-i18n="sbes.deadlines_educacao.1" style="color: black;"></li>
                            <li data-i18n="sbes.deadlines_educacao.2" style="color: black;"></li>
							<li data-i18n="sbes.deadlines_educacao.3" style="color: black;"></li>
							<li data-i18n="sbes.deadlines_educacao.4" style="color: black;"></li>
						</ul>
					</div>
					
					<div class="description-one">
						<strong><p data-i18n="sbes.trilha_ferramentas"></p></strong>
						<ul style="margin-left: -20px">
							<li data-i18n="sbes.deadlines_ferramentas.0" style="color: black;"></li>
                            <li data-i18n="sbes.deadlines_ferramentas.1" style="color: black;"></li>
                            <li data-i18n="sbes.deadlines_ferramentas.2" style="color: black;"></li>
							<li data-i18n="sbes.deadlines_ferramentas.3" style="color: black;"></li>
							<li data-i18n="sbes.deadlines_ferramentas.4" style="color: black;"></li>
						</ul>
					</div>
					-->
					
					<!--
					<br/>
					<h5 data-i18n="sbes.secao_journal_first"></h5>
					<div class="description-one">
						<p data-i18n="sbes.descricao_5"></p>
						<ul style="margin-top: 10px; margin-left: -20px">
							<li data-i18n="sbes.criterios_journal_first.0" style="color: black;"></li>
                            <li data-i18n="sbes.criterios_journal_first.1" style="color: black;"></li>
                            <li data-i18n="sbes.criterios_journal_first.2" style="color: black;"></li>
						</ul>
						<p style="margin-bottom: 10px" data-i18n="sbes.descricao_6"></p>
						<p style="margin-bottom: 10px" data-i18n="sbes.descricao_7"></p>
						<p data-i18n="sbes.descricao_8"></p>
					</div>
					
					<br/>
					<h5 data-i18n="sbes.secao_shortpapers"></h5>
					<div class="description-one">
						<p style="margin-bottom: 10px" data-i18n="sbes.descricao_9"></p>
						<p data-i18n="sbes.descricao_10"></p>
					</div>
					
					<br/>
					<h5 data-i18n="sbes.secao_bestpaper"></h5>
					<div class="description-one">
						<p data-i18n="sbes.descricao_11"></p>
					</div>
					
					<br/>
					<h5 data-i18n="sbes.secao_bestreviewer"></h5>
					<div class="description-one">
						<p data-i18n="sbes.descricao_12"></p>
					</div>
					
					<br/>
					<h5 data-i18n="sbes.secao_topicos"></h5>
					<div class="description-one">
						<p data-i18n="sbes.descricao_13"></p>
						<ul style="margin-left: -20px">
							<?php for ($i=0; $i < count($data->topicos_sbes_pt); $i++) { ?>
								<li data-i18n="sbes.topicos_sbes.<?php echo $i; ?>" style="color: black;"></li>
							<?php }	// for ?>
						</ul>
					</div>
					
					<br/>
					<h5 data-i18n="sbes.secao_categorias"></h5>
					<div class="description-one">
						<p style="margin-bottom: 10px" data-i18n="sbes.descricao_14"></p>
						<p style="margin-bottom: 10px" data-i18n="sbes.categorias.0"></p>
						<p style="margin-bottom: 10px" data-i18n="sbes.categorias.1"></p>
						<p style="margin-bottom: 10px" data-i18n="sbes.categorias.2"></p>
						<p style="margin-bottom: 10px" data-i18n="sbes.categorias.3"></p>
						<p data-i18n="sbes.categorias.4"></p>
					</div>
					
					<br/>
					<h5 data-i18n="sbes.secao_guidelines"></h5>
					<div class="description-one">
						<p style="margin-bottom: 10px" data-i18n="sbes.descricao_15"></p>
						<p data-i18n="sbes.descricao_16"></p>
					</div>
					
					<br/>
					<h5 data-i18n="sbes.secao_doubleblind"></h5>
					<div class="description-one">
						<p style="margin-bottom: 10px" data-i18n="sbes.descricao_17"></p>
						<ul style="margin-top: 10px; margin-left: -20px">
							<li data-i18n="sbes.guidelines_doubleblind.0" style="color: black;"></li>
                            <li data-i18n="sbes.guidelines_doubleblind.1" style="color: black;"></li>
                            <li data-i18n="sbes.guidelines_doubleblind.2" style="color: black;"></li>
							<li data-i18n="sbes.guidelines_doubleblind.3" style="color: black;"></li>
						</ul>
						<p style="margin-bottom: 10px" data-i18n="sbes.descricao_18"></p>
						<p data-i18n="sbes.descricao_19"></p>
					</div>
					
					<br/>
					<h5 data-i18n="sbes.secao_comite"></h5>
					<div class="description-one">
						<strong><p data-i18n="sbes.comite.0"></p></strong>
						<p data-i18n="sbes.comite.1"></p>
						<p data-i18n="sbes.comite.2"></p>
						<p data-i18n="sbes.comite.3"></p><br/>
						<strong><p data-i18n="sbes.comite.4"></p></strong>
						<p data-i18n="sbes.comite.5"></p>
						<p data-i18n="sbes.comite.6"></p><br/>
						<strong><p data-i18n="sbes.comite.7"></p></strong>
						<p data-i18n="sbes.comite.8"></p>
						<p data-i18n="sbes.comite.9"></p><br/>
						<strong><p data-i18n="sbes.comite.10"></p></strong>
						<p data-i18n="sbes.comite.11"></p>
						<p data-i18n="sbes.comite.12"></p><br/>
						<strong><p data-i18n="sbes.comite.13"></p></strong>
						<p data-i18n="sbes.comite.14"></p>
						<p data-i18n="sbes.comite.15"></p><br/>
						<strong><p data-i18n="sbes.comite.16"></p></strong>
						<p data-i18n="sbes.comite.17"></p>
						<p data-i18n="sbes.comite.18"></p>
						<p data-i18n="sbes.comite.19"></p>
						<p data-i18n="sbes.comite.20"></p>
						<p data-i18n="sbes.comite.21"></p>
						<p data-i18n="sbes.comite.22"></p>
						<p data-i18n="sbes.comite.23"></p>
						<p data-i18n="sbes.comite.24"></p>
						<p data-i18n="sbes.comite.25"></p>
					</div>
					-->
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