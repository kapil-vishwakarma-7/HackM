
<!DOCTYPE html>
<html lang="en-us">

<head>
	<title>maharashtra Placement Portal | @yield('title') </title>
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
	<link href={{url("css/bootstrap.css")}} rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href={{url("css/jquery.desoslide.css")}}>
	<link href={{url("css/style.css")}} rel='stylesheet' type='text/css' />
	<link href={{url("css/model_style.css")}} rel='stylesheet' type='text/css' />
	<link href={{url("css/fontawesome-all.css")}} rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
</head>

<body>
	<!--Header-->

	<header>
		<div class="top-bar_sub_w3layouts container-fluid">
			<div class="row">
				<div class="col-md-4 logo text-left">
					<a class="navbar-brand" href="index.html">
						<i class="fab fa-linode"></i> Placement Portal</a>
				</div>
				<div class="col-md-4 top-forms text-center mt-lg-3 mt-md-1 mt-0">
					<span>Welcome Back!</span>
					<span class="mx-lg-4 mx-md-2  mx-1">
						<a href="" data-toggle="modal" data-target="#modalLoginForm" >
							<i class="fas fa-lock"></i> Sign In</a>
					</span>
					<span>
						<a href="" data-toggle="modal" data-target="#modaRegistrationForm"  >
							<i class="far fa-user"></i> Register</a>
					</span>
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
							<li class="nav-item active">
								<a class="nav-link" href="#">Home
									<span class="sr-only">(current)</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="about.html">About</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="contact.html">Placement</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="contact.html">Contact</a>
							</li>

						</ul>
							
		
						

					</div>
				</nav>

			</div>
	</header>
	<!--//header-->

	<!--/banner-->
	

	@yield('body')








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
               	<form action="#" method="post">
               		<div class="input-group">
							<span><i class="fa fa-envelope" aria-hidden="true"></i></span>
							<input type="email" placeholder="Email" required=""> 
						</div>
						<div class="input-group">
							<span><i class="fa fa-unlock" aria-hidden="true"><span>
							</i><input type="Password" placeholder="Password" required="">
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
				

						<form action="#" method="post">
						<div class="input-group">
							<span><i class="fa fa-user" aria-hidden="true"></i></span>
							<input type="text" placeholder="firstname" required=""> 
						</div>
						<div class="input-group">
							<span><i class="fa fa-user" aria-hidden="true"></i></span>
							<input type="text" placeholder="lastname" required=""> 
						</div>

						<div class="input-group">
							<span><i class="fa fa-user" aria-hidden="true"></i></span>
							<input type="text" placeholder="contact" required=""> 
						</div>
						<div class="input-group">
							<span><i class="fa fa-user" aria-hidden="true"></i></span>
							<input type="text" placeholder="Adhar ID" required=""> 
						</div>
						<div class="input-group">
							<span><i class="fa fa-envelope" aria-hidden="true"></i></span>
							<input type="email" placeholder="Email" required=""> 
						</div>
						<div class="input-group">
							<span><i class="fa fa-user" aria-hidden="true"></i></span>
							<input type="text" placeholder="Address" required=""> 
						</div>
						<div class="input-group">
							<span><i class="fa fa-unlock" aria-hidden="true"><span>
							</i><input type="Password" placeholder="Password" required="">
						</div>
							<input type="checkbox" value="remember-me" /> <h4>Keep me signed in  </h4>        
							<button class="btn btn-danger btn-block" type="submit">Sign Up</button >
							           
					</form>
			</div>


			<div class="w3_info" style="display: none;" id="college_signup">
				<h2>College Sign Up </h2>
				

						<form action="#" method="post">
						<div class="input-group">
							<span><i class="fa fa-user" aria-hidden="true"></i></span>
							<input type="text" placeholder="College Name" required=""> 
						</div>
						<div class="input-group">
							<span><i class="fa fa-user" aria-hidden="true"></i></span>
							<input type="text" placeholder="College Code" required=""> 
						</div>

						
						<div class="input-group">
							<span><i class="fa fa-user" aria-hidden="true"></i></span>
							<input type="text" placeholder="College type" required=""> 
						</div>
						<div class="input-group">
							<span><i class="fa fa-user" aria-hidden="true"></i></span>
							<input type="text" placeholder="Contact" required=""> 
						</div>
						<div class="input-group">
							<span><i class="fa fa-envelope" aria-hidden="true"></i></span>
							<input type="email" placeholder="Email" required=""> 
						</div>
						<div class="input-group">
							<span><i class="fa fa-user" aria-hidden="true"></i></span>
							<input type="text" placeholder="Address" required=""> 
						</div>
						<div class="input-group">
							<span><i class="fa fa-unlock" aria-hidden="true"><span>
							</i><input type="Password" placeholder="Password" required="">
						</div>

							<input type="checkbox" value="remember-me" /> <h4>Keep me signed in  </h4>        
							<button class="btn btn-danger btn-block" type="submit">Sign Up</button >
							           
					</form>
					</div>

					<div class="w3_info" style="display: none;" id="university_signup">
				<h2>University Sign Up </h2>
				

						<form action="#" method="post">
						<div class="input-group">
							<span><i class="fa fa-user" aria-hidden="true"></i></span>
							<input type="text" placeholder="University Name" required=""> 
						</div>
						<div class="input-group">
							<span><i class="fa fa-user" aria-hidden="true"></i></span>
							<input type="text" placeholder="University Code" required=""> 
						</div>

						
						<div class="input-group">
							<span><i class="fa fa-user" aria-hidden="true"></i></span>
							<input type="text" placeholder="University type" required=""> 
						</div>
						<div class="input-group">
							<span><i class="fa fa-user" aria-hidden="true"></i></span>
							<input type="text" placeholder="Grade" required=""> 
						</div>
						<div class="input-group">
							<span><i class="fa fa-user" aria-hidden="true"></i></span>
							<input type="text" placeholder="Contact" required=""> 
						</div>
						<div class="input-group">
							<span><i class="fa fa-envelope" aria-hidden="true"></i></span>
							<input type="email" placeholder="Email" required=""> 
						</div>
						<div class="input-group">
							<span><i class="fa fa-user" aria-hidden="true"></i></span>
							<input type="text" placeholder="Address" required=""> 
						</div>
						<div class="input-group">
							<span><i class="fa fa-unlock" aria-hidden="true"><span>
							</i><input type="Password" placeholder="Password" required="">
						</div>

							<input type="checkbox" value="remember-me" /> <h4>Keep me signed in  </h4>        
							<button class="btn btn-danger btn-block" type="submit">Sign Up</button >
							           
					</form>
					</div>


					<div class="w3_info" style="display: none;" id="company_signup">
				<h2>Company Sign Up </h2>
				

						<form action="#" method="post">
						<div class="input-group">
							<span><i class="fa fa-user" aria-hidden="true"></i></span>
							<input type="text" placeholder="Company Name" required=""> 
						</div>
						<div class="input-group">
							<span><i class="fa fa-user" aria-hidden="true"></i></span>
							<input type="text" placeholder="CIN Number" required=""> 
						</div>

						
						<div class="input-group">
							<span><i class="fa fa-user" aria-hidden="true"></i></span>
							<input type="text" placeholder="Company type" required=""> 
						</div>
						<div class="input-group">
							<span><i class="fa fa-user" aria-hidden="true"></i></span>
							<input type="text" placeholder="Contact" required=""> 
						</div>
						<div class="input-group">
							<span><i class="fa fa-envelope" aria-hidden="true"></i></span>
							<input type="email" placeholder="Email" required=""> 
						</div>
						<div class="input-group">
							<span><i class="fa fa-user" aria-hidden="true"></i></span>
							<input type="text" placeholder="Address" required=""> 
						</div>
						<div class="input-group">
							<span><i class="fa fa-unlock" aria-hidden="true"><span>
							</i><input type="Password" placeholder="Password" required="">
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




<!-- <div class="text-center">
    <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">Launch Modal Login Form</a>
</div> -->
	<!---->
	<!-- js -->
	<script src={{url("js/jquery-2.2.3.min.js")}}></script>
	<!-- //js -->
	<!-- desoslide-JavaScript -->
	<script src={{url("js/jquery.desoslide.js")}}></script>
	<script>
		$('#demo1_thumbs').desoSlide({
			main: {
				container: '#demo1_main_image',
				cssClass: 'img-responsive'
			},
			effect: 'sideFade',
			caption: true
		});
	</script>

	<!-- requried-jsfiles-for owl -->
	<script type="text/javascript">
		$(document).ready(function(){

			$(".tab1").click(function(){
				$("#college_signup").hide();
				$("#student_signup").hide();
				$("#company_signup").hide();
			$("#university_signup").show();

			})
			$(".tab2").click(function(){
			
			$("#university_signup").hide();
				$("#student_signup").hide();
				$("#company_signup").hide();
			$("#college_signup").show();	
			})
			$(".tab3").click(function(){
			$("#college_signup").hide();
				$("#student_signup").hide();
				$("#university_signup").hide();
			$("#company_signup").show();
				
			})
			$(".tab4").click(function(){
			$("#college_signup").hide();
				$("#university_signup").hide();
				$("#company_signup").hide();
			$("#student_signup").show();
				
			})
		})
	</script>
	<script>
		$(window).load(function () {
			$("#flexiselDemo1").flexisel({
				visibleItems: 3,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 480,
						visibleItems: 1
					},
					landscape: {
						changePoint: 640,
						visibleItems: 2
					},
					tablet: {
						changePoint: 768,
						visibleItems: 3
					}
				}
			});

		});
	</script>
	<script>
		$(window).load(function () {
			$("#flexiselDemo2").flexisel({
				visibleItems: 3,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 480,
						visibleItems: 1
					},
					landscape: {
						changePoint: 640,
						visibleItems: 2
					},
					tablet: {
						changePoint: 768,
						visibleItems: 3
					}
				}
			});

		});
	</script>
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