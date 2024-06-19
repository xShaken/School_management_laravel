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
      <a href="{{ asset('SampleBootstrap') }}"><img width="60" src="{{ asset('assets\img\akasha.png') }}"></a>
        <p>AKASHA</p>
      </div>
      
      <div class="links-div" id="nav-links">
        <a href="# " class="a active" onclick="myFunction()">Home</a>
        <a href="#sec3" class="a" onclick="myFunction()"> Strands</a>
        <a href="#sec5" class="a" onclick="myFunction()">About us</a>
      </div>
      <div class="menu-icon-div" onclick="myFunction()">
        <img class="menu-icon" src="./Assets/menu-fill.png" alt="" />
      </div>
      <div style="display:flex; justify-content: center; align-items: center;">
      <a style="border: 1px solid orange; padding:5px 2rem; text-decoration:none; color: orange; " href="{{ asset('login') }}">Login</a>
    </div>
    </nav>
  </header>


  <main>
    <div class="main-divl">
      <h1>
        <span class="span1">AKASHA SENIOR HIGH SCHOOL</span> YOUR GATEWAY TO
        <span class="span2">ACADEMIC EXCELLENCE.</span>
      </h1>

      <div class="btn-div">
        <a href="#">Get started</a>
        <img src="{{ asset('assets\img\right-arrow.png') }}">
      </div>
    </div>
    <div class="main-divr">
    <img width="600" src="{{ asset('assets\img\front.png') }}">
    </div>
  </main>

  <br>
  <br>
  <br>
  <br>
  <section class="section5">
    <div class="section5-divl">
    <img src="{{ asset('assets\img\about.jpg') }}">
    </div>
    <div class="section5-divr" id="sec5">
      <h1>About Us</h1>
      <p>
        We are committed to providing a nurturing and stimulating learning environment where students can thrive academically, 
        personally, and socially. Our school is dedicated to empowering students to reach their full potential and achieve their goals.
      </p>
    
    </div>
  </section>

  <section class="section2">
    <div class="section2-div1">
      <h1>Vision, Mission, and Values</h1>

    </div>
    <div class="section2-div2">
      <div class="div-item">
        <h3>Vision</h3>
        <p>
          To inspire academic excellence and nurture future leaders, Akasha Senior High School is dedicated to providing 
          a supportive environment where students can thrive academically and personally. Through innovative teaching methods 
          and personalized attention, we aim to equip students with the skills, knowledge, and values they need to succeed 
          in their chosen paths and make positive contributions to society.
        </p>
      </div>
      <div class="separation-line"></div>
      <div class="div-item">
        <h3>Mission</h3>
        <p>
          To provide a supportive and challenging environment where every student can achieve their highest potential, 
          Akasha Senior High School is committed to fostering a culture of academic excellence, personal growth,
           and social responsibility. Through innovative teaching practices, individualized support, and meaningful learning experiences, 
          we strive to empower students to become critical thinkers, lifelong learners, and compassionate leaders.
        </p>
      </div>
      <div class="separation-line"></div>
      <div class="div-item">
        <h3>Values</h3>
        <p>
          <b> Excellence:</b> Striving for the highest standards in education.
          <b>Integrity:</b> Upholding honesty and strong moral principles.
          <b> Inclusivity:</b> Embracing diversity and fostering a sense of belonging.
          <b> Respect: </b>Valuing each individual's contributions and potential.
          <b> Growth:</b> Encouraging continuous personal and academic development.
      </div>
    </div>
  </section>

  <section class="section3" id="sec3">
    <div class="section3-div1">
      <h1>Strands We Offer:</h1>
     
    </div>
    <div class="section3-div2">
      <a href="{{ asset('stem') }}" style="text-decoration: none; color: black;">
      <div class="div-item">
      <img src="{{ asset('assets\img\f1.png') }}">
        <p>STEM</p>
        <p>(Science Technology Engineering Mathematics)</p>
      </div>
    </a>

    <a href="{{ asset('abm') }}" style="text-decoration: none; color: black;">
      <div class="div-item">
      <img src="{{ asset('assets\img\f2.png') }}">
        <p>ABM</p>
        <p>(Accountancy Business Management)</p>
      </div>
    </a>

      <a href="{{ asset('humss') }}" style="text-decoration: none; color: black;">
      <div class="div-item">
      <img src="{{ asset('assets\img\f3.png') }}">
        <p>HUMSS</p>
        <p>(Humanities Social Sciences)</p>
      </div>
      </a>

      <a href="{{ asset('tvl') }}" style="text-decoration: none; color: black;">
      <div class="div-item">
      <img src="{{ asset('assets\img\f4.png') }}">
        <p>TVL</p>
        <p>(Technical Vocational Livelihood)</p>
      </div>
      </a>

      <a href="{{ asset('gas') }}" style="text-decoration: none; color: black;">
      <div class="div-item">
      <img src="{{ asset('assets\img\f5.png') }}">
        <p>GAS</p>
        <p>(General Academic Strand)</p>
      </div>
      </a>
   
    </div>
  </section>

 

  <section class="footer">
    <div class="social">
       <img src="{{ asset('assets\img\twiter.png') }}">
       <img src="{{ asset('assets\img\facebook.png') }}">
       <img src="{{ asset('assets\img\linkedin.png') }}">
    </div>
    <div class="links">
      <a href="">Home</a>
      <a href="#sec3">Strands</a>
     
      <a href="#sec5">About us</a>
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
      btns[i].addEventListener("click", function () {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
      });
    }
  </script>
</body>

</html>