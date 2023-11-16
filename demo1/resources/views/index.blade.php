@extends('layout.main')
@section('content')

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class=""></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1" class=""></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2" class=""></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="3" class="active"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item">
            <img src="upload/ban1.jpg" width="100%" alt="AlternativeText">
            <div class="carousel-caption d-none d-md-block">
                <h5>Rượu Nhập Khẩu</h5>
                <p>HỖ TRỢ TRỰC TUYẾN 24/7</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="upload/ban2.jpg" width="100%" alt="">
            <div class="carousel-caption d-none d-md-block">
                <h5>Rượu Nhập Khẩu</h5>

                <p>ĐẢM BẢO HOÀN TIỀN</p>
            </div>
        </div>
        <div class="carousel-item ">
            <img src="upload/ban3.jpg" width="100%" alt="">
            <div class="carousel-caption d-none d-md-block">
                <h5>Rượu Nhập Khẩu</h5>

                <p>MIỄN PHÍ VẬN CHUYỂN & TRẢ LẠI</p>
            </div>
        </div>
        <div class="carousel-item active">
            <img src="upload/ban4.jpg" width="100%" alt="">
            <div class="carousel-caption d-none d-md-block">
                <h5>Rượu Nhập Khẩu</h5>

                <p>GIAO HÀNG NHANH CHÓNG</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<br>
<br>
<br>
<div class="container">
    <div class="alert alert-danger nick-marquee text" style="height:50px" >

        <marquee  onmouseover="this.stop()" onmouseout="this.start()" behavior="scroll" scrolldelay="1">
            <p><span style="color:green"><strong>&nbsp;KHÁCH HÀNG ĐẶT LÊN HÀNG ĐẦU AE YÊN TÂM VỀ ĐỘ UY TÍN CỦA
                        SHOP -- <a target="_blank" href="https://www.facebook.com/ngoc.khai.207">0923023923-Mr.khai</a></strong></span></p>
        </marquee>


    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6">

            <img src="upload/image_3.jpg" width="100%" alt="">
        </div>
        <div class="col-md-6">
            <h4>
                <font face="courier" size="+5" color="#0555">
                    Từ năm 1905
                </font>
                <br>
                <br>
            </h4>
            <font face="Verdana" size="5">
                <h3>LIQUOR STORE</h3>
            </font><br />


            <br>

            <b>Với hơn 3000 sản phẩm rượu vang, rượu mạnh, bia, rượu sake Nhật Bản và phụ kiện cao cấp chính hãng.
            </b>
            <br>
            <br>
            <p> Chúng tôi không ngừng mở rộng quan hệ hợp tác với các nhà sản xuất uy tín trên thế giới để đáp ứng nhu
                cầu tiêu dùng của khách hàng trên toàn quốc.</p>
        </div>

    </div>
</div>
<br>
<br>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <img src="upload/prod-1.jpg" width="100%" height="390px" alt="">
        </div>
        <div class="col-md-3">
            <img src="upload/prod-2.jpg" width="100%" height="390px" alt="">
        </div>
        <div class="col-md-3">
            <img src="upload/prod-3.jpg" width="100%" height="390px" alt="">
        </div>
        <div class="col-md-3">
            <img src="upload/prod-4.jpg" width="100%" height="390px" alt="">
        </div>



    </div>
</div>


<br>
<br>
<br>


<div class="container">
    <font face="Comic sans MS" color="#D2691E">
        <h2 class="text-center">Những món quà thú vị của chúng tôi</h2>
    </font>
    <h3 class="text-center">Trang nhã của bạn</h3>
    <br>


    <br>

    <div class="row">


        @foreach($pro as $val)
        <a href="{{route('detail',$val->id)}}" style=" text-decoration: none;">
            <div class="col-md-3 ">
                <div class="link" id="pro">
                    <div>
                        <br>
                        <img src="upload/{{$val->image}}" width="100%" alt="">
                        <br>
                        <br>
                        <b class="text-dark ">{{$val->name}}</b>
                        <br>
                        <p class="text-dark">{{$val->description}}</p>
                        <p class="text-dark">Giá gốc: {{number_format($val->price)}}đ</p>
                        <b class="text-danger">Giá hiện tại: {{ number_format($val->sale_price)}}đ</b>

                        <br>

                        <a href="{{route('cart.add',$val->id)}}" class="btn btn-light"><i class="fa fa-shopping-cart"
                                aria-hidden="true"></i>
                            <!-- <a href="" class="btn btn-light text-danger "><i class="fa fa-heart" aria-hidden="true"></i> -->
                            <a data-toggle="modal" href='#modal-{{$val->id}}' class="btn btn-light"><i class="fa fa-eye"
                                    aria-hidden="true"></i> </a>


                            <hr>
                    </div>
                </div>
            </div>
        </a>
        <br>
        <br>


        <div class="modal fade" id="modal-{{$val->id}}">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4"> <img src="upload/{{$val->image}}" width="100%" alt=""></div>
                            <div class="col-md-8">
                                <h4 class="text-warning">{{$val->name}}</h4>
                                <p>{{$val->description}}</p>
                                <b>Giá: {{$val->sale_price}}đ</b>
                                <br>
                                <p>Rượu vang Pháp được nhập khẩu nguyên chai, 100% chính hãng và được phân phối bởi
                                    chúng tôi với mức giá hấp dẫn. Lựa chọn hoàn hảo để biếu, tặng hoặc dành cho các bữa
                                    tiệc, sự kiện quan trọng.</p>
                                <input type="number" name="quantity" class="from-control" value="1" min="1" max="100">
                                <a href="{{route('cart.add',$val->id)}}" class="btn btn-primary">Buy now</a></p>


                            </div>


                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>

        @endforeach
    </div>

    {{$pro->links()}}

</div>
<br>
<div class="container">
    <font face="Comic sans MS" color="#D2691E">

        <h3 class="text-center">Recent Blog</h3>
    </font>
    <br>
    <div class="container">
        <div class="row">

            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <div class="thumbnail">
                    <img src="upload/image_1.jpg" alt="" width="100%" height="240px">
                    <div class="caption">

                        <br>
                        <span>
                            Một con sông nhỏ tên là Duden chảy ngang qua vị trí của họ và cung cấp cho nó những điều
                            kiện
                            cần thiết.
                        </span>
                        <hr>
                        <p>
                            <a href="#" class="btn btn-primary">Continue </a>

                        </p>
                    </div>
                </div>
            </div>

            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <div class="thumbnail">
                    <img src="upload/image_2.jpg" alt="" width="100%" height="240px">
                    <div class="caption">

                        <br>
                        <span>
                            Một con sông nhỏ tên là Duden chảy ngang qua vị trí của họ và cung cấp cho nó những điều
                            kiện
                            cần thiết.
                        </span>
                        <hr>
                        <p>
                            <a href="#" class="btn btn-primary">Continue</a>

                        </p>
                    </div>
                </div>
            </div>

            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <div class="thumbnail">
                    <img src="upload/image_3.jpg" alt="" width="100%" height="240px">
                    <div class="caption">

                        <br>
                        <span>
                            Một con sông nhỏ tên là Duden chảy ngang qua vị trí của họ và cung cấp cho nó những điều
                            kiện
                            cần thiết.
                        </span>
                        <hr>
                        <p>
                            <a href="#" class="btn btn-primary">Continue</a>

                        </p>
                    </div>
                </div>
            </div>

            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <div class="thumbnail">
                    <img src="upload/image_4.jpg" alt="" width="100%" height="240px">
                    <div class="caption">

                        <br>
                        <span>
                            Một con sông nhỏ tên là Duden chảy ngang qua vị trí của họ và cung cấp cho nó những điều
                            kiện
                            cần thiết.
                        </span>
                        <hr>
                        <p>
                            <a href="#" class="btn btn-primary">Continue</a>

                        </p>
                    </div>
                </div>
            </div>

            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <div class="thumbnail">
                    <img src="upload/image_5.jpg" alt="" width="100%" height="240px">
                    <div class="caption">

                        <br>
                        <span>
                            Một con sông nhỏ tên là Duden chảy ngang qua vị trí của họ và cung cấp cho nó những điều
                            kiện
                            cần thiết.
                        </span>
                        <hr>
                        <p>
                            <a href="#" class="btn btn-primary">Continue</a>

                        </p>
                    </div>
                </div>
            </div>

            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <div class="thumbnail">
                    <img src="upload/image_6.jpg" alt="" width="100%" height="240px">
                    <div class="caption">

                        <br>
                        <span>
                            Một con sông nhỏ tên là Duden chảy ngang qua vị trí của họ và cung cấp cho nó những điều
                            kiện
                            cần thiết.
                        </span>
                        <hr>
                        <p>
                            <a href="#" class="btn btn-primary">Continue</a>

                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
<br>
<br>
<div class="container">
    <font face="Comic sans MS" color="#D2691E">

        <h3 class="text-center">Khách hàng vui vẻ</h3>
    </font>
    <div class="row">

        <div class="col-md-3">
            <div class="">
                <div>
                    <br>
                    <img src="upload/per.jpg" width="100%" alt="">
                    <br>
                    <br>
                    <b>Anh Dũng - Hải Phòng</b>
                    <br>
                    <font face="Comic sans MS" size="3" color="#8b8378">
                        <p class="text-center">Tình cờ được bạn mời cơm rượu nếp cẩm Anh Đào, giờ nó đã là món ăn luôn
                            có trong tủ lạnh nhà tôi.
                            Tôi sẽ giới thiệu sản phẩm này đến nhiều người bạn của mình. Nó khá dinh dưỡng và bổ ích</p>
                    </font>

                    <br>
                    <br>
                    <br>


                    </a>

                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="col-md-3">
            <div class="">
                <div>
                    <br>
                    <img src="upload/per2.jpg" width="100%" alt="">
                    <br>
                    <br>
                    <b>Anh Thịnh - Bắc Ninh </b>
                    <br>
                    <font face="Comic sans MS" size="3" color="#8b8378">
                        <p class="text-center">Ai cũng hỏi bí quyết nấu rượu của mình, đơn giản là không có bí quyết gì
                            ngoài việc luôn trung thành với LIQUOR STORE</p>
                    </font>

                    <br>
                    <br>
                    <br>


                    </a>

                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="col-md-3">
            <div class="">
                <div>
                    <br>
                    <img src="upload/per3.jpg" width="100%" alt="">
                    <br>
                    <br>
                    <b>Anh Phong - Hà Đông Hà Nội </b>
                    <br>
                    <font face="Comic sans MS" size="3" color="#8b8378">
                        <p class="text-center">Mình chọn LIQUOR STORE làm nhà cung ứng và đồng hành quà tặng cho khách
                            hàng. Sản phẩm mang ý nghĩa, trang trọng, đáp ứng được mọi nhu cầu của khách hàng,
                            kể cả khách hàng khó tính nhất khi tiếp cận sản phẩm của LIQUOR STORE cũng rất là hài lòng,
                            kể cả chất lượng cho đến biểu mẫu bên ngoài.</p>
                    </font>

                    <br>
                    <br>
                    <br>


                    </a>

                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="col-md-3">
            <div class="">
                <div>
                    <br>
                    <img src="upload/per4.jpg" width="100%" alt="">
                    <br>
                    <br>
                    <b>Anh Nam - Hà Nội </b>
                    <br>
                    <font face="Comic sans MS" size="3" color="#8b8378">
                        <p class="text-center">Đây là một sản phẩm cực kỳ tinh tế mà tất cả các gia đình có thể sử dụng
                            để đưa
                            lên bàn thờ tổ tiên và trao gửi yêu thương trong các bữa ăn gia đình ngày Tết.
                            Đây còn là một món quà cực kỳ sang trọng và mang tính đặc trưng của truyền thống Việt Nam và
                            đương đại,
                            để các doanh nhân có thể tri ân và trao gửi yêu thương vào những ngày Tết.</p>
                    </font>

                    <br>
                    <br>
                    <br>


                    </a>

                </div>
            </div>
        </div>
        <br>
        <br>


    </div>

</div>




@stop()