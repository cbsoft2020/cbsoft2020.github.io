import Translator from "./translator.js";

var translator = new Translator({
  persist: true,
  languages: ["pt", "en"],
  defaultLanguage: "pt",
  detectLanguage: true,
  filesLocation: "/i18n"
});

translator.load();

// Carrega a página com a bandeira correta
var lang = translator.getLanguage();
var img = document.getElementById("toggleImage");

img.src = (lang == "pt") ? "images/icon/en.png" : "images/icon/pt.png";

// Figura da página sobre Natal
var url = window.location.pathname;
var absoluto = url.split("/")[url.split("/").length -1];
// Se estiver na página sobre Natal, troca a imagem
if(absoluto === "sobre-natal.php"){
  var aboutImg = document.getElementById("about-natal");
  aboutImg.src = (lang == "pt") ? "images/quick-facts/qf1-br.png" : "images/quick-facts/qf1-en.png";
}

// -----

document.querySelector("form").addEventListener("click", function(evt) {
  if (evt.target.tagName === "INPUT") {
    translator.load(evt.target.value);
  }
});

// -----

$(document).ready(function(){
	function alignModal(){
        var modalDialog = $(this).find(".modal-dialog");
        /* Applying the top margin on modal dialog to align it vertically center */
        modalDialog.css("margin-top", Math.max(0, ($(window).height() - modalDialog.height()) / 2));
    }
	
    // Align modal when it is displayed
    $(".modal").on("shown.bs.modal", alignModal);
    
    // Align modal when user resize the window
    $(window).on("resize", function(){
        $(".modal:visible").each(alignModal);
    });
	
  	$("#nota").modal('show');
});
