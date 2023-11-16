@extends('layout.main')
@section('title', 'Trang chủ')
@section('content')


<!-- Page Header Start -->

<!DOCTYPE html>
<html lang="en">

<head>

    <base href="/">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link
        href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,700;0,800;1,200;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="assets/css/my.css">
</head>

<style>
.dbox .icon {
    font-size: 30px;
    color: #fff;

    background: #b7472a;
    width: 100px;
    height: 100px;
    margin: 0 auto;

    margin-bottom: 40px;
    padding: auto;
    border-radius: 50%;
}

.fa {
    display: inline-block !important;

    -webkit-font-smoothing: antialiased;
    font: normal normal normal 35px/1 FontAwesome;

}

.text-center {
    text-align: center !important;

}

.mb-5 {
    margin-bottom: 3rem !important;
}

.row {
    display: flex;
    flex-wrap: wrap;

}

.row .rows input {
    font-family: 'Times New Roman', Times, serif;
    font-size: 30px;
    margin-top: 20px;
    margin: 0 30px;


}

.row .rows textarea {
    font-size: 30px;
    font-family: 'Times New Roman', Times, serif;
    margin-top: 20px;
    flex-wrap: wrap;
}

.row .rows button {
    font-size: 30px;
    font-family: 'Times New Roman', Times, serif;
    margin-top: 20px;
    flex-wrap: wrap;
}

.wrapper {
    width: 100%;
}

.dbox {
    margin-bottom: 25px;
}

.w-100 {
    width: 100% !important;
}

div {
    display: block;
}

.justify-content-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important;
}

.ftco-section {
    padding: 6em 0;
    position: relative;
}

.bg-light {
    background: #f5f4f0 !important;
}

.dbox p {
    margin-bottom: 0;
    padding: 10px;
}

p {
    margin-top: 0;

    margin-bottom: 1rem;
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
}

form {
    display: block;
    margin-top: 0em;
    margin-top: 50px;
}

.form-group {
    margin-bottom: 1rem;
}

.contactForm .form-control {
    height: 36px;
    background: #fff;
    color: rgba(0, 0, 0, 0.5);
    font-size: 14px;
    border-radius: 2px;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border-bottom: 1px solid rgba(90, 214, 42, 0.1);
}

.contactForm .form-control {
    border: none;

    padding: 0;
}

.form-control {
    height: 52px !important;
    background: #fff !important;
    color: #000000 !important;
    font-size: 18px;
    padding: 40px;
    border-radius: 5px;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border-bottom: 1px solid red !important;

}

.contactForm .label {
    color: #b7472a !important;
    text-transform: uppercase;
    font-size: 12px;
    font-weight: 600;
}

label {
    display: inline-block;
    display: flex;
    margin-bottom: 0.5rem;
}

.forms .form-control {
    height: calc(3.5rem + 2px);
    font-size: 14px;
    border-radius: 1px solid green !important;
    box-shadow: none;
    border-bottom: 1px solid red !important;
    border-top: 1px solid red !important;
}

.form-group input {
    font-family: 'Times New Roman', Times, serif;
}

@media (min-width: 768px) {
    .col-md-3 {
        -webkit-box-flex: 0;



    }

    .forms {
        margin-left: 190px;


    }


    .rows .form-group .r {
        margin-right: 100px;
    }

}

@media (min-width: 375px) {
    .col-md-3 {}

    .col-md-7 {
        margin-left: -110px;
        text-align: text-center;
    }
}
</style>

<body>




    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="wrapper px-md-4">


                        <div class="row no-gutters">
                            <div>
                                <h1 style="font-size: 40px; color: #b7472a;margin-left: 200px; ">REGISTER</h1>


                            </div>

                            <div class="container ">

                                <form action="" method="POST" role="form">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">


                                            <div class="form-group">
                                                <label class="sr-only" for="">Name</label>
                                                <input type="full name" name="name" class="form-control" id="name"
                                                    placeholder="Input Name">
                                                @error('name')<div class="text-danger">{{$message}}</div>@enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">


                                            <div class="form-group">
                                                <label class="sr-only" for="">Email</label>
                                                <input type="full name" name="email" class="form-control" id="email"
                                                    placeholder="Input Email">
                                                @error('email')<div class="text-danger">{{$message}}</div>@enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">


                                            <div class="form-group">
                                                <label class="sr-only" for="">Phone</label>
                                                <input type="text" name="phone" class="form-control" id="email"
                                                    placeholder="Input phone">
                                                @error('name')<div class="text-danger">{{$message}}</div>@enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">


                                            <div class="form-group">
                                                <label class="sr-only" for="">Address</label>
                                                <input type="text" name="address" class="form-control" id="address"
                                                    placeholder="Input address">
                                                @error('address')<div class="text-danger">{{$message}}</div>@enderror
                                            </div>
                                        </div>


                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="sr-only" for="">Password</label>
                                                <input type="password" name="password" class="form-control" id="password"
                                                    placeholder="Input password">
                                                @error('password')<div class="text-danger">{{$message}}</div>@enderror
                                            </div>

                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="sr-only" for="">Confirm Password</label>
                                                <input type="password" name="confirm_password" class="form-control"
                                                    id="password" placeholder="Input password">
                                                @error('confirm_password')<div class="text-danger">{{$message}}</div>
                                                @enderror
                                            </div>

                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-danger">Submit</button>
                                        </div>
                                    </div>

                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </section>






    <!-- loader -->



    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
@stop()