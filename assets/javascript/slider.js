// core version + navigation, pagination modules:
import Swiper, { Navigation, Pagination } from "swiper";

// configure Swiper to use modules
Swiper.use([Navigation, Pagination]);

var swiper = new Swiper(".mySwiper", {
  breakpoints: {
    600: {
      slidesPerView: 2,
      setWrapperSize: true,
    },
  },
  spaceBetween: 30,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});
