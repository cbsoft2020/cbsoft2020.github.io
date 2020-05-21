<script>
  // Change country flag
  function toggleImage(inputImg) {
    var aboutImg = document.getElementById("about-natal");
    var img1   = "images/icon/en.png";
    var img2   = "images/icon/pt.png";
    var source = inputImg.getAttribute('src');

    // Identifica a página atual
    var url = window.location.pathname;
    var absoluto = url.split("/")[url.split("/").length -1];
    
    if (source === img1) {
      inputImg.src   = img2;
      inputImg.value = "en";

      // Se estiver na página sobre Natal
      if(absoluto === "sobre-natal.php")
        aboutImg.src = "images/quick-facts/qf1-en.png"; // Imagem da página sobre Natal português
    } else {
      inputImg.src   = img1;
      inputImg.value = "pt";

      if(absoluto === "sobre-natal.php")
        aboutImg.src = "images/quick-facts/qf1-br.png"; // Imagem da página sobre Natal inglês
    }
  }
</script>
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CBSoft 2020 | XI Congresso Brasileiro de Software</title>
  
  <!-- PLUGINS CSS STYLE -->
  <!-- Bootstrap -->
  <link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Themefisher Font -->  
  <link href="plugins/themefisher-font/style.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="plugins/font-awsome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Magnific Popup -->
  <link href="plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
  <!-- Slick Carousel -->
  <link href="plugins/slick/slick.css" rel="stylesheet">
  <link href="plugins/slick/slick-theme.css" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="css/style.css" rel="stylesheet">

  <!-- FAVICON -->
  <link href="images/favicon.png" rel="shortcut icon">
	
  <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
	
  <style type="text/css">
	  .modal-header {
		  height: 50px;
		  background-color: #f4b321;
	  }
	  .modal-body p, ol li {
		  color: black;
		  line-height: 20px;
		  font-size: 14.5px;
		  margin-bottom: 10px;
		  text-align: justify;
	  }
	  
	  #logo-sbc {
		  margin: -340px -30px;
	  }
	  
	  @media (min-width: 1020px) {
		  #announcement {
		  	  display: none;
	  	  }
	  }
	  
	  @media (min-width: 1584px) {
		  #logo-sbc {
		  	  margin: -315px -90px;
	  	  }
	  }

	  @media (min-width: 1920px) {
		  #logo-sbc {
			  margin: -290px -150px;
		  }
	  }
	  
	  #datas-sbes tr td p span::before {
		  content: "\A";
		  white-space: pre;
	  }
  </style>

</head>