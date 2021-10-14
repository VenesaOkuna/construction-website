new google.maps.Map(document.getElementById("map"), {
    zoom,
    center,
    minZoom: zoom - 3,
    maxZoom: zoom + 3,
    restriction: {
      latLngBounds: {
        north: -10,
        south: -40,
        east: 160,
        west: 100,
      },
    },
  });
  

  // var responsiveSlider = function() {

  //   var slider = document.getElementById("slider");
  //   var sliderWidth = slider.offsetWidth;
  //   var slideList = document.getElementById("slideWrap");
  //   var count = 1;
  //   var items = slideList.querySelectorAll("li").length;
  //   var prev = document.getElementById("prev");
  //   var next = document.getElementById("next");
    
  //   window.addEventListener('resize', function() {
  //     sliderWidth = slider.offsetWidth;
  //   });
  //   setInterval(function() {
  //     nextSlide()
  //   }, 8000);
    
  //   };
  //   window.onload = function() {
  //     responsiveSlider();  
  //     }