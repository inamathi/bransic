function initMap() {

        var map = new google.maps.Map(document.getElementById('access-map'), {

          center: {lat: 35.696849, lng: 139.684820},

          zoom: 18,

          styles: [

// stylesの直後にペースト

  ]

   });

var iconBase = '';
var icons = [
  {
    name: 'signsound',
    position: new google.maps.LatLng(35.696849, 139.684820),
    img: { url: iconBase + 'http://test.webport.co.jp/signsound/wp-content/themes/wordpress/images/pins/signsound-pin.png', scaledSize : new google.maps.Size(48, 62) }
  },
  {
    name: 'p1',
    position: new google.maps.LatLng(35.697199, 139.686338),
    img: { url: iconBase + 'http://test.webport.co.jp/signsound/wp-content/themes/wordpress/images/pins/pins1.png', scaledSize : new google.maps.Size(36, 36) }
  },
  {
    name: 'p2',
    position: new google.maps.LatLng(35.695961, 139.684589),
    img: { url: iconBase + 'http://test.webport.co.jp/signsound/wp-content/themes/wordpress/images/pins/pins2.png', scaledSize : new google.maps.Size(36, 36) }
  },
  {
    name: 'p3',
    position: new google.maps.LatLng(35.695996, 139.683210),
    img: { url: iconBase + 'http://test.webport.co.jp/signsound/wp-content/themes/wordpress/images/pins/pins3.png', scaledSize : new google.maps.Size(36, 36) }
  },
  {
    name: 'p4',
    position: new google.maps.LatLng(35.697681, 139.685913),
    img: { url: iconBase + 'http://test.webport.co.jp/signsound/wp-content/themes/wordpress/images/pins/pins4.png', scaledSize : new google.maps.Size(36, 36) }
  },
  {
    name: 'p5',
    position: new google.maps.LatLng(35.698020, 139.684236),
    img: { url: iconBase + 'http://test.webport.co.jp/signsound/wp-content/themes/wordpress/images/pins/pins5.png', scaledSize : new google.maps.Size(36, 36) }
  },
  {
    name: 'p6',
    position: new google.maps.LatLng(35.697636, 139.684172),
    img: { url: iconBase + 'http://test.webport.co.jp/signsound/wp-content/themes/wordpress/images/pins/pins6.png', scaledSize : new google.maps.Size(36, 36) }
  },
  {
    name: 'p7',
    position: new google.maps.LatLng(35.695660, 139.685586),
    img: { url: iconBase + 'http://test.webport.co.jp/signsound/wp-content/themes/wordpress/images/pins/pins7.png', scaledSize : new google.maps.Size(36, 36) }
  }
];
icons.forEach(function(icon) {
  var marker = new google.maps.Marker({
    position: icon.position,
    icon: icon.img,
    map: map,
    title: icon.name
  });
});

}