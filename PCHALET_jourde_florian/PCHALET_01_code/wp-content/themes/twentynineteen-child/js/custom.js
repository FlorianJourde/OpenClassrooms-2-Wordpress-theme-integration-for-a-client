window.onscroll = function() { myFunction() };

function myFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    console.log('>50');
    // document.getElementById("myP").className = "test";
  } else {
    console.log('0');
    // document.getElementById("myP").className = "";
  }
}