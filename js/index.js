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

// -----

document.querySelector("form").addEventListener("click", function(evt) {
  if (evt.target.tagName === "INPUT") {
    translator.load(evt.target.value);
  }
});
