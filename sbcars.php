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
                    <h2 data-i18n="sbcars.titulo"></h2>
					<h4 style="line-height: 50px">
						<span data-i18n="menu.chamada_trabalhos"></span>
					</h4>
					
                    <div class="description-one">
						<p data-i18n="sbcars.descricao_1"></p>
					</div>
					
					<br/>
					<h5 data-i18n="sbcars.secao_datas"></h5>
                    <div class="description-one">
						<ul style="margin-left: -20px">
							<li>
								<span data-i18n="sbcars.deadlines_atividades.0" style="color: black;"></span>:
								<span data-i18n="sbcars.deadlines.0" style="color: black;"></span>
							</li>
                            <li>
								<span data-i18n="sbcars.deadlines_atividades.1" style="color: black;"></span>:
								<span data-i18n="sbcars.deadlines.1" style="color: black;"></span>
							</li>
                            <li>
								<span data-i18n="sbcars.deadlines_atividades.2" style="color: black;"></span>:
								<span data-i18n="sbcars.deadlines.2" style="color: black;"></span>
							</li>
							<li>
								<span data-i18n="sbcars.deadlines_atividades.3" style="color: black;"></span>:
								<span data-i18n="sbcars.deadlines.3" style="color: black;"></span>
							</li>
						</ul>
					</div>
					
					<br/>
					<h5 data-i18n="sbcars.secao_topicos"></h5>
					<div class="description-one">
						<p data-i18n="sbcars.descricao_2"></p>
						<ul style="margin-left: -20px">
							<?php for ($i=0; $i < count($data->topicos_sbcars_pt); $i++) { ?>
								<li data-i18n="sbcars.topicos_sbcars.<?php echo $i; ?>" style="color: black;"></li>
							<?php }	// for ?>
						</ul>
						<p data-i18n="sbcars.descricao_3"></p>
					</div>
					
					<br/>
					<h5 data-i18n="sbcars.secao_guidelines"></h5>
					<div class="description-one">
						<p style="margin-bottom: 10px" data-i18n="sbcars.descricao_4"></p>
						<p style="margin-bottom: 10px" data-i18n="sbcars.descricao_5"></p>
						<p style="margin-bottom: 10px" data-i18n="sbcars.descricao_6"></p>
						<p data-i18n="sbcars.descricao_7"></p>
						<ul style="margin-top: 10px; margin-left: -20px">
							<li data-i18n="sbcars.guidelines_tripleblind.0" style="color: black;"></li>
                            <li data-i18n="sbcars.guidelines_tripleblind.1" style="color: black;"></li>
                            <li data-i18n="sbcars.guidelines_tripleblind.2" style="color: black;"></li>
							<li data-i18n="sbcars.guidelines_tripleblind.3" style="color: black;"></li>
						</ul>
						<p data-i18n="sbcars.descricao_8"></p>
					</div>
					
					<br/>
					<h5 data-i18n="sbcars.secao_bestpaper_si"></h5>
					<div class="description-one">
						<p data-i18n="sbcars.descricao_9"></p>
					</div>
					
					<br/>
					<h5 data-i18n="sbcars.secao_comite"></h5>
					<div class="description-one">
						<strong><p data-i18n="sbcars.comite.0"></p></strong>
						<p data-i18n="sbcars.comite.1"></p>
						<strong><p style="margin-top: 10px" data-i18n="sbcars.comite.2"></p></strong>
						<p data-i18n="sbcars.comite.3"></p>
						<p data-i18n="sbcars.comite.4"></p>
						<p data-i18n="sbcars.comite.5"></p>
						<p data-i18n="sbcars.comite.6"></p>
						<p data-i18n="sbcars.comite.7"></p>
						<strong><p style="margin-top: 10px" data-i18n="sbcars.comite.8"></p></strong>
						<?php
							for ($i=9; $i < count($data_pc->pc_sbcars_en)+9; $i++) { ?>
							<p data-i18n="sbcars.comite.<?php echo $i; ?>" style="color: black;"></p>
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