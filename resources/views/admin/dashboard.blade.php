<!-- Import Template -->
@extends('admin.template.main-template')

<!-- Set Title Halaman -->
@section('title', 'Halaman Beranda | UPTD Puskesmas Babakan Tarogong')

<!-- Set class active -->
@section('index', 'active')

<!-- Import Layouting -->
@section('content')

    <!-- slider section -->
    <section class="slider_section ">
        <div class="dot_design">
            <img src="img/dots.png" alt="">
        </div>
        <div id="customCarousel1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="detail-box">
                                    <div class="play_btn">
                                        <button>
                                            <i class="fa fa-play" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                    <h1>
                                        Hello, <br>
                                        <span>
                                            {{ session('employee') }}
                                        </span>
                                    </h1>
                                    <p>
                                        when looking at its layout. The point of using Lorem Ipsum is that it has a
                                        more-or-less normal distribution of letters, as opposed to
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="img-box">
                                    <img src="../img/slider-img.jpg" alt="slider-image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="detail-box">
                                    <div class="play_btn">
                                        <button>
                                            <i class="fa fa-play" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                    <h1>
                                        Hello, <br>
                                        <span>
                                            {{ session('employee') }}
                                        </span>
                                    </h1>
                                    <p>
                                        when looking at its layout. The point of using Lorem Ipsum is that it has a
                                        more-or-less normal distribution of letters, as opposed to
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="img-box">
                                    <img src="../img/slider-img.jpg" alt="second-slider-image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="detail-box">
                                    <div class="play_btn">
                                        <button>
                                            <i class="fa fa-play" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                    <h1>
                                        Hello, <br>
                                        <span>
                                            {{ session('employee') }}
                                        </span>
                                    </h1>
                                    <p>
                                        when looking at its layout. The point of using Lorem Ipsum is that it has a
                                        more-or-less normal distribution of letters, as opposed to
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="img-box">
                                    <img src="../img/slider-img.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- end slider section -->
@endsection
