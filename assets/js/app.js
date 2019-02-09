const GO_BTN = document.querySelector('body .map-list-option');
let dataLocations = [{
  name: "Diverse Financial Group",
  id: "DivFinGrp",
  location: [43.894260, -78.868295],
  lat: 43.894260,
  lng: -78.868295,
  address: "190 Harwood Avenue South (inside G Centre), Ajax",
  desc: "By apointment only Current and prior year returns call 647-887-8725"
}, {
  name: "Durham Community Legal Clinic",
  id: "DurComLegClin",
  location: [43.848900, -79.020986],
  lat: 43.848900,
  lng: -79.020986,
  address: "200 John Street West, Unit B1, Oshawa",
  desc: "By apointment only Current and prior year returns call 905-728-7321 ext. 259"
}, {
  name: "Ontario Works (Oshawa)",
  id: "ONWrksOS",
  location: [43.894231, -78.868267],
  lat: 43.894231,
  lng: -78.868267,
  address: "200 John Street West, unit c1a, Oshawa, ON L1J 2B4",
  desc: "Oshawa office: 905-436-6747 ext. 5208"
}, {
  name: "Ontario Works (Whitby)",
  id: "ONWrksWT",
  location: [43.898619, -78.940669],
  lat: 43.898619,
  lng: -78.940669,
  address: "605 Rossland Rd E, Whitby, ON L1N 6A3",
  desc: "Whitby office: 905-666-6239 ext. 2722"
}, {
  name: "Ontario Works (Ajax)",
  id: "ONWrksAJ",
  location: [43.848012, -79.022613],
  lat: 43.848012,
  lng: -79.022613,
  address: "140 Commercial Ave, Ajax, ON L1S 2H5",
  desc: "Ajax office: 905-428-7400 ext. 6606"
}, {
  name: "Local Diversity & Immigration Partnership Council",
  id: "LocDivImPrtCnc",
  location: [43.898603, -78.940277],
  lat: 43.898603,
  lng: -78.940277,
  address: "605 Rossland Rd. E.",
  desc: "P. O. Box 623\nWhitby, ON L1N 6A3"
}];
(function($) {

  $(document).ready(function() {

    $('.slider').slick({
      dots: true,
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      adaptiveHeight: true
    });


    // Leaflet Map
    var mymap = L.map('leafletMap').setView([43.848900, -79.020986], 16);

    L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
      maxZoom: 18,
      minZoom: 13,
      attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
        '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
      id: 'mapbox.streets'
    }).addTo(mymap);

    let locations = []

    // For all location items, add them to a location array with different map options...
    for (i = 0; i < dataLocations.length; i++) {
      locations[i] = L.marker(dataLocations[i].location).addTo(mymap);
      locations[i].bindPopup(`<div id="hotel${i}">
      <h1>${dataLocations[i].name}</h1>
      <h2>${dataLocations[i].address}</h2>
      <h3>${dataLocations[i].desc}</h3>
      </div>`)
    }

    // Sample circle
    L.circle([43.849875, -79.035955], 250, {
      color: 'red',
      fillColor: '#f03',
      fillOpacity: 0.5
    }).addTo(mymap).bindPopup("I am a circle.");

    // Sample Polygon
    L.polygon([
      [43.847079, -79.021547],
      [43.846071, -79.019101],
      [43.848038, -79.018435]
    ]).addTo(mymap).bindPopup("I am a polygon.");


    var popup = L.popup();

    function onMapClick(e) {
      popup
        .setLatLng(e.latlng)
        .setContent("You clicked the map at " + e.latlng.toString())
        .openOn(mymap);
    }

    mymap.on('click', onMapClick);


    // Initialize map to first location items
    // center view to the first location
    locations[0].openPopup();
    mymap
      .setView(new L.LatLng(dataLocations[0].lat, dataLocations[0].lng), 16, {
        animation: true
      });

    // Send list of locations to screen
    let content = "";
    for (var i = 0; i < locations.length; i++) {
      content +=
        `<div class="map-list-option" data-id="${i}" data-name='${dataLocations[i].id}'>
      <h3>${dataLocations[i].name}</h3>
      <h4>${dataLocations[i].address}</h4>
      </div>`;
    }

    $("#map-list").html(content);

    // -------     C O N T R O L L E R     -------
    $(document).on("click", "body .map-list-option", function(e) {
      content = "";
      var id = $(this).attr("data-id");
      var name = $(this).attr("data-name");
      // console.log(`ID: ${id}\nName: ${name}`);

      content = `<h1>${dataLocations[id].name}</h1>
      <h2>${dataLocations[id].address}</h2>
      <p>${dataLocations[id].desc}</p>`;
      doMoveMap(id, mymap, name, locations);


      $("#map-info").html(content);
    });
  });

  function doMoveMap(id, mymap, clinic, locations) {
    locations[id].openPopup();
    console.log(`ID(96): ${id}`);
    console.log(locations[id]._popup.openPopup());

    console.log(dataLocations[id].lng);
    mymap
      .setView(new L.LatLng(dataLocations[id].lat, dataLocations[id].lng), 16, {
        animation: true
      });

  };

})(jQuery);