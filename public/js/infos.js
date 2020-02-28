/*jshint esversion: 6 */
const carddiv = document.getElementById("carddiv");
const searchdiv = document.getElementById("searchdiv");
const card = document.getElementById("card");
const panier = document.getElementById("panier");
const search = document.getElementById("searchli");
const closecard = document.getElementById("close");
const removeccard = document.querySelectorAll(".removeccard");
const lang = document.querySelector("#lang");
const langdrop = document.querySelector("#lang .dropme");
const devis = document.querySelector("#devis");
const devisdrop = document.querySelector("#devis .dropme");
console.log(panier, search);
lang.addEventListener("mouseover", () => {
  langdrop.style.display = "block";
});
lang.addEventListener("mouseout", () => {
  langdrop.style.display = "none";
});
devis.addEventListener("mouseover", () => {
  devisdrop.style.display = "flex";
});
devis.addEventListener("mouseout", () => {
  devisdrop.style.display = "none";
});
panier.addEventListener("click", () => {
  carddiv.style.display = "block";
});
closecard.addEventListener("click", () => {
  carddiv.style.display = "none";
});
search.addEventListener("click", () => {
  searchdiv.style.display = "block";
});
carddiv.style.height = window.innerHeight + "px";
searchdiv.style.height = window.innerHeight + "px";
removeccard.forEach(element => {
  element.addEventListener("click", () => {
    $(element.parentElement).remove();
  });
});
$(carddiv).on("click", function(e) {
  if (e.target === carddiv) {
    carddiv.style.display = "none";
  }
});
$(searchdiv).on("click", function(e) {
  if (e.target === searchdiv) {
    searchdiv.style.display = "none";
  }
});
window.onresize = () => {
  carddiv.style.height = window.innerHeight + "px"; //this is for the card to get the 100% height
  searchdiv.style.height = window.innerHeight + "px"; //this is for the card to get the 100% height
};

const removeccardbody = document.querySelectorAll(".closecardprod");
if (removeccardbody != null) {
  removeccardbody.forEach(element => {
    element.addEventListener("click", () => {
      $(element.parentElement).remove();
    });
  });
}
