@extends('layout.header-ad')
@section('main')
<style>
    .col{
        margin-top:-40px;
    }
</style>
<div class="row">
    <div class="col-md-3">

    </div>
    <div class="col-md-9 col">

        <form action="" method="GET" class="form-inline" role="form">

            <div class="form-group">
                <label class="sr-only" for="">label</label>
                <input type="text" class="form-control" id="" placeholder="Input field">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('product.create') }}" class="btn btn-success ">Thêm Mới</a>
         
        </form>
        <br>

        <table class="table ">
            <thead class="thead">
                <tr>
                    <th class="text-warning">Id</th>

                    <th class="text-warning">Tên Sản Phẩm</th>
                    <th class="text-warning"> Danh muc</th>
                    <th class="text-warning">Ảnh</th>
                    <th class="text-warning">Giá</th>
                    <th class="text-warning">Giá Sale</th>

                </tr>
            </thead>
            <tbody>
                @foreach($pro as $val)
                <tr>
                    <td>{{$val->id}}</td>
                    <td>{{$val->name}}</td>
                    <td>{{$val->cat->name}}</td>
                    <td><img src="../upload/{{$val->image}}" width="60px" alt=""></td>
                    <td>{{$val->price}}</td>
                    <td>{{$val->sale_price}}</td>

                    <td class="text-right">
                        <form action="{{route('product.destroy',$val->id)}}" method="post">
                            @csrf @method('DELETE')
                            <a href="{{route('product.edit',$val->id)}}" class="btn btn-primary">Sửa</a>
                            <button href="" class="btn btn-danger"> Xóa</button>
                        </form>


                    </td>



                </tr>
                @endforeach
            </tbody>




        </table>
        <br>
    </div>
</div>

{{$pro->links()}}

@stop