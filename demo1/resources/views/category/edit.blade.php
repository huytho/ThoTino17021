

@extends('layout.header-ad')
@section('main')

<br>
<br>
<br>

<h1 >Sửa danh mục</h1>
<form action="{{route('category.update',$category->id)}}" method="POST" class="form-inline"  style="width:350px">
   @csrf @method('PUT')
    <div class="form-group">
        <label class="sr-only" for="">label</label>
        <input type="text" class="form-control  bg-secondary text-warning" value="{{$category->name}}" name="name" placeholder="Input field">

        @error('name')
        <div class="text-danger">{{$message}}</div>
        @enderror
    </div>

    

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@stop()