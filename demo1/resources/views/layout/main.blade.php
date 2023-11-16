<!doctype html>
<html lang="en">

<head>
    <title>Rượu Nhập Khẩu</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

<nav class="navbar navbar-expand-lg navbar-light bg-dark sticky-top">

    <ul>

</ul>
<a class="navbar-brand" href="#">
    <font face="Comic sans MS" size=" 5" color="#DC143C">
        <h3>LIQUOR STORE</h3>
    </font>
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link text-white" href="{{route('index')}}">HOME</a>
        </li>

        <li class="nav-item">
            <a class="nav-link text-white" href="{{route('about')}}">ABOUT</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="{{route('blog')}}">BLOG</a>
        </li>
        <li class="nav-item">
            <b></b>
        </li>
        <ul></ul>

        <div class="dropdown">
            <a class="nav-link dropdown-toggle pl-0 text-white" href="#" id="navbarDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                PRODUCT
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{route('product')}}">Rượu Vang</a>
                <a class="dropdown-item" href="{{route('category')}}">Rượu Vang Pháp</a>
                <a class="dropdown-item" href="{{route('category2')}}">Rượu Vang Ý</a>
                <a class="dropdown-item" href="{{route('category3')}}">Rượu Vang Tây Ban Nha</a>
                <a class="dropdown-item" href="{{route('category5')}}"> Rượu Giá Tăng Dần</a>
                <a class="dropdown-item" href="{{route('category4')}}"> Rượu Giá Giảm Dần</a>




            </div>
        </div>
        <li class="nav-item">
            <a class="nav-link text-white" href="{{route('contact')}}">CONTACT</a>
           
        </li>
        <li class="nav-item">
        <a class="nav-link text-white" href="{{route('admin')}}">Admin</a>

           
        </li>
    </ul>

    <style>
    .user-avatar-md {
        height: 32px;
        width: 32px
    }

    .nav-item a {
        font-family: 'Times New Roman', Times, serif;

    }

    .dropdown {
        font-family: 'Times New Roman', Times, serif;
    }
    </style>
     <div class="dropdown text-right">
        <a class="text-dark" href="#" id="navbarDropdown" role="button">
          
          
        </a>
        @if (auth('cus')->check())

    </div>


 
    <p class="mb-0 text-dark"><a href="" class="mr-2  text-white">
    <img src="upload/per.jpg" alt="" class="user-avatar-md rounded-circle ">
            {{auth('cus')->user()->name}}
            <a href="{{route('logout')}}" class="mr-2  text-white  ">Logout</a>
        </a>
    <div class="">
        <div class="reg">

           
            </p>

            @else
            <p class="mb-0"> <a href="{{route('login')}}" class="mr-2  text-white">LogIn</a>
                <a href="{{route('register')}}" class="mr-2  text-white">Register </a>
            </p>

            @endif
        </div>


    </div>
    
</nav>
<BR></BR>







<br>



@yield('content')

<footer id="footer" style="background-color: 	#D3D3D3;">
    <div class="container ">
        <div class="row">
            <div class="col-md-4 ">
                <ul class="text-dark">
                    <br>
                    <li><a href="" class="text-dark">Chính sách kiểm hàng</a></li>
                    <li><a href="" class="text-dark">Chính sách thanh toán </a></li>
                    <li><a href="" class="text-dark">Chính sách bảo mật</a></li>
                    <li><a href="" class="text-dark">Hướng dẫn mua hàng</a></li>
                    <li><a href="" class="text-dark">Quy trình giải quyết
                            khiếu nại</a></li>
                    <li><a href="" class="text-dark">Giấy phép</a></li>
                </ul>
            </div>
            <br>
            <div class="col-md-8">
                <br>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.658538573624!2d105.78092597504907!3d21.04634448717478!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab3b4220c2bd%3A0x1c9e359e2a4f618c!2sB%C3%A1ch%20Khoa%20Aptech!5e0!3m2!1svi!2s!4v1696865262046!5m2!1svi!2s"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>
    </div>
    <ul class="menu_footer menu_info">
        <li><a href="" class="text-dark"><span>Giao lưu và
                    kết nối</span> <i class="fa fa-facebook-f"></i></a></li>


        <a href=""><i class="fa fa-facebook-f"></i></a>
        <a href=""><i class="fa fa-commenting"></i></a>
        <a href="" class="text-danger"><i class="fa fa-youtube"></i></a>
        <a href="" class="text-dark"><i class="fa fa-tiktok"></i></a>
        <a href="" width="100px" class="text-danger"><i class="fa fa-instagram"></i></a>

        <li class="local"><i class="fa fa-map-marker-alt"></i> Địa chỉ: Cầu Giấy, Hà Nội</li>
    </ul>
    <div class="map_footer">
        <div class="footer_content">
            <div style="text-align: center;">Tuân thủ nghị định 105/2017/NĐ-CP ngày 14/9/2017 của Chính phủ về sản xuất,
                kinh doanh rượu, website không có chức năng đặt hàng, mua bán trực tuyến. Quý khách có nhu cầu xin liên
                hệ 0969 847 685 để được tư vấn. Người dưới 18 tuổi không được uống rượu, bia</div>
        </div>
    </div>
</footer>


</html>