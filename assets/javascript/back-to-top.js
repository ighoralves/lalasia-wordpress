const backToTopButton = document.querySelector(".Back-to-top");

function backToTop() {
  if (window.scrollY >= 560) {
    backToTopButton.classList.add("show");
  } else {
    backToTopButton.classList.remove("show");
  }
}
// backToTop();

// alert("hi");
