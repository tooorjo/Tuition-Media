@extends('finetutors.layout2')

@section('head')

	<title>Browse Tutors</title>

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
                    <li  class="active">
                        <a href="charts.html"><i class="fa fa-fw fa-dashboard"></i> Browse Tutor</a>
                    </li>
                    <li>
                        <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> My Activity</a>
                    </li>
                    <li>
                        <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Edit Profile</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
	    <div >
	    	<div class="md-card ">
            <div>
                <div>
                    <div class="col-sm-2">
                        <div>
                            <select id="filter_city" name="filter_city">
                                                                    <option value="1">--Select One--</option>
                                                                        <option value="2">Dhaka</option>
                                                                        <option value="3">Online</option>
                                                                        <option value="4">Chittagong</option>
                                                                        <option value="5">Rajshahi</option>
                                                                        <option value="6">Sylhet</option>
                                                                        <option value="7">Khulna</option>
                                                                        <option value="8">Rangpur</option>
                                                                        <option value="9">Barisal</option>
                                                                        <option value="10">Mymensingh</option>
                                                                        <option value="11">Narayanganj</option>
                                                                        <option value="12">Savar</option>
                                                                </select>
                        </div>
                    </div>

                    <div class="col-sm-2" id="location_show">
                        <div>
                            <select id="filter_location" name="filter_location">
                                <option value="">Location</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-2">
                        <div>
                            <select id="filter_category" name="filter_category">
                                <option value="">Category</option>
                                                                                                            <option value="2">Bangla Medium</option>
                                                                                <option value="3">English Medium</option>
                                                                                <option value="4">Test Preparation</option>
                                                                                <option value="5">Language Learning</option>
                                                                                <option value="6">Project/Assignment</option>
                                                                                <option value="7">Admission Test</option>
                                                                                <option value="8">Professional Skill Development</option>
                                                                                <option value="9">Arts</option>
                                                                                <option value="295">English Version</option>
                                                                                <option value="660">Religious Studies</option>
                                                                                <option value="768">Special Skill Development</option>
                                                                    </select>
                        </div>
                    </div>
                    <div class="col-sm-2" id="class_show">
                        <div>
                            <select id="filter_class" name="filter_class">
                                <option value="">Class</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div>
                            <select id="filter_gender" name="filter_gender">
                                <option value="">Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                    <!-- <div class="uk-width-medium-2-10 uk-text-center">
                        <a href="#" class="md-btn md-btn-warning uk-margin-small-top">Search</a>
                    </div> -->
                </div>
            </div>
        </div>



        <div class="content-wrapper col-sm-12" >

            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Tutor ID: 1343</h3>
                    </div>
                    <div class="panel-body">
                        <div class="container col-sm-12" style="font-size: 12px;">
                            <div class="col-sm-4"> <img alt="User Pic" src="https://s4.scoopwhoop.com/anj/srk/f9aa4b2f-f167-4deb-a65c-514ab307bb89.jpg" class="img-responsive"> </div>
                			<div class="col-sm-8">
                                <span style="font-weight: bold; color: #0675c1;">Name : </span>Abu Barak<br>
                                <span style="font-weight: bold; color: #0675c1;">Institute : </span> Bangladesh Agricultural University
                            </div>

                            
                            <div class="col-sm-12">
                         		<h4><br>Teaches:<br></h4>
                                <span style="font-weight: bold; color: #0675c1;">Versions : </span> Bangla Medium, English Version<br>                      
                                <span style="font-weight: bold; color: #0675c1;">Subjects :</span> General Maths,Physics ,Chemistry ,Biology<br>
                                <span style="font-weight: bold; color: #0675c1;">Classes :</span> 6-8, 9-10, SSC, 11-12, HSC<br>
                                <span style="font-weight: bold; color: #0675c1;">Experience :</span> 2 years<br>
                                <p style="font-size: 12px !important; opacity: 0.7;"><span style="">Tutors Talk: </span>Experienced tutors are requested to apply. </p>
                                <p style="font-size: 12px; opacity: 0.7;">Posted on 9th January, 2018<br></p>
                                <p style="text-align: center"><a href="#" class="btn btn-primary btn-lg" role="button" >View Details &raquo;</a></p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Tutor ID: 1343</h3>
                    </div>
                    <div class="panel-body">
                        <div class="container col-sm-12" style="font-size: 12px;">
                            <div class="col-sm-4"> <img alt="User Pic" src="https://s4.scoopwhoop.com/anj/srk/f9aa4b2f-f167-4deb-a65c-514ab307bb89.jpg" class="img-responsive"> </div>
                			<div class="col-sm-8">
                                <span style="font-weight: bold; color: #0675c1;">Name : </span>Abu Barak<br>
                                <span style="font-weight: bold; color: #0675c1;">Institute : </span> Bangladesh Agricultural University
                            </div>

                            
                            <div class="col-sm-12">
                         		<h4><br>Teaches:<br></h4>
                                <span style="font-weight: bold; color: #0675c1;">Versions : </span> Bangla Medium, English Version<br>                      
                                <span style="font-weight: bold; color: #0675c1;">Subjects :</span> General Maths,Physics ,Chemistry ,Biology<br>
                                <span style="font-weight: bold; color: #0675c1;">Classes :</span> 6-8, 9-10, SSC, 11-12, HSC<br>
                                <span style="font-weight: bold; color: #0675c1;">Experience :</span> 2 years<br>
                                <p style="font-size: 12px !important; opacity: 0.7;"><span style="">Tutors Talk: </span>Experienced tutors are requested to apply. </p>
                                <p style="font-size: 12px; opacity: 0.7;">Posted on 9th January, 2018<br></p>
                                <p style="text-align: center"><a href="#" class="btn btn-primary btn-lg" role="button" >View Details &raquo;</a></p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Tutor ID: 1343</h3>
                    </div>
                    <div class="panel-body">
                        <div class="container col-sm-12" style="font-size: 12px;">
                            <div class="col-sm-4"> <img alt="User Pic" src="https://s4.scoopwhoop.com/anj/srk/f9aa4b2f-f167-4deb-a65c-514ab307bb89.jpg" class="img-responsive"> </div>
                			<div class="col-sm-8">
                                <span style="font-weight: bold; color: #0675c1;">Name : </span>Abu Barak<br>
                                <span style="font-weight: bold; color: #0675c1;">Institute : </span> Bangladesh Agricultural University
                            </div>

                            
                            <div class="col-sm-12">
                         		<h4><br>Teaches:<br></h4>
                                <span style="font-weight: bold; color: #0675c1;">Versions : </span> Bangla Medium, English Version<br>                      
                                <span style="font-weight: bold; color: #0675c1;">Subjects :</span> General Maths,Physics ,Chemistry ,Biology, General Maths,Physics ,Chemistry ,Biology, General Maths,Physics ,Chemistry ,Biology<br>
                                <span style="font-weight: bold; color: #0675c1;">Classes :</span> 6-8, 9-10, SSC, 11-12, HSC<br>
                                <span style="font-weight: bold; color: #0675c1;">Experience :</span> 2 years<br>
                                <p style="font-size: 12px; opacity: 0.7;">Posted on 9th January, 2018<br></p>
                                <p style="text-align: center"><a href="#" class="btn btn-primary btn-lg" role="button" >View Details &raquo;</a></p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

            
        </div>

    </div>
    <!-- /#page-wrapper -->



@stop