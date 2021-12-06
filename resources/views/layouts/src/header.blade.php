<nav id="menu-wrap" class="menu-back cbp-af-header">
    <div class="menu-top background-black">
        <div class="container">
            <div class="row">
                <div class="col-6 px-0 px-md-3 pl-1 py-3">
                    <span class="call-top">call us:</span> <a href="#" class="call-top">(381) 60 422 4256</a>
                </div>
                <div class="col-6 px-0 px-md-3 py-3 text-right">
                    <a href="#" class="social-top">fb</a>
                    <a href="#" class="social-top">tw</a>
                    <div class="lang-wrap">
                        eng
                        <ul>
                            <li><a href="#">ger</a></li>
                            <li><a href="#">rus</a></li>
                            <li><a href="#">ser</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu">
        <a href="{{route('welcome')}}" >
            <div class="logo">
                <h1 class="text-center font-weight-bold" style="font-size: 2.5rem; color:#fff;">Hostal Sarita</h1>
            </div>
        </a>
        <ul>
            <li>
                <a class="{{ Request::routeIs('welcome') ? 'curent-page' : ''}}" href="{{route('welcome')}}" >Inicio</a>
            </li>
            <li>
                <a class="{{ Request::routeIs('habitaciones') ? 'curent-page' : ''}}" href="{{route('habitaciones')}}">Habitaciones</a>
            </li>
            {{-- <li>
                <a href="#" >rooms</a>
                <ul>
                    <li><a href="rooms.html">Our Rooms</a></li>
                    <li><a href="rooms-gallery.html">Room Gallery</a></li>
                    <li><a href="rooms-video.html">Room Video</a></li>
                </ul>
            </li> --}}
            <li>
                <a class="{{ Request::routeIs('servicios') ? 'curent-page' : ''}}" href="{{route('servicios')}}">Services</a>
            </li>
            <li>
                <a href="about.html">about us</a>
            </li>
            <li>
                <a href="blog.html">news</a>
            </li>
            <li>
                <a href="contact.html">contact</a>
            </li>
        </ul>
    </div>
</nav>
