window.addEventListener("load", function() {
  let navbar = document.getElementById('masthead');

  isScrollTop(navbar);

  window.addEventListener("scroll", function() {
    isScrollTop(navbar);
  });

  function isScrollTop(e) {
    if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 0) {
      e.classList.add('visible-navbar');
    } else {
      e.classList.remove('visible-navbar');
    }
  }
});