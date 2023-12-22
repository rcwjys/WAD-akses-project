<!-- Import Template -->
@extends('template.main-template')

<!-- Set Title Halaman -->
@section('title', 'Halaman Beranda | UPTD Puskesmas Babakan Tarogong')

<!-- Set class active -->
@section('home', 'active')

<!-- Import Layouting -->
@section('content')

<!-- slider section -->
<section class="slider_section ">
    <div class="dot_design">
        <img src="{{asset('img/dots.png')}}" alt="">
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
                                    Aplikasi Kendali Perbekalan Kesehatan <br>
                                    <span>
                                        AKSES
                                    </span>
                                </h1>
                                <p>
                                    when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
                                </p>
                                <a href="">
                                    Hubungi Kami
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="img-box">
                                <img src="img/slider-img.jpg" alt="">
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
                                    Aplikasi Kendali Perbekalan Kesehatan <br>
                                    <span>
                                        AKSES
                                    </span>
                                </h1>
                                <p>
                                    when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
                                </p>
                                <a href="">
                                    Hubungi Kami
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="img-box">
                                <img src="img/slider-img.jpg" alt="">
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
                                    Aplikasi Kendali Perbekalan Kesehatan <br>
                                    <span>
                                        AKSES
                                    </span>
                                </h1>
                                <p>
                                    when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
                                </p>
                                <a href="">
                                    Hubungi Kami
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="img-box">
                                <img src="img/slider-img.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel_btn-box">
            <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
                <img src="img/prev.png" alt="">
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
                <img src="img/next.png" alt="">
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

</section>
<!-- end slider section -->
</div>


<!-- about section -->
<section class="book_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <section class="about_section">
                    <div class="container  ">
                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="img-box">
                                    <img src="img/about-img.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="detail-box">
                                    <div class="heading_container">
                                        <h2>
                                            About <span>AKSES</span>
                                        </h2>
                                    </div>
                                    <p>
                                        has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors
                                    </p>
                                    <a href="">
                                        Baca Selanjutnya
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
<!-- end about section -->

<!-- contact section -->
<section class="contact_section layout_padding-bottom" id="kontak">
    <div class="container">
        <div class="heading_container">
            <h2>
                Get In <span>Touch</span>
            </h2>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="form_container">
                    <form action="{{ url('/messages/create') }}" method="POST">
                        @csrf
                        <div>
                            <input type="text" name="fullname" placeholder="Nama Lengkap" autocomplete="off" />
                            <p class="text-danger"></p>
                        </div>
                        <div>
                            <input type="email" name="email" placeholder="Email" autocomplete="off" />
                            <p class="text-danger"></p>
                        </div>
                        <div>
                            <input type="text" name="phoneNumber" placeholder="No Telepon (+62)" autocomplete="off" />
                            <p class="text-danger"></p>
                        </div>
                        <div>
                            <input type="text" name="message" class="message-box" placeholder="Pesan" autocomplete="off" />
                            <p class="text-danger"></p>
                        </div>
                        <div class="btn_box">
                            <button type="submit" name="send" class="submit-message-button">
                                Kirim
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-5">
                <div class="img-box">
                    <img src="img/contact-img.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end contact section -->



@endsection