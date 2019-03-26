// const GO_BTN = document.querySelector('body .map-list-option');
const CONVERSION = document.querySelector('body .landing-page .conversion');
const CALCULATE = document.querySelector('body .landing-page .calculate');

// LOCATIONS
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

    // Initialize Slick Slider
    $(document).ready(function() {

        // after establishing the value of user input we can convert and
        // change the content to valid or non valid amount
        CALCULATE.addEventListener('click', function() {

            // get input every click
            let userInp = document.querySelector('body .landing-page .userInp');

            // take input innerHTML
            let userNum = userInp.value;
            console.log(userNum);

            if (isPosNum(userNum) !== true) {
                CONVERSION.innerHTML = `Please enter a valid number.`;
            } else {
                if (userNum <= 30000) {
                    CONVERSION.innerHTML = `$${userNum} is a qualified income!`;
                } else {
                    CONVERSION.innerHTML = `Sorry, $${userNum} is too high an income.`;
                }
                userInp.value = "";
            }

        });
        $("#article_box02").hide();
        $("#article_box03").hide();

        function isPosNum(num) {
            return !isNaN(num) && num > 0;
        }

        // Leaflet Map
        var mymap = L.map('leafletMap').setView([43.848900, -79.020986], 16);

        // Map settings
        L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            maxZoom: 17,
            minZoom: 14,
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox.streets'
        }).addTo(mymap);

        // Create new array to store data locations and their popUp structure
        let locations = [];

        // For all location items, add them to a location array with different map options...
        // - Take the dataLocations and use the values to assign popUp structure
        for (i = 0; i < dataLocations.length; i++) {
            locations[i] = L.marker(dataLocations[i].location).addTo(mymap);
            locations[i].bindPopup(`<div id="hotel${i}">
      <h4>${dataLocations[i].name}</h4>
      <h5>${dataLocations[i].address}</h5>
      <h6>${dataLocations[i].desc}</63>
      </div>`);
        }


        // Sample circle
        // L.circle([43.849875, -79.035955], 250, {
        //   color: 'red',
        //   fillColor: '#f03',
        //   fillOpacity: 0.5
        // }).addTo(mymap).bindPopup("I am a circle.");

        // Sample Polygon
        // L.polygon([
        //   [43.847079, -79.021547],
        //   [43.846071, -79.019101],
        //   [43.848038, -79.018435]
        // ]).addTo(mymap).bindPopup("I am a polygon.");


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
                `<div class="map-list-option" data-id="${i}" data-name='${dataLocations[i].id}' id='${dataLocations[i].id}'>
      <h3>${dataLocations[i].name}</h3>
      <h4>${dataLocations[i].address}</h4>
      </div>`;
        }

        $("#map-list").html(content);

        // add active to first item
        $('body #DivFinGrp').attr('class', 'map-list-option active');

        // -------     C O N T R O L L E R     -------
        $(document).on("click", "body .map-list-option", function(e) {
            $('body .map-list-option').attr('class', 'map-list-option');
            $(this).attr('class', 'map-list-option active');
            content = "";
            var id = $(this).attr("data-id");
            var name = $(this).attr("data-name");
            // console.log(`ID: ${id}\nName: ${name}`);

            content = `<h3>${dataLocations[id].name}</h3>
      <h4>${dataLocations[id].address}</h4>
      <p>${dataLocations[id].desc}</p>`;
            doMoveMap(id, mymap, name, locations);


            $("#map-info").html(content);
        });

        (function animateIntro() {

            $("#main_site_title").delay(250).animate({
                opacity: 1
            }, 500);

            $(".fadeOn").delay(500).animate({
                opacity: 1
            }, 250);

            let t1 = new TimelineMax({
                delay: 1,
                repeat: -1,
                ease: Power1.easeOut
            });

            t1.to("#main_img_chara1", 1, {
                    opacity: 0,
                    delay: 1
                })
                .to("#main_img_chara2", 1, {
                    opacity: 1
                })
                .to("#main_img_chara2", 1, {
                    opacity: 0,
                    delay: 2
                })
                .to("#main_img_chara3", 1, {
                    opacity: 1
                })
                .to("#main_img_chara3", 1, {
                    opacity: 0,
                    delay: 2
                })
                .to("#main_img_chara4", 1, {
                    opacity: 1
                })
                .to("#main_img_chara4", 1, {
                    opacity: 0,
                    delay: 2
                })
                .to("#main_img_chara1", 1, {
                    opacity: 1
                });



        })();

        // FINANCIAL EMPOWERMENT
        $("#cost").hide();
        $("#credit").hide();
        $("#overview").show();
        $("#tax").hide();
        $("#bond").hide();
        $("#arrow1").hide();
        $("#arrow2").hide();
        $("#arrow3").hide();
        $("#arrow4").hide();

        $(".one").click(function() {

            $("#cost").show();
            $("#overview").hide();
            $("#credit").hide();
            $("#tax").hide();
            $("#bond").hide();
            $("#arrow1").show();
            $("#arrow2").hide();
            $("#arrow3").hide();
            $("#arrow4").hide();


        });
        $(".two").click(function() {

            $("#credit").show();
            $("#overview").hide();
            $("#cost").hide();
            $("#tax").hide();
            $("#bond").hide();
            $("#arrow2").show();
            $("#arrow1").hide();
            $("#arrow3").hide();
            $("#arrow4").hide();

        });
        $(".three").click(function() {

            $("#tax").show();
            $("#overview").hide();
            $("#cost").hide();
            $("#credit").hide();
            $("#bond").hide();
            $("#arrow3").show();
            $("#arrow2").hide();
            $("#arrow4").hide();
            $("#arrow1").hide();

        });
        $(".four").click(function() {

            $("#bond").show();
            $("#overview").hide();
            $("#cost").hide();
            $("#credit").hide();
            $("#tax").hide();
            $("#arrow4").show();
            $("#arrow3").hide();
            $("#arrow2").hide();
            $("#arrow1").hide();

        });

        $(".navbar a, .navbar li,.menu").click(function() {

            if ($(this).attr("data-click-state") == 1) {


                $(this).attr("data-click-state", 0);

                TweenMax.to(".slide-right", 0.5, {
                    x: 0,
                    ease: Sine.easeOut

                });

            } else {

                $(this).attr("data-click-state", 1);



                TweenMax.to(".slide-right", 0.5, {
                    x: -500,
                    ease: Sine.easeOutS


                });
            }


        });

        // HOW TO QUALIFY
        $(function() {

            $("#eligible_btn").addClass("qualify_button_selected");

            $("#eligible_btn").click(function() {
                $("#article_box01").fadeIn();
                $("#article_box02").fadeOut();
                $("#article_box03").fadeOut();

                $("#eligible_btn").addClass("qualify_button_selected");
                $("#eligible_btn").removeClass("qualify_button_deselected");

                $("#receipts_btn").addClass("qualify_button_deselected");
                $("#receipts_btn").removeClass("qualify_button_selected");

                $("#infoSlips_btn").addClass("qualify_button_deselected");
                $("#infoSlips_btn").removeClass("qualify_button_selected");

            });



            $("#receipts_btn").click(function() {
                // Remove Classes

                $("#article_box01").fadeOut();
                $("#article_box02").fadeIn();
                $("#article_box03").fadeOut();

                $("#receipts_btn").addClass("qualify_button_selected");
                $("#receipts_btn").removeClass("qualify_button_deselected");

                $("#eligible_btn").addClass("qualify_button_deselected");
                $("#eligible_btn").removeClass("qualify_button_selected");

                $("#infoSlips_btn").addClass("qualify_button_deselected");
                $("#infoSlips_btn").removeClass("qualify_button_selected");


            });


            $("#infoSlips_btn").click(function() {
                $("#article_box01").fadeOut();
                $("#article_box02").fadeOut();
                $("#article_box03").delay(100).fadeIn();

                $("#infoSlips_btn").addClass("qualify_button_selected");
                $("#infoSlips_btn").removeClass("qualify_button_deselected");

                $("#eligible_btn").addClass("qualify_button_deselected");
                $("#eligible_btn").removeClass("qualify_button_selected");

                $("#receipts_btn").addClass("qualify_button_deselected");
                $("#receipts_btn").removeClass("qualify_button_selected");
            });

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

    }



    // N A V   C O N T R O L L E R

    $('.title-bar').click(function() {
        // get the menu
        let menu = document.querySelector('.row .top-bar');

        // if menu is opened
        if (menu.classList.contains("opened")) {
            $('.top-bar')
                .removeClass("opened")
                .slideUp(1000);

            $("#masthead nav")
                .animate({
                    width: '40px'
                }, 1000);

            $(".title-bar")
                .removeClass("opened");

            $(".title-bar-title")
                .fadeOut(1000);


        } else {
            $('.top-bar')
                .css('height', '150px')
                .addClass("opened")
                .slideDown(1000);

            $("#masthead nav")
                .animate({
                    width: '20%',
                }, 1000);

            $(".title-bar")
                .addClass("opened");

            $(".title-bar-title")
                .fadeIn(1000);

        }

    });

    // list items
    const li1 = document.querySelector('#menu-main-navigation li:nth-child(1) a');
    const li2 = document.querySelector('#menu-main-navigation li:nth-child(2) a');

    // list content
    let li1_content = '<img class="icon" src="http://durham-tax-help.local/wp-content/uploads/2019/03/home_icon.png" alt="">Home Page';
    let li2_content = '<img class="icon" src="http://durham-tax-help.local/wp-content/uploads/2019/03/volunteer_icon.png" alt="">Contact Page';

    // add icons to nav
    li1.innerHTML = li1_content;
    li2.innerHTML = li2_content;



    // Financial Empowerment Controllers
    $("#sideNav li").click(function() {
        let list = document.querySelectorAll("#sideNav li"); // grab li's
        console.log(list); // show all the li's (array)

        list.forEach(function(i) {
            console.log(i); // items in array
            i.classList.remove("activeEmp"); // remove active
        })

        // add class if already active or not
        if (this.classList.contains("activeEmp")) {
            // this.classList.remove("active");
            console.log("already active");
        } else {
            this.classList.add("activeEmp");
            console.log("made active");
        }
    });

    // Testimonial cards
    const nCards = document.querySelectorAll(".testimonials-page .card");
    console.log(nCards);



})(jQuery);