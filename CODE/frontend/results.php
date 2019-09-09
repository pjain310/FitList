<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!-- Title -->
    <title>Results</title>
	<!-- Place favicon.ico in the root directory -->
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="shortcut icon" type="image/ico" href="images/favicon.ico" />
	<!-- Plugin-CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/animate.css">
	<!-- Main-Stylesheets -->
	<link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
	<script src="js/vendor/modernizr-2.8.3.min.js"></script>
	<!-- DataTable -->
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <!-- Nutrifacts -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/style.css">

  <!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> -->
  <script type="module" src="node_modules/spin.js/spin.js"></script>


  		<style type="text/css">

      .chart-gauge
    {
      width: 400px;
      margin: 100px;
	  fill: yellow;
     }
     .chart-gauge2     {
       width: 400px;
       margin: 100px;
      }
      .chart-gauge3
    {
      width: 400px;
      margin: 100px;
     }
     .chart-gauge4     {
       width: 400px;
       margin: 100px;
      }

  			.chart-filled1
  			{
  				fill: gold;
  			}
			.chart-filled2
  			{
  				fill: red;
  			}
			.chart-filled3
  			{
  				fill: purple;
  			}
			.chart-filled4
  			{
  				fill: green;
  			}
  			.chart-empty
  			{
  				fill: #dedede;
  			}

  			.needle, .needle-center
  			{
  				fill: #464A4F;
  			}

  			svg {
  			  font: 20px sans-serif;
  			}


  #table-location {
		margin: 0 auto;
	    width: 50%;
	}
  object.fixed {
  position: relative;
  bottom: 0;
  right: 100;
}
		button {
		  text-decoration: none;
		  display: inline-block;
		  padding: 8px 16px;
		  border: 0px;
		}

		button:hover {
		  background-color: #ddd;
		  color: black;
		}

		.previous {
		  background-color: #f1f1f1;
		  font-size: 20px;
		  color: black;
		}

		.next {
		  background-color: #f1f1f1;
		  font-size: 20px;
		  color: black;
		}

		.round {
		  border-radius: 50%;
		  font-weight: bolder;
		  color: black;
		}

    div.tooltip {
    position: absolute;
    text-align: left;
    width: 150px;
    height: 80px;
    padding: 2px;
    font: 12px sans-serif;
    background: lightsteelblue;
    border: 0px;
    border-radius: 8px;
    pointer-events: none;
}

		.remove {
		  background-color: #f2fefe;
		  border-radius: 50%;
		}
		.remove:hover {
		  background-color: #f2fefe;
		  color: red;
		}

		.add {
		  background-color: #f2fefe;
		  border-radius: 50%;
		}
		.add:hover {
		  background-color: #f2fefe;
		  color: blue;
		}

		.swap {
		  background-color: #f2fefe;
		  border-radius: 50%;
		}
		.swap:hover {
		  background-color: #f2fefe;
		  color: green;
		}

		.unclickable {
		  pointer-events: none;
		  background-color: white;
		}
		tr.row_selected td {
			background-color: #138fc2;
			color: white;
		}

		.loader {
		  border: 16px solid #ffffff; /* Light grey */
		  border-top: 16px solid #3498db; /* Blue */
		  border-radius: 50%;
		  width: 120px;
		  height: 120px;
		  position: relative;
		  margin: auto;
		  animation: spin 2s linear infinite;
		}

		@keyframes spin {
		  0% { transform: rotate(0deg); }
		  100% { transform: rotate(360deg); }
		}
		.list {
			width: 60%;
			margin: auto;
		}
	</style>
</head>
<body data-spy="scroll" data-target="#primary-menu">
	<div class="preloader">
		<div class="sk-folding-cube">
			<div class="sk-cube1 sk-cube"></div>
			<div class="sk-cube2 sk-cube"></div>
			<div class="sk-cube4 sk-cube"></div>
			<div class="sk-cube3 sk-cube"></div>
		</div>
	</div>
    <!--Mainmenu-area-->
    <div class="mainmenu-area affix" data-offset-top="100">
        <div class="container">
            <!--Logo-->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php" class="navbar-brand logo">
                    <h2>FITLIST</h2>
                </a>
            </div>
            <!--Logo/-->
            <nav class="collapse navbar-collapse" id="primary-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="/frontend/">Home</a></li>
                </ul>
            </nav>
        </div>
    </div>


	<section class="gray-bg section-padding" id="service-page">
		<!-- <p>SPACE</p> -->
		<!-- <span id="leftButtonWrapper"></span> -->
		<!-- <span id="rightButtonWrapper"></span> -->
		<!-- <p>SPACE</p> -->

		<div id="itemSearch" style="width: 60%; margin: 0 20% 0 20%; display: none;">

			<h2>Add Items</h2>
			<p>Click on a row to an add item to your grocery list. When finished, click 'Done'.</p>
			<button id="clearAdded" onclick="clearAdded()">Clear Added Items</button>
			<div class="loader" id="loader"></div>
			<table id="table_id" class="display" style="width:100%; display: none;">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>ID</th>
						<th>Name</th>
					</tr>
				</tfoot>
			</table><br>
			<button style="display: block; margin: 0 auto;" id="done" onclick="hideTable()">Done</button>
		</div>

		<!-- List area -->
		<div id="list-area" style="text-align: center; position: relative;">
			<h2 class="list">Your Grocery List</h2>
			<div id="button-wrapper" class="list">
			    <span id="leftButtonWrapper" style="display: inline-block; position: absolute; top: 2%; left: 0%; transform: translate(500%, -50%)"></span>
				<button class="add round" id="add" onclick="addItem()">Add</button>
				<button class="remove round" id="remove" onclick="removeItem()">Remove</button>
				<!-- <button class="swap round" id="remove">&#8644;</button> -->
				<button class="swap round" id="swap" onclick="swapItem()">Swap</button>
				<span id="rightButtonWrapper" style="display: inline-block;   position: absolute; top: 2%; right: 0%; transform: translate(-500%, -50%)"></span>
			</div>

			<!--
			<span id="leftButtonWrapper" style="float: left; display: inline; transform: translate(-0%, 200%);"></span>
			<div style="float: left; display: inline; width: 60%; margin: auto;" id="table-location">
			</div>
			<span id="rightButtonWrapper" style="float: left; display: inline; transform: translate(-0%, 200%);"></span>
			-->
      <!-- Left Guages -->
      <div style="display: inline-block;position: absolute; display: inline;float: left; width: 0%; left: 25px; transform: translate(0%, 0%); margin: auto;" id = "c1" class="chart-gauge">
      </div>
      <div style="display: inline-block;position: absolute; display: inline;float: left; width: 0%; left: 25px; transform: translate(0%, 60%); margin: auto;" id = "c1" class="chart-gauge2">
      </div>

			<div style="clear: none; display: inline-block; width: 60%; margin: auto;" id="table-location">
		  </div>

      <!-- Right Guages -->
      <div style="display: inline-block;position: absolute; display: inline; float: left; width: 0%; left: 1125px; transform: translate(0%, 0%); margin: 0;" id = "c1" class="chart-gauge3">
      </div>
      <div style="display: inline-block;position: absolute; display: inline; float: left; width: 0%; left: 1125px; transform: translate(0%, 60%); margin: 0;" id = "c1" class="chart-gauge4">
      </div>


		<div style="clear: both;">
		</div>

  </div>
	</section>



<!-- <object id="nutri" class="fixed" data="nutri.html" width="400" height="900" type="text/html"></object> -->
	Form correctly filled out
	<?php
	session_start();
	$javaOutput = $_SESSION['javaOutput'];
	// echo "<h2>JavaOutput:</h2>";
	// echo "<p>[0] ", $javaOutput[0], "</p>"; // nihEnergy, nihProtein, nihCarb, nihFiber

	$split = explode(",", $javaOutput[0]);
	$nihEnergy = $split[0];
	$nihProtein = $split[1];
	$nihCarb = $split[2];
	$nihFiber = $split[3];

	// Read all of the grocery lists into an array
	// Each grocery list itself is an array of item IDs
	// echo sizeof($javaOutput);
	$glists = array();
	for ($i = 2; $i < sizeOf($javaOutput); $i++) {
		$glists[$i-2] = explode(",", $javaOutput[$i]);
	}
	$curListIndex = 0;
	$curList = $glists[$curListIndex];
	// var_dump($curList);

	// Read tsv
	$dict = array();
	$delimiter = "\t";
	$fp = fopen('sample_with_codes.tsv', 'r');

	while ( !feof($fp) ) {
		$line = fgets($fp, 2048);
		$data = str_getcsv($line, $delimiter);
		$dict[$data[0]] = $data;
	}
	fclose($fp);
	?>
	<!-- <script type="module" src="spin.js/spin.js"> -->
	<script src="http://d3js.org/d3.v3.min.js"></script>
	<script type="text/javascript">
		// Spinner

		// Get Data from PHP
		var glists = <?php echo json_encode($glists); ?>;
		var dict = <?php echo json_encode($dict); ?>;
		var total_nutri = <?php echo json_encode($split); ?>;
		var recentAdditions = [];
		//var curListIndex = "<?php Print($curListIndex); ?>";
		var curListIndex = 0;
		//var curList = <?php echo json_encode($glists[$curListIndex]); ?>;
		var curList = glists[0];
		console.log(total_nutri[0]);
		createTable(curList, "normal");
		rightButtonFunction();
		leftButtonFunction();

    function add(accumulator, a) {
    return accumulator + a;
}
    function createTable(curList, mode) {
			var curdata = curList.map(function(row){return dict[row]})
			var tabledata = curdata.map(function(row){return row[5]})
      var caldata = curdata.map(function(row){return row[1]})
      var protdata = curdata.map(function(row){return row[2]})
      var carbdata = curdata.map(function(row){return row[3]})
      var fiberdata = curdata.map(function(row){return row[4]})


			var tot_1 = curdata.map(function(row){return parseInt(row[1])}).reduce(add)
			var tot_2 = curdata.map(function(row){return parseInt(row[2])}).reduce(add)
			var tot_3 = curdata.map(function(row){return parseInt(row[3])}).reduce(add)
			var tot_4 = curdata.map(function(row){return parseInt(row[4])}).reduce(add)

			var perc_1 = (tot_1/total_nutri[0] * 100).toFixed(0);
			var perc_2 = (tot_2/total_nutri[1] * 100).toFixed(0);
			var perc_3 = (tot_3/total_nutri[2] * 100).toFixed(0);
			var perc_4 = (tot_4/total_nutri[3] * 100).toFixed(0);

			console.log(tot_1/total_nutri[0]);
			console.log(tot_2/total_nutri[1]);
			console.log(tot_3/total_nutri[2]);
			console.log(tot_4/total_nutri[3]);


      			// PROPORTION GAUGE BEGINS HERE
      			var needle;
      			// (function(){

      			var barWidth, chart, chartInset, degToRad, repaintGauge,
      				height, margin, numSections, padRad, percToDeg, percToRad,
      				percent, radius, sectionIndx, svg, totalPercent, width;

      			percent = .65;
      			numSections = 1;
      			sectionPerc = 1 / numSections / 2;
      			padRad = 0.025;
      			chartInset = 10;

      			// Orientation of gauge:
      			totalPercent = .75;

            el = d3.select('.chart-gauge');
            el2 = d3.select('.chart-gauge2');
             el3 = d3.select('.chart-gauge3');
              el4 = d3.select('.chart-gauge4');

      			margin = {
      			top: 20,
      			right: 20,
      			bottom: 30,
      			left: 20
      			};

      			width = 220 - margin.left - margin.right;
      			height = width;
      			radius = Math.min(width, height) / 2;
      			barWidth = 40 * width / 300;


      			//UNCOMMENT
      			percToDeg = function(perc) {
      			return perc * 360;
      			};

      			percToRad = function(perc) {
      				return degToRad(percToDeg(perc));
      			};

      			degToRad = function(deg) {
      				return deg * Math.PI / 180;
      			};

      			// Create SVG element
            svg = el.append('svg').attr("id","c_1").attr('width', width + margin.left + margin.right).attr('height', height + margin.top + margin.bottom).attr('fill', 'yellow');
            svg2 = el2.append('svg').attr("id","c_1").attr('width', width + margin.left + margin.right).attr('height', height + margin.top + margin.bottom);

      			// Add layer for the panel
      			chart = svg.append('g').attr('transform', "translate(" + ((width + margin.left) / 2) + ", " + ((height + margin.top) / 2) + ")").attr('fill', "yellow");
      			chart.append('path').attr('class', "arc chart-filled1");
      			chart.append('path').attr('class', "arc chart-empty");

            chart2 = svg2.append('g').attr('transform', "translate(" + ((width + margin.left) / 2) + ", " + ((height + margin.top) / 2) + ")");
            chart2.append('path').attr('class', "arc chart-filled2");
            chart2.append('path').attr('class', "arc chart-empty");

            svg3 = el3.append('svg').attr("id","c_1").attr('width', width + margin.left + margin.right).attr('height', height + margin.top + margin.bottom);
            svg4 = el4.append('svg').attr("id","c_1").attr('width', width + margin.left + margin.right).attr('height', height + margin.top + margin.bottom);

      			// Add layer for the panel
      			chart3 = svg3.append('g').attr('transform', "translate(" + ((width + margin.left) / 2) + ", " + ((height + margin.top) / 2) + ")");
      			chart3.append('path').attr('class', "arc chart-filled3");
      			chart3.append('path').attr('class', "arc chart-empty");

            chart4 = svg4.append('g').attr('transform', "translate(" + ((width + margin.left) / 2) + ", " + ((height + margin.top) / 2) + ")");
            chart4.append('path').attr('class', "arc chart-filled4");
            chart4.append('path').attr('class', "arc chart-empty");
            chart.append("svg:text")
            .attr("dy", 25)
						.attr("text-anchor", "middle")
						.text("Calories " + perc_1 + "%")
						.style("fill", "#333")
						.style("stroke-width", "0px");

            chart2.append("svg:text")
            .attr("dy", 25)
						.attr("text-anchor", "middle")
						.text("Protein " + perc_2 + "%")
						.style("fill", "#333")
						.style("stroke-width", "0px");
            chart3.append("svg:text")
            .attr("dy", 25)
						.attr("text-anchor", "middle")
						.text("Carbohydrates " + perc_3 + "%")
						.style("fill", "#333")
						.style("stroke-width", "0px");
            chart4.append("svg:text")
            .attr("dy", 25)
						.attr("text-anchor", "middle")
						.text("Fiber " + perc_4 + "%")
						.style("fill", "#333")
						.style("stroke-width", "0px");

      			arc2 = d3.svg.arc().outerRadius(radius - chartInset).innerRadius(radius - chartInset - barWidth)
      			arc1 = d3.svg.arc().outerRadius(radius - chartInset).innerRadius(radius - chartInset - barWidth)

      			repaintGauge = function (perc)
      			{
      			var next_start = totalPercent;
      			arcStartRad = percToRad(next_start);
      			arcEndRad = arcStartRad + percToRad(perc / 2);
      			next_start += perc / 2;


      			arc1.startAngle(arcStartRad).endAngle(arcEndRad);

      			arcStartRad = percToRad(next_start);
      			arcEndRad = arcStartRad + percToRad((1 - perc) / 2);

      			arc2.startAngle(arcStartRad + padRad).endAngle(arcEndRad);


      			chart.select(".chart-filled1").attr('d', arc1);
      			chart.select(".chart-empty").attr('d', arc2);


      			}
            repaintGauge2 = function (perc)
      			{
      			var next_start = totalPercent;
      			arcStartRad = percToRad(next_start);
      			arcEndRad = arcStartRad + percToRad(perc / 2);
      			next_start += perc / 2;


      			arc1.startAngle(arcStartRad).endAngle(arcEndRad);

      			arcStartRad = percToRad(next_start);
      			arcEndRad = arcStartRad + percToRad((1 - perc) / 2);

      			arc2.startAngle(arcStartRad + padRad).endAngle(arcEndRad);


            chart2.select(".chart-filled2").attr('d', arc1);
      			chart2.select(".chart-empty").attr('d', arc2);


      			}
            repaintGauge3 = function (perc)
      			{
      			var next_start = totalPercent;
      			arcStartRad = percToRad(next_start);
      			arcEndRad = arcStartRad + percToRad(perc / 2);
      			next_start += perc / 2;


      			arc1.startAngle(arcStartRad).endAngle(arcEndRad);

      			arcStartRad = percToRad(next_start);
      			arcEndRad = arcStartRad + percToRad((1 - perc) / 2);

      			arc2.startAngle(arcStartRad + padRad).endAngle(arcEndRad);



            chart3.select(".chart-filled3").attr('d', arc1);
      			chart3.select(".chart-empty").attr('d', arc2);


      			}
            repaintGauge4 = function (perc)
      			{
      			var next_start = totalPercent;
      			arcStartRad = percToRad(next_start);
      			arcEndRad = arcStartRad + percToRad(perc / 2);
      			next_start += perc / 2;


      			arc1.startAngle(arcStartRad).endAngle(arcEndRad);

      			arcStartRad = percToRad(next_start);
      			arcEndRad = arcStartRad + percToRad((1 - perc) / 2);

      			arc2.startAngle(arcStartRad + padRad).endAngle(arcEndRad);



            chart4.select(".chart-filled4").attr('d', arc1);
      			chart4.select(".chart-empty").attr('d', arc2);

      			}

      		var Needle = (function() {

      				// Helper function that returns the `d` value for moving the needle

      		var recalcPointerPos = function(perc) {
      			var centerX, centerY, leftX, leftY, rightX, rightY, thetaRad, topX, topY;
      			thetaRad = percToRad(perc / 2);
      			centerX = 0;
      			centerY = 0;
      			topX = centerX - this.len * Math.cos(thetaRad);
      			topY = centerY - this.len * Math.sin(thetaRad);
      			leftX = centerX - this.radius * Math.cos(thetaRad - Math.PI / 2);
      			leftY = centerY - this.radius * Math.sin(thetaRad - Math.PI / 2);
      			rightX = centerX - this.radius * Math.cos(thetaRad + Math.PI / 2);
      			rightY = centerY - this.radius * Math.sin(thetaRad + Math.PI / 2);
      			return "M " + leftX + " " + leftY + " L " + topX + " " + topY + " L " + rightX + " " + rightY;
      		};

      		function Needle(el) {
      			this.el = el;
      			this.len = width / 3;
      			this.radius = this.len / 6;
      		}

      		Needle.prototype.render = function() {
      			this.el.append('circle').attr('class', 'needle-center').attr('cx', 0).attr('cy', 0).attr('r', this.radius);
      			return this.el.append('path').attr('class', 'needle').attr('d', recalcPointerPos.call(this, 0));
      		};

      		Needle.prototype.moveTo = function(perc, item) {
      			var self,
      				oldValue = this.perc || 0;

      			this.perc = perc;
      			self = this;

      			// Reset pointer position
      			this.el.transition().delay(100).ease('quad').duration(200).select('.needle').tween('reset-progress', function() {
      				return function(percentOfPercent) {
      					var progress = (1 - percentOfPercent) * oldValue;

      					repaintGauge(progress);
      					return d3.select(this).attr('d', recalcPointerPos.call(self, progress));
      				};
      			});

      			this.el.transition().delay(300).ease('bounce').duration(1500).select('.needle').tween('progress', function() {
      				return function(percentOfPercent) {
      					var progress = percentOfPercent * perc;

                if (item ==1) {
                  repaintGauge(progress);
                }
                else if (item ==2) {
                  repaintGauge2(progress);
                }
                else if (item ==3) {
                  repaintGauge3(progress);
                }
                else {
                  repaintGauge4(progress);
                }


      					return d3.select(this).attr('d', recalcPointerPos.call(self, progress));
      				};
      			});
      		};
      		return Needle;


      	})();


      needle = new Needle(chart);
      needle.render();

      needle.moveTo(tot_1/total_nutri[0],1);
      needle2 = new Needle(chart2);
      needle2.render();

      needle2.moveTo(tot_2/total_nutri[1],2);
      needle3 = new Needle(chart3);
      needle3.render();

      needle3.moveTo(tot_3/total_nutri[2],3);
      needle4 = new Needle(chart4);
      needle4.render();

      needle4.moveTo(tot_4/total_nutri[3],4);


			var svg = d3.select("body").append("svg")
				.attr("height", 1)
				.attr("width", 1);

        var div = d3.select("body").append("div")
            .attr("class", "tooltip")
            .style("opacity", 0);

				var table = d3.select("#table-location")
					.append("table")
					.attr("id", "tableobj")
					//.style("max-height", "200px")
					.style("color", "rgb(0, 0, 1)")
					.attr("class", "table table-condensed table-striped"),
					thead = table.append("thead"),
					tbody = table.append("tbody");


							var rows = tbody.selectAll("tr")
								.data(tabledata)
								.enter()
								.append("tr")
								.on("mouseover", function(d,i){
									if (mode == "normal") {
										d3.select(this)
											.style("background-color", "orange");
                      div.transition()
                .duration(200)
                .style("opacity", .9);
            div	.html("<strong>Calories:</strong>"+caldata[i]+ "<br/>"  +"<strong>Protein:</strong>"+ protdata[i]+ "<br/>"  +"<strong>Carbohydrates:</strong>"+carbdata[i]+ "<br/>"  +"<strong>Fiber:</strong>"+fiberdata[i])
                .style("left", (d3.event.pageX) + "px")
                .style("top", (d3.event.pageY - 50) + "px");
									}
									if (mode == "remove") {
										d3.select(this)
										.style("background-color", "rgb(244, 66, 66)");
									}
									if (mode == "swap") {
										d3.select(this)
										.style("background-color", "limegreen");
									}
								})
								.on("click", function(d, i) {

                  if (mode != "remove" && mode != "remove") {
										window.open("https://www.google.com/search?tbm=shop&hl=en&source=hp&biw=&bih=&q="+d.replace(/" "/g, '+').replace(/&/, ' and '));
									}

									if (mode == "remove") {
										var index = curList.indexOf(curdata[i][0]);
										if (index !== -1) curList.splice(index, 1);
										d3.select(this).remove();
									}
									if (mode == "swap") {
										var curProductCode = curdata[i][0];
										var replacement = distance_match(curProductCode); // returns the product code of a replacement product
										//document.cookie = "curNutrientCode = " . curNutrientCode;
										//var replacement = <?php exec("python distance_match.py " . $_COOKIE["curNutrientCode"]); ?>;
										var index = curList.indexOf(curdata[i][0]);
										if (index !== -1) curList.splice(index, 1, replacement);
										curdata[i][0] = replacement;
										//d3.select(this).select("td").text("BANANA").attr("class","table table-condensed table-striped");
										console.log(curdata[i][0]);
										console.log(dict[replacement][5]);
										d3.select(this).select("td").text(dict[replacement][5]);
									}
								})
								.on("mouseout", function(d){
									//d3.select(this)
									//	.style("background-color","transparent");
									d3.select(this).style("background-color", null);
                  div.transition()
                .duration(500)
                .style("opacity", 0);
								});

								var cells = rows.selectAll("td")
									.data(function(row){
										return [row];
									})
									.enter()
									.append("td")
									.html(function(d,i){ if (i==0) {
										return d;
									} });

			console.log("Table Created");
		}

		function incrementList() {
			d3.selectAll("#tableobj").remove();d3.selectAll("#c_1").remove()

			curListIndex += 1;
			if (curListIndex > glists.length) {
				curListIndex = glists.length - 1;
			}
			curList = glists[curListIndex];
			createTable(curList, "normal");
			console.log(curList);
			console.log(curListIndex);
			leftButtonFunction();
			rightButtonFunction();
		}

		function deIncrementList() {
			d3.selectAll("#tableobj").remove();d3.selectAll("#c_1").remove()

			curListIndex -= 1;
			if (curListIndex < 0) {
				curListIndex = 0;
			}
			curList = glists[curListIndex];
			createTable(curList, "normal");
			console.log(curList);
			console.log(curListIndex);
			leftButtonFunction();
			rightButtonFunction();
		}

		function leftButtonFunction(){
			console.log(curListIndex);
			if (curListIndex > 0) {
				document.getElementById("leftButtonWrapper").innerHTML = '<button class="previous round" onclick="deIncrementList()">&#8249;</button>';
			} else {
				document.getElementById("leftButtonWrapper").innerHTML = '<button class="previous round unclickable" onclick="deIncrementList()">&#8249;</button>';
			}
		}
		function rightButtonFunction(){
			if (curListIndex < glists.length-1) {
				document.getElementById("rightButtonWrapper").innerHTML = '<button class="next round" onclick="incrementList()">&#8250;</button>';
			} else {
				document.getElementById("rightButtonWrapper").innerHTML = '<button class="next round unclickable" onclick="incrementList()">&#8250;</button>';
			}
		}

		function removeItem() {
			var x = document.getElementById("remove");
			if (x.style.color === "red") {
				//x.style.color = "black";
				x.removeAttribute("style");
				d3.selectAll("#tableobj").remove();d3.selectAll("#c_1").remove()
				createTable(curList, "normal");
			} else {
				x.style.color = "red";
				d3.selectAll("#tableobj").remove();d3.selectAll("#c_1").remove()
				createTable(curList, "remove");
			}
		}

		function swapItem() {
			var x = document.getElementById("swap");
			console.log("SWAPPING");
			if (x.style.color === "green") {
				x.removeAttribute("style");
				d3.selectAll("#tableobj").remove();d3.selectAll("#c_1").remove()
				createTable(curList, "normal");
			} else {
				x.style.color = "green";
				d3.selectAll("#tableobj").remove();d3.selectAll("#c_1").remove()
				createTable(curList, "swap");
			}

		}

		function distance_match(unpacked_product_code) {
			/**
				Takes a product id as an input and returns a product id of a replacement product.
			**/
			console.log("Swapping. Input Product Code: " + unpacked_product_code + ". Input item name: " + dict[unpacked_product_code][5]);
			var prod_ids = Object.keys(dict);
			var nut_ids =[];
			for (var key in dict) {
				nut_ids.push(dict[key][6]);
			}

			console.log(dict[unpacked_product_code]);
			var unpacked_nutrition_code = dict[unpacked_product_code][6];
			console.log("Input nutritional code " + unpacked_nutrition_code);

			// FINDING REPLACEMENT NUTRITION ID
			var potential_replacement_id;
			if (nut_ids.indexOf(unpacked_nutrition_code) != -1) {
				// Exact match
				// The unpacked_nutrition_code is in the list of nutritional codes
				potential_replacement_id = unpacked_nutrition_code;
				console.log("Exact nutritional code match");
			}
			else {
				// Non-exact match
				// Choosing parameter to tweak
				console.log("Inexact nutritional code match");
				var mutate_parameter = Math.floor(Math.random() * 3) + 1; // random number between 1 and 3
				if ( unpacked_nutrition_code[mutate_parameter] < 3 ) {
					potential_replacement_id = unpacked_nutrition_code.substring( 0, mutate_parameter) + ( parseInt(unpacked_nutrition_code[mutate_parameter])+1 ) + unpacked_nutrition_code.substring(mutate_parameter+1); // I think this is right, not sure if all the substrings are good
				}
				else {
					// PARAMETER MUST BE AT LEVEL 3, DECREASE 1 LEVEL
					potential_replacement_id = unpacked_nutrition_code.substring( 0, mutate_parameter) + ( parseInt(unpacked_nutrition_code[mutate_parameter])-1 ) + unpacked_nutrition_code.substring(mutate_parameter+1); // I think this is right, not sure if all the substrings are good
				}
			}
			console.log("Replacement nutrition code: " + potential_replacement_id);

			// FINDING REPLACEMENT PRODUCT ID
			var replaced_product;
			prod_ids = shuffle(prod_ids); // shuffle ids before searching so you don't get the same replacement every time
			//for (var key in dict) {
			for (var i = 0; i < prod_ids.length; i++) {
				var key = prod_ids[i];
				if (dict[key][6] == potential_replacement_id && key != unpacked_product_code) {
					console.log("Replacement found!");
					replaced_product = key;
					break;
				}
			}

			console.log("Done swapping. Output: " + replaced_product);
			return replaced_product;
		}

				function shuffle(a) {
			/**
				Shuffles an input array
			**/
			var j, x, i;
			for (i = a.length - 1; i > 0; i--) {
				j = Math.floor(Math.random() * (i + 1));
				x = a[i];
				a[i] = a[j];
				a[j] = x;
			}
			return a;
		}

		function hideTable() {
			// Clear Recent Addition History


			var x = document.getElementById("itemSearch");
			if (x.style.display === "block") {
				x.style.display = "none";
			} else {
				x.style.display = "block";
			}
			d3.selectAll("#tableobj").remove();d3.selectAll("#c_1").remove()
			createTable(curList, "normal");
		}

		function addItem() {
			var x = document.getElementById("itemSearch");
			if (x.style.display === "block") {
				x.style.display = "none";
			} else {
				x.style.display = "block";
			}


			// Create a DataTable of all the Items, so a user can search and add items
			var names = [];
			for(var key in dict) {
				var array = dict[key];
				var name = array[5];
				if (key != "" ) {
					names.push([key, name]);
				}
			}
			console.log(names[0]);
			$(document).ready(function() {
				if (! $.fn.dataTable.isDataTable("#table_id")) {
					var myTable2 = $('#table_id').DataTable( {
						"scrollX": true,
						data: names,
						"columnDefs": [
							{ "visible": false, "targets": 0 }
						]
					});
				}
				// Loading Wheel
				var spinner = document.getElementById("loader");
				spinner.style.display = "none";
				var table = document.getElementById("table_id");
				table.style.display = "block";

			});
		}

		function clearAdded() {
			for (var i = 0; i < recentAdditions.length; i++) {
				// Remove added item
				var index = curList.indexOf(recentAdditions[i]);
				if (index !== -1) curList.splice(index, 1);
			}
			// Remove Highlighting
			var x = document.getElementsByClassName("row_selected");
			for (var i = 0; i < x.length; i++) {
				x[i].classList.remove("row_selected");
			}

			d3.selectAll("#tableobj").remove();d3.selectAll("#c_1").remove()
			createTable(curList, "normal");
		}

		// Add item Datatable code
		$("#table_id").on("click", "tbody tr", function(event){
			var myTable = $('#table_id').DataTable();
			// Changing Highlighting
			$("#products tbody tr").removeClass('row_selected');
			$(this).addClass('row_selected');

			var thisRow = myTable.row(this).data(); // getting the value of the row
			console.log(thisRow[0]);
			console.log(curList.length);
			curList.unshift(thisRow[0]);
			recentAdditions.unshift(thisRow[0]);
			console.log(curList.length);

			// Update table
			d3.selectAll("#tableobj").remove();d3.selectAll("#c_1").remove()
			createTable(curList, "normal");
		});


		// Need to integrate tool tip from: http://bl.ocks.org/Caged/6476579
		// function add_tool_tip() {
    //
		// 	//Nutrition information located in dict[curList[item]]
		// 	// Need to iterate through item and add [1] energy, [2] protein, [3] carb, [4] fiber to tooltip
		// }


		// Need to integrate with php, and calculate sum of nutritional values from list (contained in dict)
		// total_nutri contains NIH recommended values which will be used: proportion = sum/total_nutri
		// Replicate results 4 times for each nutritional type

		// It's messy and 'frankensteined'...



// })();

	// function calc_protein_to_gauge () {
	// 	//Total NIH recommended Protein calculated for individual
	// 	var total_nih_prot = total_nutri[1];
  //
	// 	// Sum proportional nutrient totals for list from DICT / INCORRECT
	// 	var sum_protein = 0;
	// 	for(var i = 0, len = curList.length; i < len; i++) {
	// 		sum_protein += dict[curList[i]][2];
	// 	}
  //
	// 	// Need to set sum_nutri_prop to TOTAL NIH value in total_nutri
	// 	var needle_prot = sum_protein / total_nih_prot;
	// 	var round_pror = Math.round(needle_prot * 100) / 100
  //
	// 	var title_ = "Protein: "+round_prot.toString();
  //
	// 	var margin, width, height;
  //
	// 	margin = {
	// 		top: 20,
	// 		right: 20,
	// 		bottom: 30,
	// 		left: 20
	// 		};
  //
	// 	width = 400 - margin.left - margin.right;
	// 	height = width;
  //
	// 	needle.render();
	// 	needle.moveTo(needle_prop);
	// 	d3.select('svg')
	// 		.append("text")
	// 		.attr("x", 170)
	// 		.attr("y", 240)
	// 		.attr("text-anchor", "middle")
	// 		.text("manu")
	// 		.style("font-size", "40px")
	// 		.style("font", "Courier");
	// }
	</script>


	<!--Vendor-JS-->
    <!-- <script src="js/vendor/jquery-1.12.4.min.js"></script> -->
    <script src="js/vendor/bootstrap.min.js"></script>
    <!--Plugin-JS-->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/contact-form.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/scrollUp.min.js"></script>
    <script src="js/magnific-popup.min.js"></script>
    <script src="js/wow.min.js"></script>
    <!--Main-active-JS-->
    <script src="js/main.js"></script>

</body>

</html>
