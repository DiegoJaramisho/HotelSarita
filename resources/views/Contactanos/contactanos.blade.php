@extends('layouts.app')

@section('tittle','contactanos')

@section('content')
<div class="section big-55-height over-hide z-bigger">

    <div class="parallax parallax-top" style="background-image: url({{asset('assets/img/fotos/20.jpg')}})"></div>
    <div class="dark-over-pages"></div>

    <div class="hero-center-section pages">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 parallax-fade-top">
                    <div class="hero-text">Contactanos</div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="section padding-top-bottom-smaller background-dark-2 over-hide">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h5 class="color-grey">A new dimension of luxury.</h5>
                <p class="color-white mt-3 mb-3"><em>our presentation, 0:48 min</em></p>
                <a href="https://vimeo.com/54851233" class="video-button" data-fancybox><i class="fa fa-play"></i></a>
            </div>
        </div>
    </div>
</div> --}}

<div class="section padding-top z-bigger">
    <div class="container">
        <div class="row justify-content-center padding-bottom-smaller">
            <div class="col-md-8">
                <div class="subtitle with-line text-center mb-4">Hostal Sarita</div>
                <h3 class="text-center padding-bottom-small">Informacion</h3>
            </div>
            {{-- <div class="section clearfix"></div>
            <div class="col-md-4 ajax-form">
                <input name="name" type="text" placeholder="Your Name: *" autocomplete="off"/>
            </div>
            <div class="col-md-4 mt-4 mt-md-0 ajax-form">
                <input name="email" type="text"  placeholder="E-Mail: *" autocomplete="off"/>
            </div>
            <div class="section clearfix"></div>
            <div class="col-md-8 mt-4 ajax-form">
                <textarea name="message" placeholder="Tell Us Everything"></textarea>
            </div>
            <div class="section clearfix"></div>
            <div class="col-md-8 mt-3 ajax-checkbox">
                <ul class="list">
                    <li class="list__item">
                        <label class="label--checkbox">
                            <input type="checkbox" class="checkbox">
                            collect my details through this form
                        </label>
                    </li>
                </ul>
            </div>
            <div class="section clearfix"></div>
            <div class="col-md-8 mt-3 ajax-form text-center">
                <button class="send_message" id="send" data-lang="en"><span>submit</span></button>
            </div>
            <div class="section clearfix"></div>
            <div class="col-md-8 padding-top-bottom">
                <div class="sep-line"></div>
            </div> --}}
            <div class="section clearfix"></div>
            <div class="col-md-6 col-lg-4">
                <div class="address">
                    <div class="address-in text-left">
                        <p class="color-black">Direccion:</p>
                    </div>
                    <div class="address-in text-right">
                        <p>Cra. 9 4-111 a4-1</p>
                    </div>
                </div>
                <div class="address">
                    <div class="address-in text-left">
                        <p class="color-black">Municipio:</p>
                    </div>
                    <div class="address-in text-right">
                        <p>Villavieja/Huila</p>
                    </div>
                </div>
                <div class="address">
                    <div class="address-in text-left">
                        <p class="color-black">Check-In:</p>
                    </div>
                    <div class="address-in text-right">
                        <p>sugeto a disponibilidad</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="address">
                    <div class="address-in text-left">
                        <p class="color-black">Celular:</p>
                    </div>
                    <div class="address-in text-right">
                        <p>+57 313 3335234</p>
                    </div>
                </div>
                {{-- <div class="address">
                    <div class="address-in text-left">
                        <p class="color-black">Email:</p>
                    </div>
                    <div class="address-in text-right">
                        <p>info@hotel.com</p>
                    </div>
                </div> --}}
                <div class="address">
                    <div class="address-in text-left">
                        <p class="color-black">Check-Out:</p>
                    </div>
                    <div class="address-in text-right">
                        <p>11:00 am</p>
                    </div>
                </div>
            </div>
            <div class="section clearfix"></div>
            <div class="col-md-8 text-center mt-5" data-scroll-reveal="enter bottom move 50px over 0.7s after 0.2s">
                <p class="mb-0"><em>Horario de atencion: las 24 horas del dia</em></p>
                <h2 class="text-opacity">+57 313 3335234</h2>
            <a class="mt-1 btn btn-primary" href="rooms-gallery.html">Reserva</a>

            </div>
        </div>
        {{-- <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="subscribe-home">
                    <input type="text" placeholder="your email here"/>
                    <button data-lang="en">subscribe</button>
                </div>
            </div>
        </div> --}}
    </div>
</div>




<div class="scroll-to-top"></div>
@endsection
