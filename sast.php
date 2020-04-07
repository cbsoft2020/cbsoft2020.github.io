<!DOCTYPE html>
<html lang="en">
<!-- HEAD -->
<?php 
	include_once ("header.php");
	
	$file = "conteudo/topicos.json";
    $info = file_get_contents($file);
    $data = json_decode($info);
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
                    <h2 data-i18n="sast.titulo"></h2>
					
                    <div class="description-one">
						<p style="margin-bottom: 10px" data-i18n="sast.descricao_1"></p>
						<p style="margin-bottom: 10px" data-i18n="sast.descricao_2"></p>
						<p data-i18n="sast.descricao_3"></p>
					</div>
					
					<h4 style="line-height: 50px">
						<span data-i18n="menu.chamada_trabalhos"></span>
					</h4>
					<div class="description-one">
						<p data-i18n="sast.descricao_4"></p>
					</div>
					
					<br/>
					<h5 data-i18n="sast.secao_datas"></h5>
                    <div class="description-one">
						<ul style="margin-left: -20px">
							<li>
								<span data-i18n="sast.deadlines_atividades.0" style="color: black;"></span>:
								<span data-i18n="sast.deadlines.0" style="color: black;"></span>
							</li>
                            <li>
								<span data-i18n="sast.deadlines_atividades.1" style="color: black;"></span>:
								<span data-i18n="sast.deadlines.1" style="color: black;"></span>
							</li>
                            <li>
								<span data-i18n="sast.deadlines_atividades.2" style="color: black;"></span>:
								<span data-i18n="sast.deadlines.2" style="color: black;"></span>
							</li>
							<li>
								<span data-i18n="sast.deadlines_atividades.3" style="color: black;"></span>:
								<span data-i18n="sast.deadlines.3" style="color: black;"></span>
							</li>
						</ul>
					</div>
					
					<br/>
					<h5 data-i18n="sast.secao_topicos"></h5>
					<div class="description-one">
						<p data-i18n="sast.descricao_5"></p>
						<ul style="margin-left: -20px">
							<?php for ($i=0; $i < count($data->topicos_sast_pt); $i++) { ?>
								<li data-i18n="sast.topicos_sast.<?php echo $i; ?>" style="color: black;"></li>
							<?php }	// for ?>
						</ul>
					</div>
					
					<br/>
					<h5 data-i18n="sast.secao_guidelines"></h5>
					<div class="description-one">
						<p style="margin-bottom: 10px" data-i18n="sast.descricao_6"></p>
						<p style="margin-bottom: 10px" data-i18n="sast.descricao_7"></p>
						<p style="margin-bottom: 10px" data-i18n="sast.descricao_8"></p>
						<p data-i18n="sast.descricao_9"></p>
					</div>
					
					<br/>
					<h5 data-i18n="sast.secao_comite"></h5>
					<div class="description-one">
						<strong><p data-i18n="sast.comite.0"></p></strong>
						<p data-i18n="sast.comite.1"></p>
						<p data-i18n="sast.comite.2"></p>
						<strong><p style="margin-top: 10px" data-i18n="sast.comite.3"></p></strong>
						<p data-i18n="sast.comite.4"></p>
						<p data-i18n="sast.comite.5"></p>
						<p data-i18n="sast.comite.6"></p>
						<p data-i18n="sast.comite.7"></p>
						<p data-i18n="sast.comite.8"></p>
						<p data-i18n="sast.comite.9"></p>
						<p data-i18n="sast.comite.10"></p>
						<p data-i18n="sast.comite.11"></p>
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