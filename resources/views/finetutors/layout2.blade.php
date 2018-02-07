<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    @yield('head')
    <!-- Bootstrap Core CSS -->
    <link href="finetutors/layout2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="finetutors/layout2/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="finetutors/layout2/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="finetutors/layout2/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    

</head>

<body>
    
    <div id="wrapper">

        
        @yield('content')

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
    </div>
    <!-- /#wrapper -->
    @yield('footer')
    <!-- jQuery -->
    <script src="finetutors/layout2/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="finetutors/layout2/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="finetutors/layout2/js/plugins/morris/raphael.min.js"></script>
    <script src="finetutors/layout2/js/plugins/morris/morris.min.js"></script>
    <script src="finetutors/layout2/js/plugins/morris/morris-data.js"></script>

</body>

</html>
