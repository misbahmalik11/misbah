<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap 4 Horizontal Form Layout</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
    .bs-example{
        margin: 20px;        
    }
</style>
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

</head>
<body>
<nav class="navbar navbar-expand-lg backcol">
    <a class="navbar-brand" href="index.blade.php" style="color:black;"><img src="images/logo1.png" alt=""></a>
    <button class="navbar-toggler bg-dark text-white" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="/" style="color:black;">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
                <a class="nav-link" href="/attendence" style="color:black;">Attendence</a>
              </li>
        <li class="nav-item">
          <a class="nav-link" href="teachermarks" style="color:black;">Marks</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/help" style="color:black;">Help</a>
        </li>

      </ul>
    </div>
  </nav><br>
        
                    <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
           <a href="teachersetmarks">
                <button  type="submit" class="btn btn-primary">Quiz Marks</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </a>
                <a href="teachersetmarks">
                <button  type="submit" class="btn btn-success">Quiz Marks</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </a>
                <a href="index">
                <button  type="submit" class="btn btn-danger">Logout</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </a>     
           </div>
        </div>
<div class="bs-example">
    <form action="setMarks" method="POST">
    @csrf
        <h1>assignment marks</h1><br>
        <div class="form-group row">
            
            <label for="inputEmail" class="col-sm-2 col-form-label">Serial No</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="asrNo" placeholder="Serial No">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Total marks</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="assignmenttotal" placeholder="Total" >
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Obtained marks</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="assignmentobt" placeholder="Obtained marks" >
            </div>
        </div>
        
        </div>
        <br>
        
        
        <h1>Quiz marks</h1><br>
        <div class="form-group row">
            
            <label for="inputEmail" class="col-sm-2 col-form-label">Serial No</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="qsrNo" placeholder="Serial No">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Total marks</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="quiztotal" placeholder="Total" >
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Obtained marks</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="quizobt" placeholder="Obtained marks" >
            </div>
        </div>
        
        </div>
        
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                &nbsp;&nbsp;
                
                <button  class="btn btn-primary">Submit</button>
            
            </div>
        </div>
    </form>
</div>

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

</body>
</html>