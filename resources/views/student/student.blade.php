<!DOCTYPE html>
<html lang="en-us">

<head>
	<title>Maharashtra Placement Portal | @yield('title') </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Placement Portal maharashtra " />

	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href={{url("css/bootstrap.css")}} rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href={{url("css/jquery.desoslide.css")}}>
	<link href={{url("css/style.css")}} rel='stylesheet' type='text/css' />
	<link href={{url("css/model_style.css")}} rel='stylesheet' type='text/css' />
	<link href={{url("css/fontawesome-all.css")}} rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
<link href={{ url("css/contact.css") }} rel='stylesheet' type='text/css' />
	<script src={{url("js/jquery-2.2.3.min.js")}}></script>

    <style type="text/css">
        .user-row {
    margin-bottom: 14px;
}

.user-row:last-child {
    margin-bottom: 0;
}

.dropdown-user {
    margin: 13px 0;
    padding: 5px;
    height: 100%;
}

.dropdown-user:hover {
    cursor: pointer;
}

.table-user-information > tbody > tr {
    border-top: 1px solid rgb(221, 221, 221);
}

.table-user-information > tbody > tr:first-child {
    border-top: 0;
}


.table-user-information > tbody > tr > td {
    border-top: 0;
}
.toppad
{margin-top:20px;
}

    </style>
</head>

<body>
	<!--Header-->

	<header>
		<div class="top-bar_sub_w3layouts container-fluid">
			<div class="row">
				<div class="col-md-4 logo text-left">
					<a class="navbar-brand" href="{{ url('/') }}">
						<i class="fab fa-linode"></i> Placement Portal</a>
				</div>
				<div class="col-md-4 top-forms text-center mt-lg-3 mt-md-1 mt-0">
					
					@guest
						<span>Welcome Back!</span>
						<span class="mx-lg-4 mx-md-2  mx-1">
							<a href="" data-toggle="modal" data-target="#modalLoginForm" >
								<i class="fas fa-lock"></i> Sign In</a>
						</span>
						<span>
							<a href="" data-toggle="modal" data-target="#modaRegistrationForm"  >
								<i class="far fa-user"></i> Register</a>
						</span>
					@endguest
					@auth
						<span class="mx-lg-4 mx-md-2  mx-1">
							<a href="">
								<i class="fas fa-lock"></i> {{Auth::user()->email}}</a>
						</span>
						<span>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
							<a href="{{ route('logout') }}"                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            Signout
                            </a>
						</span>
					@endauth

				</div>
				<div class="col-md-4 log-icons text-right">

					<ul class="social_list1 mt-3">

						<li>
							<a href="#" class="facebook1 mx-2" >
								<i class="fab fa-facebook-f"></i>

							</a>
						</li>
						<li>
							<a href="#" class="twitter2">
								<i class="fab fa-twitter"></i>

							</a>
						</li>
						<li>
							<a href="#" class="dribble3 mx-2">
								<i class="fab fa-dribbble"></i>
							</a>
						</li>
						<li>
							<a href="#" class="pin">
								<i class="fab fa-pinterest-p"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>

			<div class="header_top" id="home">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<button class="navbar-toggler navbar-toggler-right mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
				   </button>


					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item ">
								<a class="nav-link" href="{{ url('/') }}">Home
									
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{ url('about') }}">About</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{ url('placement') }}">Placement</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{ url('contact') }}">Contact</a>
							</li>

						</ul>
							
		
						

					</div>
				</nav>

			</div>
	</header>
	<!--//header-->

	<!--/banner-->
	



	@yield('body')
<div class="container">
<div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Personal Detail</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">
<div class="container">
      <div class="row">
      
        <div class="col-xs-12 col-sm-12 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Sheena Shrestha</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="https://www.cloudninefertility.com/wp-content/uploads/2017/12/User-dummy.png" class="img-circle img-responsive"> </div>
                
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
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Enrollment:</td>
                        <td>Programming</td>
                      </tr>
                      <tr>
                        <td>College Name:</td>
                        <td>06/23/2013</td>
                      </tr>
                      <tr>
                        <td>Contact</td>
                        <td>01/24/1988</td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Gender</td>
                        <td>Male</td>
                      </tr>
                        <tr>
                        <td>Home Address</td>
                        <td>Kathmandu,Nepal</td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><a href="mailto:info@support.com">info@support.com</a></td>
                      </tr>
                        <td>Phone Number</td>
                        <td>123-4567-890(
                        </td>
                           
                      </tr>
                     
                    </tbody>

                  </table>
                   
                </div>
              </div>
            </div>
                 
            
          </div>
        </div>
      </div>
    </div>




      </div>
    </div>
</div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Education detail</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">

<div class="col-md-6">
	<div class="form-group">
  <input type="text" class="form-control" placeholder="College*">
</div>
	
</div>
<div class="col-md-6">
	<div class="form-group">
  <input type="text" class="form-control" placeholder="Start Year*">
</div>
	
</div>
<div class="col-md-6">
	<div class="form-group">
  <input type="text" class="form-control" placeholder="End Year*">
</div>
	
</div>
<div class="col-md-6">
	<div class="form-group">
  <input type="text" class="form-control" placeholder="Degree*">
</div>
	
</div>
<div class="col-md-6">
	<div class="form-group">
  <input type="text" class="form-control" placeholder="Stream*">
</div>
	
</div>
<div class="col-md-6">
	<div class="form-group">
  <input type="text" class="form-control" placeholder="Percentage*">
</div>
	</div>
	 <center> 
                 <button type="button" class="btn btn-primary">Save</button>
                </center>
</div>

        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Job details</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
          <div class="panel-body">

<div class="col-md-6">
	<div class="form-group">
  <input type="text" class="form-control" placeholder="Profile*">
</div>
	
</div>
<div class="col-md-6">
	<div class="form-group">
  <input type="text" class="form-control" placeholder="Company/Organization*">
</div>
	
</div>
<div class="col-md-6">
	<div class="form-group">
  <input type="text" class="form-control" placeholder="Location/Place*">
</div>
	
</div>
<div class="col-md-6">
	<div class="form-group">
  <input type="text" class="form-control" placeholder="Start Year*">
</div>
	
</div>
<div class="col-md-6">
	<div class="form-group">
  <input type="text" class="form-control" placeholder="End Year*">
</div>
	
</div>
<div class="col-md-12"><center> 
                 <button type="button" class="btn btn-primary">Save</button>
                </center></div>
 
	
</div>
      </div>
    </div>
  </div> 
</div>

<!-- /footer -->

<footer>
		<div class="container">
			
			<!-- footer -->
			<div class="footer-cpy text-center">
				<div class="footer-social">
					<div class="copyrighttop">
						<ul>
							<li class="mx-3">
								<a class="facebook" href="#">
									<i class="fab fa-facebook-f"></i>
									<span>Facebook</span>
								</a>
							</li>
							<li>
								<a class="facebook" href="#">
									<i class="fab fa-twitter"></i>
									<span>Twitter</span>
								</a>
							</li>
							<li class="mx-3">
								<a class="facebook" href="#">
									<i class="fab fa-google-plus-g"></i>
									<span>Google+</span>
								</a>
							</li>
							<li>
								<a class="facebook" href="#">
									<i class="fab fa-pinterest-p"></i>
									<span>Pinterest</span>
								</a>
							</li>
						</ul>

					</div>
				</div>
				<div>
					<p>© 2018 Placement Portal. All Rights Reserved | Design by
						<a href="beangate.in"> BenaGate IT Solutions</a>
					</p>

				</div>
			</div>

			<!-- //footer -->
		</div>
	</footer>

	<!--/model-->


	<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Sign in Here</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
               <div  >
               	<form action="{{url('login')}}" method="POST">
               		{{ csrf_field() }}
               		<div class="input-group">
							<span><i class="fa fa-envelope" aria-hidden="true"></i></span>
							<input type="email" name="email" placeholder="Email" required=""> 
						</div>
						<div class="input-group">
							<span><i class="fa fa-unlock" aria-hidden="true"><span>
							</i><input type="Password" name="password" placeholder="Password" required="">
						</div>
               		
<button class="btn btn-danger btn-block" type="submit">Sign In</button >
</form>
            </div>
            
        </div>
        </div>
    </div>
</div>


  <!-- Button to Open the Modal -->
  

  <!-- The Modal -->
  <div class="modal" id="modaRegistrationForm">
    <div class="modal-dialog  modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
		
		<div class="agile_info">
			<div class="w3l_form">
				<h2 class="model_h">Sign Up As</h2>
				
				<button class="btn btn-danger btn-block tab1" >University Sign Up</button >
				<button class="btn btn-danger btn-block tab2" >College Sign Up</button >
				<button class="btn btn-danger btn-block tab3" value="company_signup">Company Sign Up</button >
				<button class="btn btn-danger btn-block tab4" value="student_signup">Student Sign Up</button >

				<!-- <img src="images/call-center-1015274_640.jpg"> -->
			</div>
			<div class="w3_info"  id="student_signup">
				<h2>Student Sign Up </h2>
				

						<form action="{{ route('student.store') }}" method="POST">
						{{csrf_field()}}
						<div class="input-group">
							<span><i class="fa fa-user" aria-hidden="true"></i></span>
							<input type="text" name="name" placeholder="Full Name" required=""> 
						</div>
						

						<div class="input-group">
							<span><i class="fa fa-user" aria-hidden="true"></i></span>
							<input type="text"  name="contact" placeholder="contact" required=""> 
						</div>
						<div class="input-group">
							<span><i class="fa fa-user" aria-hidden="true"></i></span>
							<input type="text" name="eadhar" placeholder="Adhar ID" required=""> 
						</div>
						<div class="input-group">
							<span><i class="fa fa-envelope" aria-hidden="true"></i></span>
							<input type="email" name="email" placeholder="Email" required=""> 
						</div>
						<div class="input-group">
							<span><i class="fa fa-envelope" aria-hidden="true"></i></span>
							<select name="college_name">
								@foreach($college as $a)
								<option value="{{$a->college_code}}">{{$a->name}}</option>

								@endforeach

							</select>
						</div>
						<div class="input-group">
							<span><i class="fa fa-user" aria-hidden="true"></i></span>
							<input type="text"  name="address" placeholder="Address" required=""> 
						</div>
						<div class="input-group">
							<span><i class="fa fa-unlock" aria-hidden="true"><span>
							</i><input type="Password" name="password" placeholder="Password" required="">
						</div>
							<input type="checkbox" value="remember-me" /> <h4>Keep me signed in  </h4>        
							<button class="btn btn-danger btn-block" type="submit">Sign Up</button >
							           
					</form>
			</div>


			<div class="w3_info" style="display: none;" id="college_signup">
				<h2>College Sign Up </h2>
				

						<form action="{{ route('college.store') }}" method="POST">
						 {{csrf_field()}}
						<div class="input-group">
							<span><i class="fa fa-user" aria-hidden="true"></i></span>
							<input type="text" placeholder="College Name" required="" name="name"> 
						</div>
						<div class="input-group">
							<span><i class="fa fa-user" aria-hidden="true"></i></span>
							<input type="text" placeholder="College Code" name="code" required=""> 
						</div>

						
						<div class="input-group">
							<span><i class="fa fa-user" aria-hidden="true"></i></span>
							<input type="text" placeholder="College type" name="college_type" required=""> 
						</div>
						<div class="input-group">
							<span><i class="fa fa-user" aria-hidden="true"></i></span>
							<select name="university_id" class="form-control">
								@foreach($university as $e)

								<option value="{{$e->university_code}}" >{{$e->name}}</option>

								@endforeach
							</select>
						</div>
						<div class="input-group">
							<span><i class="fa fa-user" aria-hidden="true"></i></span>
							<input type="text" placeholder="Contact" name="contact" required=""> 
						</div>
						<div class="input-group">
							<span><i class="fa fa-envelope" aria-hidden="true"></i></span>
							<input type="email" placeholder="Email" name="email" required=""> 
						</div>
						<div class="input-group">
							<span><i class="fa fa-user" aria-hidden="true"></i></span>
							<input type="text" placeholder="Address" name="address" required=""> 
						</div>
						<div class="input-group">
							<span><i class="fa fa-unlock" aria-hidden="true"><span>
							</i><input type="Password" name="password" placeholder="Password" required="">
						</div>

							<input type="checkbox" value="remember-me" /> <h4>Keep me signed in  </h4>        
							<button class="btn btn-danger btn-block" type="submit">Sign Up</button >
							           
					</form>
					</div>

					<div class="w3_info" style="display: none;" id="university_signup">
				<h2>University Sign Up </h2>
				

						<form action="{{ route('university.store') }}" method="POST">
							{{csrf_field()}}
						<div class="input-group">
							<span><i class="fa fa-user" aria-hidden="true"></i></span>
							<input type="text" placeholder="University Name" required="" name="name"> 
						</div>
						<div class="input-group">
							<span><i class="fa fa-user" aria-hidden="true"></i></span>
							<input type="text" placeholder="University Code" required="" name="code"> 
						</div>

						
						<div class="input-group">
							<span><i class="fa fa-user" aria-hidden="true"></i></span>
							<input type="text" placeholder="University type" required="" name="university_type"> 
						</div>
						<div class="input-group">
							<span><i class="fa fa-user" aria-hidden="true"></i></span>
							<input type="text" placeholder="Grade" name="grade" required=""> 
						</div>
						<div class="input-group">
							<span><i class="fa fa-user" aria-hidden="true"></i></span>
							<input type="text" placeholder="Contact" required="" name="contact"> 
						</div>
						<div class="input-group">
							<span><i class="fa fa-envelope" aria-hidden="true"></i></span>
							<input type="email" placeholder="Email" name="email" required=""> 
						</div>
						<div class="input-group">
							<span><i class="fa fa-user" aria-hidden="true"></i></span>
							<input type="text" placeholder="Address" required="" name="address"> 
						</div>
						<div class="input-group">
							<span><i class="fa fa-unlock" aria-hidden="true"><span>
							</i><input type="Password" placeholder="Password" required="" name="password">
						</div>

							<input type="checkbox" value="remember-me" /> <h4>Keep me signed in  </h4>        
							<button class="btn btn-danger btn-block" type="submit">Sign Up</button >
							           
					</form>
					</div>


					<div class="w3_info" style="display: none;" id="company_signup">
				<h2>Company Sign Up </h2>
				

						<form action="{{ route('company.store') }}" method="POST">
						{{csrf_field()}}
						<div class="input-group">
							<span><i class="fa fa-user" aria-hidden="true"></i></span>
							<input type="text" placeholder="Company Name" name="name" required=""> 
						</div>
						<div class="input-group">
							<span><i class="fa fa-user" aria-hidden="true"></i></span>
							<input type="text" placeholder="CIN Number" name="cin" required=""> 
						</div>

						
						<div class="input-group">
							<span><i class="fa fa-user" aria-hidden="true"></i></span>
							<input type="text" placeholder="Company type" name="company_type" required=""> 
						</div>
						<div class="input-group">
							<span><i class="fa fa-user" aria-hidden="true"></i></span>
							<input type="text" placeholder="Contact" name="contact" required=""> 
						</div>
						<div class="input-group">
							<span><i class="fa fa-envelope" aria-hidden="true"></i></span>
							<input type="email" placeholder="Email" name="email" required=""> 
						</div>
						<div class="input-group">
							<span><i class="fa fa-user" aria-hidden="true"></i></span>
							<input type="text" placeholder="Address" name="address" required=""> 
						</div>
						<div class="input-group">
							<span><i class="fa fa-unlock" aria-hidden="true"><span>
							</i><input type="Password" name="password" placeholder="Password" required="">
						</div>

							<input type="checkbox" value="remember-me" /> <h4>Keep me signed in  </h4>        
							<button class="btn btn-danger btn-block" type="submit">Sign Up</button >
							           
					</form>
					</div>

			
			<div class="clear"></div>
			</div>
			
		
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
   
    </div>
  </div>
  
</div>





	<script src={{url("js/jquery.flexisel.js")}}></script>
	<!-- //password-script -->
	<!--/ start-smoth-scrolling -->
	<script src={{url("js/move-top.js")}}></script>
	<script src={{url("js/easing.js")}}></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<!--// end-smoth-scrolling -->

	<script>
		$(document).ready(function () {
			
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
							 		};
									

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<a href="#home" class="scroll" id="toTop" style="display: block;">
		<span id="toTopHover" style="opacity: 1;"> </span>
	</a>

	<!-- //Custom-JavaScript-File-Links -->
	<script src={{url("js/bootstrap.js")}}></script>


</body>

</html>