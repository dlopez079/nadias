<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', "Nadia's Garden Restaurant") }}@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Fonts -->


    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <!-- Fav Icon -->
    <link rel="icon" href="/images/favicon.ico">    
</head>
<body>
    
    <div id="app"class="container">
        <div class="top-bar">
            <div>Call us at (123) 456-7891</div>
            <div><a href="#">get driving directions</a></div>
        </div>            
        <header>
            <a href="/"><img src="/images/logo.png"></a>
            <nav>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li class="separator"></li>
                    <li><a href="#">About</a></li>
                    <li class="separator"></li>
                    <li><a href="/menu">Menu</a></li>
                    <li class="separator"></li>
                    <li><a href="#">Reservations</a></li>
                    <li class="separator"></li>
                    <li><a href="#">Location &amp; Hours</a></li>
                    <li class="separator"></li>
                    <li><a href="#">Contact</a></li>
                    <li class="separator"></li>
                    <!-- Authentication Links -->
                    @guest
                            <li>
                                <a href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="separator"></li>
                            @if (Route::has('register'))
                                <li >
                                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li>
                                
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                               
                            </li>
                        @endguest
                </ul>
            </nav>
        </header>  
        <main class="page-content">
            <h4 class="intro">Creating memories, one experience at a time</h4>               
            <p>
                Nadia’s Garden Restaurant isn’t just about dining. We’re about creating memorable experiences that our guest will cherish! 
                Our family friendly restaurant has indoor, outdoor, and intimate dining options for any occasion. 
                Our outdoor garden area is perfect for a stroll before or after your meal. We invite you to come dine with us!
            </p>
            <img src="/images/patio.jpg" class="home">
            <div class="menu-categories">
                <article>
                    <a href="#"><img src="/images/mushrooms.jpg"></a>
                    <h2><a href="#">Starters</a></h2>
                </article>                
                <article>
                    <a href="#"><img src="/images/salad.jpg"></a>
                    <h2><a href="#">Salads</a></h2>
                </article>                
                <article>
                    <a href="#"><img src="/images/burger.jpg"></a>
                    <h2><a href="#">Entrees</a></h2>
                </article>                
                <article>
                    <a href="#"><img src="/images/brownie.jpg"></a>
                    <h2><a href="#">Desserts</a></h2>
                </article>                
            </div>
            <div class="social">
                <div>
                    <h4>What our customers say</h4>
                    <p>
                        This place has, without a doubt, some of the best pizza I have ever had! 
                        The owners are hands on and made sure we had everything we needed.
                        They are an eclectic eatery, with a large variety of meals to choose from, 
                        but everything I’ve tried from their menu has been great. 
                        It’s definitely a place you have to give a few tries to get a feel for everything they have to offer. 
                        Oh, and their crème brulee is amazing!<br>
                        <br>
                        Shad Cayden
                    </p>
                </div>    
                <div class="networks">
                    <a href="#"><img src="/images/twitter.png"></a>
                    <a href="#"><img src="/images/fb.png"></a>
                    <a href="#"><img src="/images/ig.png"></a>    
                </div>
            </div>
        </main>    
        <footer>
            NADIA’S GARDEN RESTAURANT IS A FICTITIOUS BRAND CREATED BY LYNDA.COM SOLELY FOR THE PURPOSE OF TRAINING.
            ALL PRODUCTS AND PEOPLE ASSOCIATED WITH NADIA’S GARDEN RESTAURANT ARE ALSO FICTITIOUS.
            ANY RESEMBLANCE TO REAL BRANDS, PRODUCTS, OR PEOPLE IS PURELY COINCIDENTAL. 
            INFORMATION PROVIDED ABOUT THE PRODUCT IS ALSO FICTITIOUS AND SHOULD NOT BE CONSTRUED TO BE REPRESENTATIVE 
            OF ACTUAL PRODUCTS ON THE MARKET IN A SIMILAR PRODUCT CATEGORY.
        </footer>   
    </div>          

    <main class="py-4">
        @yield('content')
    </main>
    
</body>
</html>
