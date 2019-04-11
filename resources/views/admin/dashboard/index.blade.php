@extends('admin.master')

@section('css')

    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">

@endsection

@section('content')

    <div class="container">
    	<h2>INDICADORES</h2>
    	<br>
        <div class="row">
        	<div class="col-md-6">
        		<h3>Prueba 1</h3>
        		<hr>
        			<div id="prueba1"></div>
        	</div>
        	<div class="col-md-6">
        		<h3>Prueba 2</h3>
        		<hr>
        		<div>
        			<div id="prueba2"></div>
        		</div>
        	</div>
        </div>
        <br>
        <div class="row">
        	<div class="col-md-6">
        		<h3>Prueba 3</h3>
        		<hr>
        			<div id="prueba3"></div>
        	</div>
        	<div class="col-md-6">
        		<h3>Prueba 4</h3>
        		<hr>
        		<div>
        			<div id="prueba4"></div>
        		</div>
        	</div>
        </div>
    </div>

@endsection

@section('js')

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

    <script type="text/javascript">
    	
    	Morris.Donut({
		    element: 'prueba1',
		    resize: true,
		    data: [
		        {value: 5, label: 'foo'},
		        {value: 15, label: 'bar'},
		        {value: 10, label: 'baz'},
		        {value: 70, label: 'A really really long label'}
		      ],
		      	formatter: function (x) { return x + "%"}
		    		}).on('click', function(i, row){
		    	console.log(i, row);
		    });

		Morris.Bar({
			element: 'prueba2',
			resize: true,
			data: [
			    {x: '2011 Q1', y: 1},
			    {x: '2011 Q2', y: 2},
			    {x: '2011 Q3', y: 3},
			    {x: '2011 Q4', y: 4},
			    {x: '2012 Q1', y: 5},
			    {x: '2012 Q2', y: 6},
			    {x: '2012 Q3', y: 7},
			    {x: '2012 Q4', y: 8},
			    {x: '2013 Q1', y: 9}
			],
			xkey: 'x',
			ykeys: ['y'],
			labels: ['Y'],
			barColors: function (row, series, type) {
			    if (type === 'bar') {
			    	var red = Math.ceil(255 * row.y / this.ymax);
			    	return 'rgb(' + red + ',0,0)';
			    }
			    else {
			    	return '#000';
			    	}
			    }
			});

		Morris.Area({
  			element: 'prueba4',
  			resize: true,
			data: [
    			{x: '2010 Q4', y: 3, z: 7},
    			{x: '2011 Q1', y: 3, z: 4},
   				{x: '2011 Q2', y: null, z: 1},
    			{x: '2011 Q3', y: 2, z: 5},
    			{x: '2011 Q4', y: 8, z: 2},
    			{x: '2012 Q1', y: 4, z: 4}
  			],
  			xkey: 'x',
  			ykeys: ['y', 'z'],
  			labels: ['Y', 'Z']
			}).on('click', function(i, row){
  				console.log(i, row);
			});

		var day_data = [
			{"period": "2012-10-01", "licensed": 3407, "sorned": 660},
			{"period": "2012-09-30", "licensed": 3351, "sorned": 629},
			{"period": "2012-09-29", "licensed": 3269, "sorned": 618},
			{"period": "2012-09-20", "licensed": 3246, "sorned": 661},
			{"period": "2012-09-19", "licensed": 3257, "sorned": 667},
			{"period": "2012-09-18", "licensed": 3248, "sorned": 627},
			{"period": "2012-09-17", "licensed": 3171, "sorned": 660},
			{"period": "2012-09-16", "licensed": 3171, "sorned": 676},
			{"period": "2012-09-15", "licensed": 3201, "sorned": 656},
			{"period": "2012-09-10", "licensed": 3215, "sorned": 622}
		];

		new Morris.Line({
			// ID of the element in which to draw the chart.
			element: 'prueba3',
			// Chart data records -- each entry in this array corresponds to a point on
			// the chart.
			data: [
			    { year: '2015', value: 20, value2: 10},
			    { year: '2016', value: 10, value2: 5 },
			    { year: '2017', value: 5, value2: 20 },
			    { year: '2018', value: 5, value2: 30 },
			    { year: '2019', value: 20, value2: 7 }
			],
			// The name of the data record attribute that contains x-values.
			xkey: 'year',
			// A list of names of data record attributes that contain y-values.
			ykeys: ['value','value2'],
			// Labels for the ykeys -- will be displayed when you hover over the
			// chart.
			labels: ['Coca Cola', 'Pepsi'],
			resize: true,
			lineColors: ['red', 'blue'],
			lineWidth: 1
		});
    </script>

@endsection