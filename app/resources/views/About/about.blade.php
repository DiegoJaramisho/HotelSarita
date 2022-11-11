@extends('layouts.app')

@section('tittle', 'sobre nosotros')

@section('content')
    <div class="section big-55-height over-hide z-bigger">

        <div class="parallax parallax-top" style="background-image: url({{ asset('assets/img/fotos/27.jpg') }})"></div>
        <div class="dark-over-pages"></div>

        <div class="hero-center-section pages">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 parallax-fade-top">
                        <div class="hero-text">Sobre nosotros</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="subtitle with-line text-center mb-4">Hostal Sarita</div>
        <h3 class="text-center padding-bottom-small">conocenos</h3>
        <div class="row justify-content-center  alig-items-center section pt-5">
            <div class="card mx-auto text-center mb-3" style="max-width: 540px;">
                <div class="row g-0">
{{--                     <div class="col-md-4">
                        <img src="{{asset('assets/img/fotos/desierto.jpeg')}}" class="img-fluid rounded-start" alt="...">
                    </div> --}}
                    <div class="col-md-12">
                        <div class="card-body">
                            <h5 class="card-title">Descripción</h5>
                            <p class="card-text">El <b>HOSTAL SARITA</b> se encuentra en Villavieja y ofrece alojamiento con
                                restaurante, aparcamiento privado gratuito, salon compartido y zona de barbacoa. El
                                establecimiento se encuentra a 4.3 Km de Polonia, a 4.6 km
                                de Las Lajas y a 4.7 de San Francisco. Ofrece recepcion 24 horas. Servicio de enlace con el
                                Aeropuerto, servicio de habitaciones y wi-fi gratuito.<br>
                                Todas las habitaciones del albergue cuenta con baño privado y ropa de cama.<br>
                                Isla del Pleito y la Ferreira se encuentran a 40 km del Hostal Sarita. El aeropuerto Benito
                                Salas es el mas cercano y queda a 38 km.<br>
                                Ofrecemos diferentes servicios para nuestros visitantes para que vivan una increible y
                                magica experiencia para aquellos aventureros que desean conocer el DESIERTO DE LA TATACOA.
                            </p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
{{--                     <h5>Descripción</h5>
        <p class="mt-3">
            El <b>HOSTAL SARITA</b> se encuentra en Villavieja y ofrece alojamiento con restaurante, aparcamiento privado gratuito, salon compartido y zona de barbacoa. El establecimiento se encuentra a 4.3 Km de Polonia, a 4.6 km
            de Las Lajas y a 4.7 de San Francisco. Ofrece recepcion 24 horas. Servicio de enlace con el Aeropuerto, servicio de habitaciones y wi-fi gratuito.<br>
            Todas las habitaciones del albergue cuenta con baño privado y ropa de cama.<br>
            Isla del Pleito y la Ferreira se encuentran a 40 km del Hostal Sarita. El aeropuerto Benito Salas es el mas cercano y queda a 38 km.<br>
            Ofrecemos diferentes servicios para nuestros visitantes para que vivan una increible y magica experiencia para aquellos aventureros que desean conocer el DESIERTO DE LA TATACOA.</p> --}}
        </div>
    </div>
@endsection
