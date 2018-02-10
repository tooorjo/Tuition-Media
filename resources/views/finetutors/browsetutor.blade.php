@extends('finetutors.layout2')

@section('head')

	<title>Tuition Board</title>

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
                     <a class="nav-link" href="#">Tuition Board</a>
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



        <div class="content-wrapper" >

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
                                <p style="text-align: left"><a href="#" class="btn btn-primary btn-md" role="button" data-toggle="modal" data-target="#myModal">View Details &raquo;</a><a href="#" class="btn btn-success btn-md" role="button" data-toggle="modal" data-target="#requestModal">Request Tutor</a></p>
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
                                <p style="text-align: left"><a href="#" class="btn btn-primary btn-md" role="button" data-toggle="modal" data-target="#myModal">View Details &raquo;</a><a href="#" class="btn btn-success btn-md" role="button" data-toggle="modal" data-target="#requestModal">Request Tutor</a></p>
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
                                <p style="text-align: left"><a href="#" class="btn btn-primary btn-md" role="button" data-toggle="modal" data-target="#myModal">View Details &raquo;</a><a href="#" class="btn btn-success btn-md" role="button" data-toggle="modal" data-target="#requestModal">Request Tutor</a></p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
<!--pop-up-->
            <div class="container">
  
              <!-- Modal -->
              <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-lg">
                
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Modal Header</h4>
                    </div>
                    <div class="modal-body">
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
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                  
                </div>
              </div>


              <!-- Modal -->
              <div class="modal fade" id="requestModal" role="dialog">
                <div class="modal-dialog modal-lg">
                
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Modal Header</h4>
                    </div>
                    <div class="modal-body">
                    <div class="row">
                        <div class=" col-md-9 col-lg-9 "> 
                            <div class="form-group">
                                <label class="control-label col-sm-6" for="phone">Tutor ID:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="tid" placeholder="enter the ID of chosen tutor" name="tid">
                                </div>
                            </div> 
                            <div class="form-group">
                                <label class="control-label col-sm-6" for="phone">Phone:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="phone" placeholder="0123456576" name="phone">
                                </div>
                            </div>  
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-warning" data-dismiss="modal">Make Request</button>
                    </div>
                  </div>
                  
                </div>
              </div>
              
            </div>


            
        </div>

    </div>
    <!-- /#page-wrapper -->



@stop