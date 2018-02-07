@extends('finetutors.layout2')

@section('head')

	<title>Post a tuition</title>

<style> 
	select {
    width: 100%;
    padding: 16px 20px;
    border: none;
    border-radius: 4px;
    background-color: #f1f1f1;
	}
    
    label{
        text-align: right;
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
                    <li class="active">
                        <a href="charts.html"><i class="fa fa-fw fa-edit"></i> Post a Job</a>
                    </li>
                    <li>
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
	    <div>
	    	
        <div class="content-wrapper" >

            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="font-weight: bold;">Tuition Post</h3>
                    </div>
                    <div class="panel-body">
                        <div class="container" style="font-size: 16px;">
                            
                            
                            <div class="form-group" >

                                <label class="control-label col-sm-2" for="city">City:</label>
                                <div class="col-sm-4">
                                    <select class="form-control" id="select">
                                        <option selected="selected">Mymensingh</option>
                                    </select>
                                </div>
                                <label class="control-label col-sm-1" for="area">Area:</label>
                                <div class="col-sm-4">
                                    <select class="form-control" id="select" required>
                                        <option >Kewatkhali</option>
                                        <option >Ganginarpar</option>
                                        <option >Charpara</option>
                                    </select>
                                </div>
                            </div>
                            <br><br><br>
                            <div class="form-group">
                                  <label class="control-label col-sm-2" for="ver">Version:</label>
                                  <div class="col-sm-9">
                                    <select class="form-control" id="select" required>
                                        <option >English Version</option>
                                        <option >Bangla Medium</option>
                                        <option >English Medium</option>
                                    </select>
                                  </div>
                            </div>
                            <br>
                            <div class="form-group">
                                  <label class="control-label col-sm-2" for="class">Class:</label>
                                  <div class="col-sm-9">
                                    <select class="form-control" id="select" required>
                                        <option >1</option>
                                        <option >2</option>
                                        <option >3</option>
                                        <option >4</option>
                                        <option >5</option>
                                        <option >6</option>
                                        <option >7</option>
                                        <option >8</option>
                                        <option >9</option>
                                        <option >10</option>
                                        <option >SSC Examee</option>
                                        <option >College 1st year </option>
                                        <option >College 2nd year </option>
                                        <option >HSC Examee </option>
                                        <option >University </option>
                                        <option >Others </option>
                                    </select>
                                  </div>
                            </div>
                            <br>

                            <div class="form-group">
                                  <label class="control-label col-sm-2" for="courses">Courses/Subjects:</label>
                                  <div class="col-sm-9">
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
                              <br>

                              <div class="form-group">
                                     <label class="control-label col-sm-2" for="daysofweek">Days a Week:</label>
                                    <div class="col-sm-9">
                                      <select class="form-control" id="select" required>
                                      <option >1 day</option>
                                      <option >2 days</option>
                                      <option >3 days</option>
                                      <option >4 days</option>
                                      <option >5 days</option>
                                      <option >6 days</option>
                                      <option >Everyday</option>
                                      </select>
                                    </div>
                              </div>
                              <br><br>
                              <div class="form-group">
                                <label class="control-label col-sm-2" for="stuno">Number of Student:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="stuno" name="stuno">
                                </div>
                            </div>
                            <br>

                              <div class="form-group">
                                     <label class="control-label col-sm-2" for="gender">Student Gender:</label>
                                    <div class="col-sm-3">
                                      <select class="form-control" id="select" required>
                                      <option >Male</option>
                                      <option >Female</option>
                                      <option >Others</option>
                                      </select>
                                    </div>
                                      <label class="control-label col-sm-3" for="gender">Tutors Gender preferrence:</label>
                                    <div class="col-sm-3">
                                      <select class="form-control" id="select" required>
                                      <option >Any</option>
                                      <option >Male</option>
                                      <option >Female</option>
                                      </select>
                                  </div>
                             </div>
                            <br><br><br>
                              <div class="form-group">
                                <label class="control-label col-sm-2" for="salary">Salary:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="salary" name="salary">
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="hiredate">Hiring Date:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="hiredate" name="hiredate" placeholder="dd/mm/yy">
                                </div>
                            </div>
                            <br>
                              <div class="form-group">
                                <label class="control-label col-sm-2" for="addr">Address Details:</label>
                                <div class="col-sm-9">
                                      <textarea class="form-control" rows="3" id="addr"></textarea>
                                </div>
                            </div>
                            <br><br>

                            <div class="form-group" style="padding-bottom:60px">
                                    <label class="control-label col-sm-2" for="teachingstyle">Other Requirements:</label>
                                    <div class="col-sm-9">
                                      <textarea class="form-control" rows="4" id="teachingstyle"></textarea>
                                    </div>
                            </div>

                            <div class="form-group" style="padding-top:20px">
                      
                                    <div class="col-sm-3" style="text-align: right">
                                        <input class="btn btn-success" type="submit" value="Publish">
                                    </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            
        </div>

    </div>
    <!-- /#page-wrapper -->
@stop

@section('footer')
    
@stop