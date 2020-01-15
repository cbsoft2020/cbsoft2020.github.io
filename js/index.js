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
