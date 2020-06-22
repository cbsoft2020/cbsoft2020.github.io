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
                    <h2 style="line-height: 50px" data-i18n="sbes.titulo"></h2>
					<h4 style="line-height: 50px">
						<span data-i18n="menu.chamada_trabalhos"></span> &ndash; <span data-i18n="sbes.trilha_ferramentas"></span>
					</h4>
					
					<div class="description-one">
                    	<p data-i18n="sbes.descricao_1c"></p>
					</div>
					
					<br/>
					<h5 data-i18n="sbes.secao_datas"></h5>
                    <div class="description-one">
						<ul style="margin-left: -20px">
							<li>
								<span data-i18n="sbes.deadlines_atividades.0" style="color: black;"></span>:
								<span data-i18n="sbes.deadlines_ferramentas.0" style="color: black;"></span>
							</li>
                            <li>
								<span data-i18n="sbes.deadlines_atividades.5" style="color: black;"></span>:
								<span data-i18n="sbes.deadlines_ferramentas.1" style="color: black;"></span>
							</li>
                            <li>
								<span data-i18n="sbes.deadlines_atividades.2" style="color: black;"></span>:
								<span data-i18n="sbes.deadlines_ferramentas.2" style="color: black;"></span>
							</li>
							<li>
								<span data-i18n="sbes.deadlines_atividades.3" style="color: black;"></span>:
								<span data-i18n="sbes.deadlines_ferramentas.3" style="color: black;"></span>
							</li>
							<li>
								<span data-i18n="sbes.deadlines_atividades.4" style="color: black;"></span>:
								<span data-i18n="sbes.deadlines_ferramentas.4" style="color: black;"></span>
							</li>
						</ul>
					</div>
					
					<br/>
					<h5 data-i18n="sbes.secao_guidelines_1c"></h5>
					<div class="description-one">
						<p style="margin-bottom: 10px" data-i18n="sbes.descricao_15c"></p>
						<ol style="margin-left: -20px">
							<li data-i18n="sbes.instrucoes_submissao_ferramentas.0" style="color: black; margin-bottom: 5px"></li>
							<li data-i18n="sbes.instrucoes_submissao_ferramentas.1" style="color: black;"></li>
							<ol style="margin-left: -20px" type="a">
								<li data-i18n="sbes.instrucoes_submissao_ferramentas.2" style="color: black;"></li>
								<li data-i18n="sbes.instrucoes_submissao_ferramentas.3" style="color: black;"></li>
								<li data-i18n="sbes.instrucoes_submissao_ferramentas.4" style="color: black;"></li>
								<li data-i18n="sbes.instrucoes_submissao_ferramentas.5" style="color: black;"></li>
								<li data-i18n="sbes.instrucoes_submissao_ferramentas.6" style="color: black;"></li>
								<li data-i18n="sbes.instrucoes_submissao_ferramentas.7" style="color: black; margin-bottom: 5px"></li>
							</ol>
							<li data-i18n="sbes.instrucoes_submissao_ferramentas.8" style="color: black; margin-bottom: 5px"></li>
							<li data-i18n="sbes.instrucoes_submissao_ferramentas.9" style="color: black; margin-bottom: 5px"></li>
							<li data-i18n="sbes.instrucoes_submissao_ferramentas.10" style="color: black; margin-bottom: 5px"></li>
							<li data-i18n="sbes.instrucoes_submissao_ferramentas.11" style="color: black;"></li>
						</ol>
						<p style="margin-bottom: 10px" data-i18n="sbes.descricao_16c"></p>
						<p style="margin-bottom: 10px" data-i18n="sbes.descricao_16c1"></p>
						<p style="margin-bottom: 10px" data-i18n="sbes.descricao_16c2"></p>
					</div>
					
					<br/>
					<h5 data-i18n="sbes.secao_informacoes"></h5>
					<div class="description-one">
						<p style="margin-bottom: 10px" data-i18n="sbes.descricao_20"></p>
					</div>
					
					<br/>
					<h5 data-i18n="sbes.secao_besttool"></h5>
					<div class="description-one">
						<p data-i18n="sbes.descricao_11c"></p>
					</div>
					
					<br/>
					<h5 data-i18n="sbes.secao_comite"></h5>
					<div class="description-one">
						<strong><p data-i18n="sbes.comite.13"></p></strong>
						<p data-i18n="sbes.comite.14"></p>
						<p data-i18n="sbes.comite.15"></p>
						<strong><p style="margin-top: 10px" data-i18n="sbes.pc"></p></strong>
						<?php
							for ($i=0; $i < count($data_pc->pc_sbes_ferramentas_en); $i++) { ?>
							<p data-i18n="sbes.comite_ferramentas.<?php echo $i; ?>" style="color: black;"></p>
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