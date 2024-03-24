<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>App Name - JDM Autotrader</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{url("admin/plugins/fontawesome-free/css/all.min.css")}}">
        <link rel="stylesheet" href="{{url("admin/css/themify-icons.css")}}">

        <!-- CSS -->
        <link href="{{ url("front/css/main.css") }}" rel="stylesheet" />

        {{-- <!-- Vite style --> --}}
        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/welcome.js'])
    </head>
    <body class="antialiased landing">
        <div class="container">
            <header class="navigation">
            
                {{-- logo area --}}
                <div class="navigation__logo">
                    <a href="" class="navigation__header-link">
                        JDM Auto Exchange
                    </a>
                </div>

                {{-- left nav --}}
                <div class="navigation__left-menu">
                    {{-- logo area --}}
                    <div class="navigation__left-menu-logo">
                        <a href="" class="navigation__header-link">
                            Jdm Auto Exchange
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
                                <a href="{{ route('login') }}" class="navigation__login-link">Sign in</a>

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
                        <h5>Auto Finder</h5>
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
                @foreach ($featured as $item)
                    <div class="hero__image" attr="1">
                        <img src="" id="{{ $item->id }}" alt="{{ $item->title }}" class="hero__image-element">
                        <div class="hero__info">
                            <div class="hero__subtitle">
                                {{ $item->condition }}
                            </div>
                            <div class="hero__title">
                               {{ $item->title }}
                            </div>
                            <div class="hero__info-link">
                                <a href="{{ route('front.show', ['slug' => $item->slug, 'id' => $item->id]) }}">See Listing</a>
                            </div>
                        </div> 
                        <div class="hero__indicator">
                            <div class="hero__indicator-item">
                                <span class="hero__indicator-number">01</span>
                                <span class="hero__indicator-text">{{ $item->title }}</span>
                            </div>
                            <div class="hero__indicator-item">
                                <span class="hero__indicator-number">02</span>
                                <span class="hero__indicator-text">Hp: {{ $item->horsepower }}</span>
                            </div>
                            <div class="hero__indicator-item">
                                <span class="hero__indicator-number">03</span>
                                <span class="hero__indicator-text">{{ $item->transmission }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            
            
        </section> 
        
        {{-- trending --}}
        <section class="welcome__trending">
            <div class="container"> 
                <form action="{{ route('front.index') }}" method="GET">
                    <section class="welcome__filter">
                        <div class="form-group listings__make">
                            <label for="">Make</label>
                            <select name="make" class="listings__make">
                                <option value="">All</option>
                                @foreach ($cars as $make => $value)
                                    <option value="{{ $make }}">{{ $make }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group listings__model">
                            <label for="">Model</label>
                            <select id="model" name="model" class="listings__model">
                                <option value="">All</option>
                            </select>
                        </div>
                        <div class="form-group listings__price non-mobile">
                            <label for="min_price">Min Price</label>
                            <select name="min_price" class="listings__min-price">
                                <option value="0">All</option>
                                <option value="0">0</option>
                                <option value="2000">2000</option>
                                <option value="4000">4000</option>
                                <option value="6000">6000</option>
                                <option value="150000">150000</option>
                                <option value="150000">200000</option>
                            </select>
                        </div>
                        <div class="form-group listings__price non-mobile">
                            <label for="max_price">Max Price</label>
                            <select name="max_price" class="listings__max-price">
                                <option value="1000000">All</option>
                                <option value="2000">2000</option>
                                <option value="4000">4000</option>
                                <option value="6000">6000</option>
                                <option value="60000">60000</option>
                                <option value="70000">70000</option>
                                <option value="150000">150000</option>
                                <option value="200000">200000</option>
                            </select>
                        </div>
                        <div class="form-group listings__year">
                            <label for="">Min Year</label>
                            <select name="min_year" class="listings__year">
                                <option value="1975">All</option>
                                <option value="1995">1995</option>
                                <option value="2010">2010</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2020">2010</option>
                                <option value="2022">2020</option>
                                <option value="2023">2020</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                            </select>
                        </div>
                        <div class="form-group listings__year">
                            <label for="">Max Year</label>
                            <select name="max_year" class="listings__year">
                                <option value="2025">All</option> <option value="2010">2010</option>
                                <option value="2000">2000</option>
                                <option value="2010">2010</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                            </select>
                        </div>
                        <div class="form-group form-group--full-width">
                            <label for="" style="color: white;" class="non-mobile">button</label>
                            <button class="listings__update">update</button>
                        </div>
                    </section>
                </form>
                <div class="welcome__title">
                    Explore by
                </div>
                <div class="welcome__query-grid">
                    <div class="welcome__makes">
                        <div class="welcome__title">
                            Popular Brands
                        </div>
                        <ul class="welcome__makes-grid">
                            <li><a href="{{ route('front.getMake', ['make' => 'toyota']) }}">Toyota</a></li>
                            <li><a href="{{ route('front.getMake', ['make' => 'nissan']) }}">Nissan</a></li>
                            <li><a href="{{ route('front.getMake', ['make' => 'honda']) }}">Honda</a></li>
                            <li><a href="#">Mitsubishi</a></li>
                            <li><a href="#">Izuzu</a></li>
                            <li><a href="{{ route('front.getMake', ['make' => 'subaru']) }}">Subaru</a></li>
                            <li><a href="">Suzuki</a></li>
                            <li><a href="{{ route('front.getMake', ['make' => 'mazda']) }}">Mazda</a></li>
                            <li><a href="">Daihatsu</a></li>
                            <li><a href="">BMW</a></li>
                            <li><a href="">Volkswagen</a></li>
                            <li><a href="">Mercedes</a></li>
                        </ul>
                    </div>
                    <div class="welcome__body-types">
                        <div class="welcome__title">
                            Body Types
                        </div>
                        <ul class="welcome__body-types-grid">
                            <li><a href="{{ route('front.getBodyType', ['body_type' => 'sedan']) }}">Sedan</a></li>
                            <li><a href="">Hatchback</a></li>
                            <li><a href="">SUV</a></li>
                            <li><a href="">Mini</a></li>
                            <li><a href="">Convertible</a></li>
                            <li><a href="{{ route('front.getBodyType', ['body_type' => 'coupe']) }}">Coupe</a></li>
                            <li><a href="">Minivan</a></li>
                            <li><a href="">Bus</a></li>
                            <li><a href="">Truck</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <script src="{{url("front/js/main.js")}}"></script>
    </body>
</html>




