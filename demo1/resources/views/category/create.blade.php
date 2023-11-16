
@extends('layout.header-ad')
@section('main')

<br>
<br>
<br>
<h1>Thêm mới danh mục</h1>
<form action="{{route('category.store')}}" method="POST" class="form-inline" role="form">
   @csrf
    <div class="form-group" style="width:350px">
        <label class="sr-only" for="">label</label>
        <input type="text" class="form-control " name="name" placeholder="Thêm danh mục">
        @error('name')
        <div class="text-danger">{{$message}}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

    

 
</form>

@stop()