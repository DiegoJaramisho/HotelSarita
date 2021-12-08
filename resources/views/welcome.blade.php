@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
    <!-- banner principal -->
    <div class="section background-dark over-hide">

        <div class="hero-center-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-10 col-sm-8 parallax-fade-top">
                        <div class="hero-text">El mejor hostal de la Tatacoa</div>
                    </div>
                    <div class="col-12 mt-3 mb-5 parallax-fade-top">
                        <div class="hero-stars">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                    </div>

                    <!-- formulario -->
                    {{-- <div class="col-12 mt-3 parallax-fade-top">
                        <div class="booking-hero-wrap">
                            <div class="row justify-content-center">
                                <div class="col-5 no-mob">
                                    <div class="input-daterange input-group" id="flight-datepicker">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-item">
                                                    <span class="fontawesome-calendar"></span>
                                                    <input class="input-sm" type="text" autocomplete="off" id="start-date-1" name="start" placeholder="chech-in date" data-date-format="DD, MM d"/>
                                                    <span class="date-text date-depart"></span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-item">
                                                    <span class="fontawesome-calendar"></span>
                                                    <input class="input-sm" type="text" autocomplete="off" id="end-date-1" name="end" placeholder="check-out date" data-date-format="DD, MM d"/>
                                                    <span class="date-text date-return"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-5 no-mob">
                                    <div class="row">
                                        <div class="col-6">
                                            <select name="adults" class="wide">
                                                <option data-display="adults">adults</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <div class="col-6">
                                            <select name="children" class="wide">
                                                <option data-display="children">children</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6  col-sm-4 col-lg-2">
                                    <a class="booking-button" href="search.html">book now</a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>

        <div class="slideshow">
            <div class="slide slide--current parallax-top">
                <figure class="slide__figure">
                    <div class="slide__figure-inner">
                        <div class="slide__figure-img img-banner" style="background-image: url({{asset('assets/img/fotos/desierto.jpeg')}}); background-size: cover;"></div>
                        <div class="slide__figure-reveal"></div>
                    </div>
                </figure>
            </div>
            <div class="slide parallax-top">
                <figure class="slide__figure">
                    <div class="slide__figure-inner">
                        <div class="slide__figure-img img-banner" style="background-image: url({{asset('assets/img/fotos/06.jpeg')}}); background-size: cover;"></div>
                        <div class="slide__figure-reveal"></div>
                    </div>
                </figure>
            </div>
            <div class="slide parallax-top">
                <figure class="slide__figure">
                    <div class="slide__figure-inner">
                        <div class="slide__figure-img img-banner" style="background-image: url({{asset('assets/img/fotos/03.jpg')}}); background-size: cover;"></div>
                        <div class="slide__figure-reveal"></div>
                    </div>
                </figure>
            </div>
            <!-- revealer -->
            <div class="revealer">
                <div class="revealer__item revealer__item--left"></div>
                <div class="revealer__item revealer__item--right"></div>
            </div>
            <nav class="arrow-nav fade-top">
                <button class="arrow-nav__item arrow-nav__item--prev">
                    <svg class="icon icon--nav"><use xlink:href="#icon-nav"></use></svg>
                </button>
                <button class="arrow-nav__item arrow-nav__item--next">
                    <svg class="icon icon--nav"><use xlink:href="#icon-nav"></use></svg>
                </button>
            </nav>
            <!-- navigation -->
            <nav class="nav fade-top">
                <button class="nav__button">
                    <span class="nav__button-text"></span>
                </button>
                <h2 class="nav__chapter">descubre tu paraiso</h2>
                <div class="toc">
                    <a class="toc__item" href="#entry-1">
                        <span class="toc__item-title">descubre tu paraiso</span>
                    </a>
                    <a class="toc__item" href="#entry-2">
                        <span class="toc__item-title">vive la aventura</span>
                    </a>
                    <a class="toc__item" href="#entry-3">
                        <span class="toc__item-title">conecta con lo tradicional</span>
                    </a>
                </div>
            </nav>
            <!-- little sides -->
            <div class="slideshow__indicator"></div>
            <div class="slideshow__indicator"></div>
        </div>
    </div>

    <div class="section padding-top-bottom over-hide">
		<div class="container">
			<div class="row">
				<div class="col-md-6 align-self-center">
					<div class="row justify-content-center">
						<div class="col-10">
							<div class="subtitle text-center mb-4">hostal sarita</div>
							<h2 class="text-center">Un lugar perfecto para descansar</h2>
							<p class="text-center mt-5">Ubicado en el municipio de Villavieja, cerca a la Cerveceria LA PLANTA BEER HUB y al DESIERTO DE LA TATACOA, contamos con el confort que necesitas para descansar y sentirte como en casa. </p>
						</div>
					</div>
				</div>
				<div class="col-md-6 mt-4 mt-md-0">
					<div class="img-wrap">
						<img src="{{asset('assets/img/fotos/01.jpg')}}"  alt="">
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section background-grey over-hide">
		<div class="container-fluid px-0">
			<div class="row mx-0">
				<div class="col-xl-6 px-0">
					<div class="img-wrap" id="rev-1">
						<img src="{{asset('assets/img/fotos/09.jpeg')}}" alt="">
						{{-- {{asset('assets/img/fotos/09.jpeg')}} --}}
						{{-- <div class="text-element-over">private pool suite</div> --}}
					</div>
				</div>
				<div class="col-xl-6 px-0 mt-4 mt-xl-0 align-self-center">
					<div class="row justify-content-center">
						<div class="col-10 col-xl-8 text-center">
							<h3 class="text-center">Habitaciones dobles</h3>
							<p class="text-center mt-4">Contamos con habitaciones con dos camas perfectamente hubicadas con aire acondicionado, ultracomodas</p>
							<a class="mt-5 btn btn-primary" href="javascript:void(0)">Reservar</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row mx-0">
				<div class="col-xl-6 px-0 mt-4 mt-xl-0 pb-5 pb-xl-0 align-self-center">
					<div class="row justify-content-center">
						<div class="col-10 col-xl-8 text-center">
							<h3 class="text-center">Habitaciones sencillas</h3>
							<p class="text-center mt-4">Habitaciones sencillas para una o dos personas con mucho confort y frescura para descansar comodamente.</p>
							<a class="mt-5 btn btn-primary" href="javascript:void(0)">Reservar</a>
						</div>
					</div>
				</div>
				<div class="col-xl-6 px-0 order-first order-xl-last mt-5 mt-xl-0">
					<div class="img-wrap" id="rev-2">
						<img src="{{asset('assets/img/fotos/08.jpg')}}" alt="">
						{{-- <div class="text-element-over">sea view suite</div> --}}
					</div>
				</div>
			</div>
		</div>
	</div>
    {{-- mas servicios --}}
	{{-- <div class="section background-dark over-hide">
		<div class="container-fluid py-4">
			<div class="row">
				<div class="col-sm-6 col-lg-3">
					<a href="services.html">
						<div class="img-wrap services-wrap">
							<img src="{{asset('assets/img/ser-1.jpg')}}" alt="">
							<div class="services-text-over">spa salon</div>
						</div>
					</a>
				</div>
				<div class="col-sm-6 col-lg-3 pt-4 pt-sm-0">
					<a href="services.html">
						<div class="img-wrap services-wrap">
							<img src="{{asset('assets/img/ser-2.jpg')}}" alt="">
							<div class="services-text-over">restaurant</div>
						</div>
					</a>
				</div>
				<div class="col-sm-6 col-lg-3 pt-4 pt-lg-0">
					<a href="services.html">
						<div class="img-wrap services-wrap">
							<img src="{{asset('assets/img/ser-3.jpg')}}" alt="">
							<div class="services-text-over">pool</div>
						</div>
					</a>
				</div>
				<div class="col-sm-6 col-lg-3 pt-4 pt-lg-0">
					<a href="services.html">
						<div class="img-wrap services-wrap">
							<img src="{{asset('assets/img/ser-4.jpg')}}" alt="">
							<div class="services-text-over">activities</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div> --}}

	<div class="section padding-top-bottom over-hide">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8 align-self-center">
					<div class="subtitle with-line text-center mb-4">Hostal Sarita</div>
					<h3 class="text-center padding-bottom-small">Servicios</h3>
				</div>
				<div class="section clearfix"></div>
				<div class="col-sm-6 col-lg-4">
					<div class="services-box text-center">
						<img src="{{asset('assets/img/1.svg')}}" alt="">
						<h5 class="mt-2">Libre de Humo</h5>
						<p class="mt-3">Somos un espacio libre de humo de tabaco.</p>
						{{-- <a class="mt-1 btn btn-primary" href="services.html">read more</a> --}}
					</div>
				</div>
				<div class="col-sm-6 col-lg-4 mt-5 mt-sm-0">
					<div class="services-box text-center">
						<img src="{{asset('assets/img/2.svg')}}" alt="">
						<h5 class="mt-2">Zona de estar</h5>
						<p class="mt-3">Contamos con zonas de relajacion para descansar y compartir con otros visitantes</p>
						{{-- <a class="mt-1 btn btn-primary" href="services.html">read more</a> --}}
					</div>
				</div>
				<div class="col-sm-6 col-lg-4 mt-5 mt-lg-0">
					<div class="services-box text-center">
						<img src="{{asset('assets/img/6.svg')}}" alt="">
						<h5 class="mt-2">Restaurante</h5>
						<p class="mt-3">Deliciosas comidas que deleitan tu paladar y te permiten conocer la gastronomia local.</p>
						{{-- <a class="mt-1 btn btn-primary" href="services.html">read more</a> --}}
					</div>
				</div>
				{{-- <div class="col-sm-6 col-lg-4 mt-5">
					<div class="services-box text-center">
						<img src="{{asset('assets/img/1.svg')}}" alt="">
						<h5 class="mt-2">welcome drink</h5>
						<p class="mt-3">Sed ut perspiciatis unde omnis iste natus error sit, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p>
						<a class="mt-1 btn btn-primary" href="services.html">read more</a>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4 mt-5">
					<div class="services-box text-center">
						<img src="{{asset('assets/img/1.svg')}}" alt="">
						<h5 class="mt-2">swimming pool</h5>
						<p class="mt-3">Sed ut perspiciatis unde omnis iste natus error sit, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p>
						<a class="mt-1 btn btn-primary" href="services.html">read more</a>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4 mt-5">
					<div class="services-box text-center">
						<img src="{{asset('assets/img/1.svg')}}" alt="">
						<h5 class="mt-2">food included</h5>
						<p class="mt-3">Sed ut perspiciatis unde omnis iste natus error sit, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p>
						<a class="mt-1 btn btn-primary" href="services.html">read more</a>
					</div>
				</div> --}}
			</div>
		</div>
	</div>

    <!-- checking disponibilidad -->
	{{-- <div class="section padding-top-bottom-big over-hide">
		<div class="parallax" style="background-image: url('img/4.jpg')"></div>
		<div class="section z-bigger">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="row justify-content-center">
							<div class="col-md-6 col-xl-4 px-sm-0">
								<div class="booking-sep-wrap">
									<div class="input-daterange input-group" id="flight-datepicker-1">
										<div class="form-item">
											<span class="fontawesome-calendar"></span>
											<input class="input-sm" type="text" autocomplete="off" id="start-date" name="start" placeholder="check-in" data-date-format="DD, MM d"/>
											<span class="date-text date-depart"></span>
										</div>
										<div class="form-item">
											<span class="fontawesome-calendar"></span>
											<input class="input-sm" type="text" autocomplete="off" id="end-date" name="end" placeholder="check-out" data-date-format="DD, MM d"/>
											<span class="date-text date-return"></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-xl-2 px-sm-0">
								<div class="quantity">
									<input type="number" min="1" max="9999" step="1" value="1" >
								</div>
							</div>
							<div class="col-md-3 col-xl-2 px-sm-0">
								<a class="booking-button-big" href="search.html">check<br>availability</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> --}}

	<div class="section padding-top-bottom over-hide background-grey">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8 align-self-center">
					<div class="subtitle with-line text-center mb-4">Hostal sarita</div>
					<h3 class="text-center padding-bottom-small">Nuestras habitaciones</h3>
				</div>
				<div class="section clearfix"></div>
				<div class="col-md-6">
					<div class="room-box background-white">
						<div class="room-name">suite tanya</div>
						<div class="room-per">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<img src="{{asset('assets/img/fotos/10.jpeg')}}" alt="">
						<div class="room-box-in">
							<h5 class="">Habitacion 1</h5>
							{{-- <p class="mt-3">Sed ut perspiciatis unde omnis, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p> --}}
							<a class="mt-1 btn btn-primary" href="rooms-gallery.html">Reservar</a>
                            {{-- iconos de servicios --}}
							{{-- <div class="room-icons mt-4 pt-4">
								<img src="{{asset('assets/img/5.svg')}}" alt="">
								<img src="{{asset('assets/img/2.svg')}}" alt="">
								<img src="{{asset('assets/img/3.svg')}}" alt="">
								<img src="{{asset('assets/img/1.svg')}}" alt="">
								<a href="rooms-gallery.html">full info</a>
							</div> --}}
						</div>
					</div>
				</div>
				<div class="col-md-6 mt-4 mt-md-0">
					<div class="room-box background-white">
						<div class="room-name">suite helen</div>
						<div class="room-per">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-o"></i>
						</div>
						<img src="{{asset('assets/img/fotos/09.jpeg')}}" alt="">
						<div class="room-box-in">
							<h5 class="">Habitacion 2</h5>
							{{-- <p class="mt-3">Sed ut perspiciatis unde omnis, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p> --}}
							<a class="mt-1 btn btn-primary" href="rooms-gallery.html">Reservar</a>
                            {{-- iconos de servicios --}}
							{{-- <div class="room-icons mt-4 pt-4">
								<img src="{{asset('assets/img/4.svg')}}" alt="">
								<img src="{{asset('assets/img/2.svg')}}" alt="">
								<img src="{{asset('assets/img/6.svg')}}" alt="">
								<img src="{{asset('assets/img/3.svg')}}" alt="">
								<a href="rooms-gallery.html">full info</a>
							</div> --}}
						</div>
					</div>
				</div>
				<div class="col-md-6 mt-4">
					<div class="room-box background-white">
						<div class="room-name">suite andrea</div>
						<div class="room-per">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<img src="{{asset('assets/img/fotos/07.jpeg')}}" alt="">
						<div class="room-box-in">
							<h5 class="">Habitacion 1</h5>
							{{-- <p class="mt-3">Sed ut perspiciatis unde omnis, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p> --}}
							<a class="mt-1 btn btn-primary" href="rooms-gallery.html">Reservar</a>
                            {{-- iconos servicios --}}
							{{-- <div class="room-icons mt-4 pt-4">
								<img src="img/5.svg" alt="">
								<img src="img/2.svg" alt="">
								<img src="img/3.svg" alt="">
								<img src="img/6.svg" alt="">
								<a href="rooms-gallery.html">full info</a>
							</div> --}}
						</div>
					</div>
				</div>
				<div class="col-md-6 mt-4">
					<div class="room-box background-white">
						<div class="room-name">Habitacion 2</div>
						<div class="room-per">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<img src="{{asset('assets/img/fotos/08.jpg')}}" alt="">
						<div class="room-box-in">
							<h5 class="">big Apartment</h5>
							{{-- <p class="mt-3">Sed ut perspiciatis unde omnis, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p> --}}
							<a class="mt-1 btn btn-primary" href="rooms-gallery.html">Reservar</a>
                            {{-- iconos servicios --}}
							{{-- <div class="room-icons mt-4 pt-4">
								<img src="img/5.svg" alt="">
								<img src="img/2.svg" alt="">
								<img src="img/3.svg" alt="">
								<img src="img/6.svg" alt="">
								<a href="rooms-gallery.html">full info</a>
							</div> --}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section padding-top-bottom-big over-hide">
		<div class="parallax" style="background-image: url({{asset('assets/img/fotos/19.jpg')}})"></div>
		<div class="section z-bigger">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-8">
						<div id="owl-sep-1" class="owl-carousel owl-theme">
							<div class="item">
								<div class="quote-sep">
									<h4>"Es un gran hotel, muy comodo, muy fresco el lugar ideal para descansar despues de una larga caminata por el desierto"</h4>
									<h6>Jason Salvatore</h6>
								</div>
							</div>
							<div class="item">
								<div class="quote-sep">
									<h4>"Me encanto la atención, los encargados son muy amables y muy serviciales lo super recomiendo"</h4>
									<h6>Jose Rojas</h6>
								</div>
							</div>
							<div class="item">
								<div class="quote-sep">
									<h4>"El lugar es muy bonito, la comida es deliciosa y lo mejor es que esta en el pueblo y a la vez cerca al desierto"</h4>
									<h6>Maria Sanchez</h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

    <!-- video -->
	{{-- <div class="section padding-top-bottom-small background-dark-2 over-hide">
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

	<div class="section padding-top-bottom background-grey over-hide">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8 align-self-center">
					<div class="subtitle with-line text-center mb-4">Hostal Sarita</div>
					<h3 class="text-center padding-bottom-small">Excelente Restaurante</h3>
				</div>
				<div class="section clearfix"></div>
			</div>
			<div class="row background-white p-0 m-0">
				<div class="col-xl-6 p-0">
					<div class="img-wrap" id="rev-3">
						<img src="{{asset('assets/img/fotos/13.jpeg')}}" alt="">
					</div>
				</div>
				<div class="col-xl-6 p-0 align-self-center">
					<div class="row justify-content-center">
						<div class="col-9 pt-4 pt-xl-0 pb-5 pb-xl-0 text-center">
							<h5 class="">Restaurante</h5>
							<p class="mt-3">Deliciosas comidas tradicionales para nuestros visitantes</p>
							<a class="mt-1 btn btn-primary" href="javascript:void(0)">Reservar</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row background-white p-0 m-0">
				<div class="col-xl-6 p-0 align-self-center">
					<div class="row justify-content-center">
						<div class="col-9 pt-4 pt-xl-0 pb-5 pb-xl-0 text-center">
							<h5 class="">Restaurante</h5>
							<p class="mt-3">Prueba la gastronomia local mientras te hospedas en el mejor hostal de la ciudad</p>
							<a class="mt-1 btn btn-primary" href="javascript:void(0)">Reservar</a>
						</div>
					</div>
				</div>
				<div class="col-xl-6 order-first order-xl-last p-0">
					<div class="img-wrap" id="rev-4">
						<img src="{{asset('assets/img/fotos/14.jpeg')}}" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section padding-top z-bigger">
		<div class="container">
			<div class="row justify-content-center padding-bottom-smaller">
				<div class="col-md-8">
					<div class="subtitle with-line text-center mb-4">Hostal Sarita</div>
					<h3 class="text-center padding-bottom-small">Contactanos</h3>
				</div>
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
	</div>

@endsection
