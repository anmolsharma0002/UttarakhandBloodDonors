 function initMap() {
        var uttarakhand = {lat: 30.0668, lng: 79.0193};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 8,
          center: uttarakhand
        });
        var marker = new google.maps.Marker({
          position: uttarakhand,
          map: map
        });
      }
    