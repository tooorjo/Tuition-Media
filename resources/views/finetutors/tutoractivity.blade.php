@extends('finetutors.layout2')

@section('head')
	<title>Tutor Activity</title>
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
                    <li class="active">
                        <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> My Activity</a>
                    </li>
                    <li>
                        <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Edit Profile</a>
                    </li>
                    <li>
                        <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Settings</a>
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
  <button class="tablinks" onclick="openCity(event, 'AppliedTuitions')">Applied Tuitions</button>
  <button class="tablinks" onclick="openCity(event, 'SuggestedTuitions')">Suggested Tuitions</button>
  <button class="tablinks" onclick="openCity(event, 'ViewProfile')">View Profile</button>
  <button class="tablinks" onclick="openCity(event, 'EditProfile')">Edit Profile</button>
</div>

<div id="AppliedTuitions" class="tabcontent">
  		<div class="container">	
  			<div class="col-sm-10">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Job ID: 5553</h3>
                    </div>
                    <div class="panel-body">
                        <div class="container" style="font-size: 18px;">
                            <h3>Need a tutor for Class 9 student</h3>
                            <div class=col-sm-6>
                                <span style="font-weight: bold; color: #0675c1;">Category : </span>English Version<br>
                                <span style="font-weight: bold; color: #0675c1;">Class : </span> Class 9<br>
                                <span style="font-weight: bold; color: #0675c1;">Student Gender : </span> Male<br>                      
                                <span style="font-weight: bold; color: #0675c1;">Subjects :</span> General Maths,Physics ,Chemistry ,Biology
                            </div>
                            <div class="col-sm-6">
                                <span style="font-weight: bold; color: #0675c1;">Days per week : </span> 4<br>    
                                <span style="font-weight: bold; color: #0675c1;">Salary : </span> 6000 Tk<br>
                                <span style="font-weight: bold; color: #0675c1;">Tutor gender preference : </span> Male<br>
                                <span style="font-weight: bold; color: #0675c1;">Location : </span> Dhaka, Bangla Motor<br>
                            </div>
                    
                            <div class="col-sm-12">
                                <br>
                                <p style="font-size: 12px !important; opacity: 0.7;"><span style="">Other Requirements - </span>Experienced tutors are requested to apply. </p>
                                <p style="font-size: 12px; opacity: 0.7;">Posted on 9th January, 2018</p>
                            </div>
                            <p style="text-align: center"><a href="#" class="btn btn-default btn-lg" role="button" >Applied &raquo;</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-10">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Job ID: 5553</h3>
                    </div>
                    <div class="panel-body">
                        <div class="container" style="font-size: 18px;">
                            <h3>Need a tutor for Class 9 student</h3>
                            <div class=col-sm-6>
                                <span style="font-weight: bold; color: #0675c1;">Category : </span>English Version<br>
                                <span style="font-weight: bold; color: #0675c1;">Class : </span> Class 9<br>
                                <span style="font-weight: bold; color: #0675c1;">Student Gender : </span> Male<br>                      
                                <span style="font-weight: bold; color: #0675c1;">Subjects :</span> General Maths,Physics ,Chemistry ,Biology
                            </div>
                            <div class="col-sm-6">
                                <span style="font-weight: bold; color: #0675c1;">Days per week : </span> 4<br>    
                                <span style="font-weight: bold; color: #0675c1;">Salary : </span> 6000 Tk<br>
                                <span style="font-weight: bold; color: #0675c1;">Tutor gender preference : </span> Male<br>
                                <span style="font-weight: bold; color: #0675c1;">Location : </span> Dhaka, Bangla Motor<br>
                            </div>
                    
                            <div class="col-sm-12">
                                <br>
                                <p style="font-size: 12px !important; opacity: 0.7;"><span style="">Other Requirements - </span>Experienced tutors are requested to apply. </p>
                                <p style="font-size: 12px; opacity: 0.7;">Posted on 9th January, 2018</p>
                            </div>
                            <p style="text-align: center"><a href="#" class="btn btn-default btn-lg" role="button" >Applied &raquo;</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

<div id="SuggestedTuitions" class="tabcontent">
		<div class="container">	
  			<div class="col-sm-10">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Job ID: 5553</h3>
                    </div>
                    <div class="panel-body">
                        <div class="container" style="font-size: 18px;">
                            <h3>Need a tutor for Class 9 student</h3>
                            <div class=col-sm-6>
                                <span style="font-weight: bold; color: #0675c1;">Category : </span>English Version<br>
                                <span style="font-weight: bold; color: #0675c1;">Class : </span> Class 9<br>
                                <span style="font-weight: bold; color: #0675c1;">Student Gender : </span> Male<br>                      
                                <span style="font-weight: bold; color: #0675c1;">Subjects :</span> General Maths,Physics ,Chemistry ,Biology
                            </div>
                            <div class="col-sm-6">
                                <span style="font-weight: bold; color: #0675c1;">Days per week : </span> 4<br>    
                                <span style="font-weight: bold; color: #0675c1;">Salary : </span> 6000 Tk<br>
                                <span style="font-weight: bold; color: #0675c1;">Tutor gender preference : </span> Male<br>
                                <span style="font-weight: bold; color: #0675c1;">Location : </span> Dhaka, Bangla Motor<br>
                            </div>
                    
                            <div class="col-sm-12">
                                <br>
                                <p style="font-size: 12px !important; opacity: 0.7;"><span style="">Other Requirements - </span>Experienced tutors are requested to apply. </p>
                                <p style="font-size: 12px; opacity: 0.7;">Posted on 9th January, 2018</p>
                            </div>
                            <p style="text-align: center"><a href="#" class="btn btn-primary btn-lg" role="button" >Apply &raquo;</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-10">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Job ID: 5553</h3>
                    </div>
                    <div class="panel-body">
                        <div class="container" style="font-size: 18px;">
                            <h3>Need a tutor for Class 9 student</h3>
                            <div class=col-sm-6>
                                <span style="font-weight: bold; color: #0675c1;">Category : </span>English Version<br>
                                <span style="font-weight: bold; color: #0675c1;">Class : </span> Class 9<br>
                                <span style="font-weight: bold; color: #0675c1;">Student Gender : </span> Male<br>                      
                                <span style="font-weight: bold; color: #0675c1;">Subjects :</span> General Maths,Physics ,Chemistry ,Biology
                            </div>
                            <div class="col-sm-6">
                                <span style="font-weight: bold; color: #0675c1;">Days per week : </span> 4<br>    
                                <span style="font-weight: bold; color: #0675c1;">Salary : </span> 6000 Tk<br>
                                <span style="font-weight: bold; color: #0675c1;">Tutor gender preference : </span> Male<br>
                                <span style="font-weight: bold; color: #0675c1;">Location : </span> Dhaka, Bangla Motor<br>
                            </div>
                    
                            <div class="col-sm-12">
                                <br>
                                <p style="font-size: 12px !important; opacity: 0.7;"><span style="">Other Requirements - </span>Experienced tutors are requested to apply. </p>
                                <p style="font-size: 12px; opacity: 0.7;">Posted on 9th January, 2018</p>
                            </div>
                            <p style="text-align: center"><a href="#" class="btn btn-primary btn-lg" role="button" >Apply &raquo;</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
</div>

<div id="ViewProfile" class="tabcontent">
  
    <div class="container">    
        <div class="col-sm-9  col-sm-offset-1  toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Abu Barak</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="https://s4.scoopwhoop.com/anj/srk/f9aa4b2f-f167-4deb-a65c-514ab307bb89.jpg" class="img-circle img-responsive"> </div>
                
                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
                <div class=" col-md-9 col-lg-9 "> 
                	<h3 style="font-weight: bold">Personal Info</h3>
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Name</td>
                        <td>Abu Barak</td>
                      </tr>
                      <tr>
                        <td>Gender</td>
                        <td>Male</td>
                      </tr>
                      <tr>
                        <td>Address</td>
                        <td>Shere Bangla Hall-Room No. 112, BAU, Mymensingh</td>
                      </tr>
                    </tbody>
                  </table>
                  
                	<h3 style="font-weight: bold">Educational Info</h3>
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Studying/Studied</td>
                        <td>BSc Honors</td>
                      </tr>
                      <tr>
                        <td>Institute</td>
                        <td>Bangladesh Agricultural University</td>
                      </tr>
                      <tr>
                        <td>Major/Subject</td>
                        <td>Agriculture</td>
                      </tr>
                      <tr>
                        <td>From year</td>
                        <td>2013</td>
                      </tr>
                    </tbody>
                  </table>  

                   <h3 style="font-weight: bold">Teaching Info</h3>
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Teaching Subjects</td>
                        <td>Bangla, Mathmatics, Physics</td>
                      </tr>
                      <tr>
                        <td>Versions</td>
                        <td>Bangla Medium, English Version</td>
                      </tr>
                      <tr>
                        <td>Classes</td>
                        <td>5-8,9-10,SSC</td>
                      </tr>
                      <tr>
                        <td>Experience</td>
                        <td>2+ years</td>
                      </tr>
                      <tr>
                        <td>Tutors Talk</td>
                        <td>I am a very good tutor.I am a very good tutor.I am a very good tutor.I am a very good tutor.</td>
                      </tr>
                    </tbody>
                  </table>  
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                 <!--       <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>-->
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