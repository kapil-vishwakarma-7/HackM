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
				<div class="col-md-8">
			<h3 class="tittle">About Placement</h3>
			<div class="inner-sec">
			<p style="text-align: justify;">
				The major objective of campus placement is to identify the talented and qualified professionals before they complete their education. It provide employment opportunities to the students who are perusing or in the final stage of completing the course. This process reduces the time for an industry to pick the candidates according to their need.It is a cumbersome activity and hence majority of the companies find it difficult to trace the right talent. Many students do not understand the importance of placement training that is being imparted, whether it is an aptitude training or soft skills. They show the least interest in this due to various factors viz., projects, assignments or more of activities loaded by the colleges as part of their curriculum thinking that it is not useful. It is the responsibility of the companies training on placement to make the students equipped on all aspects of career development along with creating a very good impact in them which makes them feel every minute they spend in the placement training session is worth being there and will help them in getting placed in their dream companies.
			</p>
			</div>
			</div>
			<div class="col-md-4">
				<div id="piechartContainer" style="height: 370px; width: 100%;">
			</div>
			</div>
			<br>
			<div class="col-md-12">
				<div class="container">
    <div class="row">
        <div class="col-md-10">
            
                
               <div id="chartContainer" style="min-height: 370px; max-width: 100%; margin: 0px auto;"></div>
            </div>
     
      
    </div>
<br><br><br>
    <div class="row">
    	<div id="chartContainer1" style="height: 300px; width: 100%;"></div>
    </div>
    <div class="row">
    
    	<div id="linechartContainer" style="height: 300px; width: 100%;"></div>
    </div>
   
   
</div>


			</div>
			</div>
			</div>
		</div>

	</section>

	


<!-- <div id="chartContainer" style="height: 300px; width: 100%;"></div>
 --><script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Top College Placements (2012) " 
	},
	axisY: {
		title: "No. of Students"
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





var piechart = new CanvasJS.Chart("piechartContainer", {
	theme: "light2",
	animationEnabled: true,
	title: {
		text: "Placement Chart"
	},
	
	data: [{
		type: "pie",
		indexLabelFontSize: 18,
		radius: 80,
		indexLabel: "{label} - {y}",
		yValueFormatString: "###0.0\"%\"",
		click: explodePie,
		dataPoints: [
			{ y: {{$p_placed}}, label: "Placed Students in 2012" },
			{ y: {{$p_notplaced}}, label: "Not Placed Students in 2012"},
			
		]
	}]
});
piechart.render();

function explodePie(e) {
	for(var i = 0; i < e.dataSeries.dataPoints.length; i++) {
		if(i !== e.dataPointIndex)
			e.dataSeries.dataPoints[i].exploded = false;
	}
}



var chartl = new CanvasJS.Chart("chartContainer1", {
	animationEnabled: true,
	theme: "light1", // "light1", "light2", "dark1", "dark2"
	title: {
		text: "University(RGPV) College Placements [2012]"
	},

	

	axisY: {
		title: "No. of Students",
		suffix: "",
		includeZero: false
	},
	axisX: {
		title: "College"
	},
	data: [{
		type: "column",
		yValueFormatString: "#",
		dataPoints: [
			@foreach($u_placed as $u)
				{ label: "{{$u['college']->name}}" , y: {{$u['placement']}} },
			@endforeach	
		]
	}]
});
chartl.render();




}




var options = {
	animationEnabled: true,  
	title:{
		text: "Placement Record"
	},
	subtitles: [{
		text: "This is the placement record of a state. The data is shown below is from year 2005 to 2013 .",
		
	}],
	axisX: {
		valueFormatString: "YYYY"
	},
	axisY: {
		title: "No. of Students",
		prefix: "",
		includeZero: false
	},
	data: [{
		yValueFormatString: "###",
		xValueFormatString: "YYYY",
		type: "spline",
		dataPoints: [
			@foreach($year_data as $e)
					{ x: new Date("{{$e['year']}}") , y: {{$e['placed'] }} },
			@endforeach
		]
	}]
};
$("#linechartContainer").CanvasJSChart(options);



//fnggn


</script>

@stop