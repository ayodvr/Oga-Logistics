@role('customer')
    <div class="mini-profile-info">
        <div class="menu-close">
            <span class="float-right">
                <img src="{{asset('mobstyle/icons/close.svg')}}" alt="Close Icon">
            </span>
        </div>
        <div class="profile-picture text-center">
            <img src="{{asset('mobstyle/images/profile-1.png')}}" alt="Profile Picture">
        </div>
        <div class="profile-info">
            <div class="profile-name text-center">{{ Auth::user()->name }}</div>
            <div class="profile-email text-center">{{ Auth::user()->email }}</div>
        </div>
    </div>
    <div class="menu-items">
        <div class="all-menu-items">
            <a class="menu-item" href="/dashboard">
                <div>
                    <span class="menu-item-icon menu-dark">
                        <img src="{{asset('mobstyle/icons/home.svg')}}" alt="Home Icon">
                    </span>
                    <span class="menu-item-icon menu-light">
                        <img src="{{asset('mobstyle/icons/home-light.svg')}}" alt="Home Lighter Icon">
                    </span>
                    <span class="menu-item-title">Home</span>
                    <span class="menu-item-click fas fa-arrow-right"></span>
                </div>
            </a>
            {{-- <a class="menu-item" href="/trackorder">
                <span class="menu-item-icon menu-dark profile">
                    <img src="{{asset('mobstyle/icons/avatar-dark.svg')}}" alt="Avatar Darker Icon">
                </span>
                <span class="menu-item-icon menu-light profile">
                    <img src="{{asset('mobstyle/icons/avatar.svg')}}" alt="Avatar Darker Icon">
                </span>
                <span class="menu-item-title profile">Track My Order</span>
                <span class="menu-item-click fas fa-arrow-right"></span>
            </a> --}}
            <a class="menu-item" href="/orderhistory">
                <span class="menu-item-icon fa fa-history" style="color: black"></span>
                <span class="menu-item-title">Order History</span>
                <span class="menu-item-click fas fa-arrow-right"></span>
            </a>
            <a class="menu-item" href="history.html">
                <span class="menu-item-icon menu-light">
                    <img src="{{asset('mobstyle/icons/history-light.svg')}}" alt="History Icon">
                </span>
                <span class="menu-item-icon menu-dark">
                    <img src="{{asset('mobstyle/icons/history.svg')}}" alt="History Icon">
                </span>
                <span class="menu-item-title">Contact Us</span>
                <span class="menu-item-click fas fa-arrow-right"></span>
            </a>
           
            <form method="POST" action="{{ route('logout') }}">
                        @csrf
            <a href="route('logout')" class="menu-item margin-top-auto" onclick="event.preventDefault();
                                            this.closest('form').submit();">
                <span class="menu-item-icon menu-dark logout">
                    <img src="{{asset('mobstyle/icons/logout.svg')}}" alt="Logout Icon">
                </span>
                <span class="menu-item-icon menu-light logout">
                    <img src="{{asset('mobstyle/icons/logout-light.svg')}}" alt="Logout Icon">
                </span>
                <span class="menu-item-title logout">Log out</span>
                <span class="menu-item-click fas fa-arrow-right"></span>
            </a>
        </div>
    </div>
    <div class="modal fade" id="searchingModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content search">
                <div class="modal-body">
                    <div class="text-center">
                        <span class="fas fa-spinner fa-spin"></span>
                        <div class="label-title">Searching Driver...</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endrole

 @role('driver')
    <div class="mini-profile-info">
        <div class="menu-close">
            <span class="float-right">
                <img src="{{asset('mobstyle/icons/close.svg')}}" alt="Close Icon">
            </span>
        </div>
        <div class="profile-picture text-center">
            <img src="{{asset('mobstyle/images/profile-3.png')}}" alt="Profile Picture">
        </div>
        <div class="profile-info">
            <div class="profile-name text-center">Jonathan McBerly</div>
            <div class="profile-email text-center">lorem@loremipsum.com</div>
        </div>
    </div>
    <div class="menu-items">
        <div class="all-menu-items">
            <a class="menu-item" href="/dashboard">
                <div>
                        <span class="menu-item-icon menu-dark">
                        <img src="{{asset('mobstyle/icons/home.svg')}}" alt="Home Icon">
                    </span>
                    <span class="menu-item-icon menu-light">
                        <img src="{{asset('mobstyle/icons/home-light.svg')}}" alt="Home Lighter Icon">
                    </span>
                    <span class="menu-item-title">Home</span>
                    <span class="menu-item-click fas fa-arrow-right"></span>
                </div>
            </a>
            <a class="menu-item" href="profile.html">
                <span class="menu-item-icon menu-dark profile">
                    <img src="{{asset('mobstyle/icons/avatar-dark.svg')}}" alt="Avatar Darker Icon">
                </span>
                <span class="menu-item-icon menu-light profile">
                    <img src="{{asset('mobstyle/icons/avatar.svg')}}" alt="Avatar Darker Icon">
                </span>
                <span class="menu-item-title profile">Profile</span>
                <span class="menu-item-click fas fa-arrow-right"></span>
            </a>
            <a class="menu-item" href="wallet.html">
                <span class="menu-item-icon menu-dark">
                        <img src="{{asset('mobstyle/icons/my-wallet.svg')}}" alt="Wallet Icon">
                    </span>
                <span class="menu-item-icon menu-light">
                        <img src="{{asset('mobstyle/icons/my-wallet-light.svg')}}" alt="Wallet Icon">
                </span>
                <span class="menu-item-title">My Wallet</span>
                <span class="menu-item-click fas fa-arrow-right"></span>
            </a>
            <a class="menu-item" href="driver-registration.html">
                <span class="menu-item-icon menu-dark">
                        <img src="{{asset('mobstyle/icons/driver-registration-dark.svg')}}" alt="Driver Registration Icon">
                </span>
                <span class="menu-item-icon menu-light">
                        <img src="{{asset('mobstyle/icons/driver-registration.svg')}}" alt="Driver Registration Icon">
                </span>
                <span class="menu-item-title">Driver Registration</span>
                <span class="menu-item-click fas fa-check green-status"></span>
            </a>
            <a class="menu-item position-relative" href="notifications.html">
                    <span class="menu-item-icon menu-dark">
                        <img src="{{asset('mobstyle/icons/notification.svg')}}" alt="Notification Icon">
                </span>
                <span class="menu-item-icon menu-light">
                        <img src="{{asset('mobstyle/icons/notification-light.svg')}}" alt="Notification Icon">
                </span>
                <span class="menu-item-title">Notifications</span>
                <span class="notification-num">3</span>
                <span class="menu-item-click fas fa-arrow-right"></span>
            </a>
            <a class="menu-item" href="add-new-car.html">
                <span class="menu-item-icon fas fa-car"></span>
                <span class="menu-item-title">Car Registration</span>
                <span class="menu-item-click fas fa-check green-status"></span>
            </a>
            <a class="menu-item" href="support.html">
                <span class="menu-item-icon menu-dark support">
                    <img src="{{asset('mobstyle/icons/support.svg')}}" alt="Support Icon">
                </span>
                <span class="menu-item-icon menu-light support">
                    <img src="{{asset('mobstyle/icons/support-light.svg')}}" alt="Support Lighter Icon">
                </span>
                <span class="menu-item-title">Online Support</span>
                <span class="menu-item-click fas fa-arrow-right"></span>
            </a>
            <form method="POST" action="{{ route('logout') }}">
                        @csrf
            <a href="route('logout')" class="menu-item margin-top-auto" onclick="event.preventDefault();
                                            this.closest('form').submit();">
                <span class="menu-item-icon menu-dark logout">
                    <img src="{{asset('mobstyle/icons/logout.svg')}}" alt="Logout Icon">
                </span>
                <span class="menu-item-icon menu-light logout">
                    <img src="{{asset('mobstyle/icons/logout-light.svg')}}" alt="Logout Icon">
                </span>
                <span class="menu-item-title logout">Log out</span>
                <span class="menu-item-click fas fa-arrow-right"></span>
            </a>
        </div>
    </div>
@endrole

@role('partners')
    <div class="mini-profile-info">
        <div class="menu-close">
            <span class="float-right">
                <img src="{{asset('mobstyle/icons/close.svg')}}" alt="Close Icon">
            </span>
        </div>
        <div class="profile-picture text-center">
            <img src="{{asset('mobstyle/images/profile-1.png')}}" alt="Profile Picture">
        </div>
        <div class="profile-info">
            <div class="profile-name text-center">{{ Auth::user()->name }}</div>
            <div class="profile-email text-center">{{ Auth::user()->email }}</div>
        </div>
    </div>
    <div class="menu-items">
        <div class="all-menu-items">
            <a class="menu-item" href="/dashboard">
                <div>
                    <span class="menu-item-icon menu-dark">
                        <img src="{{asset('mobstyle/icons/home.svg')}}" alt="Home Icon">
                    </span>
                    <span class="menu-item-icon menu-light">
                        <img src="{{asset('mobstyle/icons/home-light.svg')}}" alt="Home Lighter Icon">
                    </span>
                    <span class="menu-item-title">Home</span>
                    <span class="menu-item-click fas fa-arrow-right"></span>
                </div>
            </a>
            <a class="menu-item" href="/trackorder">
                <span class="menu-item-icon menu-dark profile">
                    <img src="{{asset('mobstyle/icons/avatar-dark.svg')}}" alt="Avatar Darker Icon">
                </span>
                <span class="menu-item-icon menu-light profile">
                    <img src="{{asset('mobstyle/icons/avatar.svg')}}" alt="Avatar Darker Icon">
                </span>
                <span class="menu-item-title profile">Track My Order</span>
                <span class="menu-item-click fas fa-arrow-right"></span>
            </a>
            <a class="menu-item" href="/orderhistory">
                <span class="menu-item-icon far fa-money-bill-alt"></span>
                <span class="menu-item-title">Order History</span>
                <span class="menu-item-click fas fa-arrow-right"></span>
            </a>
            <a class="menu-item" href="history.html">
                <span class="menu-item-icon menu-light">
                    <img src="{{asset('mobstyle/icons/history-light.svg')}}" alt="History Icon">
                </span>
                <span class="menu-item-icon menu-dark">
                    <img src="{{asset('mobstyle/icons/history.svg')}}" alt="History Icon">
                </span>
                <span class="menu-item-title">Contact Us</span>
                <span class="menu-item-click fas fa-arrow-right"></span>
            </a>
           
            <form method="POST" action="{{ route('logout') }}">
                        @csrf
            <a href="route('logout')" class="menu-item margin-top-auto" onclick="event.preventDefault();
                                            this.closest('form').submit();">
                <span class="menu-item-icon menu-dark logout">
                    <img src="{{asset('mobstyle/icons/logout.svg')}}" alt="Logout Icon">
                </span>
                <span class="menu-item-icon menu-light logout">
                    <img src="{{asset('mobstyle/icons/logout-light.svg')}}" alt="Logout Icon">
                </span>
                <span class="menu-item-title logout">Log out</span>
                <span class="menu-item-click fas fa-arrow-right"></span>
            </a>
        </div>
    </div>
    <div class="modal fade" id="searchingModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content search">
                <div class="modal-body">
                    <div class="text-center">
                        <span class="fas fa-spinner fa-spin"></span>
                        <div class="label-title">Searching Driver...</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endrole