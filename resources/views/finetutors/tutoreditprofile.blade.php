@extends('finetutors.layout2')

@section('head')

	<title>Tutor Edit Profile</title>
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Tutor name <b class="caret"></b></a>
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
                        <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> My Activity</a>
                    </li>
                    <li class="active">
                        <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Edit Profile</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
<html>
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
  <button class="tablinks" onclick="openCity(event, 'tuition')">Tuition Related Info</button>
  <button class="tablinks" onclick="openCity(event, 'education')">Educational Info</button>
  <button class="tablinks" onclick="openCity(event, 'personal')">Personal Info</button>
  <button class="tablinks" onclick="openCity(event, 'photo')">Change Photo</button>
  <button class="tablinks" onclick="openCity(event, 'pass')">Change Password</button>
  
</div>

<div id="tuition" class="tabcontent">
    <div class="container">    
        <div class="col-sm-9  col-sm-offset-1  toppad" >
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Tuition Related Information</h3>
            </div>
            
            <div class="panel-body">
                <div class="form-group">
                  <label class="control-label col-sm-6" for="ver">You teach:</label>
                  <div class="col-sm-10">
                    <label class="checkbox-inline">
                      <input type="checkbox" value="" checked="checked">Bangla Version
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" value="" checked="checked">English Version
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" value="">English Medium
                    </label>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm-6" for="classes">Preffered Classes:</label>
                  <div class="col-sm-10">
                    <label class="checkbox-inline">
                      <input type="checkbox" value="">1-5
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" value="">6-8
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" value="" checked="checked">9-10
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" value="" checked="checked">SSC 
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
                  <label class="control-label col-sm-6" for="courses">Courses you teach:</label>
                  <div class="col-sm-10">
                    <label class="checkbox-inline">
                      <input type="checkbox" value="">Bangla
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" value="" checked="checked">Science
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" value="" checked="checked">Physics
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" value="">Chemistry 
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" value="" checked="checked">ICT
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" value="">English
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" value="">Biology
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" value="" checked="checked">Math
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
                  <label class="control-label col-sm-6" for="areas">Preffered locations:</label>
                  <div class="col-sm-10">
                    <label class="checkbox-inline">
                      <input type="checkbox" value="" checked="checked">Kewatkhali
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" value="">Charpara
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" value="">Ganginarpar
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" value="" checked="checked">Your place
                    </label>
                  </div>
              </div>

                <div class="form-group">
                     <label class="control-label col-sm-6" for="daysofweek">Maximum days a Week:</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="select" required>
                      <option >3</option>
                      <option >4</option>
                      <option selected="selected" >Any</option>
                      </select>
                    </div>
                  </div>

                <div class="form-group">
                     <label class="control-label col-sm-6" for="experience">Teaching experience:</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="select" required>
                      <option >None</option>
                      <option selected="selected" >1 year</option>
                      <option >2 years</option>
                      <option >2+ years</option>
                      </select>
                    </div>
                  </div>

                <div class="form-group">
                     <label class="control-label col-sm-6" for="minsalary">Minimum salary requirement:</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="select" required>
                      <option >Any</option>
                      <option >2000tk</option>
                      <option selected="selected">3000tk</option>
                      <option >5000tk</option>
                      </select>
                    </div>
                  </div>

                <div class="form-group" style="padding-bottom:60px">
                    <label class="control-label col-sm-6" for="teachingstyle">Tell us something about your teaching style:</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" rows="4" id="teachingstyle" placeholder="I Am A VERY GOOD TEACHER"></textarea>
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

<div id="education" class="tabcontent">
    <div class="container">    
        <div class="col-sm-9  col-sm-offset-1  toppad" >
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Educational Information</h3>
            </div>
            
            <div class="panel-body">
                <div class="form-group" >
                    <label class="control-label col-sm-6" for="edulevel">Educational level:</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="select" required>
                      <option >School</option>
                      <option >College</option>
                      <option selected="selected">University</option>
                      </select>
                    </div>
                </div>

                  <div class="form-group">
                    <label class="control-label col-sm-6" for="degree">Degree Title:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="degree" placeholder="BSc Honors" name="degree">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-6" for="major">Major/Subject:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="major" placeholder="CSE" name="major">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="control-label col-sm-6" for="institute">Institute Name:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="institute" placeholder="BUET" name="institute">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-6" for="startyear">Starting Year:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="startyear" placeholder="2007" name="startyear">
                    </div>
                  </div>


                <div class="form-group">
                   <label class="control-label col-sm-6" for="studentship">Current Student?</label>
                  <div class="col-sm-10">
                    <label class="radio-inline">
                      <input type="radio" name="optradio" checked/>Yes
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="optradio" >No
                    </label>
                    
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
                    <label class="control-label col-sm-6" for="address">Present Address:</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="3" id="address" placeholder="rahim nogor"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-6" for="phone">Phone:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="phone" placeholder="0123456576" name="phone">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-6" for="gender">Gender:</label>
                    <div class="col-sm-10">
                        <label class="radio-inline">
                            <input type="radio" name="optradio" checked>Male
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
      
                    <div class="col-sm-10">
                        <input class="btn btn-warning" type="submit" value="Submit">
                    </div>
                </div>

            </div>
        </div>
    </div>
    
    </div>
</div>

<div id="photo" class="tabcontent">
  
    <div class="container">    
        <div class="col-sm-9  col-sm-offset-1  toppad" >
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Change Your Photo</h3>
            </div>
            
            <div class="panel-body">
                <div class="tab"><h3>Your Photo</h3>
                    <div class="col-md-3 col-lg-3 col-md-offset-3 col-lg-offset-3" align="center"> <img alt="User Pic" src="https://s4.scoopwhoop.com/anj/srk/f9aa4b2f-f167-4deb-a65c-514ab307bb89.jpg" class="img img-responsive"> </div>
                    <div class="form-group">
                        <label class="control-label col-sm-10" for="photo">Upload photo:</label>
                        <div class="col-sm-10">
                            <input type="file" id="photo" name="usr_photo" required>
                        </div>
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