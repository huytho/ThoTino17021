
@extends('layout.main')
@section('content')

<div class="jumbotron bg-dark">
    <div class="container">
    
      
    </div>
</div>

    



<div class="container">
    
@if(Session::has('ok'))
<div class="alert alert-success text-dark">
    <button type="button" class="close" data-dismiss="alert" 
    aria-hidden="true">&times;</button>
{{Session::get('ok')}}
   
</div>
@endif

@if(Session::has('no'))
<div class="alert alert-success text-dark">
    <button type="button" class="close" data-dismiss="alert" 
    aria-hidden="true">&times;</button>
{{Session::get('no')}}
   
</div>
@endif
    <table class="table table-hover ">
        <thead>
            <tr class="text-body">
                <th class="text-body">Stt</th>
                <th class="text-body">Ảnh</th>
                <th class="text-body">Tên</th>
                <th class="text-body">Giá</th>
              <th></th>
                <th class="text-body">Số Lượng</th>
                <th class="text-body">Thành tiền</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cart->tem as $carts)
            <tr class="text-body">
                <td>{{$loop->index+1}}</td>
                <td><img src="upload/{{$carts->image}}" width="70px" alt=""></td>
                <td>{{$carts->name}}</td>
                <td>{{number_format( $carts->price)}}</td>
                <td>
                    
              <form action="{{ route('cart.update',$carts->id)}}" method="get" class="form-inline"  role="form">    
                    <div class="input-group  d-flex mb-10">
	             	<input  type="number"  name="quantity"  value="{{$carts->quantity}}" min="1" max="100">
	          	</div>
                        <button type="submit" class="btn btn-primary">Lưu</button>
                    </form>
                    
                </td>
                
      
                <td>{{$carts->quantity}}</td>
                <td>{{number_format($carts->quantity * $carts->price)}}</td>
                <td>
                    <a href="{{ route('cart.remove',$carts->id)}}" class="btn btn-danger">Xóa</a>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
    
</div>
<br>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-8">
        <h3>Tổng Tiền : {{number_format($cart->totalPrice)}} vnđ</h3>
        <a href="{{ route('index')}}#pro" class="btn btn-success">Tiếp tục mua hàng</a>
<a href="{{ route('cart.clear')}}" class="btn btn-danger" onclick="return confirm('Hủy Giỏ Hàng ? ')">Hủy Giỏ Hàng</a>
<a href="{{ route('order.checkout')}}" class="btn btn-warning" >Thanh toán</a></div>

</div>

<br>
<br>
@stop()