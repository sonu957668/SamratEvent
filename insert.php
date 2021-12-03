<?php
include 'Admin/config.php';
if(isset($_POST['done'])){
    $name = $_POST['name'];
    $EventName= $_POST['EventName'];
    $EventDate= $_POST['EventDate'];
    $Payments= $_POST['Payments'];
 $q = " INSERT INTO `booking`(`name`, `EventName` , `EventDate`,`Payments`) VALUES ( '$name', '$EventName' , '$EventDate' , '$Payments')";
 $query = mysqli_query($con,$q);
 header('location:index.html');
}
?>

<!DOCTYPE html>
<html>
<head>
 <title></title>
 <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>welcome to Samrat Group </title>
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
  <link rel="icon" href="/favicon.ico" type="image/x-icon" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <style>
    .option{
      padding-left:25%;
    }
    @media (max-width: 640px) {
      .option{
      padding-left:0%;
    }
    }
  </style>
  
</head>
<body>

 <div class="col-lg-6 m-auto py-4">
 <div class="card-header">
 <h1 class="text-center py-4" style="font-family: 'Zen Old Mincho', serif; color: purple;font-size: 30px;">Order now </h1>
 </div>
</div>
 <section class="contact" id="contact">
    <div class="temp mx-5">
      <div class="contactus text-center py-3">
        <h2 style="font-family: 'Zen Old Mincho', serif; color: purple;">Please fill The following details</h2>
      </div>
      <form method="post">
        <div class="row py-4">
        <div class="col-lg-8 col-12 mx-auto ">
        <label> Name: </label>
        <input type="text" name="name" class="form-control">
        </div>
       </div>
       <div class="row option py-4">  
        <div class="col-md-4  ">
        <label> EventName: </label>
        <input type="text" name="EventName" class="form-control">
        </div>
        <div class="col-md-4">
        <label> EventDate: </label>
        <input type="text" name="EventDate" class="form-control">
        </div>
</div>
<div class="row py-4 option">
<div class="col-md-4">
        <label> Payments: </label>
        <input type="text" name="Payments" class="form-control">
</div>
        <div class="col-md-4 my-4 text-center">
          <button type="submit" class="btn btn-primary"type="submit" name="done" >submit</button>
        </div>
</div>
      </form>
    </div>
  </section>
</body>
</html>