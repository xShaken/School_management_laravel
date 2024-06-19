<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="apple-mobile-web-app-capable" content="yes">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
  <header>
    <nav>

      <div class="logo-div">
        <a href="{{ asset('SampleBootstrap') }}"><img width="70" src="{{ asset('assets\img\akasha.png') }}"></a>
        <p>AKASHA</p>
      </div>

      <div class="links-div" id="nav-links">
      <a href="{{ asset('') }}" class="a active" onclick="myFunction()">Home</a>
        <a href="#sec3" class="a" onclick="myFunction()"> Strands</a>
        
        <a href="#sec5" class="a" onclick="myFunction()">About us</a>
      </div>
      <div class="menu-icon-div" onclick="myFunction()">
        <img class="menu-icon" src="./Assets/menu-fill.png" alt="" />
      </div>
      <div style=" padding:5px 2rem;margin-top:3.5px;">
        <a style="border: 1px solid orange; padding:5px 2rem; text-decoration:none; color: orange;" href="{{ asset('login') }}">Login</a>
      </div>
    </nav>
  </header>


  <section class="humms">
<div class="div-humms">
  <div class="humms-div">
  <h1>Humanities and Social Sciences (HUMSS) Strand Curriculum Guides</h1>
 
 <ul>
 
 <li><p>Creative Writing/ Malikhang Pagsulat</p></li>
 <li><p>Introduction to World Religions and Belief Systems</p></li>
 <li><p>Creative Nonfiction</p></li>
 <li><p>Trends,Networks, and Critical Thinking in the 21st Century Culture</p></li>
 <li><p>Philippine Politics and Governance</p></li>
 <li><p>Community Engagement, Solidarity, and Citizenship</p></li>
 <li><p>Discipline and Ideas in the Social Sciences</p></li>
 <li><p>Discipline and Ideas in Applied Social Sciences</p></li>
 <li><p>Work Immersion/Culminating Activity</p></li>
</div>
</div>
</ul>

 </section>

  
  <section class="footer">
    <div class="social">
       <img src="{{ asset('assets\img\twiter.png') }}">
       <img src="{{ asset('assets\img\facebook.png') }}">
       <img src="{{ asset('assets\img\linkedin.png') }}">
    </div>
    <div class="links">
      <a href="">Home</a>
      <a href="">Features</a>
      <a href="">About us</a>
    </div>
    <div class="copyright">
      <p><a href="">Terms of use</a> | <a href="">Privacy policy</a></p>
      <p>©2024 Akasha. All rights reserved</p>
    </div>
  </section>


  <script>
    function myFunction() {
      var x = document.getElementById("nav-links");
      if (x.className === "links-div") {
        x.className += " responsive";
      } else {
        x.className = "links-div";
      }
    }

    var header = document.getElementById("nav-links");
    var btns = header.getElementsByClassName("a");
    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
      });
    }
  </script>
</body>

</html>






