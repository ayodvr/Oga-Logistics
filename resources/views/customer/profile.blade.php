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
  <link rel="stylesheet" href="{{asset('main/assets/css/intlTelInput-3.css')}}">
  <link rel="stylesheet" href="{{asset('main/assets/css/style-4.css')}}">
  <link rel="stylesheet" href="{{asset('main/assets/css/media-query-4.css')}}">
</head>
<body>
  <div class="site-content">
    <!-- Preloader start -->
   
    <!-- Preloader end -->
    <!-- Header start -->
    <header id="top-header">
      <div class="header-wrap">
        <div class="header-back">
          <a href="javascript:history.go(-1)">
            <img src="{{asset('main/assets/svg/back-btn-white-4.svg')}}" alt="back-btn">
          </a>
        </div>
        <div class="header-name">
          <p>Profile Edit</p>
        </div>
      </div>
      <div class="boder"></div>
    </header>
    <!-- Header end -->
    <!-- Profile edit screen content start -->
    <section id="profile-edit">
      <div class="container">
        <div class="profile-edit-wrap">
          <h1 class="d-none">Hidden</h1>
          <div class="profile-edit-full mt-32">
            <div class="profile-edit-first">
              <div class="profile-edit-img">
                <img src="{{asset('main/assets/images/account/edit-img.png')}}" alt="profile-img" class="profile-pic">
                <div class="image-input">
                  <input type="file" accept="image/*" id="imageInput" class="file-upload">
                  <label for="imageInput" class="image-button">
                    <svg class="upload-button" width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <mask id="mask0_311_3053" style="mask-type:alpha" maskunits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                        <rect width="24" height="24" fill="white"></rect>
                      </mask>
                      <g mask="url(#mask0_311_3053)">
                        <path d="M5 7H6C6.53043 7 7.03914 6.78929 7.41421 6.41421C7.78929 6.03914 8 5.53043 8 5C8 4.73478 8.10536 4.48043 8.29289 4.29289C8.48043 4.10536 8.73478 4 9 4H15C15.2652 4 15.5196 4.10536 15.7071 4.29289C15.8946 4.48043 16 4.73478 16 5C16 5.53043 16.2107 6.03914 16.5858 6.41421C16.9609 6.78929 17.4696 7 18 7H19C19.5304 7 20.0391 7.21071 20.4142 7.58579C20.7893 7.96086 21 8.46957 21 9V18C21 18.5304 20.7893 19.0391 20.4142 19.4142C20.0391 19.7893 19.5304 20 19 20H5C4.46957 20 3.96086 19.7893 3.58579 19.4142C3.21071 19.0391 3 18.5304 3 18V9C3 8.46957 3.21071 7.96086 3.58579 7.58579C3.96086 7.21071 4.46957 7 5 7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M12 16C13.6569 16 15 14.6569 15 13C15 11.3431 13.6569 10 12 10C10.3431 10 9 11.3431 9 13C9 14.6569 10.3431 16 12 16Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </g>
                    </svg>
                  </label>
                </div>
              </div>
            </div>
            <div class="profile-edit-second mt-32">
              <div class="profile-edit-second-full">
                <form>
                  <div class="form-details-sign-in">
                    <span>
                      <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="mask0_330_7195" style="mask-type:alpha" maskunits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                          <rect width="24" height="24" fill="white"></rect>
                        </mask>
                        <g mask="url(#mask0_330_7195)">
                          <path d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          <path d="M6 21V19C6 17.9391 6.42143 16.9217 7.17157 16.1716C7.92172 15.4214 8.93913 15 10 15H14C15.0609 15 16.0783 15.4214 16.8284 16.1716C17.5786 16.9217 18 17.9391 18 19V21" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                      </svg>
                    </span>
                    <input type="text" id="name" value="{{ Auth::user()->name }} {{ Auth::user()->last_name }}" class="profile-custom-input">
                  </div>
                  <div class="mobile-form mt-16">
                    <input type="number" id="mobile_code" class="profile-custom-input" value="2356548899">
                  </div>
                </form>
                <div class="update-change-btn mt-32">
                  <a href="account-screen.html.htm">Update Changes</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Profile edit screen content end -->
  </div>
  <script src="assets/js/jquery.min-4.js')}}"></script>
  <script src="assets/js/slick.min-4.js')}}"></script>
  <script src="assets/js/bootstrap.bundle.min-4.js')}}"></script>
  <script src="assets/js/intlTelInput.min-3.js')}}"></script>
  <script src="assets/js/flag-3.js')}}"></script>
  <script src="assets/js/custom-4.js')}}"></script>
</body>
</html>