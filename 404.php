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

<!--===================================
=            Error Section            =
====================================-->

<section class="section error">
	<div class="container">
		<div class="row">
			<div class="col-md-8 m-auto">
				<div class="block text-center" style="margin-top: 100px">
					<img src="images/404.png" alt="404">
					<h3>Oops!... <span data-i18n="error.page_not_found"></span></h3>
					<a href="index.php" class="btn btn-main-md"><span data-i18n="error.main_page"></span></a>
				</div>
			</div>
		</div>
	</div>
</section>

<!--====  End of Error Section  ====-->

<!--============================
=            Footer            =
=============================-->

<?php 
	include_once ("footer.php");
?>
</body>

</html>



