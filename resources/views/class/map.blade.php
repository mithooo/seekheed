@extends('layouts.class')
@section('styles')
    <style>
        @charset "utf-8";

        /* CSS Document */
        body {
            margin: 0;
            background-color: #B7B7F2;
        }

        #at_clocks {
            width: 400px;
            margin: 0 auto;
            text-align: center;
        }

        #at_clocks #clock {
            display: block;
            margin: 0 auto;
        }

        #at_clocks select {
            margin: 5px auto 0;
            padding: 0.2em;
            border-radius: 1.4em;
        }

        #at_clocks option {
            color: #999;
        }

        #at_clocks option:selected {
            color: #DDD;
        }

        #clock {
            width: 300px;
        }

    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-3 ">
            <H1>World Clock</H1>

            <section id="at_clocks">
                <div>
                    <canvas id="clock" width="800" height="800">Sorry, your browser doesn't support the Canvas
                        element</canvas>
                    <select id="cityChoose0" class="selectBox" class="custom-select form-control">
                        <option value="" selected>choose city</option>
                        <option value="Europe/Athens">Athene</option>
                        <option value="Asia/Bangkok">Bangkok</option>
                        <option value="Europe/Budapest">Boedapest</option>
                        <option value="America/Buenos_Aires">Buenos Aires</option>
                        <option value="Africa/Cairo">Cairo</option>
                        <option value="America/Chicago">Chicago</option>
                        <option value="Asia/Damascus">Damascus</option>
                        <option value="Europe/Istanbul">Istanbul</option>
                        <option value="Europe/London">London</option>
                        <option value="Australia/Melbourne">Melbourne</option>
                        <option value="Europe/Moscow">Moskou</option>
                        <option value="America/New_York">New York</option>
                        <option value="Europe/Prague">Praag</option>
                        <option value="Atlantic/Reykjavik">Reykjavik</option>
                        <option value="America/Sao_Paulo">Sao Paulo</option>
                        <option value="Australia/Sydney">Sydney</option>
                        <option value="Asia/Tokyo">Tokyo</option>
                        <option value="Africa/Tunis">Tunis</option>
                        <option value="America/Vancouver">Vancouver</option>
                        <option value="America/Curacao">Willemstad</option>
                    </select>
                </div>

            </section>
        </div>
        <div class="col-md-9">
            <div id='map-canvas' height="100%">
                Google Map will go here!.
              </div>
        </div>




    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="http://tzdata-javascript.org/tzdata-javascript.js"></script>
    <script type='text/javascript'
    src='https://maps.googleapis.com/maps/api/js?key='>
    <script>
        window.onload = getMyL  ocation;

        var map;

        function getMyLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(displayLocation);
            } else {
                alert('Oops, no geolocation support');
            }
        }

        //This function is inokved asynchronously by the HTML5 geolocation API.
        function displayLocation(position) {
            //The latitude and longitude values obtained from HTML 5 API.
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;

            //Creating a new object for using latitude and longitude values with Google map.
            var latLng = new google.maps.LatLng(latitude, longitude);

            showMap(latLng);

            addNearByPlaces(latLng);
            createMarker(latLng);

            //Also setting the latitude and longitude values in another div.
            var div = document.getElementById('location');
            div.innerHTML = 'You are at Latitude: ' + latitude + ', Longitude: ' + longitude;
        }

        function showMap(latLng) {
            //Setting up the map options like zoom level, map type.
            var mapOptions = {
                center: latLng,
                zoom: 18,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            //Creating the Map instance and assigning the HTML div element to render it in.
            map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        }

        function addNearByPlaces(latLng) {

            var nearByService = new google.maps.places.PlacesService(map);

            var request = {
                location: latLng,
                radius: 1000,
                types: ['food', 'bakery', 'cafe', 'grocery_or_supermarket', 'meal_delivery', 'restaurant',
                    'meal_takeaway', 'shopping_mall'
                ]
            };

            nearByService.nearbySearch(request, handleNearBySearchResults);
        }

        function handleNearBySearchResults(results, status) {
            if (status == google.maps.places.PlacesServiceStatus.OK) {
                for (var i = 0; i < results.length; i++) {
                    var place = results[i];
                    createMarker(place.geometry.location, place);
                }
            }
        }

        function createMarker(latLng, placeResult) {
            var markerOptions = {
                position: latLng,
                map: map,
                animation: google.maps.Animation.DROP,
                clickable: true
            }
            //Setting up the marker object to mark the location on the map canvas.
            var marker = new google.maps.Marker(markerOptions);

            if (placeResult) {
                var content = placeResult.name + '<br/>' + placeResult.vicinity + '<br/>' + placeResult.types;
                addInfoWindow(marker, latLng, content);
            } else {
                var content = 'You are here: ' + latLng.lat() + ', ' + latLng.lng();
                addInfoWindow(marker, latLng, content);
            }

        }

        function addInfoWindow(marker, latLng, content) {
            var infoWindowOptions = {
                content: content,
                position: latLng
            };

            var infoWindow = new google.maps.InfoWindow(infoWindowOptions);

            google.maps.event.addListener(marker, 'click', function() {
                infoWindow.open(map);
            });
        }
    </script>
    <script>
        var at_clock = {
            style: {
                bgColor1: "#FFF",
                bgColor2: "#AAA",
                edgeColor: "#666",
                shadow: "#555",
                bgColorS: "#666",
                colorS: "#FFF",
                logo: "World Clock" //Here you can change the logo of the large clock
            },

            themes: function() {
                style = at_clock.style; //You can change the THEME Here. Available:
                theme = "GREY" //GREY - BLUE - RED - DARK
                switch (theme) {
                    case "GREY":
                        style.bgColor1 = "#FFF";
                        style.bgColor2 = "#AAA";
                        style.edgeColor = "#666";
                        style.shadow = "#555";
                        style.bgColorS = "#666";
                        style.colorS = "#FFF";
                        break;

                    case "BLUE":
                        style.bgColor1 = "#00F";
                        style.bgColor2 = "#33F";
                        style.edgeColor = "#FFF";
                        style.shadow = "#006";
                        style.bgColorS = "#00F";
                        style.colorS = "#99F";
                        break;

                    case "RED":
                        style.bgColor1 = "#F22";
                        style.bgColor2 = "#F55";
                        style.edgeColor = "#000";
                        style.shadow = "#660000";
                        style.bgColorS = "#F00";
                        style.colorS = "#F99";
                        break;

                    case "DARK":
                        style.bgColor1 = "#333";
                        style.bgColor2 = "#555";
                        style.edgeColor = "#000";
                        style.shadow = "#333";
                        style.bgColorS = "#333";
                        style.colorS = "#999";
                        break;

                    default:
                        style.bgColor1 = "#FFF";
                        style.bgColor2 = "#AAA";
                        style.edgeColor = "#666";
                        style.shadow = "#555";
                        style.bgColorS = "#AAA";
                        style.colorS = "#FFF";
                        break;
                }

                selectBoxes = document.getElementsByClassName("selectBox");
                selectBoxes[0].style.backgroundColor = style.bgColorS;
                selectBoxes[0].style.color = style.colorS;
            },

            init: function() {
                clock = document.getElementById("clock");
                ctx = clock.getContext('2d');
                canvasWidth = clock.width;
                canvasHeight = clock.height;
                canvasMiddleX = canvasWidth / 2;
                canvasMiddleY = canvasHeight / 2;
                ctx.translate(canvasMiddleX, canvasMiddleY);

                setInterval(at_clock.updateClock, 1000);
                at_clock.themes();
            },

            updateClock: function() {
                at_clock.getCurrentTime();
            },

            getCurrentTime: function() {
                dagen = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
                maanden = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
                clockSize = document.getElementById("clock").width * 0.45;

                selectBox = document.getElementById("cityChoose0");
                selectedCity = selectBox.options[selectBox.selectedIndex].value;

                if (selectedCity == '') {
                    currentTime = new Date();
                    amPm = currentTime.getHours() < 12 ? "AM" : "PM";
                    hours = currentTime.getHours() % 12;
                    minutes = currentTime.getMinutes();
                    seconds = currentTime.getSeconds();
                    dayOfWeek = dagen[currentTime.getDay()];
                    date = currentTime.getDate().toString();
                    month = maanden[currentTime.getMonth()];
                    cityName = at_clock.style.logo;
                } else {
                    timeHere = new Date().valueOf();

                    selectBox = document.getElementById("cityChoose0");
                    selectedCity = selectBox.options[selectBox.selectedIndex].value;
                    cityName = selectBox.options[selectBox.selectedIndex].text;

                    zone = new tzdata_javascript.zoneinfo(selectedCity);
                    time = zone.localtime(timeHere);
                    amPm = time.hour < 12 ? "AM" : "PM";
                    hours = time.hour % 12;
                    minutes = time.minute;
                    seconds = time.second;
                    dayOfWeek = dagen[time.weekday];
                    date = time.day.toString();
                    month = maanden[time.month];
                }

                at_clock.drawClock(clockSize, amPm, dayOfWeek, date, month, cityName);
                at_clock.hourHand(clockSize, hours, minutes);
                at_clock.minuteHand(clockSize, minutes);
                at_clock.secondHand(clockSize, seconds);
                at_clock.drawKnob(clockSize);
            },

            drawClock: function(size, amPm, dayOfWeek, date, month, cityName) {
                style = at_clock.style;
                clock = document.getElementById("clock");
                ctx = clock.getContext('2d');
                gradient = ctx.createRadialGradient(0, 0, 0, 0, 0, size);
                gradient.addColorStop(0, style.bgColor1);
                gradient.addColorStop(0.94, style.bgColor2);
                gradient.addColorStop(1, "#000");
                ctx.strokeStyle = style.edgeColor;
                ctx.fillStyle = gradient;
                ctx.lineWidth = 0.06 * size;
                ctx.beginPath();
                ctx.arc(0, 0, size, 0, 2 * Math.PI);
                ctx.fill();
                ctx.stroke();
                ctx.save();

                for (i = 0; i < 60; i++) {
                    ctx.lineWidth = i % 15 === 0 ? 0.018 * size : 0.005 * size;
                    if (i % 5 === 0) {
                        ctx.strokeStyle = "#000";
                        ctx.beginPath();
                        ctx.moveTo(0, -(0.75 * size));
                    } else {
                        ctx.strokeStyle = "#DDD";
                        ctx.beginPath();
                        ctx.moveTo(0, -(0.8 * size));
                    }

                    ctx.lineTo(0, -(0.92 * size));
                    ctx.stroke();
                    ctx.rotate(at_clock.degreesToRadians(6));
                }

                ctx.restore();

                ctx.font = (0.1 * size) + "pt Arial";
                ctx.fillStyle = "#666";

                daySize = ctx.measureText(dayOfWeek);
                dateSize = ctx.measureText(date);

                ctx.fillText(dayOfWeek, -(0.18 * size) - daySize.width, 0.5 * size);
                ctx.fillText(date, (dateSize.width / 2) - dateSize.width, 0.5 * size);
                ctx.fillText(month, 0.18 * size, 0.5 * size);

                ctx.font = (0.07 * size) + "pt Arial";
                dayPeriodSize = ctx.measureText(amPm);
                ctx.fillText(amPm, (0.65 * size) - dayPeriodSize.width, (0.04 * size));

                ctx.font = (0.13 * size) + "pt Arial";
                ctx.fillStyle = "#999";
                cityNameSize = ctx.measureText(cityName);
                ctx.fillText(cityName, -(cityNameSize.width / 2), -(0.3 * size));
            },

            hourHand: function(size, hours, minutes) {
                rotation = at_clock.degreesToRadians((30 * hours) + (0.5 * minutes));
                shadowOffset = 0.012 * size;
                strokeColor = "#000";
                lineWidth = 0.04 * size;
                start = 0.05 * size;
                finish = -(0.6 * size);

                at_clock.drawHand(rotation, shadowOffset, strokeColor, lineWidth, start, finish);
            },

            minuteHand: function(size, minutes) {
                rotation = at_clock.degreesToRadians(6 * minutes);
                shadowOffset = 0.017 * size;
                strokeColor = "#000";
                lineWidth = 0.02 * size;
                start = 0.1 * size;
                finish = -(0.92 * size);

                at_clock.drawHand(rotation, shadowOffset, strokeColor, lineWidth, start, finish);
            },

            secondHand: function(size, seconds) {
                rotation = at_clock.degreesToRadians(6 * seconds);
                shadowOffset = 0.02 * size;
                strokeColor = "#F00";
                lineWidth = 0.01 * size;
                start = 0.15 * size;
                finish = -(0.75 * size);

                at_clock.drawHand(rotation, shadowOffset, strokeColor, lineWidth, start, finish);
            },

            drawHand: function(rotation, shadowOffset, strokeColor, lineWidth, start, finish) {
                clock = document.getElementById("clock");
                ctx = clock.getContext('2d');
                ctx.save();
                ctx.shadowColor = at_clock.style.shadow;
                ctx.shadowBlur = 10;
                ctx.shadowOffsetX = shadowOffset;
                ctx.shadowOffsetY = shadowOffset;
                ctx.rotate(rotation);
                ctx.strokeStyle = strokeColor;
                ctx.lineWidth = lineWidth;
                ctx.beginPath();
                ctx.moveTo(0, start);
                ctx.lineTo(0, finish);
                ctx.stroke();
                ctx.restore();
            },

            drawKnob: function(size) {
                clock = document.getElementById("clock");
                ctx = clock.getContext('2d');
                ctx.save();
                ctx.beginPath();
                ctx.shadowColor = at_clock.style.shadow;
                ctx.shadowBlur = 10;
                ctx.shadowOffsetX = 0.023 * size;
                ctx.shadowOffsetY = 0.023 * size;
                ctx.fillStyle = "#666";
                ctx.arc(0, 0, 0.05 * size, 0, 2 * Math.PI);
                ctx.fill();
                ctx.restore();
            },

            degreesToRadians: function(degrees) {
                return (Math.PI / 180) * degrees;
            }
        }

        at_clock.init();
    </script>
@endsection
