<!DOCTYPE html>
<html lang="en">
<!-- HEAD -->
<?php 
	include_once ("header.php");
	
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
					<h2 style="line-height: 50px" data-i18n="wtdsoft.titulo"></h2>
					<div class="description-one">
						<p data-i18n="wtdsoft.descricao_1"></p>
						<p style="margin-top: 10px" data-i18n="wtdsoft.descricao_1a"></p>
					</div>
					
					<br/>
					<h5 data-i18n="wtdsoft.secao_eligibilidade_avaliacao"></h5>
                    <div class="description-one">
						<p data-i18n="wtdsoft.descricao_2"></p>
						<ul style="margin-left: -20px">
							<li data-i18n="wtdsoft.criterios_eligibilidade.0" style="color: black;"></li>
							<li data-i18n="wtdsoft.criterios_eligibilidade.1" style="color: black;"></li>
							<li data-i18n="wtdsoft.criterios_eligibilidade.2" style="color: black;"></li>
						</ul>
						<p data-i18n="wtdsoft.descricao_3"></p>
					</div>
					
					<br/>
					<h5 data-i18n="wtdsoft.secao_submissao"></h5>
                    <div class="description-one">
						<p style="margin-bottom: 10px" data-i18n="wtdsoft.descricao_4"></p>
						<p data-i18n="wtdsoft.descricao_5"></p>
						<ul style="margin-left: -20px">
							<li data-i18n="wtdsoft.itens_folharosto.0" style="color: black;"></li>
							<li data-i18n="wtdsoft.itens_folharosto.1" style="color: black;"></li>
							<li data-i18n="wtdsoft.itens_folharosto.2" style="color: black;"></li>
							<li data-i18n="wtdsoft.itens_folharosto.3" style="color: black;"></li>
							<li data-i18n="wtdsoft.itens_folharosto.4" style="color: black;"></li>
							<li data-i18n="wtdsoft.itens_folharosto.5" style="color: black;"></li>
							<li data-i18n="wtdsoft.itens_folharosto.6" style="color: black;"></li>
							<li data-i18n="wtdsoft.itens_folharosto.7" style="color: black;"></li>
							<li data-i18n="wtdsoft.itens_folharosto.8" style="color: black;"></li>
							<li data-i18n="wtdsoft.itens_folharosto.9" style="color: black;"></li>
							<li data-i18n="wtdsoft.itens_folharosto.10" style="color: black;"></li>
							<li data-i18n="wtdsoft.itens_folharosto.11" style="color: black;"></li>
							<li data-i18n="wtdsoft.itens_folharosto.12" style="color: black;"></li>
						</ul>
						<p data-i18n="wtdsoft.descricao_6"></p>
						<ul style="margin-left: -20px">
							<li data-i18n="wtdsoft.itens_conteudo.0" style="color: black;"></li>
							<li data-i18n="wtdsoft.itens_conteudo.1" style="color: black;"></li>
							<li data-i18n="wtdsoft.itens_conteudo.2" style="color: black;"></li>
							<li data-i18n="wtdsoft.itens_conteudo.3" style="color: black;"></li>
							<li data-i18n="wtdsoft.itens_conteudo.4" style="color: black;"></li>
							<li data-i18n="wtdsoft.itens_conteudo.5" style="color: black;"></li>
							<li data-i18n="wtdsoft.itens_conteudo.6" style="color: black;"></li>
						</ul>
						<p data-i18n="wtdsoft.descricao_7"></p>
					</div>
					
					<br/>
					<h5 data-i18n="wtdsoft.secao_datas"></h5>
                    <div class="description-one">
						<ul style="margin-left: -20px">
							<li>
								<span data-i18n="wtdsoft.deadlines_atividades.0" style="color: black;"></span>:
								<span data-i18n="wtdsoft.deadlines.0" style="color: black;"></span>
							</li>
                            <li>
								<span data-i18n="wtdsoft.deadlines_atividades.1" style="color: black;"></span>:
								<span data-i18n="wtdsoft.deadlines.1" style="color: black;"></span>
							</li>
                            <li>
								<span data-i18n="wtdsoft.deadlines_atividades.2" style="color: black;"></span>:
								<span data-i18n="wtdsoft.deadlines.2" style="color: black;"></span>
							</li>
						</ul>
					</div>
					
					<br/>
					<h5 data-i18n="wtdsoft.secao_comite"></h5>
					<div class="description-one">
						<strong><p data-i18n="wtdsoft.comite.0"></p></strong>
						<p data-i18n="wtdsoft.comite.1"></p>
						<p data-i18n="wtdsoft.comite.2"></p>
						<strong><p style="margin-top: 10px" data-i18n="wtdsoft.comite.3"></p></strong>
						<?php
							for ($i=4; $i < count($data_pc->pc_wtdsoft_en)+4; $i++) { ?>
							<p data-i18n="wtdsoft.comite.<?php echo $i; ?>" style="color: black;"></p>
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