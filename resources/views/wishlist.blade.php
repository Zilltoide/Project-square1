<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="../public/css/style.css" rel="stylesheet" type="text/css">

</head>
<body>
<div class="flex-center position-ref full-height">

    <h2>My wish list</h2>
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a >
                   Hello {{ Auth::user()->name }}
                </a>

                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif
</div>

<div class="content">

    <a class="btn btn-light btnBack" href="{{ route('index')}}">Back</a>

    <form method="post" action="delete">
        <input class="btn btn-danger btnDelete" type="submit" value="Delete product">
        <ul class="listehome2">
            <?php   foreach ($userWish as $wishList){ ?>


            <li> <input type="checkbox" name="deleteChoice[]" value=" <?php echo $wishList -> id ?>"><?php echo $wishList -> wish ?></li><br>

            <?php

            } ?>
        </ul>

    </form>

</div>


</body>
</html>
