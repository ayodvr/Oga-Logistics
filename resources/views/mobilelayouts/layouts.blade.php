<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.1/mapsjs-ui.css" />
    <script src="https://js.api.here.com/v3/3.1/mapsjs-core.js"></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-service.js"></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-ui.js"></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js"></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-clustering.js"></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-data.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('mobstyle/css/bootstrap.min.css')}}">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{asset('mobstyle/css/fontawesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors.css') }}" />
    <!-- app style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
    <!-- Main Style -->
    <link rel="stylesheet" href="{{asset('mobstyle/css/styles.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        #map-container {
            width: 100%;
            height: 400px;
            background: grey;
        }

        #current-location {
            font-size: 18px;
            margin-bottom: 10px;
        }
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');body{background-color: #eeeeee;font-family: 'Open Sans',serif}.container{margin-top:50px;margin-bottom: 50px}.card{position: relative;display: -webkit-box;display: -ms-flexbox;display: flex;-webkit-box-orient: vertical;-webkit-box-direction: normal;-ms-flex-direction: column;flex-direction: column;min-width: 0;word-wrap: break-word;background-color: #fff;background-clip: border-box;border: 1px solid rgba(0, 0, 0, 0.1);border-radius: 0.10rem}.card-header:first-child{border-radius: calc(0.37rem - 1px) calc(0.37rem - 1px) 0 0}.card-header{padding: 0.75rem 1.25rem;margin-bottom: 0;background-color: #fff;border-bottom: 1px solid rgba(0, 0, 0, 0.1)}.track{position: relative;background-color: #ddd;height: 7px;display: -webkit-box;display: -ms-flexbox;display: flex;margin-bottom: 60px;margin-top: 50px}.track .step{-webkit-box-flex: 1;-ms-flex-positive: 1;flex-grow: 1;width: 25%;margin-top: -18px;text-align: center;position: relative}.track .step.active:before{background: #FF5722}.track .step::before{height: 7px;position: absolute;content: "";width: 100%;left: 0;top: 18px}.track .step.active .icon{background: #ee5435;color: #fff}.track .icon{display: inline-block;width: 40px;height: 40px;line-height: 40px;position: relative;border-radius: 100%;background: #ddd}.track .step.active .text{font-weight: 400;color: #000}.track .text{display: block;margin-top: 7px}.itemside{position: relative;display: -webkit-box;display: -ms-flexbox;display: flex;width: 100%}.itemside .aside{position: relative;-ms-flex-negative: 0;flex-shrink: 0}.img-sm{width: 80px;height: 80px;padding: 7px}ul.row, ul.row-sm{list-style: none;padding: 0}.itemside .info{padding-left: 15px;padding-right: 7px}.itemside .title{display: block;margin-bottom: 5px;color: #212529}p{margin-top: 0;margin-bottom: 1rem}.btn-warning{color: #ffffff;background-color: #ee5435;border-color: #ee5435;border-radius: 1px}.btn-warning:hover{color: #ffffff;background-color: #ff2b00;border-color: #ff2b00;border-radius: 1px}
    </style>

    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaQPj0xbAmGhWNlCD55gK8U-aHZlswlU&libraries=places"></script> --}}

    <title>Ogaglobal Logistics - Add Route</title>
</head>
<body>
<!--Loading Container Start-->
{{-- <div class="loading-overlay display-flex flex-column justify-content-center align-items-center">
    <div class="primary-color font-28 fas fa-spinner fa-spin"></div>
</div> --}}
<!--Loading Container End-->
<div class="row h-100" >
	@yield('content')
    <!--Main Menu Start-->
<div class="main-menu hidden-soft">
    @include('includes.ridenav')
<!-- Optional JavaScript -->
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="{{asset('mobstyle/js/jquery-3.4.1.js')}}"></script>
<script src="{{asset('mobstyle/js/popper.min.js')}}"></script>
<script src="{{asset('mobstyle/js/bootstrap.min.js')}}"></script>
<script src="{{asset('mobstyle/js/main.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1eGdP6hCYQ06z86dMEwoLNFMPYPbhgYs&amp;libraries=places&amp;callback=initMap"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var platform = new H.service.Platform({
            'apikey': 'tdkQfK69IDDRiWG-F4Skm6f_OAzaJ3Qx_dn5Pbp9bQ4'
        });
    
        var service = platform.getSearchService();
        var mapContainer = document.getElementById('map-container');
        var locationInput = document.getElementById('location-input');
        var destinationInput = document.getElementById('destination-input');
        var suggestionList = document.getElementById('suggestion-list');
        var currentLocationElement = document.getElementById('current-location');
        var distanceElement = document.getElementById('distance');
        var durationElement = document.getElementById('duration');

        var defaultLayers = platform.createDefaultLayers();
        var map = new H.Map(mapContainer, defaultLayers.vector.normal.map, {
            center: { lng: 0, lat: 0},
            zoom: 12,
            pixelRatio: window.devicePixelRatio || 1
        });
        
        var ui = H.ui.UI.createDefault(map, defaultLayers);

        var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));

        var markerGroup = new H.map.Group();
        map.addObject(markerGroup);

            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var userLocation = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };
                    var position = { lat: userLocation.lat, lng: userLocation.lng };
                    //console.log(position);
                    
                    var svgMarkup = '<svg width="24" height="24" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="8" fill="#34b7eb"/></svg>';
                    var icon = new H.map.Icon(svgMarkup);
                    var userMarker = new H.map.Marker(userLocation, { icon: icon });
                    markerGroup.addObject(userMarker);
                    map.setCenter(userLocation);
                    //console.log(userLocation); return
                    // Reverse geocode the coordinates to get the address
                    service.reverseGeocode({
                        at: userLocation.lat + ',' + userLocation.lng
                    }, function(result) {
                        // Extract the address from the result
                        var address = result.items[0].address.label;
                         locationInput.value = address;
                        currentLocationElement.textContent = 'Current Location: ' + address;
                    }, function(error) {
                        console.error('Reverse geocoding error:', error);
                        currentLocationElement.textContent = 'Error getting address';
                    });
                }, function(error) {
                    console.error('Error getting user location:', error);
                });
            } else {
                console.error('Geolocation is not supported by this browser.');
            }

            function addMarkerAndCenter(position, isOrigin) {
                var marker = new H.map.Marker(position);
                markerGroup.addObject(marker);
                if (isOrigin) {
                    map.setCenter(position);
                }
            }

            function performAutosuggest(inputField, suggestionList, isOrigin, polylineCallback, tripFareCallback) {
                inputField.addEventListener('input', function(e) {
                    var query = inputField.value.trim();
                    if (query.length === 0) {
                        // Clear suggestion list if input is empty
                        suggestionList.innerHTML = '';
                        return;
                    }

                    var at = map.getCenter().lat + ',' + map.getCenter().lng; // Current map center as the 'at' parameter

                    // Construct the URL for Autosuggest API
                    const apiKey = 'tdkQfK69IDDRiWG-F4Skm6f_OAzaJ3Qx_dn5Pbp9bQ4'; // Replace with your actual API key
                    const url = `https://autosuggest.search.hereapi.com/v1/autosuggest?at=${at}&limit=5&lang=en&q=${query}&apiKey=${apiKey}`;

                    // Make a GET request to the API endpoint
                    fetch(url)
                        .then(response => response.json())
                        .then(data => {
                            // Clear previous suggestions
                            suggestionList.innerHTML = '';

                            // Check if data.items is defined
                            if (data && data.items) {
                                // Display autocomplete suggestions
                                data.items.forEach(function(item) {
                                    var suggestion = document.createElement('li');
                                    suggestion.textContent = item.title;
                                    suggestion.addEventListener('click', function() {
                                        setAddress(item.title, isOrigin);
                                        inputField.value = item.title;
                                        suggestionList.innerHTML = '';
                                        var position = { lat: item.position.lat, lng: item.position.lng };
                                        //console.log(position); return
                                        addMarkerAndCenter(position, isOrigin);
                                        polylineCallback(position, isOrigin);
                                        tripFareCallback(position, isOrigin);
                                    });
                                    suggestionList.appendChild(suggestion);
                                });
                            } else {
                                console.error('No suggestions found.');
                            }
                        })
                        .catch(error => {
                            console.error('Error fetching autosuggestions:', error);
                        });
                });
            }

                function setAddress(address, isOrigin) {
                    if (isOrigin) {
                        document.getElementById('origin_address').value = address;
                    } else {
                        document.getElementById('destination_address').value = address;
                    }
                }
                // Define a function to handle polyline calculation
                function calculatePolyline(position, isOrigin) {
                    // Check if it's the origin or destination
                    if (isOrigin) {
                        originPosition = position;
                    } else {
                        destinationPosition = position;
                    }
                    // If both origin and destination positions are available, calculate polyline
                    if (originPosition && destinationPosition) {
                        addPolyline(originPosition, destinationPosition);
                    }
                }

                // Function to calculate and display route polyline
                function addPolyline(origin, destination) {
                    // Construct the URL for the Routing API request
                    const apiKey = 'tdkQfK69IDDRiWG-F4Skm6f_OAzaJ3Qx_dn5Pbp9bQ4';
                    const url = `https://router.hereapi.com/v8/routes?transportMode=car&origin=${origin.lat},${origin.lng}&destination=${destination.lat},${destination.lng}&return=polyline&apiKey=${apiKey}`;

                    // Make a GET request to the Routing API endpoint
                    fetch(url)
                        .then(response => response.json())
                        .then(data => {
                            // Extract the route polyline from the response
                            const route = data.routes[0];
                            const routeShape = route.sections[0].polyline;

                            // Decode the route polyline to obtain coordinates
                            const routeCoords = H.geo.LineString.fromFlexiblePolyline(routeShape).getLatLngAltArray();

                            // Create a polyline object
                            const polyline = new H.map.Polyline(new H.geo.LineString(routeCoords), {
                                style: { lineWidth: 5 }
                            });

                            // Add the polyline to the map
                            map.addObject(polyline);

                            // Zoom to fit the route polyline
                            var bounds = polyline.getBounds();
                            map.getViewModel().setLookAtData({ bounds: bounds });
                            // map.getViewModel().setLookAtData({ bounds: polyline.getBoundingBox() });
                        })
                        .catch(error => {
                            console.error('Error fetching route:', error);
                        });
                }


                // function addPolyline(origin, destination) {
                //     // console.log(origin); 
                //     // console.log(destination); return
                //     var lineString = new H.geo.LineString();
                //     lineString.pushPoint(origin);
                //     lineString.pushPoint(destination);

                //     var polyline = new H.map.Polyline(lineString, {
                //         style: { lineWidth: 7 }
                //     });
                //     map.addObject(polyline);
                // }

                // Define a function to handle polyline calculation
                function calculateTrip(position, isOrigin) {
                    // Check if it's the origin or destination
                    if (isOrigin) {
                        originPosition = position;
                    } else {
                        destinationPosition = position;
                    }
  
                    if (originPosition && destinationPosition) {
                        calculateAndDisplayTripCost(originPosition, destinationPosition);
                    }
                }

            // Function to calculate and display trip details using HERE Routing API
            function calculateAndDisplayTripCost(origin, destination, apiKey='tdkQfK69IDDRiWG-F4Skm6f_OAzaJ3Qx_dn5Pbp9bQ4') {
                // Construct the URL for HERE Routing API
                var apiUrl = `https://router.hereapi.com/v8/routes?transportMode=car&origin=${origin.lat},${origin.lng}&destination=${destination.lat},${destination.lng}&return=summary&apikey=${apiKey}`;
                // console.log(apiUrl); return
                // Make a GET request to the API endpoint
                fetch(apiUrl)
                    .then(response => response.json())
                    .then(data => {
                        // Extract trip details from the response
                        var route = data.routes[0];
                        var distance = route.sections[0].summary.length / 1000; // Distance in kilometers
                        var durationInMinutes = route.sections[0].summary.duration / 60; // Time in minutes
                        var tripCost = calculateTripCost(distance); // Calculate trip cost

                        // Convert duration to hours and minutes
                        var hours = Math.floor(durationInMinutes / 60);
                        var minutes = durationInMinutes % 60;

                        // Format time based on duration
                        var timeText = hours > 0 ? hours.toFixed(0) + ' hours ' : '';
                        timeText += minutes.toFixed(0) + ' minutes';

                        // Display trip details on HTML page
                        document.getElementById('distance_text').innerHTML = 'Distance:';
                        document.getElementById('time_text').innerHTML = 'Time:';
                        document.getElementById('trip-distance-init').innerHTML = distance.toFixed(2) + ' km';
                        document.getElementById('trip-time-init').innerHTML = timeText;
                        // document.getElementById('trip-cost').innerHTML = 'Trip Cost: ' + '<br>' +'$'+tripCost.toFixed(2);

                        // Populate hidden input fields with trip details
                        document.getElementById('trip_distance').value = distance.toFixed(2);
                        document.getElementById('trip_time').value = timeText;
                        document.getElementById('trip-distance').innerHTML = distance.toFixed(2) + ' km';
                        document.getElementById('trip-time').innerHTML = timeText;
                        document.getElementById('trip-cost').innerHTML = '$'+tripCost.toFixed(2);
                    })
                    .catch(error => {
                        console.error('Error fetching trip details:', error);
                    });
                }

                // Function to calculate trip cost based on distance (for example)
                function calculateTripCost(distance) {
                    // Sample calculation for trip cost based on distance
                    fetch('/fetch-fare-rate')
                        .then(response => response.json())
                        .then(data => {
                            var baseFare = parseFloat(data.base_fare);
                            var ratePerKm = parseFloat(data.rate_per_km);
                            var tripCost = baseFare + distance * ratePerKm; 
                            //console.log(tripCost);
                            document.getElementById('trip_text').innerHTML = 'Trip Cost:';
                            document.getElementById('trip_cost_init').innerHTML = '$'+tripCost.toFixed(2);
                            document.getElementById('trip_cost').value = tripCost.toFixed(2);
                            return tripCost;
                        })
                        .catch(error => {
                            console.error('Error fetching fare and rate:', error);
                        });
                }

            performAutosuggest(document.getElementById('location-input'), suggestionList, true, calculatePolyline, calculateTrip);
            performAutosuggest(document.getElementById('destination-input'), suggestionList, false, calculatePolyline, calculateTrip);
    });
</script>
</body>
</html>