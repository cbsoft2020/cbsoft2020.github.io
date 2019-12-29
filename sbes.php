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
                    <h2 data-i18n="sbes.titulo"></h2>
                    <h4 data-i18n="sbes.subtitulo"></h4><br>
					<div class="description-one">
						<p data-i18n="sbes.descricao_1"></p>
					</div>
					<div class="description-one">
                        <ol>
                            <li data-i18n="sbes.trilhas.0" style="color: black;"></li>
                            <li data-i18n="sbes.trilhas.1" style="color: black;"></li>
                            <li data-i18n="sbes.trilhas.2" style="color: black;"></li>
                        </ol>
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