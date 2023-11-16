
<div class="container "   style="background-color: rgb(184, 247, 247); width:800px; ">
    

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<h3>Chi Tiết Đơn Hàng</h3>
<table class="table table-hover  text-center" border ="1" cellspacing="0" cellpadding="0" >
    <thead>
        <tr>
            <th>Mã ĐH</th>
            <th>Ngày đặt</th>
            <th>Tổng tiền</th>
            <th>Trạng Thái</th>

        </tr>
    </thead>
    <tbody>
        <tr>
            <td>#{{$order->id}}</td>
            <td>{{$order->created_at->format('d/m/Y')}}</td>
            <td>${{ number_format($order->total) }}</td>
            <td>Chờ Xác Nhận</td>
            <td>
                <a href="{{route('order.verify',$order->token)}}" class="btn btn primary">Xác Nhận</a>
            </td>

        </tr>
    </tbody>
</table>

<h4>Chi Tiết Đơn Hàng</h4>


<table class="table table-hover  text-center"  border ="1" cellspacing="0" cellpadding="0">
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên Sp</th>
            <th>Số Lượng</th>
            <th>Giá</th>
            <th>Thành tiền</th>

        </tr>
    </thead>  
    <tbody>
    @foreach ($order->details as $dt)

        <tr>
        
         <td>{{$loop->index+1}}</td>
         <td>{{$dt->product->name}}</td>
         <td>{{$dt->quantity}}</td>
         <td>{{$dt->price}}</td>
         <td>{{$dt->quantity * $dt->price}}</td>
        </tr>
        @endforeach
    </tbody>
</table>





</div>
<style>
    table {
        border-collapse: collapse  ; width: 100%;
    }
    
    th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
    }
    
    th {
        background-color: #f2f2f2;
    }
    
    tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    </style>