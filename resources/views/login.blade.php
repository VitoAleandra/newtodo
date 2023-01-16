<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('asset/css/log.css')}}" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="card">
        <div class="img-wk" alt="">
            <img class="poto-wk" src="{{ asset('asset/img/wkwkwkwkwk.png')}}">
        </div>
            <div class="box-sizing">
                <h3 style="text-align: center"> PPDB Login </h3>
            </div>
        <hr>
            <div class="profile-img">
                <img class="profile-img" src="{{ asset('asset/img/propile.png')}}">
            </div>
        <header class="card-title">Masuk Ke Akun Ppdb Mu</header> 
        <form method="POST" action="/student">
            @csrf
            <div class="card1"></div>
            <input type="text" name="username" class="ini-username" placeholder="Username">
            <input type="password" name="password" class="ini-pw" placeholder="Password">
            <button type="submit" class="btn btn-blue gradient sign d-flex justify-content-center align-items-center">Login</button>
            <h3> -- Or -- </h3>
            <a class="btn btn-green gradient text-center" href="/regist">Register</a>
    </div>
</body>
</html>