<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>Fiscalía de la República de Panamá</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
             
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            ----------------------------------------------
            -------------------------------------------------
         /*   * {box-sizing:border-box}
          body {font-family: Verdana,sans-serif;margin:0}
          .mySlides {display:none}*/  

          /* Slideshow container */
          .slideshow-container {
          max-width: 100px;
          position: relative;
          margin: auto;

            }
            .bgimg {
    background-image: url('/images/choco.png');
    min-height: 100%;
    background-position: center;
    background-size: cover;
}

            /* Next & previous buttons */
            .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
              }

          /* Position the "next button" to the right */
        .next {
         right: 0;
        border-radius: 3px 0 0 3px;
          }

          /* On hover, add a black background color with a little bit see-through */
          .prev:hover, .next:hover {
          background-color: rgba(0,0,0,0.8);
          }

          /* Caption text */
          .text {
          color: #f2f2f2;
          font-size: 15px;
          padding: 8px 12px;
          position: absolute;
          bottom: 8px;
          width: 100%;
          text-align: center;
          }

          /* Number text (1/3 etc) */
          .numbertext {
          color: #f2f2f2;
          font-size: 12px;
          padding: 8px 12px;
          position: absolute;
          top: 0;
            }

          /* The dots/bullets/indicators */
          .dot {
          cursor:pointer;
          height: 13px;
          width: 13px;
          margin: 0 2px;
          background-color: #bbb;
          border-radius: 50%;
          display: inline-block;
          transition: background-color 0.6s ease;
          }

          .active, .dot:hover {
          background-color: #717171;
          }

          /* Fading animation */
          .fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
            }

          @-webkit-keyframes fade {
          from {opacity: .4} 
          to {opacity: 1}
          }

          @keyframes fade {
          from {opacity: .4} 
          to {opacity: 1}
          }

          /* On smaller screens, decrease text size */
          @media only screen and (max-width: 300px) {
          .prev, .next,.text {font-size: 11px}
          }


        </style>
    </head>
    <body >

<div class="bgimg">

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Fiscalía</a>
                        
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif
         
             <div content="width=device-width" class="slideshow-container">

            <div class="mySlides fade" align="center">
             
                <img src="images/womenlawyer.jpg" style="width:80%;height:500px" >
              
            </div>

            <div class="mySlides fade" align="center">
              
             <img src="images/table.jpg" style="width:80%;height:500px">
            
          </div>

          <div class="mySlides fade" align="center">
            
            <img src="images/hands.jpg" style="width:80%;height:500px">
           
          </div>

          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
          
           <div style="text-align:center">
         <span class="dot" onclick="currentSlide(1)"></span> 
          <span class="dot" onclick="currentSlide(2)"></span> 
          <span class="dot" onclick="currentSlide(3)"></span> 
          </div>


        </div>
          <br>

        
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</br>
 </div>
            <div class="content">
                <div class="title m-b-md">
                    Fiscalía de la  <img src="images/pa.gif" style="width:70px;height:50px"> 
                    </br> República de Panamá 
                </div>

                <div class="links">


                    <a href="{{ url('/') }}">Sucursales</a>
                    <a href="{{ url('/') }}">Directorio Medico</a>
                   <a href="{{ url('/') }}">Atención al Cliente</a>
                     <a href="{{ url('/home') }}">Panel de Atención</a>

                </div>
               
                <div class="links">

                    <!-- <a href="{{ url('/index') }}">
                   <img src="images/maletin.png"  style="width:100px;height:100px;border:0;" />
                    </a>
                     <a href="{{ url('/index') }}">
                    <img src="images/estetoscopio.png"  style="width:100px;height:100px;border:0;" />
                    </a>
                     <a href="{{ url('/carepanel') }}">
                    <img src="images/ambulancia.png"  style="width:100px;height:100px;border:0;" />
                    </a>
                      </a>
                     <a href="{{ url('/dashboard') }}">
                    <img src="images/estadistica.png"  style="width:100px;height:100px;border:0;" />
                    </a>-->
                  </div>
            </div>
        </br>
</br>
</br>
</br>
</br>
</div>
    </body>
</html>
