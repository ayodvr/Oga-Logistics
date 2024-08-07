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
  <style>
        @import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');body{.container{}.card{position: relative;display: -webkit-box;display: -ms-flexbox;display: flex;-webkit-box-orient: vertical;-webkit-box-direction: normal;-ms-flex-direction: column;flex-direction: column;min-width: 0;word-wrap: break-word;background-color: #fff;background-clip: border-box;border: 1px solid rgba(0, 0, 0, 0.1);border-radius: 0.10rem}.card-header:first-child{border-radius: calc(0.37rem - 1px) calc(0.37rem - 1px) 0 0}.card-header{padding: 0.75rem 1.25rem;margin-bottom: 0;background-color: #fff;border-bottom: 1px solid rgba(0, 0, 0, 0.1)}.track{position: relative;background-color: #ddd;height: 7px;display: -webkit-box;display: -ms-flexbox;display: flex;margin-bottom: 60px;margin-top: 50px}.track .step{-webkit-box-flex: 1;-ms-flex-positive: 1;flex-grow: 1;width: 25%;margin-top: -18px;text-align: center;position: relative}.track .step.active:before{background: #FF5722}.track .step::before{height: 7px;position: absolute;content: "";width: 100%;left: 0;top: 18px}.track .step.active .icon{background: #ee5435;color: #fff}.track .icon{display: inline-block;width: 40px;height: 40px;line-height: 40px;position: relative;border-radius: 100%;background: #ddd}.track .step.active .text{font-weight: 400;color: #000}.track .text{display: block;margin-top: 7px}.itemside{position: relative;display: -webkit-box;display: -ms-flexbox;display: flex;width: 100%}.itemside .aside{position: relative;-ms-flex-negative: 0;flex-shrink: 0}.img-sm{width: 80px;height: 80px;padding: 7px}ul.row, ul.row-sm{list-style: none;padding: 0}.itemside .info{padding-left: 15px;padding-right: 7px}.itemside .title{display: block;margin-bottom: 5px;color: #212529}p{margin-top: 0;margin-bottom: 1rem}.btn-warning{color: #ffffff;background-color: #ee5435;border-color: #ee5435;border-radius: 1px}.btn-warning:hover{color: #ffffff;background-color: #ff2b00;border-color: #ff2b00;border-radius: 1px}
    </style>
</head>
<body style="background-color: #F0F0F0">
  <div class="site-content">
    <!-- Preloader start -->
    
    @yield('content')

  </div>

  <script src="{{asset('main/assets/js/jquery.min-4.js')}}"></script>
  <script src="{{asset('main/assets/js/slick.min-4.js')}}"></script>
  <script src="{{asset('main/assets/js/bootstrap.bundle.min-4.js')}}"></script>
  <script src="{{asset('main/assets/js/custom-4.js')}}"></script>
</body>
</html>