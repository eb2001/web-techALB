<!DOCTYPE html>
<html lang="en" dir="ltr">
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
        <li><a href="{{ route('index') }}">Home</a></li>
      {{--  <li><a href="./announcements.html">Announcements</a></li>
        <li><a href="./staff.html">Staff</a></li>
        <li><a href="./">Personal Information</li>--}}

        <li><a href="{{ route('login') }}">
        <span class="button">
          <i class="fas fa-cogs"></i> Change Language
        </span>
                @if (Auth::check())
                    <span class="button" >
        {{\Illuminate\Support\Facades\Auth::user()->name}}
        </span>
                @else
                    <span class="button" >
          Sign In
        </span>
                @endif

            </a>
        </li>
    </ul>
</nav>

<header>
    <center>
        <h1 class="topPNL">Lorem Wellness Centre</h1>
        <span class="small-text">The most professional staff for the kindest of people.</span>
    </center>
</header>


<section>
    <center>
        <h2>What we offer</h2>
        <span class="small-text">The best quality for a realistic price.</span>
        <div class="box">
            <div class="box-left">
                <h2>Opened by the community, for the community.</h2>
                <p>The #1 fitness centre offers a 10% discount to all neighborhood residents.</p>
            </div>
            <div class="box-right">
                <img src="{{asset('homepage/alumni.jpg')}}" height="250" alt="alumniPE">
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="box">
            <div class="box-left">
                <h2>Look up the latest announcement by staff</h2>
                <p>Never miss a discount again, never miss a class again!</p>
            </div>
            <div class="box-right">
                <img src="{{asset('homepage/ann1.jpeg')}}" height="250" alt="arditi2019">
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br> <!-- Zevendso me vone-->

        <div class="box">
            <div class="box-left">
                <h2>Help us grow!</h2>
                <p>Bring your friend and earn a 50% discount.</p>
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
        <h2>Updated Reviews</h2>
        <div class="holder">
            <div class="review">
                <center>
                    <img src="{{asset('homepage/almiri.jpeg')}}" alt="almiri" style="border-radius: 50px;" width="80" height="80">
                </center>
                <span>The gym is nice and keeps improving. The staff cares about us and has become family.</span>
                <br><br> <b>Almir Gjata</b>
            </div>
            <div class="review">
                <center>
                    <img src="{{asset('homepage/teuta.jpg')}}" alt="toto" style="border-radius: 50px;" width="80" height="80">
                </center>
                <span>It's not the staffs fault or anything wrong with the facility, this gym is amazing but I am too lazy to come.<span>
              <br><br> <b>Teuta Bracaj </b>
            </div>
            <div class="review">
                <center>
                    <img src="{{asset('homepage/marjo.jpg')}}" alt="marjo" style="border-radius: 50px;" width="80" height="80">
                </center>
                <span>The personal training here really changed my life for the better. This place is my second house now!</span>
                <br><br> <b> Marjo Mallisti</b>
            </div>
        </div>
    </center>

</section>
<footer>
    <h2 class="pnl"><center><i>LOREM WELLNESS CENTER TIRANA</i></center></h2>
    © 2021 Lorem Wellness Center, all rights reserved
    <span style="float: right;"><b>Latest Announcement: </b>Remember training will only get harder if you start missing your classes ;) <br><i style="float:right">-The Staff</i></span>
</footer>
</body>
</html>
