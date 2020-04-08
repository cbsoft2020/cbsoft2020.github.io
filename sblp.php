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
                    <h2 data-i18n="sblp.titulo"></h2>
                    <div class="description-one">
						<p data-i18n="sblp.descricao_1"></p>
					</div>
					
					<h4 style="line-height: 50px">
						<span data-i18n="menu.chamada_trabalhos"></span>
					</h4>
					<div class="description-one">
						<p style="margin-bottom: 10px" data-i18n="sblp.descricao_2"></p>
						<p style="margin-bottom: 10px" data-i18n="sblp.descricao_3"></p>
						<p data-i18n="sblp.descricao_4"></p>
						<ul style="margin-left: -20px">
							<li><span data-i18n="sblp.categorias_artigos.0" style="color: black;"></span></li>
                            <li><span data-i18n="sblp.categorias_artigos.1" style="color: black;"></span></li>
						</ul>
					</div>
					
					<br/>
					<h5 data-i18n="sblp.secao_topicos"></h5>
					<div class="description-one">
						<ul style="margin-left: -20px">
							<?php for ($i=0; $i < count($data->topicos_sblp_pt); $i++) { ?>
								<li data-i18n="sblp.topicos_sblp.<?php echo $i; ?>" style="color: black;"></li>
							<?php }	// for ?>
						</ul>
					</div>
					
					<br/>
					<h5 data-i18n="sblp.secao_publicacao"></h5>
                    <div class="description-one">
						<p data-i18n="sblp.descricao_5"></p>
					</div>
					
					<br/>
					<h5 data-i18n="sblp.secao_datas"></h5>
                    <div class="description-one">
						<ul style="margin-left: -20px">
							<li>
								<span data-i18n="sblp.deadlines_atividades.0" style="color: black;"></span>:
								<span data-i18n="sblp.deadlines.0" style="color: black;"></span>
							</li>
                            <li>
								<span data-i18n="sblp.deadlines_atividades.1" style="color: black;"></span>:
								<span data-i18n="sblp.deadlines.1" style="color: black;"></span>
							</li>
                            <li>
								<span data-i18n="sblp.deadlines_atividades.2" style="color: black;"></span>:
								<span data-i18n="sblp.deadlines.2" style="color: black;"></span>
							</li>
							<li>
								<span data-i18n="sblp.deadlines_atividades.3" style="color: black;"></span>:
								<span data-i18n="sblp.deadlines.3" style="color: black;"></span>
							</li>
						</ul>
					</div>
					
					<br/>
					<h5 data-i18n="sblp.secao_comite"></h5>
					<div class="description-one">
						<strong><p data-i18n="sblp.comite.0"></p></strong>
						<p data-i18n="sblp.comite.1"></p>
						<strong><p style="margin-top: 10px" data-i18n="sblp.comite.2"></p></strong>
						<?php for ($i=3; $i < count($data_pc->pc_sblp_en); $i++) { ?>
							<p data-i18n="sblp.comite.<?php echo $i; ?>" style="color: black;"></p>
						<?php }	// for ?>
					</div>
					
					<br/>
					<h5 data-i18n="sblp.secao_contato"></h5>
                    <div class="description-one">
						<p data-i18n="sblp.descricao_6"></p>
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