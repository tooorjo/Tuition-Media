<!DOCTYPE html>
<html lang="en">

<head>
	
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    @yield('head')

</head>

<body id="page-top">
	

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

	@yield('footer')


</body>
</html>
