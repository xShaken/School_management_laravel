<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Akasha Senior High</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=News+Cycle:wght@400;700&family=
Passion+One:wght@400;700;900&family=Rubik+Scribble&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('assets/css/link1.css') }}">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


  <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <header>
   <div>
    <a href="{{ asset('login') }}">Login</a>
   </div>

  </header>

  <section class="header">
    <nav>
      <a href="{{ asset('samplebootstrap') }}"><img src="{{ asset('assets\img\akasha.png') }}"></a>
      <div class="nav-links" id="navLinks">

        <i class="fa fa-times" onclick="hideMenu()"></i>

        <ul>
          <li><a href="">HOME</a></li>
          <li><a href="">ABOUT</a></li>
          <li><a href="">COURSE</a></li>
          <li><a href="">BLOG</a></li>
          <li><a href="">CONTACT</a></li>
        </ul>
      </div>
      <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
    <div class="text-box">

      <h1>AKASHA SHS</h1>
      <p>WELCOME TO THE AKASHA SENIOR HIGH SCHOOL, YOUR GATEWAY TO ACADEMIC EXCELLENCE AND STUDENT SUCCESS. </p>

      <a href="" class="hero-btn">Click for More</a>
    </div>
  </section>


  <!-----------Course--------------->

  <section class="course">
    <h1>Strands We Offer</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>

    <div class="row">

      <div class="course-col">
        <h3><a href="{{ asset('stem') }}"> STEM (Science Technology Engineering. Mathematics)</h3> </a>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
          Aperiam, sunt molestiae vitae consequuntur enim dolor optio
          laborum vel! Amet totam assumenda iure ea incidunt ducimus quam aperiam
          cupiditate illo nobis.</p>
      </div>

      <div class="course-col">
        <h3><a href="{{ asset('abm') }}">ABM (Accountancy Business Management)</h3></a>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
          Aperiam, sunt molestiae vitae consequuntur enim dolor optio
          laborum vel! Amet totam assumenda iure ea incidunt ducimus quam aperiam
          cupiditate illo nobis.</p>
      </div>

      <div class="course-col">
        <h3><a href="{{ asset('tvl') }}">TVL (Technical Vocational Livelihood)</h3></a>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
          Aperiam, sunt molestiae vitae consequuntur enim dolor optio
          laborum vel! Amet totam assumenda iure ea incidunt ducimus quam aperiam
          cupiditate illo nobis.</p>
      </div>

      <div class="course-col">
        <h3><a href="{{ asset('humss') }}">HUMSS (Humanities Social Sciences)</h3></a>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
          Aperiam, sunt molestiae vitae consequuntur enim dolor optio
          laborum vel! Amet totam assumenda iure ea incidunt ducimus quam aperiam
          cupiditate illo nobis.</p>
      </div>

      <div class="course-col">
        <h3><a href="{{ asset('gas') }}">GAS (General Academic Strand)</h3></a>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
          Aperiam, sunt molestiae vitae consequuntur enim dolor optio
          laborum vel! Amet totam assumenda iure ea incidunt ducimus quam aperiam
          cupiditate illo nobis.</p>
      </div>

    </div>


  </section>

  <section class="hero">
    <div class="heading">
      <h1>About Us</h1>
    </div>
    <div class="container her">

      <div class="content-hero1">
        <div class="hero-content">
          <h2>About</h2>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum sequi molestias, perferendis
            distinctio fuga </p>
          <button class="cta-button">Learn More</button>
        </div>
        <div class="hero-image">
          <img src="{{ asset('assets\img\hs (3).png') }}">
        </div>
      </div>
      <div class="content-hero2">

        <div class="conts">

          <h2>Vision, Mission, Values </h2>
          <div class="accordion" id="accordionExample">


            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Vision
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>


            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Mission
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>


            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Values
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>



          </div>


        </div>
      </div>


    </div>
    </div>
  </section>


  <!-----Campus----->
  <div class="container campus">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('assets\img\hs (3).png') }}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h2>First slide label</h2>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ asset('assets\img\hs (3).png') }}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h2>Second slide label</h2>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ asset('assets\img\hs (3).png') }}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h2>Third slide label</h2>
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  </div>
  </div>

  <div class="footer">
    <div class="footerContainer">

      <div class="socialIcons">
        <a href><i class="fa-brands fa-facebook"></i></a>
        <a href><i class="fa-brands fa-instagram"></i></a>
        <a href><i class="fa-brands fa-twitter"></i></a>
        <a href><i class="fa-brands fa-google-plus"></i></a>
        <a href><i class="fa-brands fa-youtube"></i></a>

      </div>
    </div>
    <div class="footerNav">
      <ul>
        <li><a href="">Home</a></li>
        <li><a href="">News</a></li>
        <li><a href="">About</a></li>
        <li><a href="">Contact Us</a></li>
        <li><a href="">Our Team</a></li>
      </ul>
      <div class="footerBottom">
        <p>Copyright &copy;2022; Designed by <span class="designer">Akasha </span></p>
      </div>
    </div>
    <!----JavaScript for Toggle Menu---->

    <script>
      const navLinks = document.getElementById("navLinks");

      function showMenu() {
        navLinks.style.right = "0";
      }

      function hideMenu() {
        navLinks.style.right = "-200px";
      }
    </script>
    <script src="https://kit.fontawesome.com/f30525b22c.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/js.js') }}"></script>

</body>

</html>