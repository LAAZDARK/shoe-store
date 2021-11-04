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
                            <img src="{{ asset('assets/img/logo/logoShoeStoreTransparent.png')}}" width="150px" height="60px" alt="logo-shoe-store">

                        </a>
                    </div>
                    <div class="menu-style-2 sports-menu menu-hover">
                        <nav>
                            <ul>
                                <li><a href="{{ route('home')}}"> Inicio  </a></li>
                                <li><a href="{{ route('page.store')}}">Productos</a></li>
                                <li><a href="{{ route('page.identity')}}">Identidad</a></li>
                                <li><a href="{{ route('page.about')}}">Nosotros</a></li>
                                <li><a href="{{ route('page.contact')}}">Contacto</a></li>
                                @if (!Auth::check())
                                <li><a href="{{ route('page.register')}}">Registrarse</a></li>
                                <li><a href="{{ route('login')}}">Iniciar sesión</a></li>
                                @else
                                <li><a href="{{ route('page.perfil')}}">Perfil</a></li>
                                <li><a href="{{ route('logout')}}">Cerrar</a></li>
                                @endif
                            </ul>
                        </nav>
                    </div>
                    @if (Auth::check())
                    <div class="header-cart">
                        <div id="cart">
                            <a class="icon-cart-furniture white-cart" href="{{ route('page.shopping.cart') }}">
                                <i class="ti-shopping-cart"></i>
                                <span class="shop-count-furniture green">@{{count}}</span>
                            </a>
                            {{-- Routes --}}
                            <input type="hidden" ref="storeCard" value="{{route('purchase.store')}}">
                            <input type="hidden" ref="getCard" value="{{route('purchase.index')}}">
                            <input type="hidden" ref="countProduct" value="{{route('count.product')}}">
                            <input type="hidden" ref="sumProduct" value="{{route('sum.product')}}">
                            {{-- end Routes --}}

                            <ul class="cart-dropdown">
                                <div v-for="product in cart">
                                    <li class="single-product-cart">
                                        <div class="cart-img">
                                            <a href="#"><img :src="'/' + product.image"  width="50" height="60" alt="image-Product"></a>

                                        </div>
                                        <div class="cart-title">
                                            <h5><a href="#"> @{{product.title}}</a></h5>
                                            <span>$@{{product.price}}.00</span>
                                        </div>
                                        <div class="cart-delete">
                                            <button class="btn btn-danger btn-sm" v-on:click.prevent="deleteProduct(product.id)">Eliminar</button>
                                        </div>
                                    </li>
                                </div>


                                <li class="cart-space">
                                    <div class="cart-sub">
                                        <h4>Subtotal</h4>
                                    </div>
                                    <div class="cart-price">
                                        <h4>$@{{total}}.00</h4>
                                    </div>
                                </li>
                                <li class="cart-btn-wrapper">
                                    <a class="cart-btn btn-hover" href="{{ route('page.shopping.cart') }}">Ver carrito</a>
                                    <a class="cart-btn btn-hover" href="#">Pagar</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    @endif

                </div>
                <div class="row">
                    <div class="mobile-menu-area sports-mobile-menu d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none">
                        <div class="mobile-menu">
                            <nav id="mobile-menu-active">
                                <ul class="menu-overflow">
                                    <li><a href="{{ route('home')}}"> Inicio  </a></li>
                                    <li><a href="{{ route('page.store')}}">Productos</a></li>
                                    <li><a href="{{ route('page.identity')}}">Identidad</a></li>
                                    <li><a href="{{ route('page.about')}}">Nosotros</a></li>
                                    <li><a href="{{ route('page.contact')}}">Contacto</a></li>
                                    @if (!Auth::check())
                                    <li><a href="{{ route('page.register')}}">Registrarse</a></li>
                                    <li><a href="{{ route('login')}}">Iniciar sesión</a></li>
                                    @else
                                    <li><a href="{{ route('page.perfil')}}">Perfil</a></li>
                                    <li><a href="{{ route('logout')}}">Cerrar</a></li>
                                    @endif
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->
