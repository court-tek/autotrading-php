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
                    <span class="navigation__user-greeting">
                        Hi, Courtney
                    </span>
                    <i class="fas fa-bars"></i>
                </div>
    
                {{-- right nav --}}
                <div class="navigation__right-menu">
                    <div class="navigation__user-img">
                        <span class="navigation__user-greeting">
                            Hi, Courtney
                        </span>
                    </div>
                    <div class="navigation__user-dropdown">
                        my account
                        <i class="fas fa-chevron-down"></i>
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
        {{-- mobile menu ends --}}

        <div class="welcome">
            <div class="container">
                <h1 class="welcome__heading">Helping You <br> Find Your Next Car</h1>

                <section class="welcome__trending">
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
                </section> 
            </div>
        </div>
        <script src="{{url("front/js/main.js")}}"></script>
    </body>
</html>
