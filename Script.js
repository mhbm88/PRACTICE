let irani = document.getElementById("irani");
let fastfood = document.getElementById("fastfood");
let pish = document.getElementById("pish");
let liq = document.getElementById("liq");

function hideAll() {
    irani.classList.add("hide");
    fastfood.classList.add("hide");
    pish.classList.add("hide");
    liq.classList.add("hide");
};

function showIrani() {
hideAll();
irani.classList.remove("hide");
};

function showFast() {
hideAll();
fastfood.classList.remove("hide");
};

function showPish() {
hideAll();
pish.classList.remove("hide");
};

function showLiq() {
hideAll();
liq.classList.remove("hide");
};

