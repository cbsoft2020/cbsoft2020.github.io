<!DOCTYPE html>
<html lang="en">
	
<?php
	if (isset($_GET["s"])) {
		$status = $_GET["s"];
		$success = $status ? "true" : "false";
	} else {
		$success = "none";
	}	
?>

<script>
	window.onload = function() {
		var success = "<?php echo $success; ?>";
		var div_success = document.getElementById("sucesso");
		var div_error = document.getElementById("erro");

		if (success === "true") {
			div_success.style.display = "block";
		} else if (success === "false") {
			div_error.style.display = "block";
		}
	}
</script>
	
<!-- HEAD -->
<?php 
	include_once ("header.php");
	
	$topicos = array(
		"geral", 
		"inscricoes", 
		"sbes-pesquisa", 
		"sbes-ideias", 
		"sbes-educacao", 
		"sbes-ferramentas",
		"ctic-es",
		"ctd-es",
		"sbcars",
		"sblp",
		"sast",
		"wtdsoft",
		"industria",
		"mssis",
		"vem"
	);
?>

<body class="body-wrapper">


<!--========================================
=      Navigation Section 			       =
=========================================-->

<?php 
	include_once ("menu.php");
?>

<!--====  End of Navigation Section ====-->
	
<section class="section about">
	<div class="container">
		<br/>
		<div class="alert alert-success alert-dismissible fade show" role="alert" id="sucesso" style="text-align: center; display: none">
			<span data-i18n="contato.success"></span>
		  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
		  	</button>
		</div>
		<div class="alert alert-danger alert-dismissible fade show" role="alert" id="erro" style="text-align: center; display: none">
			<span data-i18n="contato.error"></span>
		  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
		  	</button>
		</div>
		
		<div class="row">
			<div class="col-lg-12 align-self-center">
				<div class="content-block">
					<div class="section-title">
						<h3 data-i18n="contato.titulo"></h3>
					</div>
				</div>
			</div>
		</div>
		
		<form action="plugins/mailconf.php" method="post" class="row">
			<div class="col-md-6 form-group">
				<label for="nome"><span data-i18n="contato.nome"></span></label>
				<input type="text" class="form-control main" name="nome" id="nome" placeholder="&#xf007" required />
			</div>
			<div class="col-md-6 form-group">
				<label for="email"><span data-i18n="contato.email"></span></label>
				<input type="email" class="form-control main" name="email" id="email" placeholder="&#xf0e0" required />
			</div>
			
			<div class="col-md-12 form-group" style="margin-top: -10px">
				<label for="topico"><span data-i18n="contato.assunto"></span></label>
				<select class="form-control main" style="height: 70%" id="topico" name="topico" required>
					<option data-i18n="contato.opcao-default" selected></option>
					<?php 
					for ($i=0; $i < count($topicos); $i++) { ?>
					<option value="<?=$topicos[$i];?>" data-i18n="contato.topicos.<?php echo $i; ?>"></option>
					<?php } ?>
				</select>
			</div>
			
			<div class="col-md-12 form-group" style="margin-top: 20px">
				<label for="mensagem"><span data-i18n="contato.mensagem"></span></label>
				<textarea name="mensagem" id="mensagem" class="form-control main" rows="10" placeholder="&#xf075" required></textarea>
			</div>
			
			<div class="col-12 text-center">
				<button type="submit" class="btn btn-main-md"><span data-i18n="contato.send"></span></button>
			</div>
		</form>
	</div>
</section>

<!--====  End of About  ====-->

<!--============================
=            Footer            =
=============================-->

<?php 
	include_once ("footer.php");
?>
</body>

</html>



