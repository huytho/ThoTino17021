@extends('layout.main')
@section('content')

<div class="container">
    <h2>Chi Tiết Sản Phẩm</h2>
    <br>
    
    <div class="row">
        <div class="col-md-4">
             <img src="../upload/{{$product->image}}" width="100%" alt=""></div>
        <div class="col-md-8">
            <h4 class="text-warning">{{$product->name}}</h4>
            <p>{{$product->description}}</p>
            <b>Giá: {{$product->sale_price}}đ</b>
            <br>
            <p>Rượu vang Pháp được nhập khẩu nguyên chai, 100% chính hãng và được phân phối bởi
                chúng tôi với mức giá hấp dẫn. Lựa chọn hoàn hảo để biếu, tặng hoặc dành cho các bữa
                tiệc, sự kiện quan trọng.
            </p>
            <p>
               - rượu vang thông thường : Dùng trong những bữa tiệc bình dân
            </p>
            <p>
                - Rượu vang chất lượng cao : Dùng trong những nhà hàng 5 sao 
            </p>
            <p>
                - Rượu vang nhập khẩu được kiểm soát : Được mọi nhà hàng mua và sử dụng
            </p>



        </div>


    </div>

</div>
<br>
<br>

@stop()