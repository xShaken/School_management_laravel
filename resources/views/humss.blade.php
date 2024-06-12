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

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    
  <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script> 
</head>
<body>
  <header>
    <button class="loginbtn"><i class="fa-solid fa-user"></i> Login</button>
   
  </header>



  <div class="form-structor">
    


    
    <div class="btn-clos">
      <button class="loginbtn btn"><i class="fa-solid fa-xmark" style="color: #ffffff;"></i></button>
    </div>
    <div class="signup">
      <h2 class="form-title" id="signup"><span>or</span>Sign up</h2>
      <div class="form-holder">
        <input type="text" class="input" placeholder="Name" />
        <input type="email" class="input" placeholder="Email" />
        <input type="password" class="input" placeholder="Password" />
      </div>
      <button class="submit-btn">Sign up</button>
    </div>
    <div class="login slide-up">
      <div class="center">
        <h2 class="form-title" id="login"><span>or</span>Log in</h2>
        <div class="form-holder">
          <input type="email" class="input" placeholder="Email" />
          <input type="password" class="input" placeholder="Password" />
        </div>
        <button class="submit-btn">Log in</button>
      </div>
    </div>
  </div>



    <section class="header" style="min-height:50vh;">
        <nav>
        <a href= "{{ asset('samplebootstrap') }}"><img src="{{ asset('assets\img\akasha.png') }}"></a>
            <div class="nav-links" id= "navLinks">
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
        
       
        
        </div>
    </section>
    




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

    function showMenu(){
        navLinks.style.right = "0";
    }
    function hideMenu(){
        navLinks.style.right = "-200px";
    }

</script>
    <script src="https://kit.fontawesome.com/f30525b22c.js" 
    crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/js.js') }}"></script>
</body>
</html>