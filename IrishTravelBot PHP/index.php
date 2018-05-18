<!-- Connecting to mySQL Database -->
<?php
$con = mysqli_connect('localhost', 'techoram_joshua', 'Selah7123', 'techoram_db');
?>

<!-- Main HYML code -->
<!DOCTYPE html>
<html>
    <head>
        <title>Home | Irish Travel Bot</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/dropdowns-enhancement.css">
        <link rel="icon" type="image/png" href="./images/favicon-32x32.png" sizes="32x32" />
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <!-- Favicon Icon Link -->
        <link rel="shortcut icon" href="http://faviconist.com/icons/924d95fa7611519367e59af1577475fb/favicon.ico" />
		<!-- Main JS files -->
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<script src='https://www.google.com/jsapi'></script>
        <script src="js/respond.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
        <script src="js/dropdowns-enhancement.js"></script>
        
        <!-- Additional styling for page -->
		<style>
            .chart
            {
                width: 100%; min-height: 450px; height: 100%;
            }
            
            .div_chart2
            {
            	margin-top: -59px;
            }
            
            .navbar-default .navbar-toggle .icon-bar {
				background-color: white !important;
			}
        </style>
        
		<!-- JS code to display statistics charts -->
        <script type="text/javascript">
			/* Pie chart */
			/* Loading in google charts */
            google.load("visualization", "1", {packages: ["corechart"]});
            google.setOnLoadCallback(drawChart1);
            function drawChart1()
            {
				/* Loading in values from sql database */
                var data = google.visualization.arrayToDataTable([
                    ['Location', 'Count'],
					<?php
						$query = "SELECT locationCount AS count, location FROM IrishTravlBotStats GROUP BY location";
						$exec = mysqli_query($con, $query);
						while ($row = mysqli_fetch_array($exec)) {
							echo "['" . $row['location'] . "'," . $row['count'] . "],";
						}
					?>
                ]);
				/* Styling the pie chart */
                var options = {
                    height: 450,
                    chartArea: {top: 50},
                    legend: {position: 'bottom', textStyle: {color: 'black', fontSize: 13}},
                    pieHole: 0.5,
					colors:['3B5998', '3E68A2', '4277AD','4686B8','4A95C3','4EA4CE','52B3D9','49B0CD','40ADC1','38AAB5','2FA8A9','27A59D', '1EA291',   '16A085','3CA96E','63B258','8ABC42','B1C52C','D8CE16','FFD800','EBCB0F','D7BE1E','C4B12D','B0A53C','9D984C','898B5B','757F6A','627279','4E6588','41587C','3B5998']
                };
				/* Draw the pie chart to the page */
                var chart = new google.visualization.PieChart(document.getElementById('chart_div1'));
                chart.draw(data, options);
            }

			/* Bar chart */
			/* Loading in google charts */
            google.load("visualization", "1", {packages: ["corechart"]});
            google.setOnLoadCallback(drawChart2);
            function drawChart2()
            {
				/* Loading in values from sql database */
                var data = google.visualization.arrayToDataTable([
                    ['transport', 'Count'],
					<?php
						$query = "SELECT SUM(countVal) AS count, transport FROM IrishTravelBotStats2 GROUP BY transport ORDER BY transport";
						$exec = mysqli_query($con, $query);
						while ($row = mysqli_fetch_array($exec)) {
							echo "['" . $row['transport'] . "'," . $row['count'] . "],";
						}
					?>
                ]);
				/* Styling the pie chart */
                var options = {
                    colors:['#3B5998']
                };
				/* Draw the pie chart to the page */
                var chart = new google.visualization.ColumnChart(document.getElementById("chart_div2"));
                chart.draw(data, options);
            }
        </script>
    </head>
    <body>
        <!--  Jumbotron -->
        <div class="jumbotron">
            <div class="container side-collapse-container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h1 class="">Irish Travel Bot</h1>
                        <p class="">Intelligent personal assistant to provide you worry-free travel experience</p>
                        <p class="">Travel with <b style="color: #26C281">#peaceofmind</b></p>
                        <button href="" type="button" class="btn btn-info clickScroll">Learn More</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Menu -->
        <nav class="navbar navbar-default" role="navigation">
            <!-- Dropdown Menu for Mobile Devices -->
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.php" class="navbar-brand"><strong>Irish Travel Bot</strong></a>
                    <a href="index.php"><img src="./images/IrishTravelBotProfileImage.png" alt="Mountain View" style="margin-top: 5px; margin-left: -10px;width:30px; height:30px;"></a>
                </div>

                <div class="collapse navbar-collapse" id="collapse">
                    <div class="container">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="">Terms</a></li>
                            <li><a href="">Privacy</a></li>
                            <li><a href="">Questions</a></li>
                            <li><a href="">Contact</a></li>
                            <li><a href="https://www.facebook.com/irishtravelbot/" type="button" class="btn btn-default">Connect with Facebook</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        
        <div class="scrolltop"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text_heading">Statistics</h2>
                    <hr>
                </div>
            </div>
            
            <!-- Statistics Charts -->
            <div class="row">
				<!-- Pie Charts -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <h3 class="text-center text_heading">Train Station Popularity</h3>
                    <center>
                    <div id="chart_div1" class="chart"></div>
                    </center>
                </div>

				<!-- Bar Charts -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <h3 class="text-center text_heading">Bus vs Train Searches</h3>
                    <center>
                    <div id="chart_div2" class="chart"></div>
                    </center>
                </div>
            </div>
        </div>
        
        <!-- Javascript -->
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
        <!-- Smooth Div Scroll -->
        <script type="text/javascript">
            $(".clickScroll").click(function()
            {
                $('html,body').animate(
                    {scrollTop: $(".scrolltop").offset().top},
                    'slow');
            });
        </script>
    </body>
</html>