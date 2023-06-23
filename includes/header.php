<nav id ="mainNavbar" class ="navbar navbar-dark p-2 navbar-expand-md py-0 fixed-top" >
    <div class="container">
    <a href="#" class = "navbar-brand"><h2>DigiGlobeAds</h2></a>
    <button class = "navbar-toggler" data-toggle="collapse" data-target ="#navLinks">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class ="collapse navbar-collapse" id="navLinks">
         <ul class ="navbar-nav">
          <li class ="nav-item">
            <a href="" class="nav-link">HOME</a>
          </li>
          <li class ="nav-item">
            <a href="#about" class="nav-link">ABOUT</a>
          </li>
          <li class ="nav-item">
            <a href="#service" class="nav-link">SERVICES</a>
          </li> 
          <li class ="nav-item">
            <a href="#contact" class="nav-link">CONTACT</a>
          </li>
         </ul>
        </div> 
        </div>
    </nav>

<header>
  <div id="indicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#indicators" data-slide-to="0" class="active"></li>
      <li data-target="#indicators" data-slide-to="1"></li>
      <li data-target="#indicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('https://images.unsplash.com/photo-1425421669292-0c3da3b8f529?ixlib=rb-1.2.1&auto=format&fit=crop&w=749&q=80')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Image one</h2>
          <p class="para">Some Description about the first slide</p>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('https://images.unsplash.com/photo-1465776702172-defce4b4d574?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Image two</h2>
          <p class="lead">Some description about the second slide</p>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('https://images.unsplash.com/photo-1453799527828-cf1bd7b2f682?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1349&q=80')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Image three</h2>
          <p class="lead">Some description about the third slide</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#indicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#indicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
</header>

<!-- Page Content -->
<section id="about" class="py-5">
  <div class="container">
    <div class="row">
    <div class="col col-md-4">
            <img src="img/digital-marketing.png" alt="" srcset="" style="width:100%; ">
        </div>
        <div class="col col-md-8">
        <h1 class="display-4">Grow your business with sponsored ads</h1>
            <p class="lead">Reach shoppers who are looking for products like yours. Sponsored ads can level up your Amazon business by helping make your products be more discoverable.</p>
            <!-- <p class = "lead">Bacon ipsum dolor amet drumstick short loin ribeye sirloin ham spare ribs landjaeger, pig turducken meatball sausage. Salami cow shoulder pork loin. Meatloaf turducken andouille chuck beef ribs picanha. Filet mignon pastrami fatback ribeye leberkas shank boudin sirloin beef short ribs tail pig pork loin shoulder buffalo. Short ribs andouille swine chicken leberkas. Fatback sirloin pork belly turkey landjaeger corned beef biltong, buffalo bresaola strip steak brisket short loin salami.</p>  
      -->   </div>
       
    </div>
   </div>
</section>
<script>
        $(function () {
            $(document).scroll(function () {
                var $nav = $("#mainNavbar");
                $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
            });
        });
    </script>