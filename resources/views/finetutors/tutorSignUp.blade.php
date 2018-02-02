@extends('finetutors.layout')

@section('head')

	<title>Tutor registration</title>
  
    {!! Html::style("finetutors/vendor/bootstrap/css/bootstrap.min.css") !!}
    <!-- Custom fonts for this template -->
    {!! Html::style("finetutors/vendor/font-awesome/css/font-awesome.min.css") !!}

 <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
 {!! Html::style("https://fonts.googleapis.com/css?family=Montserrat:400,700") !!} 
    {!! Html::style('https://fonts.googleapis.com/css?family=Kaushan+Script') !!}
    {!! Html::style('https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic') !!}
    {!! Html::style('https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700') !!} 

     {!! Html::style("finetutors/css/agency.min.css") !!}
  
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
              <a class="nav-link js-scroll-trigger" href="#register">Sign Up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#">About Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  
  <div class="container">
  <h2>Horizontal form</h2>
  <form class="form-horizontal " action="/action_page.php">
     
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="address">Present Address:</label>
      <div class="col-sm-10">
        <textarea class="form-control" rows="3" id="address"></textarea>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="phone">Phone:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="phone">
      </div>
    </div>


    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
      </div>
    </div>

  <div class="form-group">
     <label class="control-label col-sm-2" for="gender">Gender:</label>
    <div class="col-sm-10">
      <label class="radio-inline">
        <input type="radio" name="optradio">Male
      </label>
      <label class="radio-inline">
        <input type="radio" name="optradio">Female
      </label>
      <label class="radio-inline">
        <input type="radio" name="optradio">Others
      </label>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="photo">Upload photo:</label>
    <div class="col-sm-10">
      <input type="file" id="photo" name="usr_photo" required>
      <input type="submit" class="btn btn-default">
    </div>
  </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>

<div class="container">
  <h2>Horizontal form2</h2>
  <form class="form-horizontal" action="/action_page.php">
     
    <div class="form-group">
       <label class="control-label col-sm-2" for="edulevel">Educational level:</label>
      <div class="col-sm-10">
        <select class="form-control" id="select" required>
        <option >School</option>
        <option >College</option>
        <option >University</option>
        </select>
      </div>
    </div>



    <div class="form-group">
      <label class="control-label col-sm-2" for="degree">Degree Title:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="degree" placeholder="exp. Honors,Masters" name="degree">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="major">Major/Subject:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="major" placeholder="exp. CSE, Physics" name="major">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="institute">Institute Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="institute" placeholder="Enter your College/University" name="institute">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="startyear">Starting Year:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="startyear" placeholder="Enter starting year" name="startyear">
      </div>
    </div>


  <div class="form-group">
     <label class="control-label col-sm-2" for="studentship">Current Student?</label>
    <div class="col-sm-10">
      <label class="radio-inline">
        <input type="radio" name="optradio">Yes
      </label>
      <label class="radio-inline">
        <input type="radio" name="optradio">No
      </label>
      
    </div>
  </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>
      
<div class="container">
  <h2>Horizontal form3</h2>
  <form class="form-horizontal" action="/action_page.php">
     
  <div class="form-group">
    <label class="control-label col-sm-3" for="ver">You teach:</label>
    <div class="col-sm-9">
      <label class="checkbox-inline">
        <input type="checkbox" value="">Bangla Version
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">English Version
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">English Medium
      </label>
    </div>
</div>

  <div class="form-group">
    <label class="control-label col-sm-3" for="classes">Preffered Classes:</label>
    <div class="col-sm-9">
      <label class="checkbox-inline">
        <input type="checkbox" value="">1-5
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">6-8
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">9-10
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">SSC 
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">11-12
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">HSC
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">University
      </label>
    </div>
</div>

  <div class="form-group">
    <label class="control-label col-sm-3" for="courses">Courses you teach:</label>
    <div class="col-sm-9">
      <label class="checkbox-inline">
        <input type="checkbox" value="">Bangla
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">Science
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">Physics
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">Chemistry 
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">ICT
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">English
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">Biology
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">Math
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">Microsoft Office
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">Computer Programming
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">Chemistry 
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">Math
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">English
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">Biology
      </label>
    </div>
</div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="areas">Preffered locations:</label>
    <div class="col-sm-9">
      <label class="checkbox-inline">
        <input type="checkbox" value="">Kewatkhali
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">Charpara
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">Ganginarpar
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">Your place
      </label>
    </div>
</div>

  <div class="form-group">
       <label class="control-label col-sm-3" for="daysofweek">Maximum days a Week:</label>
      <div class="col-sm-9">
        <select class="form-control" id="select" required>
        <option >3</option>
        <option >4</option>
        <option >Any</option>
        </select>
      </div>
    </div>

  <div class="form-group">
       <label class="control-label col-sm-3" for="experience">Teaching experience:</label>
      <div class="col-sm-9">
        <select class="form-control" id="select" required>
        <option >None</option>
        <option >1 year</option>
        <option >2 years</option>
        <option >2+ years</option>
        </select>
      </div>
    </div>

  <div class="form-group">
       <label class="control-label col-sm-3" for="minsalary">Minimum salary requirement:</label>
      <div class="col-sm-9">
        <select class="form-control" id="select" required>
        <option >Any</option>
        <option >2000tk</option>
        <option >3000tk</option>
        <option >5000tk</option>
        </select>
      </div>
    </div>

  <div class="form-group">
      <label class="control-label col-sm-3" for="teachingstyle">Tell us something about your teaching style:</label>
      <div class="col-sm-9">
        <textarea class="form-control" rows="4" id="teachingstyle"></textarea>
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-3 col-sm-9">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
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
@stop
