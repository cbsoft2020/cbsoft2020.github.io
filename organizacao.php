<?php
    // Carregando os dados dos organizadores
    $file = "conteudo/organizadores.json";
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
=      Navigation Section and Banner       =
=========================================-->

<?php 
	include_once ("menu.php");
?>

<!--====  End of Navigation Section and Banner====-->
<section class="section speakers overlay-lighter">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h3 data-i18n="org.organizacao"></h3>
				</div>
			</div>
        </div>
		
        <div class="row">
			<div class="col-12">
				<div class="sponsor-title text-center">
					<h5 style="margin-bottom: 25px" data-i18n="org.org_local"></h5>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<?php foreach($data->general_chairs as $org) { ?>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="speaker-item">
                        <div class="image">
                            <img src="images/organizadores/<?php echo $org->imagem;?>" alt="speaker" class="img-fluid">
                            <div class="primary-overlay"></div>
                            <div class="socials">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a href="<?php echo $org->lattes;?>"><img src="images/icon/lattes-2.png" style="padding-top: 8px;" width="40px" height="40px"></i></a></li>
                                    <li class="list-inline-item"><a href="mailto:<?php echo $org->email;?>"><i class="fa fa-envelope "></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content text-center">
                            <p style="font-size: 18px"><?php echo $org->nome;?></p>
                            <p style="font-size: 14px"><?php echo $org->universidade;?></p>
                        </div>
                    </div>
                </div>
			<?php } //foreach ?>
		</div>
	
		<br/>
		<div class="row">
			<div class="col-12">
				<div class="sponsor-title text-center">
					<h5 style="margin-bottom: 25px">SBES 2020 &ndash; <span data-i18n="sbes.trilha_pesquisa"></span></h5>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<?php foreach($data->chairs_sbes_research as $org) { ?>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="speaker-item">
                        <div class="image">
                            <img src="images/organizadores/<?php echo $org->imagem;?>" alt="speaker" class="img-fluid">
                            <div class="primary-overlay"></div>
                            <div class="socials">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a href="<?php echo $org->lattes;?>"><img src="images/icon/lattes-2.png" style="padding-top: 8px;" width="40px" height="40px"></i></a></li>
                                    <li class="list-inline-item"><a href="mailto:<?php echo $org->email;?>"><i class="fa fa-envelope "></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content text-center">
                            <p style="font-size: 18px"><?php echo $org->nome;?></p>
                            <p style="font-size: 14px"><?php echo $org->universidade;?></p>
                        </div>
                    </div>
                </div>
			<?php } //foreach ?>
		</div>

		<br/>
		<div class="row">
			<div class="col-12">
				<div class="sponsor-title text-center">
					<h5 style="margin-bottom: 25px">SBES 2020 &ndash; <span data-i18n="sbes.trilha_ideias"></span></h5>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<?php foreach($data->chairs_sbes_ideas as $org) { ?>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="speaker-item">
                        <div class="image">
                            <img src="images/organizadores/<?php echo $org->imagem;?>" alt="speaker" class="img-fluid">
                            <div class="primary-overlay"></div>
                            <div class="socials">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a href="<?php echo $org->lattes;?>"><img src="images/icon/lattes-2.png" style="padding-top: 8px;" width="40px" height="40px"></i></a></li>
                                    <li class="list-inline-item"><a href="mailto:<?php echo $org->email;?>"><i class="fa fa-envelope "></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content text-center">
                            <p style="font-size: 18px"><?php echo $org->nome;?></p>
                            <p style="font-size: 14px"><?php echo $org->universidade;?></p>
                        </div>
                    </div>
                </div>
			<?php } //foreach ?>
		</div>

		<br/>
		<div class="row">
			<div class="col-12">
				<div class="sponsor-title text-center">
					<h5 style="margin-bottom: 25px">SBES 2020 &ndash; <span data-i18n="sbes.trilha_educacao"></span></h5>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<?php foreach($data->chairs_sbes_education as $org) { ?>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="speaker-item">
                        <div class="image">
                            <img src="images/organizadores/<?php echo $org->imagem;?>" alt="speaker" class="img-fluid">
                            <div class="primary-overlay"></div>
                            <div class="socials">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a href="<?php echo $org->lattes;?>"><img src="images/icon/lattes-2.png" style="padding-top: 8px;" width="40px" height="40px"></i></a></li>
                                    <li class="list-inline-item"><a href="mailto:<?php echo $org->email;?>"><i class="fa fa-envelope "></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content text-center">
                            <p style="font-size: 18px"><?php echo $org->nome;?></p>
                            <p style="font-size: 14px"><?php echo $org->universidade;?></p>
                        </div>
                    </div>
                </div>
			<?php } //foreach ?>
		</div>

		<br/>
		<div class="row">
			<div class="col-12">
				<div class="sponsor-title text-center">
					<h5 style="margin-bottom: 25px">SBES 2020 &ndash; <span data-i18n="sbes.trilha_ferramentas"></span></h5>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<?php foreach($data->chairs_sbes_tools as $org) { ?>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="speaker-item">
                        <div class="image">
                            <img src="images/organizadores/<?php echo $org->imagem;?>" alt="speaker" class="img-fluid">
                            <div class="primary-overlay"></div>
                            <div class="socials">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a href="<?php echo $org->lattes;?>"><img src="images/icon/lattes-2.png" style="padding-top: 8px;" width="40px" height="40px"></i></a></li>
                                    <li class="list-inline-item"><a href="mailto:<?php echo $org->email;?>"><i class="fa fa-envelope "></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content text-center">
                            <p style="font-size: 18px"><?php echo $org->nome;?></p>
                            <p style="font-size: 14px"><?php echo $org->universidade;?></p>
                        </div>
                    </div>
                </div>
			<?php } //foreach ?>
		</div>

		<br/>
		<div class="row">
			<div class="col-12">
				<div class="sponsor-title text-center">
					<h5 style="margin-bottom: 25px"><span data-i18n="ctic-es.subtitulo"></span></h5>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<?php foreach($data->chairs_sbes_ctic as $org) { ?>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="speaker-item">
                        <div class="image">
                            <img src="images/organizadores/<?php echo $org->imagem;?>" alt="speaker" class="img-fluid">
                            <div class="primary-overlay"></div>
                            <div class="socials">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a href="<?php echo $org->lattes;?>"><img src="images/icon/lattes-2.png" style="padding-top: 8px;" width="40px" height="40px"></i></a></li>
                                    <li class="list-inline-item"><a href="mailto:<?php echo $org->email;?>"><i class="fa fa-envelope "></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content text-center">
                            <p style="font-size: 18px"><?php echo $org->nome;?></p>
                            <p style="font-size: 14px"><?php echo $org->universidade;?></p>
                        </div>
                    </div>
                </div>
			<?php } //foreach ?>
		</div>

		<br/>
		<div class="row">
			<div class="col-12">
				<div class="sponsor-title text-center">
					<h5 style="margin-bottom: 25px"><span data-i18n="ctd-es.subtitulo"></span></h5>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<?php foreach($data->chairs_sbes_ctd as $org) { ?>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="speaker-item">
                        <div class="image">
                            <img src="images/organizadores/<?php echo $org->imagem;?>" alt="speaker" class="img-fluid">
                            <div class="primary-overlay"></div>
                            <div class="socials">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a href="<?php echo $org->lattes;?>"><img src="images/icon/lattes-2.png" style="padding-top: 8px;" width="40px" height="40px"></i></a></li>
                                    <li class="list-inline-item"><a href="mailto:<?php echo $org->email;?>"><i class="fa fa-envelope "></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content text-center">
                            <p style="font-size: 18px"><?php echo $org->nome;?></p>
                            <p style="font-size: 14px"><?php echo $org->universidade;?></p>
                        </div>
                    </div>
                </div>
			<?php } //foreach ?>
		</div>

		<br/>
		<div class="row">
			<div class="col-12">
				<div class="sponsor-title text-center">
					<h5 style="margin-bottom: 25px">SBCARS 2020</h5>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<?php foreach($data->chairs_sbcars as $org) { ?>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="speaker-item">
                        <div class="image">
                            <img src="images/organizadores/<?php echo $org->imagem;?>" alt="speaker" class="img-fluid">
                            <div class="primary-overlay"></div>
                            <div class="socials">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a href="<?php echo $org->lattes;?>"><img src="images/icon/lattes-2.png" style="padding-top: 8px;" width="40px" height="40px"></i></a></li>
                                    <li class="list-inline-item"><a href="mailto:<?php echo $org->email;?>"><i class="fa fa-envelope "></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content text-center">
                            <p style="font-size: 18px"><?php echo $org->nome;?></p>
                            <p style="font-size: 14px"><?php echo $org->universidade;?></p>
                        </div>
                    </div>
                </div>
			<?php } //foreach ?>
		</div>

		<br/>
		<div class="row">
			<div class="col-12">
				<div class="sponsor-title text-center">
					<h5 style="margin-bottom: 25px">SBLP 2020</h5>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<?php foreach($data->chairs_sblp as $org) { ?>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="speaker-item">
                        <div class="image">
                            <img src="images/organizadores/<?php echo $org->imagem;?>" alt="speaker" class="img-fluid">
                            <div class="primary-overlay"></div>
                            <div class="socials">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a href="<?php echo $org->lattes;?>"><img src="images/icon/lattes-2.png" style="padding-top: 8px;" width="40px" height="40px"></i></a></li>
                                    <li class="list-inline-item"><a href="mailto:<?php echo $org->email;?>"><i class="fa fa-envelope "></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content text-center">
                            <p style="font-size: 18px"><?php echo $org->nome;?></p>
                            <p style="font-size: 14px"><?php echo $org->universidade;?></p>
                        </div>
                    </div>
                </div>
			<?php } //foreach ?>
		</div>

		<br/>
		<div class="row">
			<div class="col-12">
				<div class="sponsor-title text-center">
					<h5 style="margin-bottom: 25px">SAST 2020</h5>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<?php foreach($data->chairs_sast as $org) { ?>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="speaker-item">
                        <div class="image">
                            <img src="images/organizadores/<?php echo $org->imagem;?>" alt="speaker" class="img-fluid">
                            <div class="primary-overlay"></div>
                            <div class="socials">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a href="<?php echo $org->lattes;?>"><img src="images/icon/lattes-2.png" style="padding-top: 8px;" width="40px" height="40px"></i></a></li>
                                    <li class="list-inline-item"><a href="mailto:<?php echo $org->email;?>"><i class="fa fa-envelope "></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content text-center">
                            <p style="font-size: 18px"><?php echo $org->nome;?></p>
                            <p style="font-size: 14px"><?php echo $org->universidade;?></p>
                        </div>
                    </div>
                </div>
			<?php } //foreach ?>
		</div>

		<br/>
		<div class="row">
			<div class="col-12">
				<div class="sponsor-title text-center">
					<h5 style="margin-bottom: 25px" data-i18n="menu.wtdsoft"></h5>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<?php foreach($data->chairs_wtdsoft as $org) { ?>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="speaker-item">
                        <div class="image">
                            <img src="images/organizadores/<?php echo $org->imagem;?>" alt="speaker" class="img-fluid">
                            <div class="primary-overlay"></div>
                            <div class="socials">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a href="<?php echo $org->lattes;?>"><img src="images/icon/lattes-2.png" style="padding-top: 8px;" width="40px" height="40px"></i></a></li>
                                    <li class="list-inline-item"><a href="mailto:<?php echo $org->email;?>"><i class="fa fa-envelope "></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content text-center">
                            <p style="font-size: 18px"><?php echo $org->nome;?></p>
                            <p style="font-size: 14px"><?php echo $org->universidade;?></p>
                        </div>
                    </div>
                </div>
			<?php } //foreach ?>
		</div>

		<br/>
		<div class="row">
			<div class="col-12">
				<div class="sponsor-title text-center">
					<h5 style="margin-bottom: 25px" data-i18n="menu.trilha_industria"></h5>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<?php foreach($data->chairs_industry as $org) { ?>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="speaker-item">
                        <div class="image">
                            <img src="images/organizadores/<?php echo $org->imagem;?>" alt="speaker" class="img-fluid">
                            <div class="primary-overlay"></div>
                            <div class="socials">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a href="<?php echo $org->lattes;?>"><img src="images/icon/lattes-2.png" style="padding-top: 8px;" width="40px" height="40px"></i></a></li>
                                    <li class="list-inline-item"><a href="mailto:<?php echo $org->email;?>"><i class="fa fa-envelope "></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content text-center">
                            <p style="font-size: 18px"><?php echo $org->nome;?></p>
                            <p style="font-size: 14px"><?php echo $org->universidade;?></p>
                        </div>
                    </div>
                </div>
			<?php } //foreach ?>
		</div>

		<br/>
		<div class="row">
			<div class="col-12">
				<div class="sponsor-title text-center">
					<h5 style="margin-bottom: 25px" data-i18n="workshops.titulo"></h5>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<?php foreach($data->chairs_workshops as $org) { ?>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="speaker-item">
                        <div class="image">
                            <img src="images/organizadores/<?php echo $org->imagem;?>" alt="speaker" class="img-fluid">
                            <div class="primary-overlay"></div>
                            <div class="socials">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a href="<?php echo $org->lattes;?>"><img src="images/icon/lattes-2.png" style="padding-top: 8px;" width="40px" height="40px"></i></a></li>
                                    <li class="list-inline-item"><a href="mailto:<?php echo $org->email;?>"><i class="fa fa-envelope "></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content text-center">
                            <p style="font-size: 18px"><?php echo $org->nome;?></p>
                            <p style="font-size: 14px"><?php echo $org->universidade;?></p>
                        </div>
                    </div>
                </div>
			<?php } //foreach ?>
		</div>
		<div class="row justify-content-center">
			<?php foreach($data->chairs_mssis as $org) { ?>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="speaker-item">
                        <div class="image">
                            <img src="images/organizadores/<?php echo $org->imagem;?>" alt="speaker" class="img-fluid">
                            <div class="primary-overlay"></div>
                            <div class="socials">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a href="<?php echo $org->lattes;?>"><img src="images/icon/lattes-2.png" style="padding-top: 8px;" width="40px" height="40px"></i></a></li>
                                    <li class="list-inline-item"><a href="mailto:<?php echo $org->email;?>"><i class="fa fa-envelope "></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content text-center">
                            <p style="font-size: 18px"><?php echo $org->nome;?></p>
                            <p style="font-size: 14px"><?php echo $org->universidade;?></p>
                        </div>
                    </div>
                </div>
			<?php } //foreach ?>
		</div>
		<div class="row justify-content-center">
			<?php foreach($data->chairs_vem as $org) { ?>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="speaker-item">
                        <div class="image">
                            <img src="images/organizadores/<?php echo $org->imagem;?>" alt="speaker" class="img-fluid">
                            <div class="primary-overlay"></div>
                            <div class="socials">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a href="<?php echo $org->lattes;?>"><img src="images/icon/lattes-2.png" style="padding-top: 8px;" width="40px" height="40px"></i></a></li>
                                    <li class="list-inline-item"><a href="mailto:<?php echo $org->email;?>"><i class="fa fa-envelope "></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content text-center">
                            <p style="font-size: 18px"><?php echo $org->nome;?></p>
                            <p style="font-size: 14px"><?php echo $org->universidade;?></p>
                        </div>
                    </div>
                </div>
			<?php } //foreach ?>
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