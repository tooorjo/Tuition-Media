<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agency - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    {!! Html::style("finetutors/vendor/bootstrap/css/bootstrap.min.css") !!}
    <!-- Custom fonts for this template -->
    {!! Html::style("finetutors/vendor/font-awesome/css/font-awesome.min.css") !!}
    {!! Html::style("https://fonts.googleapis.com/css?family=Montserrat:400,700") !!} 
    {!! Html::style('https://fonts.googleapis.com/css?family=Kaushan+Script') !!}
    {!! Html::style('https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic') !!}
    {!! Html::style('https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700') !!} 

    <!-- Custom styles for this template -->
    {!! Html::style("finetutors/css/agency.min.css") !!}

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">FineTutors</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
          
           
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#">Tuition Board</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#">Sign In</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#register">Sign Up</a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#">About Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Welcome To FineTutors</div>
          <div class="intro-heading text-uppercase">Find the best suited tutor online.</div>
          <a class="btn btn-default btn-xl text-uppercase js-scroll-trigger" href="#hire">Hire a tutor</a>
		  <h5 class="text-muted">or<h5>
		  <a class="btn btn-basic btn-xl text-uppercase js-scroll-trigger" href="#register">Become a tutor (it's free)</a>
        </div>
      </div>
    </header>

    <!-- hire -->
    <section id="hire">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Looking for tutors!</h2>
            <h3 class="section-subheading text-muted">You can publish a tuition post according to your requirement. Or you can browse and request any choosen tutor.</h3>
          </div>
        </div>
        <div class="row text-center">
        
          <div class="col-md-6">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Post a tuition</h4>
            <p class="text-muted">Create a job post by mentioning class, subjects, days of week, salary and other desired aspects 
			of your tuition.</p>
          </div>
          <div class="col-md-6">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Browse tutors</h4>
            <p class="text-muted">Students from various universities are the registered tutors here. Choose the best suited tutor 
			according to your need.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- register -->
    <section class="bg-light" id="register">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Create an account</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/1.jpg" alt="">
              <h4>As a Student/Parent</h4>
              <p class="text-muted">Quick registration that gives you the authority to create a tuition post in search of a tutor.</p>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/3.jpg" alt="">
              <h4>As a Tutor</h4>
              <p class="text-muted">If you are interested in teaching, create your tutor account. This will enlist you 
			  in our tutors list. You will get tuition offers which are appropriate for you and suit your requirments. By the way, it's free.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase text-muted">Contact Us</h2>
            <h2 class="section-heading">Mobile: 01750123456</h2>
			</div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">

          <div class="col-md-2">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
            </ul>
          </div>

          <div class="col-md-5">
            <span class="copyright">Copyright &copy; finetutors.com 2017</span>
          </div>
          
          <div class="col-md-5">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    
    <!-- Bootstrap core JavaScript -->
    {!! Html::script("finetutors/vendor/jquery/jquery.min.js") !!}
    {!! Html::script("finetutors/vendor/bootstrap/js/bootstrap.bundle.min.js") !!}
    <!-- Plugin JavaScript -->
    {!! Html::script("finetutors/vendor/jquery-easing/jquery.easing.min.js") !!}
    <!-- Contact form JavaScript -->
    {!! Html::script("finetutors/js/jqBootstrapValidation.js") !!}
    {!! Html::script("finetutors/js/contact_me.js") !!}

    <!-- Custom scripts for this template -->
    {!! Html::script("finetutors/js/agency.min.js") !!}

  </body>

</html>
