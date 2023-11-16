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
                        </i>
                        <a data-toggle="modal" href='#modal-{{$val->id}}' class="btn btn-light"><i class="fa fa-eye"
                                    aria-hidden="true"></i> </a>
                        </a>
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

  

</div>

@stop()