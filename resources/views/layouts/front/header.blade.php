<?php 
    $location = $_SERVER["REQUEST_URI"];
?>
<header>
    <div class="container">
        <header class="navigation">
        
            {{-- logo area --}}
            <div class="navigation__logo">
                <a href="" class="navigation__header-link">
                    Auto Exchange
                </a>
            </div>

            {{-- left nav --}}
            <div class="navigation__left-menu">
                {{-- logo area --}}
                <div class="navigation__left-menu-logo">
                    <a href="/" class="navigation__header-link">
                        Auto Exchange
                    </a>
                </div>

                {{-- navi links --}}
                <div class="navigation__links">
                    <a href="/" class="{{ $location == "/" ? "navigation__link" : "navigation__link-pages" }}">Cars for Sale</a>
                    <a href="#" class="{{ $location == "/" ? "navigation__link" : "navigation__link-pages" }}">New Cars</a>
                    <a href="#" class="{{ $location == "/" ? "navigation__link" : "navigation__link-pages" }}">Sell Your Car</a>
                    <a href="#" class="{{ $location == "/" ? "navigation__link" : "navigation__link-pages" }}">Financing</a>
                    <a href="#" class="{{ $location == "/" ? "navigation__link" : "navigation__link-pages" }}">News</a>
                </div>
            </div>

            {{-- mobile open btn --}}
            <div class="navigation__burger-menu">
                <span class="navigation__user-greeting">
                    @if (Route::has('login'))
                        @auth
                            <span class="navigation__user-greeting">
                                Hi, {{ auth()->user()->name }}
                            </span>
                            {{-- <a href="{{ url('/dashboard') }}" class="">Dashboard</a> --}}
                            @else
                                <div class="navigation__auth">
                                    <i class="ti-user"></i>
                                    <a href="{{ route('login') }}" class="navigation__signin-link">Sign In</a>
                                </div>
                        @endauth
                    @endif
                </span>
                <i class="fas fa-bars"></i>
            </div>

            {{-- right nav --}}
            <div class="navigation__right-menu">
                <div class="navigation__user-img">
                    @if (Route::has('login'))
                        @auth
                            <span class="navigation__user-greeting">
                                Hi, {{ auth()->user()->name }}
                            </span>
                            {{-- <a href="{{ url('/dashboard') }}" class="">Dashboard</a> --}}
                            @else
                                <div class="navigation__auth">
                                    <i class="ti-user"></i>
                                    <a href="{{ route('login') }}" class="navigation__signin-link">Sign In</a>
                                </div>
                        @endauth
                    @endif
                </div>

                <div class="navigation__user-dropdown">
                    <i class="ti-menu"></i>
                </div>
            </div>

            {{-- dropdown menu --}}
            <div class="account-dropdown">
                <div class="account-dropdown__content">
                    <div class="account-dropdown__close-btn">
                        <i class="ti-close"></i>
                    </div>
                    
                    @if (Route::has('login'))
                        @auth
                            <h1>Hi, {{ auth()->user()->name }}</h1>
                            {{-- <a href="{{ url('/dashboard') }}" class="">Dashboard</a> --}}
                            <a href="#home">
                                <i class="ti-heart"></i> 
                                <span class="account-link">Saved Cars ()</span>
                            </a>
                            <a href="#home">
                                <i class="ti-car"></i> 
                                <span class="account-link">Your Garage</span>
                            </a>
                            <a href="#home">
                                <i class="ti-user"></i> 
                                <span class="{{ route('profile.user') }}">Account Info</span>
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="account-dropdown__trans-btn">Sign off</button>
                            </form>
                            @else
                                <h1>Sign in</h1>
                                <p>Save cars and add cars to Your Garage, and more.</p>
                                <a href="{{ route('login') }}" class="account-dropdown__trans-btn">Sign in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="account-dropdown__solid-btn">Register</a>
                            @endif
                        @endauth
                    @endif
                    
                </div>
            </div>
        </header>
    </div>

    {{-- mobile menu --}}
    <section class="mobile-menu">
        <div class="mobile-menu__top">

            <div class="mobile-menu__close-btn-container">
                <div class="mobile-menu__close-btn">
                    <div class="line">
                    </div>
                </div>
            </div>
            
        
            <div class="mobile-menu__logo">
            <a href="#" class="mobile-menu__link">
                Auto Exchange
            </a>
            </div>
        
            <div class="mobile-menu__account">
                <a href="#">Sign In</a>
            </div>
        </div>
        <div class="mobile-menu__bottom accordion">
            <div class="mobile-menu__contentBx">
                <div class="mobile-menu__label">
                    <h5>Buy</h5>
                    <i class="fas fa-angle-down"></i>
                </div>
                <div class="mobile-menu__links content">
                    <ul>
                        <li>Homes for sale</li>
                        <li>Forclosures</li>
                        <li>For sale by owner</li>
                        <li>Open houses</li>
                        <li>New Construction</li>
                    </ul>
                </div>
            </div>
            <div class="mobile-menu__contentBx">
                <div class="mobile-menu__label">
                    <h5>Rent</h5>
                    <i class="fas fa-angle-down"></i>
                </div>
                <div class="mobile-menu__links content">
                    <ul>
                        <li>Homes for sale</li>
                        <li>Forclosures</li>
                        <li>For sale by owner</li>
                        <li>Open houses</li>
                        <li>New Construction</li>
                    </ul>
                </div>
            </div>
            <div class="mobile-menu__contentBx">
                <div class="mobile-menu__label">
                    <h5>Sell</h5>
                    <i class="fas fa-angle-down"></i>
                </div>
                <div class="mobile-menu__links content">
                    <ul>
                        <li>Homes for sale</li>
                        <li>Forclosures</li>
                        <li>For sale by owner</li>
                        <li>Open houses</li>
                        <li>New Construction</li>
                    </ul>
                </div>
            </div>
            <div class="mobile-menu__contentBx">
                <div class="mobile-menu__label">
                    <h5>Home Loans</h5>
                    <i class="fas fa-angle-down"></i>
                </div>
                <div class="mobile-menu__links content">
                    <ul>
                        <li>Homes for sale</li>
                        <li>Forclosures</li>
                        <li>For sale by owner</li>
                        <li>Open houses</li>
                        <li>New Construction</li>
                    </ul>
                </div>
            </div>
            <div class="mobile-menu__contentBx">
                <div class="mobile-menu__label">
                    <h5>Agent Findeer</h5>
                    <i class="fas fa-angle-down"></i>
                </div>
                <div class="mobile-menu__links content">
                    <ul>
                        <li>Homes for sale</li>
                        <li>Forclosures</li>
                        <li>For sale by owner</li>
                        <li>Open houses</li>
                        <li>New Construction</li>
                    </ul>
                </div>
            </div>
                
            <div class="mobile-menu__item">Advertise</div>
            <div class="mobile-menu__item">Help</div>
        </div>
    </section>
</header>