<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Taxigo - Taxi Booking Mobile App</title>
    <link rel="icon" href="{{asset('main/assets/images/favicon/icon-4.png')}}">
    <link href="../../../../css2-8?family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">
    <link href="../../../../css2-9?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('main/assets/css/all.min-4.css')}}">
    <link rel="stylesheet" href="{{asset('main/assets/css/slick-4.css')}}">
    <link rel="stylesheet" href="{{asset('main/assets/css/bootstrap.min-4.css')}}">
    <link rel="stylesheet" href="{{asset('main/assets/css/style-4.css')}}">
    <link rel="stylesheet" href="{{asset('main/assets/css/media-query-4.css')}}">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCsECTHYBJrZ7BL89WRvcVsWU0ry2AXfag&libraries=places"></script>
    <style>
        #map-container {
            height: 60vh;
            width: 100%;
            border: 2px solid #ccc; /* Add a border around the map */
            box-sizing: border-box; /* Ensure padding and border are included in the element's total width and height */
            margin: 20px 0; /* Add some margin for spacing */
            border-radius: 8px; /* Optional: round the corners of the border */
        }
        .location-container {
            display: flex;
            align-items: center;
            margin-bottom: 10px; /* Add some space below the location input */
        }
        #location-input {
            flex: 1;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        #destination-input {
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        #clear-location {
            margin-left: 8px;
            cursor: pointer;
        }
        button {
            margin: 5px 0;
            padding: 8px 12px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:disabled {
            background-color: #ccc;
            cursor: not-allowed;
        }
        #trip-details {
            margin-top: 20px;
        }
    </style>
</head>
<body>
	<div class="site-content">
		
		<!-- Homescreen content start -->
		@yield('content')
		<!-- Homescreen content end -->
		<!-- Sidebar Screen content start -->
		<div class="offcanvas offcanvas-start sidecanvas" tabindex="-1" id="offcanvasExample">
			<div class="offcanvas-header">
				<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			</div>
			<div class="offcanvas-body">
		 <div class="account-screen-top">
            	<div class="accout-screen-first">
					<div class="accout-screen-img">
						<img src="{{asset('main/assets/images/account/user.png')}}" width="80px" height="80px" alt="profile-img">
					</div>
					<div class="accout-screen-content">
						<h3>{{ Auth::user()->name }} {{ Auth::user()->last_name }}</h3>
						<p>{{ Auth::user()->phone }}</p>
					</div>
					<div class="accout-screen-edit">
						<a href="/profile">
						<img src="{{asset('main/assets/images/account/edit-icon.svg')}}" alt="edit-icon">
						</a>
					</div>
            	</div>
          </div>
		  <br>
				<div class="setting-page-wrapper">
				<a href="/orderhistory">
                <div class="account-wrapper">
                  <div class="account-img">
                    <svg width="24" height="24" color="#fd6420" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <mask id="mask0_311_3248" style="mask-type:alpha" maskunits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                        <rect width="24" height="24" fill="white"></rect>
                      </mask>
                      <g mask="url(#mask0_311_3248)">
                        <path d="M5 16C5 16.5304 5.21071 17.0391 5.58579 17.4142C5.96086 17.7893 6.46957 18 7 18C7.53043 18 8.03914 17.7893 8.41421 17.4142C8.78929 17.0391 9 16.5304 9 16C9 15.4696 8.78929 14.9609 8.41421 14.5858C8.03914 14.2107 7.53043 14 7 14C6.46957 14 5.96086 14.2107 5.58579 14.5858C5.21071 14.9609 5 15.4696 5 16Z" stroke="#FFAA01" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M15 16C15 16.5304 15.2107 17.0391 15.5858 17.4142C15.9609 17.7893 16.4696 18 17 18C17.5304 18 18.0391 17.7893 18.4142 17.4142C18.7893 17.0391 19 16.5304 19 16C19 15.4696 18.7893 14.9609 18.4142 14.5858C18.0391 14.2107 17.5304 14 17 14C16.4696 14 15.9609 14.2107 15.5858 14.5858C15.2107 14.9609 15 15.4696 15 16Z" stroke="#FFAA01" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M5 16H3V10M3 10L5 5H14L18 10M3 10H18M18 10H19C19.5304 10 20.0391 10.2107 20.4142 10.5858C20.7893 10.9609 21 11.4696 21 12V16H19M15 16H9M12 10V5" stroke="#FFAA01" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </g>
                    </svg>
                  </div>
                  <div class="account-content">
                    <p>My Rides</p>
                  </div>
                  <div class="account-back-btn">
                    <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <mask style="mask-type:alpha" maskunits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                        <rect width="24" height="24" fill="white"></rect>
                      </mask>
                      <g mask="url(#mask0_330_777)">
                        <path d="M9 18L15 12L9 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </g>
                    </svg>
                  </div>
                </div>
              </a>
              <a href="/about">
                <div class="setting-deatils">
                  <div class="setting-icon">
                    <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <mask id="mask0_311_1188" style="mask-type:alpha" maskunits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                        <rect width="24" height="24" fill="white"></rect>
                      </mask>
                      <g mask="url(#mask0_311_1188)">
                        <path d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z" stroke="#FFAA01" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M12 8H12.01" stroke="#FFAA01" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M11 12H12V16H13" stroke="#FFAA01" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </g>
                    </svg>
                  </div>
                  <div class="icon-name">
                    <p>About Us</p>
                  </div>
                  <div class="icon-back-btn">
                    <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <mask style="mask-type:alpha" maskunits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                        <rect width="24" height="24" fill="white"></rect>
                      </mask>
                      <g mask="url(#mask0_330_777)">
                        <path d="M9 18L15 12L9 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </g>
                    </svg>
                  </div>
                </div>
              </a>    
              <a href="/contact">
                <div class="setting-deatils">
                  <div class="setting-icon">
                    <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <mask id="mask0_311_1129" style="mask-type:alpha" maskunits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                        <rect width="24" height="24" fill="white"></rect>
                      </mask>
                      <g mask="url(#mask0_311_1129)">
                        <path d="M4 3H6C6.26522 3 6.51957 3.10536 6.70711 3.29289C6.89464 3.48043 7 3.73478 7 4V6C7 6.26522 6.89464 6.51957 6.70711 6.70711C6.51957 6.89464 6.26522 7 6 7H4C3.73478 7 3.48043 6.89464 3.29289 6.70711C3.10536 6.51957 3 6.26522 3 6V4C3 3.73478 3.10536 3.48043 3.29289 3.29289C3.48043 3.10536 3.73478 3 4 3Z" stroke="#FFAA01" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M18 3H20C20.2652 3 20.5196 3.10536 20.7071 3.29289C20.8946 3.48043 21 3.73478 21 4V6C21 6.26522 20.8946 6.51957 20.7071 6.70711C20.5196 6.89464 20.2652 7 20 7H18C17.7348 7 17.4804 6.89464 17.2929 6.70711C17.1054 6.51957 17 6.26522 17 6V4C17 3.73478 17.1054 3.48043 17.2929 3.29289C17.4804 3.10536 17.7348 3 18 3Z" stroke="#FFAA01" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M11 3H13C13.2652 3 13.5196 3.10536 13.7071 3.29289C13.8946 3.48043 14 3.73478 14 4V6C14 6.26522 13.8946 6.51957 13.7071 6.70711C13.5196 6.89464 13.2652 7 13 7H11C10.7348 7 10.4804 6.89464 10.2929 6.70711C10.1054 6.51957 10 6.26522 10 6V4C10 3.73478 10.1054 3.48043 10.2929 3.29289C10.4804 3.10536 10.7348 3 11 3Z" stroke="#FFAA01" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M4 10H6C6.26522 10 6.51957 10.1054 6.70711 10.2929C6.89464 10.4804 7 10.7348 7 11V13C7 13.2652 6.89464 13.5196 6.70711 13.7071C6.51957 13.8946 6.26522 14 6 14H4C3.73478 14 3.48043 13.8946 3.29289 13.7071C3.10536 13.5196 3 13.2652 3 13V11C3 10.7348 3.10536 10.4804 3.29289 10.2929C3.48043 10.1054 3.73478 10 4 10Z" stroke="#FFAA01" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M18 10H20C20.2652 10 20.5196 10.1054 20.7071 10.2929C20.8946 10.4804 21 10.7348 21 11V13C21 13.2652 20.8946 13.5196 20.7071 13.7071C20.5196 13.8946 20.2652 14 20 14H18C17.7348 14 17.4804 13.8946 17.2929 13.7071C17.1054 13.5196 17 13.2652 17 13V11C17 10.7348 17.1054 10.4804 17.2929 10.2929C17.4804 10.1054 17.7348 10 18 10Z" stroke="#FFAA01" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M11 10H13C13.2652 10 13.5196 10.1054 13.7071 10.2929C13.8946 10.4804 14 10.7348 14 11V13C14 13.2652 13.8946 13.5196 13.7071 13.7071C13.5196 13.8946 13.2652 14 13 14H11C10.7348 14 10.4804 13.8946 10.2929 13.7071C10.1054 13.5196 10 13.2652 10 13V11C10 10.7348 10.1054 10.4804 10.2929 10.2929C10.4804 10.1054 10.7348 10 11 10Z" stroke="#FFAA01" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M11 17H13C13.2652 17 13.5196 17.1054 13.7071 17.2929C13.8946 17.4804 14 17.7348 14 18V20C14 20.2652 13.8946 20.5196 13.7071 20.7071C13.5196 20.8946 13.2652 21 13 21H11C10.7348 21 10.4804 20.8946 10.2929 20.7071C10.1054 20.5196 10 20.2652 10 20V18C10 17.7348 10.1054 17.4804 10.2929 17.2929C10.4804 17.1054 10.7348 17 11 17Z" stroke="#FFAA01" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </g>
                    </svg>
                  </div>
                  <div class="icon-name">
                    <p>Contact Us</p>
                  </div>
                  <div class="icon-back-btn">
                    <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <mask style="mask-type:alpha" maskunits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                        <rect width="24" height="24" fill="white"></rect>
                      </mask>
                      <g mask="url(#mask0_330_777)">
                        <path d="M9 18L15 12L9 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </g>
                    </svg>
                  </div>
                </div>
              </a>
              <a href="/privacy">
                <div class="setting-deatils">
                  <div class="setting-icon">
                    <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <mask id="mask0_311_1174" style="mask-type:alpha" maskunits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                        <rect width="24" height="24" fill="white"></rect>
                      </mask>
                      <g mask="url(#mask0_311_1174)">
                        <path d="M17 11H7C5.89543 11 5 11.8954 5 13V19C5 20.1046 5.89543 21 7 21H17C18.1046 21 19 20.1046 19 19V13C19 11.8954 18.1046 11 17 11Z" stroke="#FFAA01" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M12 17C12.5523 17 13 16.5523 13 16C13 15.4477 12.5523 15 12 15C11.4477 15 11 15.4477 11 16C11 16.5523 11.4477 17 12 17Z" stroke="#FFAA01" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M8 11V7C8 5.93913 8.42143 4.92172 9.17157 4.17157C9.92172 3.42143 10.9391 3 12 3C13.0609 3 14.0783 3.42143 14.8284 4.17157C15.5786 4.92172 16 5.93913 16 7V11" stroke="#FFAA01" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </g>
                    </svg>
                  </div>
                  <div class="icon-name">
                    <p>Privacy Policy</p>
                  </div>
                  <div class="icon-back-btn">
                    <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <mask style="mask-type:alpha" maskunits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                        <rect width="24" height="24" fill="white"></rect>
                      </mask>
                      <g mask="url(#mask0_330_777)">
                        <path d="M9 18L15 12L9 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </g>
                    </svg>
                  </div>
                </div>
					    </a>
              <a href="/faq">
                <div class="setting-deatils">
                  <div class="setting-icon">
                    <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <mask id="mask0_311_1160" style="mask-type:alpha" maskunits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                        <rect width="24" height="24" fill="white"></rect>
                      </mask>
                      <g mask="url(#mask0_311_1160)">
                        <path d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z" stroke="#FFAA01" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M12 17V17.01" stroke="#FFAA01" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M12 13.5C11.9816 13.1754 12.0692 12.8535 12.2495 12.583C12.4299 12.3125 12.6933 12.1079 13 12C13.3759 11.8563 13.7132 11.6272 13.9856 11.331C14.2579 11.0347 14.4577 10.6792 14.5693 10.2926C14.6809 9.90595 14.7013 9.49869 14.6287 9.10286C14.5562 8.70704 14.3928 8.33345 14.1513 8.01151C13.9099 7.68958 13.597 7.42808 13.2373 7.24762C12.8776 7.06715 12.4809 6.97264 12.0785 6.97152C11.6761 6.97041 11.2789 7.06272 10.9182 7.24118C10.5576 7.41965 10.2432 7.67941 10 8" stroke="#FFAA01" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </g>
                    </svg>
                  </div>
                  <div class="icon-name">
                    <p>FAQs</p>
                  </div>
                  <div class="icon-back-btn">
                    <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <mask style="mask-type:alpha" maskunits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                        <rect width="24" height="24" fill="white"></rect>
                      </mask>
                      <g mask="url(#mask0_330_777)">
                        <path d="M9 18L15 12L9 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </g>
                    </svg>
                  </div>
                </div>
					    </a>
              
              <a href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom">
                <div class="account-wrapper">
                  <div class="account-img">
                    <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <mask id="mask0_311_3162" style="mask-type:alpha" maskunits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                        <rect width="24" height="24" fill="white"></rect>
                      </mask>
                      <g mask="url(#mask0_311_3162)">
                        <path d="M14 8V6C14 5.46957 13.7893 4.96086 13.4142 4.58579C13.0391 4.21071 12.5304 4 12 4H5C4.46957 4 3.96086 4.21071 3.58579 4.58579C3.21071 4.96086 3 5.46957 3 6V18C3 18.5304 3.21071 19.0391 3.58579 19.4142C3.96086 19.7893 4.46957 20 5 20H12C12.5304 20 13.0391 19.7893 13.4142 19.4142C13.7893 19.0391 14 18.5304 14 18V16" stroke="#FFAA01" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M7 12H21L18 9M18 15L21 12" stroke="#FFAA01" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </g>
                    </svg>
                  </div>
                  <div class="account-content">
                    <p>Logout</p>
                  </div>
                  <div class="account-back-btn">
                    <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <mask style="mask-type:alpha" maskunits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                        <rect width="24" height="24" fill="white"></rect>
                      </mask>
                      <g mask="url(#mask0_330_777)">
                        <path d="M9 18L15 12L9 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </g>
                    </svg>
                  </div>
                </div>
              </a>
				
				
				</div>
			</div>
		</div>
		<!-- Sidebar Screen content end -->
	</div>

	<div class="offcanvas offcanvas-bottom logout-main" tabindex="-1" id="offcanvasBottom">
      <div class="offcanvas-header d-flex align-items-center justify-content-center">
      </div>
      <div class="offcanvas-body small">
        <h2 class="logout-text-pop">Logout</h2>
        <p class="sm-txt mt-16">Are you sure you want to log out?</p>
        <div class="logout-button-main mt-32">
          <button class="logout-cancel" data-bs-dismiss="offcanvas" aria-label="Close">Cancel</button>
          
          <button class="logout-cancel yes-logot"  onclick="location.href='/logout'" style="background-color:#fd6420" >Yes, Logout</button>
        
        </div>
      </div>
    </div>
    <!-- Logout screen modal content end -->
	 
    <script src="{{asset('main/assets/js/jquery.min-4.js')}}"></script>
    <script src="{{asset('main/assets/js/slick.min-4.js')}}"></script>
    <script src="{{asset('main/assets/js/bootstrap.bundle.min-4.js')}}"></script>
    <script src="{{asset('main/assets/js/custom-4.js')}}"></script>
     <script>
        document.addEventListener('DOMContentLoaded', () => {
            const mapContainer = document.getElementById('map-container');
            const locationInput = document.getElementById('location-input');
            const destinationInput = document.getElementById('destination-input');
            const useCurrentLocationButton = document.getElementById('use-current-location');
            const startMovementButton = document.getElementById('start-movement');
            const clearLocationIcon = document.getElementById('clear-location');
            const currentLocationElement = document.getElementById('current-location');

            // Hidden input fields
            const hiddenOrigin = document.getElementById('hidden-origin');
            const hiddenDestination = document.getElementById('hidden-destination');
            const hiddenTripTime = document.getElementById('hidden-trip-time');
            const hiddenTripDistance = document.getElementById('hidden-trip-distance');
            const hiddenTripCost = document.getElementById('hidden-trip-cost');

            const map = new google.maps.Map(mapContainer, {
                center: { lat: 6.5244, lng: 3.3792 }, // Center on Lagos, Nigeria
                zoom: 12
            });

            let markers = [];
            let routePolyline = null;
            let originPosition = null;
            let destinationPosition = null;

            const updateLocationInput = (position) => {
                const geocoder = new google.maps.Geocoder();
                geocoder.geocode({ location: position }, (results, status) => {
                    if (status === 'OK' && results[0]) {
                        const address = results[0].formatted_address;
                        locationInput.value = address;
                        currentLocationElement.textContent = address;
                        originPosition = position; // Update origin position
                        addMarkerAndCenter(position, true);
                        clearLocationIcon.style.display = 'inline'; // Show clear icon
                        useCurrentLocationButton.style.display = 'none'; // Hide the use current location button
                        checkFieldsAndToggleButton(); // Check if start button should be enabled

                        // Update hidden origin field
                        hiddenOrigin.value = address;
                    } else {
                        console.error('Reverse geocoding error:', status);
                        currentLocationElement.textContent = 'Error getting address';
                    }
                });
            };

            const toggleCurrentLocationButton = () => {
                // Show the button only if the location input is empty
                if (locationInput.value.trim() === '') {
                    useCurrentLocationButton.style.display = 'block'; // Show the button
                } else {
                    useCurrentLocationButton.style.display = 'none'; // Hide the button
                }
            };

            const checkFieldsAndToggleButton = () => {
                // Enable the start movement button only if both fields are filled
                startMovementButton.disabled = !(locationInput.value.trim() && destinationInput.value.trim());
            };

            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(position => {
                    const currentPosition = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };

                    const userMarker = new google.maps.Marker({
                        position: currentPosition,
                        map,
                        icon: 'http://maps.google.com/mapfiles/ms/icons/blue-dot.png'
                    });

                    map.setCenter(currentPosition);

                    // Initialize the input with the current location
                    updateLocationInput(currentPosition);

                    useCurrentLocationButton.addEventListener('click', () => {
                        // Update location input field with current location
                        updateLocationInput(currentPosition);
                        
                        // Clear the destination input field
                        destinationInput.value = '';
                        destinationPosition = null; // Clear destination position

                        // Remove any existing route and markers related to the destination
                        clearMarkers();
                        calculateAndDisplayRoute(); // Recalculate route if necessary (will skip if destination is null)
                    });

                    clearLocationIcon.addEventListener('click', () => {
                        locationInput.value = ''; // Clear the input field
                        originPosition = null; // Clear origin position
                        clearLocationIcon.style.display = 'none'; // Hide clear icon
                        toggleCurrentLocationButton(); // Show the button since the field is now empty
                        checkFieldsAndToggleButton(); // Check if start button should be enabled

                        // Clear hidden origin field
                        hiddenOrigin.value = '';
                    });
                }, error => {
                    console.error('Error getting user location:', error);
                });
            } else {
                console.error('Geolocation is not supported by this browser.');
            }

            const addMarkerAndCenter = (position, isOrigin) => {
                const marker = new google.maps.Marker({
                    position,
                    map
                });

                markers.push(marker);

                if (isOrigin) {
                    map.setCenter(position);
                }
            };

            const performAutosuggest = (inputField, isOrigin) => {
                const autocomplete = new google.maps.places.Autocomplete(inputField);
                autocomplete.bindTo('bounds', map);

                autocomplete.addListener('place_changed', () => {
                    const place = autocomplete.getPlace();
                    if (!place.geometry || !place.geometry.location) {
                        console.error('No details available for input:', inputField.value);
                        return;
                    }

                    const position = {
                        lat: place.geometry.location.lat(),
                        lng: place.geometry.location.lng()
                    };

                    if (isOrigin) {
                        originPosition = position;
                        
                        addMarkerAndCenter(position, true);
                        clearLocationIcon.style.display = 'none'; // Hide clear icon
                        checkFieldsAndToggleButton(); // Check if start button should be enabled

                        // Update hidden origin field
                        hiddenOrigin.value = place.formatted_address;
                    } else {
                        destinationPosition = position;
                        clearMarkers();
                        addMarkerAndCenter(position, false);
                        calculateAndDisplayRoute();

                        // Update hidden destination field
                        hiddenDestination.value = place.formatted_address;
                    }
                });

                // Listen for manual input to enable button when fields are filled
                inputField.addEventListener('input', checkFieldsAndToggleButton);
            };

            const clearMarkers = () => {
                markers.forEach(marker => marker.setMap(null));
                markers = [];
                if (routePolyline) {
                    routePolyline.setMap(null);
                    routePolyline = null;
                }
            };

            const calculateAndDisplayRoute = async () => {
                if (!originPosition || !destinationPosition) {
                    console.error('Both origin and destination must be selected.');
                    return;
                }

                const directionsService = new google.maps.DirectionsService();

                directionsService.route({
                    origin: originPosition,
                    destination: destinationPosition,
                    travelMode: google.maps.TravelMode.DRIVING,
                    drivingOptions: {
                        departureTime: new Date(),
                    },
                    provideRouteAlternatives: false
                }, async (response, status) => {
                    if (status === 'OK') {
                        if (routePolyline) {
                            routePolyline.setMap(null);
                        }

                        const route = response.routes[0];
                        routePolyline = new google.maps.Polyline({
                            path: route.overview_path,
                            geodesic: true,
                            strokeColor: '#0212ed',
                            strokeOpacity: 0.8,
                            strokeWeight: 8
                        });
                        routePolyline.setMap(map);

                        const startMarker = new google.maps.Marker({
                            position: route.legs[0].start_location,
                            map,
                            icon: 'http://maps.google.com/mapfiles/ms/icons/green-dot.png'
                        });

                        const endMarker = new google.maps.Marker({
                            position: route.legs[0].end_location,
                            map,
                            icon: 'http://maps.google.com/mapfiles/ms/icons/orange-dot.png'
                        });

                        markers.push(startMarker, endMarker);

                        const totalDistance = route.legs[0].distance.value / 1000;
                        const totalDuration = route.legs[0].duration_in_traffic ? route.legs[0].duration.value / 60 : route.legs[0].duration.value / 60;
                        
                        const tripCost = await calculateTripCost(totalDistance); // Wait for the cost calculation

                        if (tripCost !== null) {
                            document.getElementById('trip-distance-init').textContent = `${totalDistance.toFixed(2)} km`;
                            document.getElementById('trip-time-init').textContent = `${Math.floor(totalDuration / 60)} hours ${Math.round(totalDuration % 60)} minutes`;
                            document.getElementById('trip-cost').textContent = `₦${tripCost.toFixed(2)}`;

                            // Update hidden input fields
                            hiddenTripDistance.value = totalDistance.toFixed(2);
                            hiddenTripTime.value = `${Math.floor(totalDuration / 60)} hours ${Math.round(totalDuration % 60)} minutes`;
                            hiddenTripCost.value = tripCost.toFixed(2);
                        } else {
                            document.getElementById('trip-cost').textContent = 'Cost calculation error';
                        }

                        const bounds = new google.maps.LatLngBounds();
                        route.overview_path.forEach((path) => {
                            bounds.extend(path);
                        });
                        map.fitBounds(bounds);
                    } else {
                        console.error('Directions request failed due to ' + status);
                    }
                });
            };

            // const calculateTripCost = distance => {
            //     const baseFare = 2.50; // USD
            //     const ratePerKm = 1.50; // USD per km
            //     const usdToNgnRate = 770; // Conversion rate
            //     const costInUSD = baseFare + distance * ratePerKm;
            //     return costInUSD * usdToNgnRate;
            // };

            const calculateTripCost = async (distance) => {
                try {
                    const response = await fetch('/fetch-fare-rate');
                    const data = await response.json();
                    const baseFare = parseFloat(data.base_fare);
                    const ratePerKm = parseFloat(data.rate_per_km);
                    const usdToNgnRate = 770; // Conversion rate
                    const costInUSD = baseFare + distance * ratePerKm;
                    // const usdToNgnRate = parseFloat(data.usd_to_ngn_rate);
                    return costInUSD * usdToNgnRate;
                } catch (error) {
                    console.error('Error fetching fare and rate:', error);
                    return null; // Return null or a default value in case of an error
                }
            };

            performAutosuggest(locationInput, true);
            performAutosuggest(destinationInput, false);
        });
    </script>
</body>
</html>