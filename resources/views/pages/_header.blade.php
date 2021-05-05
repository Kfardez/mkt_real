
    <section id="topbar" class="d-none d-lg-block">
        <div class="container clearfix">
            <div class="contact-info float-left">
                <i class="icofont-envelope"></i><a href="mailto:marieketal@gmail.com">marieketal@gmail.com</a>
                <i class="icofont-phone"></i> +235 63 88 01 08 / 93 52 71 47
            </div>
            <div class="social-links float-right">
                <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
                <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
                <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
                <a href="#" class="skype"><i class="icofont-skype"></i></a>
                <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
            </div>
        </div>
    </section>

    <header id="header">
    <div class="container">

        <div class="logo float-left">
        <h1 class="text-black"><a href="#">
            <span>
                <img class="col-4" src="assets/img/favicon.png" alt="logo" class="img-thumbnail" style="max-width: 4rem; max-height: 4rem;">L.C.M.K.T</span></a></h1>
         <!--<a href="{{ asset('/acceuil') }}"><img src="assets/icon/favicon1.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
            <li  class="active"><a href="{{ asset('/acceuil') }}">Acceuil</a></li>
            <li><a href="{{ asset('/apropos') }}">A propos</a></li>
            <li><a href="{{ asset('/actualite') }}">Actualité</a></li>
            <li class="drop-down"><a href="">Règlement & Organisation</a>
                <ul>
                    <li><a href="{{ asset('/reglement') }}">Règlement intérieur</a></li>
                    <li><a href="{{ asset('/organisation') }}">Organisation & R.H</a></li>
                </ul>
            </li>
            <li><a href="{{ asset('/galerie') }}">Galérie</a></li>
            <li ><a href="{{asset('/inscription')}}" class="text-muted">Postuler</a></li>
            <li><a href="{{asset('/contact')}}">Contact</a></li>


        @if (Route::has('login'))
            @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
            @else
                <li class="drop-down"><a href="">Chat</a>
                    <ul>
                        <li><a href="{{ route('login') }}">Connexion</a></li>
                        @if (Route::has('register'))
                        <li><a href="{{ route('register') }}">Inscription</a></li>
                        @endif
                    </ul>
                </li>
            @endauth
        @endif

            <li><a href="https://api.whatsapp.com/send?phone=&text=<?php urlencode('Hello World!') ?>http://localhost/mkt_real/public/" class="share"><i class="icofont-share"></i></a></li>





        </ul>
        </nav>

    </div>
    </header>
