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
                    <h2 style="line-height: 50px" data-i18n="sbes.titulo"></h2>
					<h4 style="line-height: 50px">
						<span data-i18n="menu.chamada_trabalhos"></span> &ndash; <span data-i18n="sbes.trilha_pesquisa"></span>
					</h4>
					
					<div class="description-one">
                    	<p data-i18n="sbes.descricao_1a"></p>
					</div>
					
					<br/>
					<h5 data-i18n="sbes.secao_datas"></h5>
                    <div class="description-one">
						<ul style="margin-left: -20px">
							<li>
								<span data-i18n="sbes.deadlines_atividades.0" style="color: black;"></span>:
								<span data-i18n="sbes.deadlines_pesquisa.0" style="color: black;"></span>
							</li>
                            <li>
								<span data-i18n="sbes.deadlines_atividades.1" style="color: black;"></span>:
								<span data-i18n="sbes.deadlines_pesquisa.1" style="color: black;"></span>
							</li>
                            <li>
								<span data-i18n="sbes.deadlines_atividades.2" style="color: black;"></span>:
								<span data-i18n="sbes.deadlines_pesquisa.2" style="color: black;"></span>
							</li>
							<li>
								<span data-i18n="sbes.deadlines_atividades.3" style="color: black;"></span>:
								<span data-i18n="sbes.deadlines_pesquisa.3" style="color: black;"></span>
							</li>
							<li>
								<span data-i18n="sbes.deadlines_atividades.4" style="color: black;"></span>:
								<span data-i18n="sbes.deadlines_pesquisa.4" style="color: black;"></span>
							</li>
						</ul>
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
					<h5 data-i18n="sbes.secao_journal_first"></h5>
					<div class="description-one">
						<p style="margin-bottom: 10px" data-i18n="sbes.descricao_4"></p>
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
						<strong><p data-i18n="sbes.comite.4"></p></strong>
						<p data-i18n="sbes.comite.5"></p>
						<p data-i18n="sbes.comite.6"></p><br/>
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