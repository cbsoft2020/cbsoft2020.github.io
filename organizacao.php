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
=            Navigation Section and Banner         =
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
					<h5 data-i18n="org.org_local"></h5>
				</div>
			</div>
		</div>
		<div class="row">
            <?php
                foreach($data->organizadores as $org){
            ?>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="speaker-item">
                        <div class="image">
                            <img src="images/organizadores/<?php echo $org->imagem;?>" alt="speaker" class="img-fluid">
                            <div class="primary-overlay"></div>
                            <div class="socials">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a href="<?php echo $org->lattes;?>"><img src="images/icon/lattes-2.png" style="padding-top: 8px;" widith="40px" height="40px"></i></a></li>
                                    <li class="list-inline-item"><a href="mailto:<?php echo $org->email;?>?Subject=CBSoft%202020"><i class="fa fa-envelope "></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content text-center">
                            <p><?php echo $org->nome;?></p>
                            <p><?php echo $org->universidade;?></p>
                        </div>
                    </div>
                </div>
                <?php } //foreach?>
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