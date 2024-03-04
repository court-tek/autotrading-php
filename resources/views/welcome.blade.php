<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{url("admin/plugins/fontawesome-free/css/all.min.css")}}">
        <link rel="stylesheet" href="{{url("admin/css/themify-icons.css")}}">

        <!-- CSS -->
        <link href="{{ url("front/css/main.css") }}" rel="stylesheet" />

    </head>
    <body class="antialiased landing">
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
                        <a href="" class="navigation__header-link">
                            Auto Exchange
                        </a>
                    </div>

                    {{-- navi links --}}
                    <div class="navigation__links">
                        <a href="#" class="navigation__link">Cars for Sale</a>
                        <a href="#" class="navigation__link">New Cars</a>
                        <a href="#" class="navigation__link">Sell Your Car</a>
                        <a href="#" class="navigation__link">Financing</a>
                        <a href="#" class="navigation__link">News</a>
                    </div>

                </div>
    
                {{-- mobile open btn --}}
                <div class="navigation__burger-menu">
                    @if (Route::has('login'))
                        @auth
                            <span class="navigation__user-greeting">
                                Hi, {{ auth()->user()->name }}
                            </span>
                            {{-- <a href="{{ url('/dashboard') }}" class="">Dashboard</a> --}}
                            @else
                                <a href="{{ route('login') }}" class="navigation__login-link">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="navigation__register-link">Register</a>
                            @endif
                        @endauth
                    @endif
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
                                    <span class="account-link">Saved Cars (6)</span>
                                </a>
                                <a href="#home">
                                    <i class="ti-car"></i> 
                                    <span class="account-link">Your Garage</span>
                                </a>
                                <a href="{{ url('/profile') }}">
                                    <i class="ti-user"></i> 
                                    <span class="account-link">Account Info</span>
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
                            <li>Dashboards for sale</li>
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
                            <li>Dashboards for sale</li>
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
                            <li>Dashboards for sale</li>
                            <li>Forclosures</li>
                            <li>For sale by owner</li>
                            <li>Open houses</li>
                            <li>New Construction</li>
                        </ul>
                    </div>
                </div>
                <div class="mobile-menu__contentBx">
                    <div class="mobile-menu__label">
                        <h5>Dashboard Loans</h5>
                        <i class="fas fa-angle-down"></i>
                    </div>
                    <div class="mobile-menu__links content">
                        <ul>
                            <li>Dashboards for sale</li>
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
                            <li>Dashboards for sale</li>
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

        {{-- content --}}
        <section class="hero">
            <div class="hero__images">
                <div class="hero__image">
                    <img src="{{ url("images/nissan_silvia14_big.jpg") }}" alt="1996 nissan silvia s14" class="hero__image">
                    <div class="hero__info">
                        <div class="hero__subtitle">
                            Used
                        </div>
                        <div class="hero__title">
                           1995 Nissan Silvia
                        </div>
                        <div class="hero__info-link">
                            See Listing
                        </div>
                    </div>
                </div>
                <div class="hero__image">
                    <img src="{{ url("images/acura_nsx7.jpg") }}" alt="1996 nissan silvia s14" class="hero__image">
                    <div class="hero__info">
                        <div class="hero__subtitle">
                            Certified
                        </div>
                        <div class="hero__title">
                           1995 Nissan Silvia
                        </div>
                        <div class="hero__info-link">
                            See Listing
                        </div>
                    </div>
                </div>
                <div class="hero__image">
                    <img src="{{ url("images/toyota_supra1_big.jpg") }}" alt="1996 nissan silvia s14" class="hero__image">
                    <div class="hero__info">
                        <div class="hero__subtitle">
                            Used
                        </div>
                        <div class="hero__title">
                           1995 Nissan Silvia
                        </div>
                        <div class="hero__info-link">
                            See Listing
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="hero__indicator">
                <div class="hero__indicator-item">
                    <span class="hero__indicator-number">01</span>
                    <span class="hero__indicator-text">Sports Sedan</span>
                </div>
                <div class="hero__indicator-item">
                    <span class="hero__indicator-number">02</span>
                    <span class="hero__indicator-text">Sports Coupe</span>
                </div>
                <div class="hero__indicator-item">
                    <span class="hero__indicator-number">03</span>
                    <span class="hero__indicator-text">Sports Coupe</span>
                </div>
            </div>
        </section> 
        
        {{-- trending --}}
        <section class="welcome__trending">
            <div class="container">
                <input type="text" name="search" class="welcome__search">
                <div class="welcome__title">
                    <i class="far fa-clock"></i> Trending Now
                </div>
                <div class="welcome__tags">
                    @foreach ($models as $tag)
                        <a href="{{ url("listings/{$tag}") }}" class="welcome__tag">
                            <i class="fas fa-search"></i>
                            {{ $tag }}
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
        <script src="{{url("front/js/main.js")}}"></script>
    </body>
</html>




