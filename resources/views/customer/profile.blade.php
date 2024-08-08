@extends('mobilelayouts.taxi')

@section('content')
   
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
                <img src="{{asset('main/assets/images/account/user.png')}}" width="80px" height="80px" alt="profile-img" class="profile-pic">
               
              </div>
            </div>
            <div class="profile-edit-second mt-32">
              <div class="profile-edit-second-full">
                <form>
                  <div class="input-group input-group-lg">
                <span class="input-group-text" id="inputGroup-sizing-lg"><i class="fa-solid fa-user"></i></span>
                <input type="text" class="form-control" placeholder="Enter First Name" aria-label="Sizing example input"  value="{{ Auth::user()->name }}" aria-describedby="inputGroup-sizing-lg">
            </div>
            <br>
            <div class="input-group input-group-lg">
                <span class="input-group-text" id="inputGroup-sizing-lg"><i class="fa-regular fa-user"></i></span>
                <input type="text" class="form-control" placeholder="Enter Last Name" aria-label="Sizing example input" value="{{ Auth::user()->last_name }}" aria-describedby="inputGroup-sizing-lg">
            </div>
            <br>
            <div class="input-group input-group-lg">
                <span class="input-group-text" id="inputGroup-sizing-lg"><i class="fa-regular fa-envelope"></i></span>
                <input type="email" class="form-control" placeholder="Enter Email" aria-label="Sizing example input" value="{{ Auth::user()->email }}" aria-describedby="inputGroup-sizing-lg">
            </div>
            <br>
            <div class="input-group input-group-lg">
                <span class="input-group-text" id="inputGroup-sizing-lg"><i class="fa-solid fa-phone"></i></span>
                <input type="text"  class="form-control" placeholder="Enter Mobile Number" aria-label="Sizing example input" value="{{ Auth::user()->phone }}" aria-describedby="inputGroup-sizing-lg">
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
 


    @endsection