DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- bootrap cdn  -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

     <!-- end bootstrap cdn -->
     <!-- style css link -->
     <link rel="stylesheet" href="style.css">
     <!-- style.css linkend -->
      <!-- fontawesome start -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
      <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
      <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">
  <!-- end fontawesome -->
    <title>Document</title>
      <!-- style -->
  <style>
    @import url('https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap');
  .backcol{
    background-color: #ecf0f1;
}

.ceo{
    font-family: 'Abril Fatface', cursive;

}

.para{
    text-align: justify;
}

.imgbor{
    border-radius: 10px;
}
.btnchange{
    border-radius: 10px;
    background-color: rgb(214, 68, 68);
    color: white;
}

.btnchange:hover{
    background-color: white;
    color: rgb(214, 68, 68);
}


/* footer */
.fcol{
    background-color: #830c16;

}



/* footer end */
  </style>
  <!-- style end -->

    <title>Document</title>
    <script>
            window.onload = function () {

            var totalVisitors = 32;
            var visitorsData = {
                "Absent Vs Presents": [{
                    click: visitorsChartDrilldownHandler,
                    cursor: "pointer",
                    explodeOnClick: false,
                    innerRadius: "75%",
                    legendMarkerType: "square",
                    name: "Absent Vs Presents",
                    radius: "100%",
                    showInLegend: true,
                    startAngle: 90,
                    type: "doughnut",
                    dataPoints: [
                        { y: 4, name: "Absent", color: "#E7823A" },
                        { y: 28, name: "Presents", color: "#546BC1" }
                    ]
                }],
                "Absent": [{
                    color: "#E7823A",
                    name: "Absent",
                    type: "column",
                    xValueFormatString: "MMM YYYY",
                    dataPoints: [
                        { x: new Date("1 Jan 2015"), y: 33000 },
                        { x: new Date("1 Feb 2015"), y: 35960 },
                        { x: new Date("1 Mar 2015"), y: 42160 },
                        { x: new Date("1 Apr 2015"), y: 42240 },
                        { x: new Date("1 May 2015"), y: 43200 },
                        { x: new Date("1 Jun 2015"), y: 40600 },
                        { x: new Date("1 Jul 2015"), y: 42560 },
                        { x: new Date("1 Aug 2015"), y: 44280 },
                        { x: new Date("1 Sep 2015"), y: 44800 },
                        { x: new Date("1 Oct 2015"), y: 48720 },
                        { x: new Date("1 Nov 2015"), y: 50840 },
                        { x: new Date("1 Dec 2015"), y: 51600 }
                    ]
                }],
                "Presents": [{
                    color: "#546BC1",
                    name: "Presents",
                    type: "column",
                    xValueFormatString: "MMM YYYY",
                    dataPoints: [
                        { x: new Date("1 Jan 2015"), y: 22000 },
                        { x: new Date("1 Feb 2015"), y: 26040 },
                        { x: new Date("1 Mar 2015"), y: 25840 },
                        { x: new Date("1 Apr 2015"), y: 23760 },
                        { x: new Date("1 May 2015"), y: 28800 },
                        { x: new Date("1 Jun 2015"), y: 29400 },
                        { x: new Date("1 Jul 2015"), y: 33440 },
                        { x: new Date("1 Aug 2015"), y: 37720 },
                        { x: new Date("1 Sep 2015"), y: 35200 },
                        { x: new Date("1 Oct 2015"), y: 35280 },
                        { x: new Date("1 Nov 2015"), y: 31160 },
                        { x: new Date("1 Dec 2015"), y: 34400 }
                    ]
                }]
            };

            var newVSReturningVisitorsOptions = {
                animationEnabled: true,
                theme: "light2",
                title: {
                    text: "Absent Vs Presents"
                },
                subtitles: [{
                    text: "Click on Any Segment to Drilldown",
                    backgroundColor: "#2eacd1",
                    fontSize: 16,
                    fontColor: "white",
                    padding: 5
                }],
                legend: {
                    fontFamily: "calibri",
                    fontSize: 14,
                    itemTextFormatter: function (e) {
                        return e.dataPoint.name + ": " + Math.round(e.dataPoint.y / totalVisitors * 100) + "%";
                    }
                },
                data: []
            };

            var visitorsDrilldownedChartOptions = {
                animationEnabled: true,
                theme: "light2",
                axisX: {
                    labelFontColor: "#717171",
                    lineColor: "#a2a2a2",
                    tickColor: "#a2a2a2"
                },
                axisY: {
                    gridThickness: 0,
                    includeZero: false,
                    labelFontColor: "#717171",
                    lineColor: "#a2a2a2",
                    tickColor: "#a2a2a2",
                    lineThickness: 1
                },
                data: []
            };

            newVSReturningVisitorsOptions.data = visitorsData["Absent Vs Presents"];
            $("#chartContainer").CanvasJSChart(newVSReturningVisitorsOptions);

            function visitorsChartDrilldownHandler(e) {
                e.chart.options = visitorsDrilldownedChartOptions;
                e.chart.options.data = visitorsData[e.dataPoint.name];
                e.chart.options.title = { text: e.dataPoint.name }
                e.chart.render();
                $("#backButton").toggleClass("invisible");
            }

            $("#backButton").click(function() {
                $(this).toggleClass("invisible");
                newVSReturningVisitorsOptions.data = visitorsData["New vs Returning Visitors"];
                $("#chartContainer").CanvasJSChart(newVSReturningVisitorsOptions);
            });

            }
            </script>

</head>
<body>
    <!-- navbar -->
<nav class="navbar navbar-expand-lg backcol">
        <a class="navbar-brand" href="index.blade.php" style="color:black;"><img src="images/logo1.png" alt=""></a>
        <button class="navbar-toggler bg-dark text-white" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="datesheet" style="color:black;">Datesheet <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="attendence" style="color:black;">Attendence</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="marksheet" style="color:black;">Marks</a>
            </li>

          </ul>
        </div>
      </nav>
      <!-- navbar end -->
      <p class="ceo" style="color:black;font-size: 60px;">  Your Attendence:-</p>
        <!--chart  -->
      <div id="chartContainer" style="width: 100%; height: 300px;"></div>
<button class="btn invisible" id="backButton">< Back</button>
<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
<!-- chart end -->
       <!-- footer start -->
<div class=" pb-2 footer fcol">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-xs-12 mt-5">
              <h2 class="ceo" style="color: aliceblue;">Goal</h2>
              <p class="pr-5 text-white-50"  style="color: aliceblue;">
                  In some parts of the world, students are going to school every day. It’s their normal life.
                   But in other parts of the world, we are starving for education…it’s like a precious gift. It’s like a diamond.
              </p>

            </div>
            <div class="col-lg-3 col-xs-12 links"  style="color: aliceblue;">

            </div>
            <div class="col-lg-4 col-xs-12 location mt-5">
              <h4 class="mt-lg-0 mt-sm-4"  style="color: aliceblue; font-family: 'Abril Fatface', cursive;">Location</h4>
              <p  style="color: aliceblue;">Our address
                  Roots International Schools
                  PLOT # 66, STREET # 7, H-8/4.
                  ISLAMABAD
                  PAKISTAN</p>
              <p class="mb-0"  style="color: aliceblue;"><i class="fa fa-phone mr-3"></i>+92-51-8439033-39</p>
              <p style="color: aliceblue;"> <i class="fa fa-envelope mr-3"  ></i>info@rootsinternational.edu.pk</p>
            </div>
          </div>
          <div class="row mt-5">

            <div class="col copyright text-center">
              <p class=""><small class="text-white-50"  style="color: aliceblue;">© Roots School System.</small></p>
            </div>
          </div>
        </div>
        </div>
    <!-- footer end -->

</body>
</html>