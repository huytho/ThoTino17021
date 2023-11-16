@extends('layout.header-ad')
@section('main')
<style>
    .col{
        margin-top:-100px;
    }
</style>
<div class="row">
    <div class="col-md-3">


    </div>
    <div class="col-md-9 col ">
        
<form action="" method="POST" class="form-inline" role="form">

<div class="form-group">
    <label class="sr-only" for="">label</label>
    <input type="email" class="form-control" id="" placeholder="Input field">
</div>



<button type="submit" class="btn btn-primary">Submit</button>
<a href="{{route('category.create')}}" class="btn btn-warning">Thêm Mới</a>
</form>
<br>

<table class="table table-light">
<thead class="thead-light">
    <tr>
        <th class="text-warning">ID</th>
        <th class="text-warning">Tên Sản Phẩm</th>
        
        
    </tr>
</thead>
<tbody>
    <img src="upload/1.jpg" alt="">
    @foreach($cat as $val)
    <tr>

        <td>{{$val->id}}</td>
        <td>{{$val->name}}</td>
        <td class="text-right">
            <form action="{{route('category.destroy',$val->id)}}" method="post">
                @csrf @method('DELETE')
                <a href="{{route('category.edit',$val->id)}}"><i class="btn btn-primary">Sửa</i></a>
                <button href="" class="btn btn-danger"> Xóa</button>
            </form>


        </td>



    </tr>
    @endforeach
</tbody>





</table>
    </div>
</div>

<br>
{{$cat->links()}}

@stop