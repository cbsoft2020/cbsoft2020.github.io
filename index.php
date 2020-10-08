<?php
    // Carregando os dados dos palestrantes
    $file = "conteudo/palestrantes.json";
    $info = file_get_contents($file);
    $data = json_decode($info);
?>

<!DOCTYPE html>
<html lang="en">

<!-- HEAD -->
<?php 
	include_once ("header.php");
?>

<body class="body-wrapper">


<!--========================================
=      Navigation Section 			       =
=========================================-->

<?php 
	include_once ("menu.php");
?>

<!--====  End of Navigation Section ====-->
	
<!--============================
=            Banner            =
=============================-->

<section id="main-banner" class="banner bg-banner-one overlay"></section>
<div class="container">
	<div class="row">
		<div class="col-lg-12" id="logo-sbc">
			<p style="margin-bottom: 5px; color: white; font-size: 12px" data-i18n="sponsors.realizacao"></p>
			<a href="http://www.sbc.org.br/" target="_blank">
				<img src="images/sponsors/sbc-white.png" style="width: 2cm" alt="sbc-logo" />
			</a>
		</div>
		<div class="col-lg-12" align="center" style="margin-top: -120px" id="announcement-button">
			<a href="mensagem-chairs.php" class="btn btn-main-md">
				<span data-i18n="about.announcement_1"></span>
				<span data-i18n="about.announcement_2"></span>
			</a>
		</div>
	</div>
</div>
	
<!--====  End of Banner  ====-->
	
	
<!--===========================
=			Notices			  =
============================-->
<!--
<div id="nota" class="modal fade">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<p class="modal-title" style="font-size: 16px; font-weight: bold; color: white" data-i18n="notice_1.title"></p>
				<button type="button" class="close" style="color: white" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<p data-i18n="notice_1.paragraph_1"></p>
				<p data-i18n="notice_1.paragraph_2"></p>
				<p data-i18n="notice_1.paragraph_3"></p>
				<p data-i18n="notice_1.paragraph_4"></p>
				<p data-i18n="notice_1.paragraph_5"></p>
				<div style="width: 100%; overflow: hidden; margin-top: 20px">
					<div style="width: 420px; float: left;">
						<p data-i18n="notice_1.signature_gc"></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

	
<div id="nota" class="modal fade">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<p class="modal-title" style="font-size: 16px; font-weight: bold; color: white" data-i18n="notice_2.title"></p>
				<button type="button" class="close" style="color: white" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<p data-i18n="notice_2.paragraph_1"></p>
				<p data-i18n="notice_2.paragraph_3"></p>
				<p data-i18n="notice_2.paragraph_4"></p>
				<ul style="margin-left: -20px">
					<li data-i18n="notice_2.decisions.0" style="color: black; font-weight: bold; font-size: 14px; line-height: 22px"></li>
					<li data-i18n="notice_2.decisions.1" style="color: black; font-weight: bold; font-size: 14px; line-height: 22px"></li>
					<li data-i18n="notice_2.decisions.2" style="color: black; font-weight: bold; font-size: 14px; line-height: 22px"></li>
				</ul>
				<p data-i18n="notice_2.paragraph_5"></p>
				<p data-i18n="notice_2.paragraph_6"></p>
				<p data-i18n="notice_2.paragraph_7"></p>
				<p data-i18n="notice_2.paragraph_8"></p>
				<div style="width: 100%; overflow: hidden; margin-top: 20px">
					<div style="width: 420px; float: left;">
						<p data-i18n="notice_2.signature_gc"></p>
					</div>
					<div style="margin-left: 400px">
						<p style="text-align: right" data-i18n="notice_2.signature_sc"></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
-->

<!--===========================
=            About            =
============================-->

<section class="section about">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6 align-top">
				<div class="image-block bg-about">
					<img class="img-fluid" src="images/icone_03.png" alt="">
				</div>
			</div>
			
			<div id="announcement" class="col-lg-6 col-md-6 align-self-center" style="margin-bottom: 30px">
				<div class="content-block">
					<div class="description-one">
						<span style="font-size: 1.6875rem; font-weight: bold" data-i18n="about.announcement_1"></span>&nbsp;
						<a href="mensagem-chairs.php">
							<span style="color: #f4b321; font-size: 1.6875rem; font-weight: bold" data-i18n="about.announcement_2"></span>
						</a>
					</div>
				</div>
			</div>
			
			<div class="col-lg-8 col-md-6 align-self-center">
				<div class="content-block">
					<h2 data-i18n="about.sobre"></h2>
					<div class="description-one">
						<p data-i18n="about.descricao_1"></p>
					</div>
					<div class="description-one">
						<p data-i18n="about.descricao_2"></p>
					</div>
					<div class="description-one">
						<ul>
							<li data-i18n="about.desc_eventos.0" style="color: black;"></li>
							<li data-i18n="about.desc_eventos.1" style="color: black;"></li>
							<li data-i18n="about.desc_eventos.2" style="color: black;"></li>
							<li data-i18n="about.desc_eventos.3" style="color: black;"></li>
						</ul>
					</div>
					<div class="description-one">
						<p data-i18n="about.descricao_3"></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--====  End of About  ====-->

<!--==============================
=            Speakers            =
===============================-->
<section class="section speakers bg-speaker overlay-lighter" id="speakers">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title white">
					<h3 data-i18n="speakers.title">Palestrantes</h3>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<?php foreach($data->speakers as $speaker) { 
				if (!empty($speaker->title) || !empty($speaker->abstract)) { ?>
					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="speaker-item">
							<div class="image" style="position: relative !important;">
								<div class="tag-event">
									<span data-i18n="events.<?php echo $speaker->id_event;?>"></span>
								</div>
								<img src="images/speakers/<?php echo $speaker->image;?>" alt="speaker" class="img-fluid">
								<div class="primary-overlay"></div>
								<div class="socials">
									<ul class="list-inline">
										<li class="list-inline-item">
											<a href="palestrante.php?id=<?php echo $speaker->id;?>"><i class="fa fa-info-circle"></i></a>
										</li>
									</ul>
								</div>
							</div>
							<div class="content text-center">
								<h4 style="font-size: 18px"><a href="<?php echo $speaker->webpage;?>"><?php echo $speaker->name;?></a></h4>
								<p style="font-size: 12px; line-height: 14px" class="affiliation"><?php echo $speaker->institution;?></p>
							</div>
						</div>
					</div>
				<?php } // if 
				} // foreach 
			?>
		</div>
	</div>
</section>
	
<!--====  End of Speakers  ====-->

<!--==============================
=            Sponsors            =
===============================-->

<section id="org-apoio-patro" class="sponsors section bg-sponsors overlay-white">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h3 data-i18n="sponsors.org_apoio_patrocinio">Organização, Apoio e Patrocínio</h3>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="sponsor-title text-center">
					<h5 data-i18n="sponsors.realizacao">Realização</h5>
				</div>
				<div class="block text-center">
					<ul class="list-inline sponsors-list">
						<li class="list-inline-item">
							<div class="image-block text-center">
								<a href="http://www.sbc.org.br/" target="_blank">
									<img src="images/sponsors/sbc.png" style="height: 3cm; width: 2cm" alt="sponsors-logo" class="img-fluid">
								</a>
							</div>
						</li>
					</ul>
				</div>
				
				<div class="sponsor-title text-center">
					<h5 data-i18n="sponsors.organizadores">Organização</h5>
				</div>
				<div class="block text-center">
					<ul class="list-inline sponsors-list">
						<li class="list-inline-item">
							<div class="image-block text-center">
								<a href="#" target="_blank">
									<img src="images/sponsors/sete.png" alt="sponsors-logo" class="img-fluid">
								</a>
							</div>
						</li>
						<li class="list-inline-item">
							<div class="image-block text-center">
								<a href="https://www.imd.ufrn.br/portal/" target="_blank">
									<img src="images/sponsors/imd.png" alt="sponsors-logo" class="img-fluid">
								</a>
							</div>
						</li>
						<li class="list-inline-item">
							<div class="image-block text-center">
								<a href="https://www.dimap.ufrn.br" target="_blank">
									<img src="images/sponsors/dimap.png" alt="sponsors-logo" class="img-fluid">
								</a>
							</div>
						</li>
						<li class="list-inline-item">
							<div class="image-block text-center">
								<a href="https://www.ufrn.br/" target="_blank">
									<img src="images/sponsors/ufrn.png" alt="sponsors-logo" class="img-fluid">
								</a>
							</div>
						</li>
						<li class="list-inline-item">
							<div class="image-block text-center">
								<a href="http://portal.uern.br/" target="_blank">
									<img src="images/sponsors/uern.png" alt="sponsors-logo" class="img-fluid" style="height: 40px">
								</a>
							</div>
						</li>
					</ul>
				</div>
				
				<div class="sponsor-title text-center">
					<h5 data-i18n="sponsors.patrocinio">Patrocínio</h5>
				</div>
				<div class="block text-center">
					<ul class="list-inline sponsors-list">
						<li class="list-inline-item">
							<div class="image-block text-center">
								<a href="https://about.google/" target="_blank">
									<img src="images/sponsors/google.png" alt="sponsors-logo" class="img-fluid">
								</a>
							</div>
						</li>
						<li class="list-inline-item">
							<div class="image-block text-center">
								<a href="https://www.loggi.com/" target="_blank">
									<img src="images/sponsors/loggi.png" alt="sponsors-logo" class="img-fluid">
								</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<!--====  End of Sponsors  ====-->

<!--================================
=            Google Map            =
=================================-->
<!--
<section class="map">
	<div id="map"></div>
	<div class="address-block">
		<h4>CBSoft 2020</h4>
        <ul class="address-list p-0 m-0">
            <li>
				<i class="fa fa-h-square"></i><span>Wish Natal Exclusive Resort<br/>
                Via Costeira Senador Dinarte Mariz, 5525<br/>
                CEP 59090-002<br/>
                Natal, Rio Grande do Norte, Brasil</span>
			</li>
        </ul>
	</div>
</section>
-->
<!--====  End of Google Map  ====-->

<!--============================
=            Footer            =
=============================-->

<?php 
	include_once ("footer.php");
?>
</body>

</html>



