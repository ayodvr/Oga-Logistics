<!DOCTYPE html>
<html>
<head>
    <title>Trip Cost Calculator</title>
</head>
<body>
    <h1>Trip Cost Calculator</h1>
    <p>Origin: <input type="text" id="origin"></p>
    <p>Destination: <input type="text" id="destination"></p>
    <button onclick="calculateAndDisplayTripCost()">Calculate Trip Cost</button>
    <p id="trip-cost"></p>

    <!-- Include HERE Map API script here if needed -->
    <script src="https://js.api.here.com/v3/3.1/mapsjs-core.js"></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-service.js"></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js"></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-ui.js"></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-clustering.js"></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-data.js"></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-places.js"></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-routing.js"></script>

    <script>
        // Function to geocode an address
        function geocodeAddress(address, callback) {
            // Construct the request URL for geocoding
            var baseUrl = 'https://geocode.search.hereapi.com/v1/geocode';
            var apiKey = 'tdkQfK69IDDRiWG-F4Skm6f_OAzaJ3Qx_dn5Pbp9bQ4'; // Replace with your actual API key
            var url = baseUrl + '?q=' + encodeURIComponent(address) + '&apiKey=' + apiKey;

            // Send a GET request to the Geocoding API
            fetch(url)
                .then(response => response.json())
                .then(data => {
                    // Check if results are available
                    if (data.items && data.items.length > 0) {
                        // Extract latitude and longitude from the first result
                        var latitude = data.items[0].position.lat;
                        var longitude = data.items[0].position.lng;
                        callback({ lat: latitude, lng: longitude }); // Call the callback function with the coordinates
                    } else {
                        console.error('No results found for address:', address);
                        callback(null); // Call the callback function with null to indicate failure
                    }
                })
                .catch(error => {
                    console.error('Error geocoding address:', address, error);
                    callback(null); // Call the callback function with null to indicate failure
                });
        }

        // Function to calculate the trip cost
        function calculateTripCost(origin, destination, callback) {
            // Calculate distance between origin and destination
            var earthRadiusKm = 6371; // Radius of the Earth in kilometers
            var dLat = degreesToRadians(destination.lat - origin.lat);
            var dLon = degreesToRadians(destination.lng - origin.lng);
            var lat1 = degreesToRadians(origin.lat);
            var lat2 = degreesToRadians(destination.lat);

            var a = Math.sin(dLat / 2) * Math.sin(dLat / 2) +
                    Math.sin(dLon / 2) * Math.sin(dLon / 2) * Math.cos(lat1) * Math.cos(lat2);
            var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
            var distance = earthRadiusKm * c; // Distance in kilometers

            // Calculate trip cost based on distance
            var baseFare = 3.5; // Base fare in dollars
            var ratePerKm = 2.5; // Rate per kilometer in dollars
            var tripCost = baseFare + distance * ratePerKm; // Total trip cost

            callback(tripCost); // Call the callback function with the trip cost
        }

            // Function to convert degrees to radians
            function degreesToRadians(degrees) {
                return degrees * (Math.PI / 180);
            }

        // Function to calculate and display trip cost
        function calculateAndDisplayTripCost() {
            var originAddress = document.getElementById('origin').value;
            var destinationAddress = document.getElementById('destination').value;
            
            // Geocode origin address
            geocodeAddress(originAddress, function(originCoordinates) {
                if (originCoordinates) {
                    console.log(originCoordinates);
                    // Geocode destination address
                    geocodeAddress(destinationAddress, function(destinationCoordinates) {
                        if (destinationCoordinates) {
                            // Calculate trip cost
                            calculateTripCost(originCoordinates, destinationCoordinates, function(tripCost) {
                                if (tripCost !== null) {
                                    // Display trip cost on HTML page
                                    document.getElementById('trip-cost').textContent = 'Trip Cost: $' + tripCost.toFixed(2);
                                } else {
                                    console.log('Trip cost calculation failed.');
                                }
                            });
                        } else {
                            console.log('Geocoding failed for destination address:', destinationAddress);
                        }
                    });
                } else {
                    console.log('Geocoding failed for origin address:', originAddress);
                }
            });
        }
    </script>
</body>
</html>
