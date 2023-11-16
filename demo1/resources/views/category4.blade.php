@extends('layout.main')
@section('content')


<div class="container">
    <font face="Comic sans MS" color="#D2691E">
        <h2 class="text-center">Những món quà thú vị của chúng tôi</h2>
    </font>
    <h3 class="text-center">Trang nhã của bạn</h3>
    <br>

    <div class="row">
        @foreach($pro as $val)
        <a href="{{route('detail',$val->id)}}" style=" text-decoration: none;" class="text-dark">
       <div class="col-md-3">
            <div class="">
                <div>
                    <br>
                    <img src="upload/{{$val->image}}" width="100%" alt="">
                    <br>
                    <br>
                    <b>{{$val->name}}</b>
                    <br>
                    <p>{{$val->description}}</p>
                    <p class="lead">Giá gốc: {{number_format($val->price)}}đ</p>
                    <b class="text-danger">Giá hiện tại: {{ number_format($val->sale_price)}}đ</b>
                    <br>

                    <a href="{{route('cart.add',$val->id)}}" class="btn btn-light"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        <a href="" class="btn btn-light text-danger ">

                        </a>
                        <hr>
                </div>
            </div>
        </div>
       </a>
        <br>
        <br>
        @endforeach
    </div>

  

</div>

@stop()