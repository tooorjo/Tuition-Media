@extends('finetutors.layout2')

@section('head')

	<title>Student Edit Profile</title>

<style> 
	select {
    width: 100%;
    padding: 16px 20px;
    border: none;
    border-radius: 4px;
    background-color: #f1f1f1;
	}
</style>
@stop

@section('content')
<!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">FineTutors</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Student name <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i>Sign Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Tuition Board</a>
                    </li>
                    <li>
                        <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Post a Job</a>
                    </li>
                    <li>
                        <a href="charts.html"><i class="fa fa-fw fa-dashboard"></i> Browse Tutor</a>
                    </li>
                    <li>
                        <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> My Activity</a>
                    </li>
                    <li  class="active">
                        <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Edit Profile</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

s<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
    }

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
</style>
</head>
<body>

<div class="content-wrapper col-md-12 col-md-offset-0">

<p>Click on the buttons inside the tabbed menu:</p>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'personal')">Personal Info</button>
  <button class="tablinks" onclick="openCity(event, 'pass')">Change Password</button>
  
</div>


<div id="personal" class="tabcontent">
  
    <div class="container">    
        <div class="col-sm-9  col-sm-offset-1  toppad" >
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Personal Information</h3>
            </div>
            
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label col-sm-6" for="name">Name:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" placeholder="Adu Barak" name="name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-6" for="email">Email:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" placeholder="barak@gmail.com" name="email">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-6" for="phone">Phone:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="phone" placeholder="0123456576" name="phone">
                    </div>
                </div>

                <div class="form-group">
      
                    <div class="col-sm-10">
                        <input class="btn btn-warning" type="submit" value="Submit">
                    </div>
                </div>

            </div>
        </div>
    </div>
    
    </div>
</div>

<div id="pass" class="tabcontent">
  
    <div class="container">    
        <div class="col-sm-9  col-sm-offset-1  toppad" >
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Change Your Password</h3>
            </div>
            <div class="panel-body">
            
                <div class="form-group">
                  <label class="control-label col-sm-6" for="prepwd">Prevoius Password:</label>
                  <div class="col-sm-10">          
                    <input type="password" class="form-control" id="prepwd" placeholder="Enter old password" name="pwd">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-6" for="pwd1">New Password:</label>
                  <div class="col-sm-10">          
                    <input type="password" class="form-control" id="pwd1" placeholder="Enter password" name="pwd">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-6" for="pwd2">Confirm Password:</label>
                  <div class="col-sm-10">          
                    <input type="password" class="form-control" id="pwd2" placeholder="Enter password" name="pwd">
                  </div>
                </div>

                <div class="form-group">
      
                    <div class="col-sm-10">
                        <input class="btn btn-warning" type="submit" value="Update">
                    </div>
                </div>

            </div>
          </div>
        </div>
    
    </div>
</div>


<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
     
</body>
</html> 

@stop