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
					<h2 style="line-height: 50px" data-i18n="trilha-industria.titulo"></h2>
					<div class="description-one">
						<p data-i18n="trilha-industria.descricao_1"></p>
					</div>
					<div class="description-one">
						<p data-i18n="trilha-industria.descricao_2"></p>
					</div>
					
					<br/>
					<h5 data-i18n="trilha-industria.secao_submissao"></h5>
					<div class="description-one">
						<p style="margin-bottom: 10px" data-i18n="trilha-industria.descricao_3"></p>
						<p data-i18n="trilha-industria.descricao_4"></p>
						<ul style="margin-left: -20px">
							<?php for ($i=0; $i < count($data->topicos_industria_pt); $i++) { ?>
								<li data-i18n="trilha-industria.topicos.<?php echo $i; ?>" style="color: black;"></li>
							<?php }	// for ?>
						</ul>
					</div>
					
					<br/>
					<h5 data-i18n="trilha-industria.secao_datas"></h5>
					<div class="description-one">
						<ul style="margin-left: -20px">
							<li>
								<span data-i18n="trilha-industria.deadlines_atividades.0" style="color: black;"></span>:
								<span data-i18n="trilha-industria.deadlines.0" style="color: black;"></span>
							</li>
                            <li>
								<span data-i18n="trilha-industria.deadlines_atividades.1" style="color: black;"></span>:
								<span data-i18n="trilha-industria.deadlines.1" style="color: black;"></span>
							</li>
                            <li>
								<span data-i18n="trilha-industria.deadlines_atividades.2" style="color: black;"></span>:
								<span data-i18n="trilha-industria.deadlines.2" style="color: black;"></span>
							</li>
							<li>
								<span data-i18n="trilha-industria.deadlines_atividades.3" style="color: black;"></span>:
								<span data-i18n="trilha-industria.deadlines.3" style="color: black;"></span>
							</li>
						</ul>
					</div>
					
					<br/>
					<h5 data-i18n="trilha-industria.secao_informacoes"></h5>
					<div class="description-one">
						<p style="margin-bottom: 10px" data-i18n="trilha-industria.descricao_5"></p>
						<p data-i18n="trilha-industria.descricao_6"></p>
					</div>
					
					<br/>
					<h5 data-i18n="trilha-industria.secao_guidelines"></h5>
					<div class="description-one">
						<p style="margin-bottom: 10px" data-i18n="trilha-industria.descricao_7"></p>
						<b><p data-i18n="trilha-industria.descricao_8"></p></b>
						<ul style="margin-left: -20px">
							<li><span data-i18n="trilha-industria.itens_folha_rosto.0" style="color: black;"></span></li>
							<li><span data-i18n="trilha-industria.itens_folha_rosto.1" style="color: black;"></span></li>
							<li><span data-i18n="trilha-industria.itens_folha_rosto.2" style="color: black;"></span></li>
							<li><span data-i18n="trilha-industria.itens_folha_rosto.3" style="color: black;"></span></li>
						</ul>
						<strong><p style="margin-top: 10px" data-i18n="trilha-industria.descricao_9"></p></strong>
						<ul style="margin-left: -20px">
							<li><span data-i18n="trilha-industria.itens_resumo.0" style="color: black;"></span></li>
							<li><span data-i18n="trilha-industria.itens_resumo.1" style="color: black;"></span></li>
							<li><span data-i18n="trilha-industria.itens_resumo.2" style="color: black;"></span></li>
						</ul>
					</div>
					
					<br/>
					<h5 data-i18n="trilha-industria.secao_avaliacao"></h5>
					<div class="description-one">
						<p style="margin-bottom: 10px" data-i18n="trilha-industria.descricao_10"></p>
						<ul style="margin-left: -20px">
							<li><span data-i18n="trilha-industria.criterios_avaliacao.0" style="color: black;"></span></li>
							<li><span data-i18n="trilha-industria.criterios_avaliacao.1" style="color: black;"></span></li>
							<li><span data-i18n="trilha-industria.criterios_avaliacao.2" style="color: black;"></span></li>
							<li><span data-i18n="trilha-industria.criterios_avaliacao.3" style="color: black;"></span></li>
						</ul>
					</div>
					
					<br/>
					<h5 data-i18n="trilha-industria.secao_comite"></h5>
					<div class="description-one">
						<p data-i18n="trilha-industria.comite.0"></p>
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