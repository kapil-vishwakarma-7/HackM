<link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light/all.min.css" />
@extends('layouts.front')

@section('body')

<div class="banner-inner2">
	</div>
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="{{ url('/') }}">Home</a>
		</li>
		<li class="breadcrumb-item active">placement</li>
	</ol>
	<!--//banner-->

	<!--/main-->
	<section class="main-content-w3layouts-agileits">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
			<h3 class="tittle">About Placement</h3>
			<div class="inner-sec">
			<p style="text-align: justify;">
				The major objective of campus placement is to identify the talented and qualified professionals before they complete their education. It provide employment opportunities to the students who are perusing or in the final stage of completing the course. This process reduces the time for an industry to pick the candidates according to their need.It is a cumbersome activity and hence majority of the companies find it difficult to trace the right talent. Many students do not understand the importance of placement training that is being imparted, whether it is an aptitude training or soft skills. They show the least interest in this due to various factors viz., projects, assignments or more of activities loaded by the colleges as part of their curriculum thinking that it is not useful. It is the responsibility of the companies training on placement to make the students equipped on all aspects of career development along with creating a very good impact in them which makes them feel every minute they spend in the placement training session is worth being there and will help them in getting placed in their dream companies.
			</p>
			</div>
			<br>
			<div class="col-md-12">
				<div class="container">
    <div class="row">
        <div class="col-md-10">
            
                
               <div id="chartContainer" style="min-height: 370px; max-width: 100%; margin: 0px auto;"></div>
            </div>
     
      
    </div>   
</div>


			</div>
			</div>
			</div>
		</div>

	</section>

<!-- <div id="chartContainer" style="height: 300px; width: 100%;"></div>
 --><script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Top College Placements"
	},
	axisY: {
		title: "Placement"
	},
	data: [{        
		type: "column",  
		showInLegend: true, 
		legendMarkerColor: "grey",
		legendText: "Colleges",
		dataPoints: [
			@foreach($bardata as $e)
						{ y: {{$e->total}}, label: "{{$e->college->name}}" },
			
			@endforeach
		]
	}]
});
chart.render();
}
</script>
@stop