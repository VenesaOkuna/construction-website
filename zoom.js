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
  