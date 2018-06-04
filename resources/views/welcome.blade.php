<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dishwasher</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="../bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="../public/css/style.css" rel="stylesheet" type="text/css">




        <!-- Styles -->

    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <h2>Dishwasher list</h2>
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



  <?php if ($userConnect == null){ ?>

        <p>
            <?php echo 'Login to add products to your wish list'; ?>
        </p>

      <ul class="listehome">
   <?php   foreach ($dishwasher as $w){ ?>


          <li><?php  echo $w; ?> </li>

      <?php } ?>
</ul>
   <?php }
    else { ?>

      <p>Select the product(s) you want to add to your wish list</p>

    <form method="post" action="wish">
        <input class="btn btn-light btnWish" type="submit" value="See my wish list">
    </form>

    <form method="post" action="wish">
        <input class="btn btn-light btnAdd" type="submit" value="Add to wishlist" >

        <ul class="listehome2">

    <?php  foreach ($dishwasher as $w){ ?>

    <li><input value="<?php echo $w ?>" name="choice[]" type="checkbox"><?php  echo $w; ?> </li>

    <?php } ?>

        </ul>



    </form>

    <?php } ?>
</div>

    </body>
</html>
