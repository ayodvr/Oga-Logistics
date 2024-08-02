<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Taxigo - Taxi Booking Mobile App</title>
	<link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.1/mapsjs-ui.css" />
    <script src="https://js.api.here.com/v3/3.1/mapsjs-core.js"></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-service.js"></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-ui.js"></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js"></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-clustering.js"></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-data.js"></script>
	<link rel="icon" href="{{asset('main/assets/images/favicon/icon-3.png')}}">
	<link href="../../../../css2-6?family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">
	<link href="../../../../css2-7?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('main/assets/css/all.min-3.css')}}">
	<link rel="stylesheet" href="{{asset('main/assets/css/slick-3.css')}}">
	<link rel="stylesheet" href="{{asset('main/assets/css/bootstrap.min-3.css')}}">
	<link rel="stylesheet" href="{{asset('main/assets/css/style-3.css')}}">
	<link rel="stylesheet" href="{{asset('main/assets/css/media-query-3.css')}}">
	<style>
        #map-container {
            width: 100%;
			height: auto !important;
        }

        #current-location {
            font-size: 18px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
	<div class="site-content" >
		<!-- Preloader start -->
		
		

		<!-- Preloader end -->
		<!-- Going1 screen content start -->
		<div >
			<section  class="going1-screen">
				
					<div class="homescreen-wrap">
						
						<div class="header-sec">
							<div class="header-sec-wrap">
								<div class="header-setting">
									<a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"><img src="{{asset('main/assets/images/map/setting-icon-1.svg')}}" alt="setting-icon"></a>
								</div>
								<div class="header-profile account-redirect">
									<a href="/account">
										<img src="{{asset('main/assets/images/map/profile-1.png')}}" alt="profile-img">
									</a>
								</div>
							</div>
						</div>
                        <div class="homescree-bottom-sec">
					<div class="homescree-bottom-sec-wrap">
						
						<div class="driver-trip-first-sec mt-16">
							<div class="driver-trip-first-sec-wrap">
								
								<div class="driver-details">
									<div class="driver-details-wrap">
										<div class="driver-name">
                                        <p><b>Hey, {{auth()->user()->name}}</b></p>
                                        <h1>Where are you going?</h1>
										</div>

										
									</div>
									
								</div>
								
							</div>
							
							<div class="driver-bottom-sec">
								<div class="driver-bottom-sec-wrap">
                                <form id="tripDetailsForm" method="POST" action="{{route('order.placed', hash('sha256', (string)auth()->user()->id))}}"> 
											@csrf
											<div class="margin-top-10 height-auto" id="origin-input-container">
												@if(session('success'))
													<div class="alert alert-info alert-dismissible fade show" style="width:100%; margin:auto" role="alert">
														{{session('success')}}
														<button type="button" class="close" data-dismiss="alert" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
												@endif
														<div class="trip-fare-container font-weight-light">
															<div class="trip-fare-item">
																<span class="float-left" id="trip_text"></span>
																<span class="float-right" id="trip_cost_init"></span>
																<span class="clearfix"></span>
															</div>
															<div class="trip-fare-item">
																<span class="float-left" id="distance_text"></span>
																<span class="float-right" id="trip-distance-init"></span>
																<span class="clearfix"></span>
															</div>
															<div class="trip-fare-item">
																<span class="float-left" id="time_text"></span>
																<span class="float-right" id="trip-time-init"></span>
																<span class="clearfix"></span>
															</div>
														</div>
														<div class="going1-details mt-16">
															<label class="pickup-lbl">Pickup</label>
															<div class="pickup">
																<input class="enter-txt" id="location-input" type="text" placeholder="Enter Pickup">
																<div class="search-btn">
																	<span><img src="{{asset('main/assets/images/map/edit.svg')}}" alt="edit-icon"></span>
																</div>
															</div>
														</div>
														<div class="going1-details mt-16">
															<label class="pickup-lbl">drop off</label>
															<div class="pickup">
																<input class="enter-txt" id="destination-input"  type="text" placeholder="Enter Destination">
																<div class="search-btn">
																	<span><img src="{{asset('main/assets/images/map/edit.svg')}}" alt="edit-icon"></span>
																</div>
															</div>
														</div>
														<ul id="suggestion-list"></ul> 

														<input type="hidden" id="origin_address" name="origin">
														<input type="hidden" id="destination_address" name="destination">
														<input type="hidden" id="trip_distance" name="trip_distance">
														<input type="hidden" id="trip_time" name="trip_time">
														<input type="hidden" id="trip_cost" name="trip_cost">
														<input type="hidden" value="{{auth()->user()->id}}" name="user_id">

														<div class="going1-next-btn mt-32">
														<button type="submit" id="button1" class="btn btn-primary" style="width:100%;background-color:#f78f33;"><span style="font-size: 20px;">Request a Ride</span></button>
														</div>
											
											
											</div>
										</form>
								</div>
							</div>
						</div>
					</div>
				</div>
						

						
					</div>	
				
			</section>
		</div>
		<!-- Going1 screen content end -->
		<!-- Going1 screen content end -->
		<!-- Sidebar Screen content start -->
		<div class="offcanvas offcanvas-start sidecanvas" tabindex="-1" id="offcanvasExample">
			@include('includes.Sidebar')
		</div>
		<!-- Sidebar Screen content end -->
	</div>


	<script src="{{asset('main/assets/js/jquery.min-3.js')}}"></script>
	<script src="{{asset('main/assets/js/slick.min-3.js')}}"></script>
	<script src="{{asset('main/assets/js/bootstrap.bundle.min-3.js')}}"></script>
	<script src="{{asset('main/assets/js/custom-3.js')}}"></script>
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