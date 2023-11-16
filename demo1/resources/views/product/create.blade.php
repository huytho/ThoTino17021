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
        <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <h1 class="text-warning">Thêm mới sản phẩm</h1>
            <div class="row">


                <div class="col-md-6">
                    <div class="form-group ">
                        <label for="">tên sản phẩm</label>
                        <input type="text" class="form-control text-warning" name="name" placeholder="Input field"
                            style="width:400px">
                        @error('name')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                        <div class="form-group">

                            <label for="">description</label>

                            <textarea name="description" id="input" class="form-control text-warning" rows="6"
                                required="required" style="width:400px">

                     </textarea>


                            @error('name')
                            <div class="text-danger">{{$message}}</div>
                            @enderror

                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">hình ảnh</label>
                        <input type="file" class="form-control text-warning" name="image" style="width:350px">
                        @error('image')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">giá</label>
                        <input type="text" class="form-control text-warning" name="price" placeholder="Input field"
                            style="width:350px">
                        @error('price')
                        <div class="text-danger">{{$message}}</div>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label for="">sale_price</label>
                        <input type="text" class="form-control text-warning" name="sale_price" placeholder="Input field"
                            style="width:350px">
                        @error('sale_price')
                        <div class="text-danger">{{$message}}</div>
                        @enderror

                    </div>
                    <br>
                    <div class="form-group">

                        <select name="category_id" style="width:350px">
                            <option value="category_id">Chọn danh mục</option>
                            @foreach($cats as $cat)
                            <option value="{{$cat->id}}">{{$cat->name}}</option>

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