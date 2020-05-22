<!DOCTYPE html>
<html lang="en">
<!-- HEAD -->
<?php 
	include_once ("header.php");
	
	$file = "conteudo/topicos.json";
    $info = file_get_contents($file);
    $data = json_decode($info);
	
	$file_pc = "conteudo/pc.json";
    $info_pc = file_get_contents($file_pc);
    $data_pc = json_decode($info_pc);
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
					<h4 style="line-height: 50px">
						<span data-i18n="menu.chamada_trabalhos"></span> &ndash; <span data-i18n="sbes.trilha_educacao"></span>
					</h4>
					
					<div class="description-one">
                    	<p data-i18n="sbes.descricao_1b"></p>
					</div>
					
					<br/>
					<h5 data-i18n="sbes.secao_datas"></h5>
                    <div class="description-one">
						<ul style="margin-left: -20px">
							<li>
								<span data-i18n="sbes.deadlines_atividades.0" style="color: black;"></span>:
								<span data-i18n="sbes.deadlines_educacao.0" style="color: black;"></span>
							</li>
                            <li>
								<span data-i18n="sbes.deadlines_atividades.1" style="color: black;"></span>:
								<span data-i18n="sbes.deadlines_educacao.1" style="color: black;"></span>
							</li>
                            <li>
								<span data-i18n="sbes.deadlines_atividades.2" style="color: black;"></span>:
								<span data-i18n="sbes.deadlines_educacao.2" style="color: black;"></span>
							</li>
							<li>
								<span data-i18n="sbes.deadlines_atividades.3" style="color: black;"></span>:
								<span data-i18n="sbes.deadlines_educacao.3" style="color: black;"></span>
							</li>
							<li>
								<span data-i18n="sbes.deadlines_atividades.4" style="color: black;"></span>:
								<span data-i18n="sbes.deadlines_educacao.4" style="color: black;"></span>
							</li>
						</ul>
					</div>
					<br/>
					<h5 data-i18n="sbes.secao_topicos"></h5>
					<div class="description-one">
						<p data-i18n="sbes.descricao_13"></p>
						<ul style="margin-left: -20px">
							<?php for ($i=0; $i < count($data->topicos_sbes_educacao_pt); $i++) { ?>
								<li data-i18n="sbes.topicos_sbes_educacao.<?php echo $i; ?>" style="color: black;"></li>
							<?php }	// for ?>
						</ul>
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
						<strong><p data-i18n="sbes.comite.10"></p></strong>
						<p data-i18n="sbes.comite.11"></p>
						<p data-i18n="sbes.comite.12"></p>
						<strong><p style="margin-top: 10px" data-i18n="sbes.pc"></p></strong>
						<?php
							for ($i=0; $i < count($data_pc->pc_sbes_education_en); $i++) { ?>
							<p data-i18n="sbes.comite_educacao.<?php echo $i; ?>" style="color: black;"></p>
						<?php }	// for ?>
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