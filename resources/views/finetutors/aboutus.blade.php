@extends('finetutors.layout')

@section('head')

	<title>Guardian Registration</title>
  
    <!-- Bootstrap core CSS -->
    {!! Html::style("finetutors/vendor/bootstrap/css/bootstrap.min.css") !!}
    <!-- Custom fonts for this template -->
    {!! Html::style("finetutors/vendor/font-awesome/css/font-awesome.min.css") !!}

<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

  
 
 {!! Html::style("https://fonts.googleapis.com/css?family=Montserrat:400,700") !!} 
    {!! Html::style('https://fonts.googleapis.com/css?family=Kaushan+Script') !!}
    {!! Html::style('https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic') !!}
    {!! Html::style('https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700') !!} 

     {!! Html::style("finetutors/css/agency.css") !!}
<style>
	#signinForm {
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 60%;
  min-width: 300px;
}
.form-group{
	text-align:left;
}
</style>

@stop

@section('content')
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
               <a class="nav-link js-scroll-trigger active" href="#" >Sign Up</a>
             </li>
             <li class="nav-item">
               <a class="nav-link js-scroll-trigger" href="#">About Us</a>
             </li>
           </ul>
         </div>
       </div>
     </nav>

   <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">About Us</div>     
      </div>
    </header>

    <div class="container">
        ZELIENT GROUP
    </div>
    
   
@stop

@section('footer')
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@stop
