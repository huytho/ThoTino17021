@extends('layout.main')
@section('content')
<link href="assets/css/my.css" rel="stylesheet">

<section class="hero-wrap hero-wrap-2" style="background-image: url('upload/bg_2.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate mb-5 text-center">
                <br>
                <p class="breadcrumbs mb-0"><span class="mr-2"><a href="{{route('index')}}">Home <i
                                class="fa fa-chevron-right"></i></a>
                        <a href="{{route('about')}}"></span> <span>About us <i
                            class="fa fa-chevron-right"></i></span></a></p>
                <h2 class="mb-0 bread">About Us</h2>
            </div>
        </div>
    </div>
</section>

<section class="ftco-intro">
    <div class="container-fuild">
        <div class="row no-gutters">
            <div class="col-md-4 d-flex">
                <div class="intro d-lg-flex w-100 ftco-animate">
                    <div class="icon">
                        <span class="flaticon-support"></span>
                    </div>
                    <div class="text">
                        <h2>Hỗ trợ trực tuyến 24/7</h2>
                        <p>Một con sông nhỏ tên là Duden chảy qua chỗ của họ và cung cấp cho nó những điều kiện cần
                            thiết.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 d-flex">
                <div class="intro color-1 d-lg-flex w-100 ftco-animate">
                    <div class="icon">
                        <span class="flaticon-cashback"></span>
                    </div>
                    <div class="text">
                        <h2>Đảm bảo lại tiền</h2>
                        <p>Một con sông nhỏ tên là Duden chảy qua chỗ của họ và cung cấp cho nó những điều kiện cần
                            thiết.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="intro color-2 d-lg-flex w-100 ftco-animate">
                    <div class="icon">
                        <span class="flaticon-free-delivery"></span>
                    </div>
                    <div class="text">
                        <h2>Miễn phí vận chuyển &amp; Return</h2>
                        <p>Một con sông nhỏ tên là Duden chảy qua chỗ của họ và cung cấp cho nó những điều kiện cần
                            thiết.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row ">
        <div class="col-md-6">
            <div class="card text-left">
                <img class="card-img-top" src="upload/about.jpg" height="450px" width="100%" alt="">
            </div>
        </div>
        <div class="col-md-6 ">
            <div class="heading-section ">
                <h2 class="mb-4">Mong muốn đáp ứng một hương vị mới</h2>

                <p>Một con sông nhỏ tên là Duden chảy qua chỗ của họ và cung cấp cho họ những vương quyền cần thiết. Nó
                    là một
                    đất nước thiên đường, nơi những câu nói nướng vào miệng bạn.</p>
                <p>Trên đường đi cô gặp một bản sao. Bản sao đã cảnh báo Văn bản Little Blind rằng nó đến từ đâu sẽ
                    đã được viết lại hàng nghìn lần và mọi thứ còn sót lại từ nguồn gốc của nó sẽ là từ
                    "và" và Little Blind Text sẽ quay lại và trở về đất nước an toàn của chính mình.</p>

            </div>
        </div>

    </div>
    <div class="row mt-5">
        <div class="col-md-2">
            <div class="sort  text-center">
                <img src="upload/kind-1.jpg" width="90%" height="170px" style=" border-radius: 50%;">
                <h3>Brandy</h3>
            </div>
        </div>
        <div class="col-md-2">
            <div class="sort text-center">
                <img src="upload/kind-2.jpg" width="90%" height="170px" style=" border-radius: 50%;">
                <h3>Gin</h3>
            </div>
        </div>
        <div class="col-md-2">

            <div class="sort  text-center">
                <img src="upload/kind-3.jpg" width="90%" height="170px" style=" border-radius: 50%;">
                <h3 style="font-weight: 300; ">Rum</h3>
            </div>
        </div>
        <div class="col-md-2">
            <div class="sort text-center">
                <img src="upload/kind-4.jpg" width="90%" height="170px" style=" border-radius: 50%;">
                <h3>Tequila</h3>
            </div>

        </div>
        <div class="col-md-2">
            <div class="sort text-center">
                <img src="upload/kind-5.jpg" width="90%" height="170px" style=" border-radius: 50%;">
                <h3>Vodka</h3>
            </div>

        </div>
        <div class="col-md-2">
            <div class="sort text-center">
                <img src="upload/kind-6.jpg" width="90%" height="170px" style=" border-radius: 50%;">
                <h3>Whiskey</h3>
            </div>

        </div>
    </div>
</div>
@stop()