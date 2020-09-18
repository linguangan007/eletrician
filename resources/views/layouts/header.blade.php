<header class="header">
    <div class="header_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_content d-flex flex-row align-items-center justify-content-start">
                        <div class="logo"><a href="#">LcdDoctors.</a></div>
                        <nav class="main_nav">
                            <ul>
                                <li class="hassubs active">
                                    <a href="index.html">BuyBack Programms</a>
                                    <ul>
                                        <li><a href="/categories">Our Price</a></li>
                                        <li><a href="product.html">Product</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="checkout.html">Check out</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </li>
                                <li class="hassubs">
                                    <a href="/categories">Categories</a>
                                    <ul>
                                        <li><a href="categories">Wire</a></li>
                                        <li><a href="categories.html">Pipe</a></li>
                                        <li><a href="categories.html">Category</a></li>
                                        <li><a href="categories.html">Category</a></li>
                                        <li><a href="categories.html">Category</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Accessories</a></li>
                                <li><a href="#">Offers</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                        <div class="header_extra ml-auto">
                            @guest
                            <div class="shopping_cart">
                                <a href="{{ route('login') }}">

                                    <div><i class="fa fa-sign-in" aria-hidden="true"></i><span class="font-weight-bold">Login</span></div>
                                </a>
                            </div>
                            @else

                                        <div class="shopping_cart">

                                                <a id="navbarDropdown"  href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                    <div><i class="fa fa-user-circle-o" aria-hidden="true"></i><span class="font-weight-bold">{{ Auth::user()->name }}</span></div>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                </div>
                                        </div>
                            @endguest
                            <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Search Panel
    <div class="search_panel trans_300">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="search_panel_content d-flex flex-row align-items-center justify-content-end">
                        <form action="#">
                            <input type="text" class="search_input" placeholder="Search" required="required">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
-->
    <!-- Social
    <div class="header_social">
        <ul>
            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
        </ul>
    </div>-->
</header>
