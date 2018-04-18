@extends('masterweb')

@section('home', 'active')

@section('body')

<section id="main-slider" class="no-margin">
    <div class="carousel slide">
        <div class="carousel-inner">
            <div class="item active" style="background-image: url({{ asset('images/slider/bg2.jpg') }})">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-6">
                            <!-- <div class="carousel-content"> -->
                            <div class="">
                                <h2 class="animation animated-item-1">Solusi Mencari Kerja dan Merekrut Karyawan</h2>
                                <p class="animation animated-item-2">Kami hadir untuk membantu menghubungkan pencari kerja dengan HRD</p>
                                <a class="btn-slide animation animated-item-3" href="{{ route('login') }}">Gabung sekarang</a>
                            </div>
                        </div>

                        <div class="col-sm-6 hidden-xs animation animated-item-4">
                            <div class="slider-img">
                                <img src="{{ asset('images/slider/img5.png') }}" class="img-responsive">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--/.item-->
        </div>
        <!--/.carousel-inner-->
    </div>
    <!--/.carousel-->
</section>
<!--/#main-slider-->

<div class="lates">
    <div class="container">
        <div class="text-center">
        </div>
        <div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h3>Kariria membantu pelamar kerja menemukan pekerjaan yang sesuai dengan minat dan bakat mereka</h3><br>

            <h4>Test HRD Online</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero,
                pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
            </p>

            <h4>CV Digital</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero,
                pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
            </p>

            <h4>Notifikasi lowongan</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero,
                pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
            </p>
        </div>

        <div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <img src="{{ asset('images/emp1.jpg') }}" class="img-responsive" />
        </div>
    </div>
</div>

<div class="lates">
    <div class="container">
        <div class="text-center">
        </div>
        <div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <img src="{{ asset('images/8.jpg') }}" class="img-responsive" />
        </div>

        <div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <h3>Kariria membantu perusahaan menemukan calon karyawan yang berkompeten dibidangnya</h3> <br>

            <h4>Rekomendasi calon karyawan</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero,
                pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
            </p>

        </div>
    </div>
</div>

<section id="partner">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>Partner Kami</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
        </div>

        <div class="partners">
            <ul>
                <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="{{ asset('images/partners/partner1.png') }}"></a></li>
                <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="{{ asset('images/partners/partner2.png') }}"></a></li>
                <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" src="{{ asset('images/partners/partner3.png') }}"></a></li>
                <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" src="{{ asset('images/partners/partner4.png') }}"></a></li>
                <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1500ms" src="{{ asset('images/partners/partner5.png') }}"></a></li>
            </ul>
        </div>
    </div>
</section>

@stop