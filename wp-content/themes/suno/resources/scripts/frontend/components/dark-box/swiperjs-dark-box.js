/* eslint-disable no-unused-vars */
/* eslint-disable no-param-reassign */
/* eslint-disable no-undef */

function myFunction(x) {
  if (x.matches) {
    // If media query matches
    const swiper = new Swiper('.mySwiper.mySwiper--sunoDarkBox', {
      slidesPerView: 1,
      spaceBetween: 20,

      pagination: {
        el: '.swiper-pagination.swiper-pagination--sunoDarkBox',
        clickable: true,
      },
    });
  }
}

const x = window.matchMedia('(max-width: 1220px)');
myFunction(x); // Call listener function at run time
x.addListener(myFunction); // Attach listener function on state changes
