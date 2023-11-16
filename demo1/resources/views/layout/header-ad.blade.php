
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>

  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </body>
</html>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="#">
        <font face="Comic sans MS" size=" 5" color="#DC143C">
            <h3>LIQUOR STORE</h3>
        </font>
    </a>
  <a class="navbar-brand" href="{{route('index')}}">Trang Chủ</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{route('product.index')}}">Sản Phẩm</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('category.index')}}">Danh mục</a>
      </li>
    </ul>

    <style>
      .user-avatar-md {
        height: 32px;
        width: 32px
      }
    </style>
   <div class="dropdown">
            <a class="nav-link dropdown-toggle pl-0 text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img src="../upload/per.jpg" alt="" class="user-avatar-md rounded-circle "> 
                {{auth()->user()->name}}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item " href="{{route('admin.logout')}}">Logout</a>
                <a class="dropdown-item" href="#">Login</a>
                <a class="dropdown-item" href="#">Admin</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"></a>
            </div>
        </div>
  </div>
</nav>
<style>
.container li {
    list-style-type: none ;
}
.home{
  margin-left:15px;
}
</style>

<br>

        <div class="container">
           <a href="{{route('admin')}}" class="btn btn-success fa fa-home home">Home</a>
          <li class="nav-item menu-items">

            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          
              <span class="btn btn-success fa fa-th">Quản lý danh mục</span>
            
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
               
                <li class="nav-item"> <a class="nav-link fa fa-caret-right text-dark" href="{{ route('category.index') }}">Danh sách</a></li>
                <li class="nav-item"> <a class="nav-link fa fa-caret-right text-dark" href="{{ route('category.create') }}">Thêm mới</a></li>
               
              </ul>
            </div>

        
          </li>

  
          
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
           
              <span class="btn btn-success fa fa-th">Quản lý sản phẩm</span>
            
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
              <li class="nav-item "> <a class="nav-link fa fa-caret-right text-dark" href="{{ route('product.index') }}">Danh sách</a></li>
                <li class="nav-item"> <a class="nav-link fa fa-caret-right text-dark" href="{{ route('product.create') }}">Thêm mới</a></li>
                </ul>
            </div>
          </li>
        </ul>
      </nav>
     
      <!-- partial -->
    
     
      @yield('main')
        <!-- partial -->
     
        <!-- main-panel ends -->
      </div>
      </div>
      </div>
      <!-- page-body-wrapper ends -->
     
    


    <!-- container-scroller -->
 