<!DOCTYPE html>
<html lang="en" dir="ltr">
<ul class="track">
<?php
if (isset($_COOKIE['nav_history'])) {
  $cookie_values = $_COOKIE["nav_history"] . "<li>Home&#9654&nbsp</li>";

  setcookie("nav_history", $cookie_values, time() + (86400 * 30), "/");
}
else{
  echo "Home&#9654&nbsp";
  setcookie("nav_history", "<li>Home&#9654&nbsp</li>", time() + (86400 * 30), "/");
};
if (strlen($cookie_values) > 150){
  setcookie("nav_history", "<li>Home&#9654&nbsp</li>", time() + (86400 * 30), "/");
}
echo $cookie_values ?? '';
?>
</ul>
<head>
    <meta charset="utf-8">
    <title>Lorem Wellness Center</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('homepage/master.css') }}">
    <script src="https://kit.fontawesome.com/b43fd36963.js" crossorigin="anonymous"></script>

</head>
<body>
<nav> <!-- navigation bar on top -->
    <ul>
        <li><a href="{{ route('index') }}">{{__('messages.home')}}</a></li>

        @if (Auth::check())
            <li>
              <a href="{{ route('login')}}">{{__('messages.personalinfo')}}</a>
            </li>
        @endif
        <li>
          <a href="{{ route('feedback')}}">Feedback</a>
        </li>

        <li>
            <span>
              @foreach (Config::get('languages') as $lang => $language)
                @if ($lang != App::getLocale())
                  <a href="{{ route('lang.switch', $lang) }}"> {{$language}}</a>
                @endif
              @endforeach
            </span>
        </li>
        <li><a href="{{ route('login') }}">

                @if (Auth::check())
                    <span class="button" >
        {{\Illuminate\Support\Facades\Auth::user()->name}}
        </span>
                @else
                    <span class="button" >
          {{__('messages.log')}}
        </span>
                @endif

            </a>
        </li>
    </ul>
</nav>

<header>
    <center>
        <h1 class="topPNL">Lorem Wellness Centre</h1>
        <span class="small-text">{{__('messages.welcome')}}</span>
    </center>
</header>


<section>
    <center>
        <h2>{{__('messages.offer')}}</h2>
        <span class="small-text">{{__('messages.brag')}}</span>
        <div class="box">
            <div class="box-left">
                <h2>{{__('messages.open')}}</h2>
                <p>{{__('messages.no1')}}</p>
            </div>
            <div class="box-right">
                <img src="{{asset('homepage/alumni.jpg')}}" height="250" alt="alumniPE">
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="box">
            <div class="box-left">
                <h2>{{__('messages.ann')}}</h2>
                <p>{{__('messages.never')}}</p>
            </div>
            <div class="box-right">
                <img src="{{asset('homepage/ann1.jpeg')}}" height="250" alt="arditi2019">
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br> <!-- Zevendso me vone-->

        <div class="box">
            <div class="box-left">
                <h2>{{__('messages.helpus')}}</h2>
                <p>{{__('messages.bringfriend')}}</p>
            </div>
            <div class="box-right">
                <img src="{{asset('homepage/mesim2.jpeg')}}" height="250" alt="teaching">
            </div>
        </div>
    </center>
</section>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> <!-- I should have replaced these with a upper margin on the below element maybe, but I remembered about these br's very late -->
<hr>
<section>
    <center>
        <h2>{{__('messages.reviews')}}</h2>
        <div class="holder">
            <div class="review">
                <center>
                    <img src="{{asset('homepage/almiri.jpeg')}}" alt="almiri" style="border-radius: 50px;" width="80" height="80">
                </center>
                <span>{{__('messages.almir')}}</span>
                <br><br> <b>Almir Gjata</b>
            </div>
            <div class="review">
                <center>
                    <img src="{{asset('homepage/teuta.jpg')}}" alt="toto" style="border-radius: 50px;" width="80" height="80">
                </center>
                <span>{{__('messages.toto')}}<span>
              <br><br> <b>Teuta Bracaj </b>
            </div>
            <div class="review">
                <center>
                    <img src="{{asset('homepage/marjo.jpg')}}" alt="marjo" style="border-radius: 50px;" width="80" height="80">
                </center>
                <span>{{__('messages.rev3')}}<span>
                <br><br> <b> Arkimed Lushaj</b>
            </div>
        </div>
    </center>

</section>
<hr>

<section>
<center>
  1
<center>
</section>
<footer>
    <h2 class="pnl"><center><i>LOREM WELLNESS CENTER TIRANA</i></center></h2>
    © 2021 Lorem Wellness Center, all rights reserved
    <span style="float: right;"><b>{{__('messages.latestann')}}</b>{{__('messages.dummy')}}<br><i style="float:right">-The Staff</i></span>
</footer>
</body>
</html>
