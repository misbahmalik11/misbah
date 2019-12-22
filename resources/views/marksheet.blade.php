<!DOCTYPE html>
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
     <link rel="stylesheet" href="css/style.css">
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
      <p class="ceo" style="color:black;font-size: 60px;">  RMS MarkSheet:-</p>

      <!-- table for quiz -->


      <p class="ceo" style="color:darkred;font-size: 30px;"> Quizes:-</p>
      <table class="table table-striped table-dark">
            <thead>
              <tr>
                <th scope="col">Sr No.</th>
                <th scope="col">Quiz no.</th>
                <th scope="col">Total Marks</th>
                <th scope="col">Obt Marks</th>
              </tr>
            </thead>
            <tbody>
            @foreach($details as $detail)
              <tr>
                <th scope="row">{{$detail->quizSr}}</th>
                <td>{{$detail->quizSr}}</td>
                <td>10</td>
                <td>{{$detail->quizMarks}}</td>
              </tr>
               @endforeach
            </tbody>
          </table>
          <!-- table end -->
          <!-- table for assignment -->
          <p class="ceo" style="color:darkred;font-size: 30px;">Assignments:-</p>
      <table class="table table-striped table-dark">
            <thead>
              <tr>
                <th scope="col">Sr No.</th>
                <th scope="col">assignment no.</th>
                <th scope="col">Total Marks</th>
                <th scope="col">Obt Marks</th>
              </tr>
            </thead>
            <tbody>
            @foreach($details as $detail)
              <tr>
                <th scope="row">{{$detail->assignmentSr}}</th>
                <td>{{$detail->assignmentSr}}</td>
                <td>10</td>
                <td>{{$detail->assignmentMarks}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <!-- table end -->

           <!-- table for Term Exam -->
           
 
          <!-- table end -->
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