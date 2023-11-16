@extends('layout.main')
@section('title')
@section('content')


<div class="jumbotron bg-dark">
    <div class="container">


    </div>
</div>





<div class="container">
    <div class="row">
        <div class="col-md-4">
            @if (auth('cus')->check())
            <form action="" method="POST">
                @csrf
                <div class="form-group">
                    <label> Name *</label>
                    <input type="text" class="form-control p_input text-warning" value="{{ $auth->name}}" name="name" placeholder="name">
                    @error('name')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label> phone *</label>
                    <input type="text" class="form-control p_input text-warning" value="{{ $auth->phone}}" name="phone" placeholder="phone">
                    @error('name')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label> address *</label>
                    <input type="text" class="form-control p_input text-warning" value="{{ $auth->address}}" name="address" placeholder="address">
                    @error('name')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label> Email *</label>
                    <input type="email" class="form-control p_input text-warning" value="{{ $auth->email}}" name="email" placeholder="Email">
                    @error('email')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label> Ghi chu *</label>
                    <br>
                 <textarea name="" id="" cols="30" rows="3"></textarea>
                    @error('name')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
              

                <br>
                <button type="submit" class="btn btn-primary btn-block enter-btn">Dat hang</button>

            </form>
            @else
            <form action="" method="POST">
                @csrf
                <input type="hidden" name="returnUrl" value="order.checkout">

                <div class="form-group">
                    <label>Username or email *</label>
                    <input type="email" class="form-control p_input text-warning" name="email" placeholder="Email">
                    @error('email')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Password *</label>
                    <input type="password" class="form-control p_input text-warning" name="password"
                        placeholder="Password">
                    @error('password')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                    <a href="{{ route('register')}}">Dang ki</a>

                </div>
               
            </form>
            @endif
        </div>
        <div class="col-md-8"> @if(Session::has('ok'))
            <div class="alert alert-success text-dark">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{Session::get('ok')}}

            </div>
            @endif

            @if(Session::has('no'))
            <div class="alert alert-success text-dark">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{Session::get('no')}}

            </div>
            @endif
            <h3>Tổng Tiền : {{number_format($cart->totalPrice)}} vnđ</h3>

            <table class="table table-hover ">
                <thead>
                    <tr class="text-body">
                        <th class="text-body">Stt</th>
                        <th class="text-body">Ảnh</th>
                        <th class="text-body">Tên</th>
                        <th class="text-body">Giá</th>

                        <th class="text-body">Số Lượng</th>
                        <th class="text-body">Thành tiền</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cart->tem as $carts)
                    <tr class="text-body">
                        <td>{{$loop->index+1}}</td>
                        <td><img src="../upload/{{$carts->image}}" width="70px" alt=""></td>
                        <td>{{$carts->name}}</td>
                        <td>{{number_format( $carts->price)}}</td>



                        <td>{{$carts->quantity}}</td>
                        <td>{{number_format($carts->quantity * $carts->price)}}</td>


                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>



<br>
<br>





@stop()