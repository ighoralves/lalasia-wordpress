const BtnMobile = document.getElementById("btn-mobile");

function toggleMenu() {
  const nav = document.getElementById("nav");
  nav.classList.toggle("active");
}

BtnMobile.addEventListener("click", toggleMenu);
