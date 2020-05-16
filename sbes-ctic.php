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
                    <h2 data-i18n="ctic-es.titulo"></h2>
					<h4 data-i18n="ctic-es.subtitulo"></h4>
					
					<br/>
					<div class="description-one">
						<p data-i18n="ctic-es.descricao_1"></p>
					</div>
					
					<br/>
					<h5 data-i18n="ctic-es.secao_topicos"></h5>
					<div class="description-one">
						<p data-i18n="ctic-es.descricao_2"></p>
						<ul style="margin-left: -20px">
							<?php for ($i=0; $i < count($data->topicos_ctices_pt); $i++) { ?>
								<li data-i18n="ctic-es.topicos_ctic-es.<?php echo $i; ?>" style="color: black;"></li>
							<?php }	// for ?>
						</ul>
					</div>
					
					<br/>
					<h5 data-i18n="ctic-es.secao_participacao"></h5>
					<div class="description-one">
						<p data-i18n="ctic-es.descricao_3"></p>
						<p style="margin-top: 10px" data-i18n="ctic-es.descricao_4"></p>
					</div>
					
					<br/>
					<h5 data-i18n="ctic-es.secao_selecao_premiacao"></h5>
					<div class="description-one">
						<p data-i18n="ctic-es.descricao_5"></p>
					</div>
					
					<br/>
					<h5 data-i18n="ctic-es.secao_submissao"></h5>
					<div class="description-one">
						<p data-i18n="ctic-es.descricao_6"></p>
					</div>
					
					<br/>
					<h5 data-i18n="ctic-es.secao_datas"></h5>
                    <div class="description-one">
						<ul style="margin-left: -20px">
							<li>
								<span data-i18n="ctic-es.deadlines_atividades.0" style="color: black;"></span>:
								<span data-i18n="ctic-es.deadlines.0" style="color: black;"></span>
							</li>
                            <li>
								<span data-i18n="ctic-es.deadlines_atividades.1" style="color: black;"></span>:
								<span data-i18n="ctic-es.deadlines.1" style="color: black;"></span>
							</li>
							<li>
								<span data-i18n="ctic-es.deadlines_atividades.2" style="color: black;"></span>:
								<span data-i18n="ctic-es.deadlines.2" style="color: black;"></span>
							</li>
						</ul>
					</div>
					
					<br/>
					<h5 data-i18n="ctic-es.secao_comite"></h5>
					<div class="description-one">
						<strong><p data-i18n="ctic-es.comite.0"></p></strong>
						<p data-i18n="ctic-es.comite.1"></p>
						<p data-i18n="ctic-es.comite.2"></p>
						<strong><p style="margin-top: 10px" data-i18n="ctic-es.comite.3"></p></strong>
						<?php
							for ($i=4; $i < count($data_pc->pc_ctices_en)+4; $i++) { ?>
							<p data-i18n="ctic-es.comite.<?php echo $i; ?>" style="color: black;"></p>
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