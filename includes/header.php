<nav id ="mainNavbar" class ="navbar navbar-dark p-2 navbar-expand-md py-0 fixed-top" style="background: #00000033;">
    <div class="container">
    <a href="#" class ="navbar-brand1"><img src="img/DigiGlobe-logo.png" style="width:auto; height:60px; background :#FFF; padding-left:20px; padding-right:30px; border-radius:10%;" alt=""></a>
    <button class = "navbar-toggler" data-toggle="collapse" data-target ="#navLinks">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class ="collapse navbar-collapse" id="navLinks" style=" margin-left: 10%;">
         <ul class ="navbar-nav">
          <li class ="nav-item">
            <a href="Index.php" class="nav-link">HOME</a>
          </li>
          <li class ="nav-item">
            <a href="about.php" class="nav-link">ABOUT</a>
          </li>
          <li class ="nav-item">
            <a href="services.php" class="nav-link">SERVICES</a>
          </li> 
          <li class ="nav-item">
            <a href="https://exhicongroup.com/contact-us/" class="nav-link">CONTACT</a>
          </li>
         </ul>
        </div> 
        </div>
    </nav>

<script>
        $(function () {
            $(document).scroll(function () {
                var $nav = $("#mainNavbar");
                $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
            });
        });
    </script>