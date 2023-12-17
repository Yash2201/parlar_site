<!DOCTYPE html>
<html lang="en">

<!-- appointment-background -->
    <head>
        <meta charset="utf-8">
        <title>{{ app('config')->get('app.name') }}</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=PT+Serif:wght@400;700&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->        
        <link href="{{asset('assets\lib\animate\animate.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets\lib\lightbox\css\lightbox.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets\lib\owlcarousel\assets\owl.carousel.min.css')}}" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{asset('assets\css\bootstrap.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{asset('assets\css\style.css')}}" rel="stylesheet">
        @yield('css')
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->

        @include('parlor_layout.nav')
        
        @include('parlor_layout.search')
        
        @include('parlor_layout.carousel')

        <!-- Services Start -->
        <div class="container-fluid services py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 800px;">
                    <p class="fs-4 text-uppercase text-center text-primary">Our Service</p>
                    <h1 class="display-3">Beauty Services</h1>
                </div>
                <div class="row g-4">
                    @foreach($services as $service)
                    <div class="col-lg-6">
                        <div class="services-item bg-light border-4 border-end border-primary rounded p-4">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <div class="services-content text-end">
                                        <h3>{{$service->name}}</h3>
                                        <p>{{$service->description}}</p>
                                        <a href="#" class="btn btn-primary btn-primary-outline-0 rounded-pill py-2 px-4">Make Order</a>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="services-img d-flex align-items-center justify-content-center rounded">
                                        <img src="{{ asset(asset('/uploads/'. $service->photos)) }}" class="img-fluid rounded" alt="" style="height: 176px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                   
                    <div class="col-12">
                        <div class="services-btn text-center">
                            <a href="#" class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-5">Service More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->

        @include('parlor_layout.about')
        
        @include('parlor_layout.appointment')

         <!-- Gallery Start -->
        <div class="container-fluid gallery py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5" style="max-width: 800px;">
                    <p class="fs-4 text-uppercase text-primary">Our Gallery</p>
                    <h1 class="display-4 mb-4">Let's See Our Gallery</h1>
                </div>
                <div class="tab-class text-center">
                    <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
                        <li class="nav-item">
                            <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill active" data-bs-toggle="pill" href="#tab-1">
                                <span class="text-dark" style="width: 150px;">All Gallery</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex py-2 mx-3 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-2">
                                <span class="text-dark" style="width: 150px;">Bridal</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-3">
                                <span class="text-dark" style="width: 150px;">Hairstyling</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-4">
                                <span class="text-dark" style="width: 150px;">Makeovers</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-5">
                                <span class="text-dark" style="width: 150px;">Eye - makeup</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="{{asset('assets\img\11.jpeg')}}" alt="" style="height: 368px;">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Bridal</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="{{asset('assets\img\11.jpeg')}}" data-lightbox="Gallery-1" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="{{asset('assets\img\12.jpeg')}}" alt="" style="height: 368px;">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Stream Bath</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="{{asset('assets\img\12.jpeg')}}" data-lightbox="Gallery-2" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="{{asset('assets\img\13.jpeg')}}" alt="" style="height: 368px;">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Stone Therapy</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="{{asset('assets\img\13.jpeg')}}" data-lightbox="Gallery-3" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="{{asset('assets\img\14.jpeg')}}" alt="" style="height: 368px;">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Face Massage</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="{{asset('assets\img\14.jpeg')}}" data-lightbox="Gallery-4" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="{{asset('assets\img\15.jpeg')}}" alt="" style="height: 368px;">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Bridal</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="{{asset('assets\img\15.jpeg')}}" data-lightbox="Gallery-5" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="{{asset('assets\img\16.jpeg')}}" alt="" style="height: 368px;">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Hairstyling</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="{{asset('assets\img\16.jpeg')}}" data-lightbox="Gallery-6" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="{{asset('assets\img\17.jpeg')}}" alt="" style="height: 368px;">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Makeovers</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="{{asset('assets\img\17.jpeg')}}" data-lightbox="Gallery-7" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="{{asset('assets\img\18.jpeg')}}" alt="" style="height: 368px;">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Eye-makeup</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="{{asset('assets\img\18.jpeg')}}" data-lightbox="Gallery-8" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="{{asset('assets\img\11.jpeg')}}" alt=""  style="height: 368px;">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Bridal</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="{{asset('assets\img\11.jpeg')}}" data-lightbox="Gallery-9" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="{{asset('assets\img\12.jpeg')}}" alt=""  style="height: 368px;">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Bridal</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="{{asset('assets\img\12.jpeg')}}" data-lightbox="Gallery-10" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="{{asset('assets\img\15.jpeg')}}" alt=""  style="height: 368px;">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Bridal</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="{{asset('assets\img\15.jpeg')}}" data-lightbox="Gallery-11" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="{{asset('assets\img\16.jpeg')}}" alt=""  style="height: 368px;">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Bridal</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="{{asset('assets\img\16.jpeg')}}" data-lightbox="Gallery-12" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="{{asset('assets\img\bea2.jpeg')}}" alt=""  style="height: 368px;">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Hairstyling</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="{{asset('assets\img\bea2.jpeg')}}" data-lightbox="Gallery-13" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="{{asset('assets\img\bea5.jpeg')}}" alt=""  style="height: 368px;">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Hairstyling</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="{{asset('assets\img\bea5.jpeg')}}" data-lightbox="Gallery-14" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="{{asset('assets\img\24.jpeg')}}" alt=""  style="height: 368px;">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Hairstyling</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="{{asset('assets\img\24.jpeg')}}" data-lightbox="Gallery-15" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="img/gallery-6.jpg" alt="" style="height: 368px;">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Stream Bath</h4>
                                                </div>

                                                <div class="search-icon">
                                                    <a href="img/gallery-6.jpg" data-lightbox="Gallery-16" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>

                                            </div>
                                        </div> -->

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-4" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="{{asset('assets\img\18.jpeg')}}" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Makeovers</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="{{asset('assets\img\18.jpeg')}}" data-lightbox="Gallery-17" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                        <!--  <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="img/18.jpeg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Stone Therapy</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="img/gallery-2.jpg" data-lightbox="Gallery-18" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="img/gallery-3.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Stone Therapy</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="img/gallery-3.jpg" data-lightbox="Gallery-19" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="img/gallery-7.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Stone Therapy</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="img/gallery-7.jpg" data-lightbox="Gallery-20" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                         -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-5" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="{{asset('assets\img\12.jpeg')}}" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Eye-makeup</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="{{asset('assets\img\12.jpeg')}}" data-lightbox="Gallery-21" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="img/gallery-6.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Face Massage</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="img/gallery-6.jpg" data-lightbox="Gallery-22" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="img/gallery-8.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Face Massage</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="img/gallery-8.jpg" data-lightbox="Gallery-23" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="img/gallery-14.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Face Massage</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="img/gallery-14.jpg" data-lightbox="Gallery-24" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="img/gallery-4.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Face Massage</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="img/gallery-4.jpg" data-lightbox="Gallery-25" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="img/gallery-8.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Face Massage</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="img/gallery-8.jpg" data-lightbox="Gallery-26" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div> -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- gallery End -->

        @include('parlor_layout.pricing')

        <!-- Testimonial Start -->
        <div class="container-fluid testimonial py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5" style="max-width: 800px;">
                    <p class="fs-4 text-uppercase text-primary">Testimonial</p>
                    <h1 class="display-4 mb-4 text-white">What Our Clients Say!</h1>
                </div>

                <div class="owl-carousel testimonial-carousel">
                    @foreach($testimonials as $testimonial)
                        <div class="testimonial-item rounded p-4">
                            <div class="row">
                                <div class="col-4">
                                    <div class="d-flex flex-column mx-auto">
                                        <div class="rounded-circle mb-4" style="border: dashed; border-color: var(--bs-white);">
                                            <img src="{{ asset(asset('/uploads/'. $testimonial->photos_or_video)) }}" class="img-fluid rounded-circle" alt="">
                                        </div>
                                        <div class="text-center">
                                            <h4 class="mb-2 text-primary">{{ $testimonial->name }}</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="position-absolute" style="top: 20px; right: 25px;">
                                        <i class="fa fa-quote-right fa-2x text-secondary"></i>
                                    </div>
                                    <div class="testimonial-content">
                                        <div class="d-flex mb-4">
                                            @for($i = 0; $i < 5; $i++)
                                                <i class="fas fa-star {{$i < $testimonial->rating ? 'text-primary' : ''}}"></i>
                                            @endfor
                                        </div>
                                        <p class="fs-5 mb-0 text-white"> {{ $testimonial->feedback }} </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

        @yield('content')

        @include('parlor_layout.contact')

        @include('parlor_layout.footer')
        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script src="{{asset('assets\lib\wow\wow.min.js')}}"></script>
    <script src="{{asset('assets\lib\easing\easing.min.js')}}"></script>
    <script src="{{asset('assets\lib\waypoints\waypoints.min.js')}}"></script>
    <script src="{{asset('assets\lib\counterup\counterup.min.js')}}"></script>
    <script src="{{asset('assets\lib\lightbox\js\lightbox.min.js')}}"></script>
    <script src="{{asset('assets\lib\owlcarousel\owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('assets\js\main.js')}}"></script>
    @yield('js')
    </body>

</html>