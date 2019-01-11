<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Assignment1</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Assignment_1<br>
                </div>
                <div class="title m-b-md" style="font-size: 30px;">
                    Add & Sub<br>
                </div>
                
 <label style="color:black;">Enter first number:</label>
  <input type="text" id="txt1" name="text1" value="1">
 <label style="color:black;"> Enter second number:</label>
  <input type="text" id="txt2" name="text2" value="2">
  <button onclick="myFunction()">Add</button>
  <button onclick="myFunctionsub()">Sub</button>
</p>
<h1 id="demo"></h1>

            </div>

        </div>
    </body>
</html>
<script>
    function myFunction() {
  var y = document.getElementById("txt1").value;
  var z = document.getElementById("txt2").value;
  var x = Number(y) + Number(z);
  document.getElementById("demo").innerHTML = x;
}
function myFunctionsub() {
  var y = document.getElementById("txt1").value;
  var z = document.getElementById("txt2").value;
  var x = Number(y) * Number(z);
  document.getElementById("demo").innerHTML = x;
}
</script>