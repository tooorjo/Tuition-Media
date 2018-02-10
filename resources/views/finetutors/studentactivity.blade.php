@extends('finetutors.layout2')

@section('head')

	<title>Student Activity</title>

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
                    <li class="active">
                        <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> My Activity</a>
                    </li>
                    <li>
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
  <button class="tablinks" onclick="openCity(event, 'TuitionPosts')">My job Post</button>
  <button class="tablinks" onclick="openCity(event, 'AppliedTutors')">Applied Tutors</button>
  <button class="tablinks" onclick="openCity(event, 'RequestedTutors')">Requested Tutors</button>
</div>

<div id="TuitionPosts" class="tabcontent">
        <div class="container"> 
            <div class="col-sm-10">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Job ID: 5553</h3>
                    </div>
                    <div class="panel-body">
                        <div class="container" style="font-size: 18px;">
                            <h4>Need a tutor for Class 9 student</h4>
                            <div class="col-sm-6">
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
                            <p style="text-align: center"><a href="#" class="btn btn-danger btn-lg" role="button" >Delete &raquo;</a></p>
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
                            <h4>Need a tutor for Class 9 student</h4>
                            <div class="col-sm-6">
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
                            <p style="text-align: center"><a href="#" class="btn btn-danger btn-lg" role="button" >Delete &raquo;</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>

<div id="AppliedTutors" class="tabcontent">
        <div class="container"> 
            <div class="col-sm-10">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Job ID: 5553</h3>
                    </div>
                    <div class="panel-body">
                        <div class="container" style="font-size: 14px;">
                            <p style="font-size: 16px;">Need a tutor for Class 9 student</p>
                            <div class="col-sm-2">
                                <img alt="User Pic" src="https://s4.scoopwhoop.com/anj/srk/f9aa4b2f-f167-4deb-a65c-514ab307bb89.jpg" class="img-responsive">
                            </div>
                            <div class="col-sm-5">
                                 <span style="font-weight: bold; color: #0675c1;">Name : </span>Abu Barak<br>
                                <span style="font-weight: bold; color: #0675c1;">Institute : </span> Bangladesh Agricultural University<br>
                                <span style="font-weight: bold; color: #0675c1;">Experience :</span> 2 years<br>
                                <p style="font-size: 12px; opacity: 0.7;">Applied on 9th January, 2018</p>
                            </div>
                            <div class="col-sm-2">
                            <p style="text-align: center"><a href="#" class="btn btn-success btn-lg" role="button" >Approve &raquo;</a></p>
                            <p style="text-align: center"><a href="#" class="btn btn-info btn-md" role="button" >View Profile &raquo;</a></p>
                            </div>
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
                        <div class="container" style="font-size: 14px;">
                            <p style="font-size: 16px;">Need a tutor for Class 9 student</p>
                            <div class="col-sm-2">
                                <img alt="User Pic" src="https://s4.scoopwhoop.com/anj/srk/f9aa4b2f-f167-4deb-a65c-514ab307bb89.jpg" class="img-responsive">
                            </div>
                            <div class="col-sm-5">
                                 <span style="font-weight: bold; color: #0675c1;">Name : </span>Abu Barak<br>
                                <span style="font-weight: bold; color: #0675c1;">Institute : </span> Bangladesh Agricultural University<br>
                                <span style="font-weight: bold; color: #0675c1;">Experience :</span> 2 years<br>
                                <p style="font-size: 12px; opacity: 0.7;">Applied on 9th January, 2018</p>
                            </div>
                            <div class="col-sm-2">
                            <p style="text-align: center"><a href="#" class="btn btn-success btn-lg" role="button" >Approve &raquo;</a></p>
                            <p style="text-align: center"><a href="#" class="btn btn-info btn-md" role="button" >View Profile &raquo;</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
</div>

<div id="RequestedTutors" class="tabcontent">
  
    <div class="container">   
            <div class="col-sm-10">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Abu Barak</h3>
                    </div>
                    <div class="panel-body">
                        <div class="container" style="font-size: 14px;">
                            <div class="col-sm-2">
                                <img alt="User Pic" src="https://s4.scoopwhoop.com/anj/srk/f9aa4b2f-f167-4deb-a65c-514ab307bb89.jpg" class="img-responsive">
                            </div>
                            <div class="col-sm-5">
                                 <span style="font-weight: bold; color: #0675c1;">Name : </span>Abu Barak<br>
                                <span style="font-weight: bold; color: #0675c1;">Institute : </span> Bangladesh Agricultural University<br>
                                <span style="font-weight: bold; color: #0675c1;">Experience :</span> 2 years<br>
                                <span style="font-weight: bold; color: #0675c1;">Teaches :</span> General Maths,Physics ,Chemistry ,Biology<br>
                                <p style="font-size: 12px; opacity: 0.7;">Requested on 9th January, 2018</p>
                            </div>
                            <div class="col-sm-2">
                            <p style="text-align: center"><a href="#" class="btn btn-warning btn-md" role="button" >Cancel Request &raquo;</a></p>
                            <p style="text-align: center"><a href="#" class="btn btn-info btn-md" role="button" >View Profile &raquo;</a></p>
                            </div>
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