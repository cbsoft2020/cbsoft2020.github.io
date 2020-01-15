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
			<div class="col-lg-4 col-md-6 align-self-center">
				<div class="image-block bg-about">
					<img class="img-fluid" src="images/icone_03.png" alt="">
				</div>
			</div>
			<div class="col-lg-8 col-md-6 align-self-center">
				<div class="content-block">
                    <h2 data-i18n="sobre-natal.titulo"></h2>
					<div class="description-one">
						<p data-i18n="sobre-natal.descricao_1"></p>
                    </div>
                    <div class="description-one">
                        <p data-i18n="sobre-natal.quick-facts"></p>
                        <img src="images/quick-facts/qf1-br.png" id="about-natal" width="80%" height="80%" style="margin-top: 10px">
                    </div>
                    <div class="description-one">
                        <p data-i18n="sobre-natal.descricao_2"></p>
                    </div>
                    <div class="description-one">
                        <p data-i18n="sobre-natal.descricao_3"></p>
                    </div>
                    <div class="description-one">
                        <p data-i18n="sobre-natal.descricao_4"></p>
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