<body>
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- header start -->
    <header>
        <div class="header-top-furniture black-bg-3 res-header-sm">
            <div class="container">
                <div class="header-bottom-wrapper">
                    <div class="logo-2 sports-logo">
                        <a href="{{ route('home')}}">
                            <img src="assets/img/logo/logoShoeStoreTransparent.png" width="200px" height="60px" alt="logo-shoe-store">
                            {{-- <img src="assets/img/logo/logo-7.png" alt=""> --}}
                        </a>
                    </div>
                    <div class="menu-style-2 sports-menu menu-hover">
                        <nav>
                            <ul>
                                <li><a href="{{ route('home')}}"> Inicio  </a></li>
                                <li><a href="#">Tienda</a></li>
                                <li><a href="#">Ofertas</a></li>
                                <li><a href="#">Contacto</a></li>
                                @if (!Auth::check())
                                <li><a href="#">Registrarse</a></li>
                                <li><a href="#">Iniciar sesión</a></li>
                                @else
                                <li><a href="{{ route('page.perfil')}}">Mi Cuenta</a></li>
                                <li><a href="#">Cerrar sesión</a></li>
                                @endif
                            </ul>
                        </nav>
                    </div>
                    @if (Auth::check())
                    <div class="header-cart">
                        <a class="icon-cart-furniture white-cart" href="#">
                            <i class="ti-shopping-cart"></i>
                            <span class="shop-count-furniture green">02</span>
                        </a>
                        <ul class="cart-dropdown">
                            <li class="single-product-cart">
                                <div class="cart-img">
                                    <a href="#"><img src="https://picsum.photos/85/101" alt=""></a>
                                </div>
                                <div class="cart-title">
                                    <h5><a href="#"> Zapatos</a></h5>
                                    <h6><a href="#">Black</a></h6>
                                    <span>$80.00</span>
                                </div>
                                <div class="cart-delete">
                                    <a href="#"><i class="ti-trash"></i></a>
                                </div>
                            </li>
                            <li class="single-product-cart">
                                <div class="cart-img">
                                    <a href="#"><img src="https://picsum.photos/85/101" alt=""></a>
                                </div>
                                <div class="cart-title">
                                    <h5><a href="#"> Botas</a></h5>
                                    <h6><a href="#">Black</a></h6>
                                    <span>$80.00</span>
                                </div>
                                <div class="cart-delete">
                                    <a href="#"><i class="ti-trash"></i></a>
                                </div>
                            </li>

                            <li class="cart-space">
                                <div class="cart-sub">
                                    <h4>Subtotal</h4>
                                </div>
                                <div class="cart-price">
                                    <h4>$240.00</h4>
                                </div>
                            </li>
                            <li class="cart-btn-wrapper">
                                <a class="cart-btn btn-hover" href="#">Ver carrito</a>
                                <a class="cart-btn btn-hover" href="#">Pagar</a>
                            </li>
                        </ul>
                    </div>
                    @endif

                </div>
                <div class="row">
                    <div class="mobile-menu-area sports-mobile-menu d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none">
                        <div class="mobile-menu">
                            <nav id="mobile-menu-active">
                                <ul class="menu-overflow">
                                    <li><a href="contact.html"> Inicio  </a></li>
                                    <li><a href="#">Tienda</a></li>
                                    <li><a href="#">Ofertas</a></li>
                                    <li><a href="#">Contacto</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->
