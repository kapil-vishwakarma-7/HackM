@extends('layouts.front')
@section('body')

<div class="banner">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="carousel-caption">
                        <h3>Find Job
                            <span>you deserve</span>
                        </h3>
                       

                    </div>
                </div>
                <div class="carousel-item item2">
                    <div class="carousel-caption">
                        <h3>Engaging Purposeful
                            <span>and Creative</span>
                        </h3>
                       
                    </div>
                </div>
                
                
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
</div>


<section class="main-content-w3layouts-agileits">
        <div class="container">
            <div class="row">
                <!--left-->
                <div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
                    <div class="blog-grid-top">
                        <div class="b-grid-top">
                            <div class="blog_info_left_grid">
                                <a href="single.html">
                                    <img src="images/b1.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="blog-info-middle">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="far fa-calendar-alt"></i> FEB 15,2018</a>
                                    </li>
                                    <li class="mx-2">
                                        <a href="#">
                                            <i class="far fa-thumbs-up"></i> 201 Likes</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="far fa-comment"></i> 15 Comments</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>

                        <h3>
                            <a href="single.html">About Placement Plortal</a>
                        </h3>
                        <p style="text-align: justify; color: #000;">This application will perform various tasks for student, college, university and administration. Our application show the placement analytics and it also helps to find job.  This project helps a better student support and work time-saving factor. It show the employment and unemployment ratio. And company can find best employee for their work.  
</p>
                        <!-- <a href="single.html" class="btn btn-primary read-m">Read More</a> -->
                    </div>
                    <!--//silder-->
                    

                    <!--//silder-->
                
                </div>
                <!--//left-->
                <!--right-->
                <aside class="col-lg-4 agileits-w3ls-right-blog-con text-right">
                    <div class="right-blog-info text-left">
                        <div class="tech-btm">
                            <img src="images/banner1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="tech-btm">
                            <h4>Sign up to our newsletter</h4>
                            <form action="#" method="post">
                                <input type="email" placeholder="Email" required="">
                                <input type="submit" value="Subscribe">
                            </form>

                        </div>
                        <div class="tech-btm widget_social">
                            <h4>Stay Connect</h4>
                            <ul>

                                <li>
                                    <a class="twitter" href="#">
                                        <i class="fab fa-twitter"></i>
                                        <span class="count">317K</span> Twitter Followers</a>
                                </li>
                                <li>
                                    <a class="facebook" href="#">
                                        <i class="fab fa-facebook-f"></i>
                                        <span class="count">218k</span> Twitter Followers</a>
                                </li>
                                <li>
                                    <a class="dribble" href="#">
                                        <i class="fab fa-dribbble"></i>

                                        <span class="count">215k</span> Dribble Followers</a>
                                </li>
                                <li>
                                    <a class="pin" href="#">
                                        <i class="fab fa-pinterest"></i>
                                        <span class="count">190k</span> Pinterest Followers</a>
                                </li>

                            </ul>
                        </div>
                        
                    </div>

                </aside>
                <!--//right-->
            </div>
        </div>
    </section>










@stop