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
                        <h3>Create the lifestyle
                            <span>you desire</span>
                        </h3>
                        <div class="read">
                            <a href="single.html" class="btn btn-primary read-m">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item item2">
                    <div class="carousel-caption">
                        <h3>Engaging Purposeful
                            <span>and Creative</span>
                        </h3>
                        <div class="read">
                            <a href="single.html" class="btn btn-primary read-m">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item item3">
                    <div class="carousel-caption">
                        <h3>Create the lifestyle
                            <span>you desire</span>
                        </h3>
                        <div class="read">
                            <a href="single.html" class="btn btn-primary read-m">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item item4">
                    <div class="carousel-caption">
                        <h3>Engaging Purposeful
                            <span>and Creative</span>
                        </h3>
                        <div class="read">
                            <a href="single.html" class="btn btn-primary read-m">Read More</a>
                        </div>
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
@stop