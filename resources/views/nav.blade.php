<header class="header">
    <div class="container">
        <div class="row">

            <div class="col-lg-2">
                <div class="header__logo">
                    <a href="./index.html"><img src="{{ asset('img/icon.png') }}" alt=""></a>
                </div>

            </div>

            <div class="col-lg-10">
                <div class="header__nav__option">
                    <nav class="header__nav__menu mobile-menu">
                      
              
                        <ul>
                            <li class="active"><a href="{{ route('welcome') }}">Inicio</a></li>
                            <li><a href="#">Productos</a>
                                <ul class="dropdown">
                                    <!-- Ejemplo de cómo podrías mostrar las categorías en la vista -->
                                    @foreach ($categories as $category)
                                        <div>
                                            <li><a href="{{ route('category.products', ['id' => $category->id]) }}">{{ $category->name }}</a></li>
                                        </div>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="./contact.html">Contacto</a></li>
            
            
                           
                            @if (Route::has('login'))
                                @auth
                                    <li>
                                        <a href="{{ url('/dashboard') }}"
                                            class="rounded-md px-3 py-2 ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                                            Dashboard
                                        </a>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{ route('login') }}"
                                            class="rounded-md px-3 py-2 ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                                            Iniciar
                                        </a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li>
                                            <a href="{{ route('register') }}"
                                                class="rounded-md px-3 py-2 ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                                                Registro
                                            </a>
                                        </li>
                                    @endif
                                @endauth
                            @endif
                            
                        </ul>
                    
                    </nav>
                    <div class="header__nav__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                    </div>
            
                </div>
            </div>

        </div>
        <div id="mobile-menu-wrap"></div>
    </div>

</header>