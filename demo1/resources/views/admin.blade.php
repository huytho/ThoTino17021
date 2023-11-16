@extends('layout.header-ad')
@section('main')
<br>


<div class="jumbotron">
    <div class="container">
        <h1 class="text-warning">Hello, admin!</h1>
        <p class="text-warning">Contents ...</p>
        <p>
            <a href="{{route('product.index')}}"class="btn btn-primary btn-lg">Danh sach san pham</a>
        </p>
    </div>
</div>

@stop()