$(document).ready(function() {
  ochre.init();
  console.log('ochre.init')
});

// Just in case the #main content hasn't been fully loaded
$(window).load(function() {
  console.log('ochre.display')

  ochre.display();

});

$(window).resize(function() {
  ochre.resize();
  console.log('resize')
});

var ochre = {


  resize: function() {

    // The width is the width of the image, and the algorithm chooses the best fit.
    $(".foo").backstretch([
      [
        { width: 1080, url: "path/to/image1_1080.jpg" },
        { width: 720, url: "path/to/image1_720.jpg" },
        { width: 320, url: "path/to/image1_320.jpg" }
      ],
      [
        { width: 1080, url: "path/to/image2_1080.jpg" },
        { width: 720, url: "path/to/image2_720.jpg" },
        { width: 320, url: "path/to/image2_320.jpg" }
      ]
    ]);

    ochre.display();

  },

  display: function() {

  }


};
