@extends('layout.header-ad')
@section('main')
<style>
    .vol{
        margin-top:-140px;
    }
</style>
<div class="row">
    <div class="col-md-3">

    </div>
    <div class="col-md-9 vol">
    <form action="{{route('product.update',$product->id)}}" method="POST" enctype="multipart/form-data">
    @csrf @method('PUT')
    <h1 class="text-warning">Chinh sua sản phẩm</h1>
    <div class="row">


        <div class="col-md-6">
            <div class="form-group ">
                <label for="">tên sản phẩm</label>
                <input type="text" class="form-control text-warning" name="name" value="{{ $product->name }}"
                    style="width:400px">
                @error('name')
                <div class="text-danger">{{$message}}</div>
                @enderror
                <div class="form-group">

                    <label for="">description</label>

                    <textarea name="description" id="input" class="form-control text-warning" rows="6"
                        value=" " style="width:400px">{{ $product->description }}</textarea>


                    @error('name')
                    <div class="text-danger">{{$message}}</div>
                    @enderror

                </div>

            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="">Ảnh sản phẩm</label>
                <input type="file" class="form-control" name="file" style="width:400px">
                <img src="{{asset('upload')}}/{{$product->image}}" width="70%" height="200px">
                @error('file')<div class="text-danger">{{$message}}</div>@enderror
            </div>
            <div class="form-group">
                <label for="">giá</label>
                <input type="text" class="form-control text-warning" name="price" value="{{ $product->price}} "
                    placeholder="Input field" style="width:350px">
                @error('price')
                <div class="text-danger">{{$message}}</div>
                @enderror

            </div>
            <div class="form-group">
                <label for="">sale_price</label>
                <input type="text" class="form-control text-warning" name="sale_price"
                    value="{{ $product->sale_price}} " placeholder="Input field" style="width:350px">
                @error('sale_price')
                <div class="text-danger">{{$message}}</div>
                @enderror

            </div>
            <br>
            <div class="form-group">

                <select name="category_id" style="width:350px">
                    <option value="category_id">Chọn danh mục</option>
                    @foreach($cats as $cat)
                    <option value="{{$cat->id}}"{{$cat->id == $product->category_id ? 'selected' : ''}}>{{$cat->name}}</option>

                    @endforeach
                </select>


            </div>


            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-primary">Làm mới</button>
        </div>
    </div>



</form>
    </div>
</div>

@stop()