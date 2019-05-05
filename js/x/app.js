// jQuery(function ($) {

$(document).ready(function() {
  // ochre.init();
  // console.log('ochre.init')
  backstretchIt();
});

// Just in case the #main content hasn't been fully loaded
$(window).load(function() {
  console.log('ochre.display')
  ochre.display();



});

$(window).resize(function() {
  ochre.resize();
  console.log('resize')
  backstretchIt();
});

function backstretchIt(){
  // The width is the width of the image, and the algorithm chooses the best fit.
  $("#shape-tl").backstretch([
    [
      { width: 1080, url: "http://localhost:8081/wordpress/wp-content/themes/ochre-wp/assets/tile.png" },
      { width: 720, url: "http://localhost:8081/wordpress/wp-content/themes/ochre-wp/assets/tile.png" },
      { width: 320, url: "http://localhost:8081/wordpress/wp-content/themes/ochre-wp/assets/sm_tile.png" }
    ]
  ]);
}


var ochre = {

  resize: function() {
    ochre.display();
  },

  display: function() {
  }

};
