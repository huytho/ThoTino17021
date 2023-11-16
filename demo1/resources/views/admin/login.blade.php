<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./style/style.css" />
    <!-- font roboto -->

    <style>
    body {
        background: url('./imagess/bg.jpg');
        background-size: cover;
        background-position-y: -80px;
        font-size: 16px;
    }

    .login {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;

    }

    .login__container {
        width: 100%;
        max-width: 400px;
        padding: 20px;
        background: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .login__container h1 {
        margin-bottom: 20px;
        font-size: 2rem;
        text-align: center;
    }

    .login__container form {
        display: flex;
        flex-direction: column;
    }

    .login__container form label {
        margin-bottom: 10px;
        font-size: 1.2rem;
    }

    .login__container form input {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-bottom: 20px;
    }

    .login__container form button {
        padding: 10px;
        border: none;
        border-radius: 5px;
        background: #333;
        color: #fff;
        font-size: 1.2rem;
        cursor: pointer;
    }

    .login__container form button:hover {
        background: #555;
    }

    .login__container form a {
        text-align: center;
        font-size: 1.2rem;
        text-decoration: none;
        color: #333;
    }

    .login__container form a:hover {
        color: #555;
    }

    .login__registerButton {
        margin-top: 20px;
        padding: 10px;
        border: none;
        border-radius: 5px;
        color: black;
        font-size: 1.2rem;
        cursor: pointer;
        display: block;
    }
    </style>
</head>

<body>
    <!-- from login -->
    <div class="login">
        <div class="login__container">
            <h1>LOGIN</h1>
            @if(Session::has('ok'))
            <div class="alert alert-success text-dark">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{Session::get('ok')}}

            </div>
            @endif

            @if(Session::has('no'))
            <div class="alert alert-success text-dark">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{Session::get('no')}}

            </div>
            @endif
            <form method="post">
                @csrf

                <h5>Email</h5>
                <input type="text" name="email" class="input-login-username" />
                @error('email')<div style="color:red;">{{$message}}</div>@enderror
                <h5>Password</h5>
                <input type="password" name="password" class="input-login-password" />
                @error('password')<div style="color:red;">{{$message}}</div>@enderror
                <br> <button type="submit" class="login__signInButton">LOGIN</button>
                <p class="sign-up">Don't have an Account?<a href="{{ route('admin.register')}}"> Sign Up</a></p>
            </form>

        </div>
    </div>
</body>
<script>
// validation form login
</script>

</html>