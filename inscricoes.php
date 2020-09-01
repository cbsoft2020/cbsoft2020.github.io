<!DOCTYPE html>
<html lang="en">
<!-- HEAD -->
<?php 
	include_once ("header.php");
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
                    <div class="section-title">
						<h3 data-i18n="inscricoes.titulo"></h3>
					</div>
					
					<div class="col-lg-12" align="center">
						<a href="http://centraldesistemas.sbc.org.br/ecos/cbsoft2020/" class="btn btn-main-md-2">
							<span data-i18n="inscricoes.botao"></span>
						</a>
					</div>
					
					<div class="description-one" style="margin-top: 40px">
						<p style="margin-bottom: 15px" data-i18n="inscricoes.descricao_1"></p>
						<p style="margin-bottom: 15px" data-i18n="inscricoes.descricao_2"></p>
						<p data-i18n="inscricoes.descricao_3"></p>
					</div>
					
					<div class="table-responsive" style="margin-top: 30px">
						<table class="table table-hover" id="tabela-inscricoes">
							<thead style="background-color: #f4b321; color: white">
								<tr>
								  	<th scope="col" colspan="2" class="align-middle">
										<p data-i18n="inscricoes.tabela_valores.header" style="color: white;"></p>
									</th>
								  	<th scope="col" class="align-middle" width="14%">
										<p data-i18n="inscricoes.tabela_valores.faixas.0" style="color: white;"></p>
									</th>
								  	<th scope="col" class="align-middle" width="15%">
										<p data-i18n="inscricoes.tabela_valores.faixas.1" style="color: white;"></p>
									</th>
								  	<th scope="col" class="align-middle" width="14%">
										<p data-i18n="inscricoes.tabela_valores.faixas.2" style="color: white;"></p>
									</th>
									<th scope="col" class="align-middle" width="11%">
										<p data-i18n="inscricoes.tabela_valores.faixas.3" style="color: white;"></p>
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td rowspan="5" width="14%"><p data-i18n="inscricoes.tabela_valores.categorias.0" style="color: black"></p></td>
									<td><p data-i18n="inscricoes.tabela_valores.subcategorias.0" style="color: black"></p></td>
									<td><p style="color: black">R$ 20,00</p></td>
									<td><p style="color: black">R$ 40,00</p></td>
									<td><p style="color: black">R$ 60,00</p></td>
									<td><p style="color: black">R$ 80,00</p></td>
								</tr>
								<tr>
									<td><p data-i18n="inscricoes.tabela_valores.subcategorias.1" style="color: black"></p></td>
									<td><p style="color: black">R$ 42,00</p></td>
									<td><p style="color: black">R$ 62,00</p></td>
									<td><p style="color: black">R$ 82,00</p></td>
									<td><p style="color: black">R$ 102,00</p></td>
								</tr>
								<tr>
									<td><p data-i18n="inscricoes.tabela_valores.subcategorias.2" style="color: black"></p></td>
									<td><p style="color: black">R$ 42,00</p></td>
									<td><p style="color: black">R$ 62,00</p></td>
									<td><p style="color: black">R$ 82,00</p></td>
									<td><p style="color: black">R$ 102,00</p></td>
								</tr>
								<tr>
									<td><p data-i18n="inscricoes.tabela_valores.subcategorias.3" style="color: black"></p></td>
									<td><p style="color: black">R$ 44,00</p></td>
									<td><p style="color: black">R$ 66,00</p></td>
									<td><p style="color: black">R$ 88,00</p></td>
									<td><p style="color: black">R$ 108,00</p></td>
								</tr>
								<tr>
									<td><p data-i18n="inscricoes.tabela_valores.subcategorias.4" style="color: black"></p></td>
									<td><p style="color: black">R$ 27,35</p></td>
									<td><p style="color: black">R$ 47,35</p></td>
									<td><p style="color: black">R$ 67,35</p></td>
									<td><p style="color: black">R$ 87,35</p></td>
								</tr>
								<tr>
									<td rowspan="5" width="13%"><p data-i18n="inscricoes.tabela_valores.categorias.1" style="color: black"></p></td>
									<td><p data-i18n="inscricoes.tabela_valores.subcategorias.0" style="color: black"></p></td>
									<td><p style="color: black">R$ 40,00</p></td>
									<td><p style="color: black">R$ 70,00</p></td>
									<td><p style="color: black">R$ 100,00</p></td>
									<td><p style="color: black">R$ 130,00</p></td>
								</tr>
								<tr>
									<td><p data-i18n="inscricoes.tabela_valores.subcategorias.1" style="color: black"></p></td>
									<td><p style="color: black">R$ 131,00</p></td>
									<td><p style="color: black">R$ 161,00</p></td>
									<td><p style="color: black">R$ 191,00</p></td>
									<td><p style="color: black">R$ 221,00</p></td>
								</tr>
								<tr>
									<td><p data-i18n="inscricoes.tabela_valores.subcategorias.2" style="color: black"></p></td>
									<td><p style="color: black">R$ 131,00</p></td>
									<td><p style="color: black">R$ 161,00</p></td>
									<td><p style="color: black">R$ 191,00</p></td>
									<td><p style="color: black">R$ 221,00</p></td>
								</tr>
								<tr>
									<td><p data-i18n="inscricoes.tabela_valores.subcategorias.3" style="color: black"></p></td>
									<td><p style="color: black">R$ 135,00</p></td>
									<td><p style="color: black">R$ 168,00</p></td>
									<td><p style="color: black">R$ 201,00</p></td>
									<td><p style="color: black">R$ 234,00</p></td>
								</tr>
								<tr>
									<td><p data-i18n="inscricoes.tabela_valores.subcategorias.4" style="color: black"></p></td>
									<td><p style="color: black">R$ 71,00</p></td>
									<td><p style="color: black">R$ 101,00</p></td>
									<td><p style="color: black">R$ 131,00</p></td>
									<td><p style="color: black">R$ 161,00</p></td>
								</tr>
								<tr>
									<td rowspan="5" width="13%"><p data-i18n="inscricoes.tabela_valores.categorias.2" style="color: black"></p></td>
									<td><p data-i18n="inscricoes.tabela_valores.subcategorias.0" style="color: black"></p></td>
									<td><p style="color: black">R$ 100,00</p></td>
									<td><p style="color: black">R$ 150,00</p></td>
									<td><p style="color: black">R$ 200,00</p></td>
									<td><p style="color: black">R$ 250,00</p></td>
								</tr>
								<tr>
									<td><p data-i18n="inscricoes.tabela_valores.subcategorias.1" style="color: black"></p></td>
									<td><p style="color: black">R$ 360,00</p></td>
									<td><p style="color: black">R$ 410,00</p></td>
									<td><p style="color: black">R$ 460,00</p></td>
									<td><p style="color: black">R$ 510,00</p></td>
								</tr>
								<tr>
									<td><p data-i18n="inscricoes.tabela_valores.subcategorias.2" style="color: black"></p></td>
									<td><p style="color: black">R$ 360,00</p></td>
									<td><p style="color: black">R$ 410,00</p></td>
									<td><p style="color: black">R$ 460,00</p></td>
									<td><p style="color: black">R$ 510,00</p></td>
								</tr>
								<tr>
									<td><p data-i18n="inscricoes.tabela_valores.subcategorias.3" style="color: black"></p></td>
									<td><p style="color: black">R$ 380,00</p></td>
									<td><p style="color: black">R$ 435,00</p></td>
									<td><p style="color: black">R$ 490,00</p></td>
									<td><p style="color: black">R$ 545,00</p></td>
								</tr>
								<tr>
									<td><p data-i18n="inscricoes.tabela_valores.subcategorias.4" style="color: black"></p></td>
									<td><p style="color: black">R$ 187,00</p></td>
									<td><p style="color: black">R$ 237,00</p></td>
									<td><p style="color: black">R$ 287,00</p></td>
									<td><p style="color: black">R$ 337,00</p></td>
								</tr>
							</tbody>
						</table>
					</div>
					
					<br/>
					<h5 data-i18n="inscricoes.secao_publicacao"></h5>
					<div class="table-responsive" style="margin-top: 20px">
						<table class="table table-hover" id="tabela-artigos">
							<thead style="background-color: #f4b321; color: white">
								<tr>
								  	<th scope="col" class="align-middle">
										<p data-i18n="inscricoes.tabela_artigos.header_1" style="color: white;"></p>
									</th>
								  	<th scope="col" class="align-middle">
										<p data-i18n="inscricoes.tabela_artigos.header_2" style="color: white;"></p>
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><p style="line-height: 20px; color: black" data-i18n="inscricoes.tabela_artigos.categorias.0" style="color: black"></p></td>
									<td><p data-i18n="inscricoes.tabela_artigos.valores.0" style="color: black"></p></td>
								</tr>
								<tr>
									<td><p style="line-height: 20px; color: black" data-i18n="inscricoes.tabela_artigos.categorias.1" style="color: black"></p></td>
									<td><p data-i18n="inscricoes.tabela_artigos.valores.1" style="color: black"></p></td>
								</tr>
							</tbody>
						</table>
					</div>
					
					<br/>
					<h5 style="margin-bottom: 15px" data-i18n="inscricoes.secao_informacoes"></h5>
					<div class="description-one">
						<p style="margin-bottom: 15px" data-i18n="inscricoes.descricao_4"></p>
						<p style="margin-bottom: 15px" data-i18n="inscricoes.descricao_5"></p>
						<p style="margin-bottom: 15px" data-i18n="inscricoes.descricao_6"></p>
						<p style="margin-bottom: 15px" data-i18n="inscricoes.descricao_7"></p>
						<p style="margin-bottom: 15px" data-i18n="inscricoes.descricao_8"></p>
						<p style="margin-bottom: 15px" data-i18n="inscricoes.descricao_9"></p>
						<p style="margin-bottom: 15px" data-i18n="inscricoes.descricao_10"></p>
						<p data-i18n="inscricoes.descricao_11"></p>
					</div>
					
					<br/>
					<h5 style="margin-bottom: 15px" data-i18n="inscricoes.secao_beneficios"></h5>
					<div class="description-one">
						<p style="margin-bottom: 15px" data-i18n="inscricoes.descricao_12"></p>
						<ul style="margin-top: 10px; margin-left: -20px">
							<li data-i18n="inscricoes.beneficios_sbc.0"></li>
                            <li data-i18n="inscricoes.beneficios_sbc.1"></li>
							<li data-i18n="inscricoes.beneficios_sbc.2"></li>
							<li data-i18n="inscricoes.beneficios_sbc.3"></li>
							<li data-i18n="inscricoes.beneficios_sbc.4"></li>
							<li data-i18n="inscricoes.beneficios_sbc.5"></li>
							<li data-i18n="inscricoes.beneficios_sbc.6"></li>
						</ul>
						<p style="margin-top: 15px" data-i18n="inscricoes.descricao_13"></p>
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