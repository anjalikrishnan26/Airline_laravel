<!DOCTYPE html>
<html>
<head>
<title>flight book</title>
<meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">

             <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

 <style>
 
  .top1{
background-color:#5c00e6;

}
body{
background-image: url("../img/im2a.png");
background-size: cover;
background-attachment: fixed;
}


</style>
</head>
<body>

<nav class="navbar top1 navbar-expand-lg ">
    <div class="container">
      <a href="#" class="text-decoration-none text-white">TRAVEL KITE</a>  
      <div class="">
          <ul class="navbar-nav">
              <li class="nav-item"><a href="" class="nav-link text-white">Home</a></li>
              <li class="nav-item"><a href="" class="nav-link text-white">View Profile</a></li>
              <li class="nav-item"><a href="" class="nav-link text-white">Flight Details</a></li>

              <li class="nav-item "><a href="" class="nav-link text-white">Notification</a></li>

                <li class="nav-item "><a href="" class="nav-link text-white">Log Out</a></li>
          </ul>
      </div>
    </div>
 </nav>

<!--nav end-->
<section>

<div class="container ">
<div class="row">
<div class="container col-5 ms-5">
<h3 class="text-center text-primary mt-5">Receipt</h3>

<form  method="get" action="{{url('payment')}}" >

<fieldset>
@foreach($booking as $row)
<input type="hidden" name="id" value="{{$row->id}}">
<label class=>Flight Name:</label>
<input type="text" name="airlinename" value="{{$row->airlinename}}" required maxlength="25" pattern="[a-zA-Z]+" class="form-control" readonly>

<label class="">Departure:</label>
<input type="text" name="departure"  value="{{$row->departure}}" required maxlength="25" pattern="[a-zA-Z]+" class="form-control" readonly>


<label class="form-label">Destination:</label>
<input type="text" name="arrival" value="{{$row->arrival}}" required class="form-control" readonly><br>

<label class="form-label">Date:</label>
<input type="text" name="date" value="{{$row->date}}" required class="form-control" readonly><br>

<label class="form-label">Depart Time:</label>
<input type="text" name="dtime" value="{{$row->dtime}}" required class="form-control" readonly><br>

<label class="form-label">Arrival Time:</label>
<input type="text" name="atime" value="{{$row->atime}}" required class="form-control" readonly><br>

<form action=""></form>
<label class="form-label">Name of Traveller:</label>
<input type="text" name="name" value="{{$row->name}}" required class="form-control" readonly><br>

<label class="">Age:</label>
<input type="text" name="age" value="{{$row->age}}" required class="form-control" readonly><br>

<label class="form-label">Email:</label>
<input type="text" name="email" value="{{$row->email}}" required class="form-control" readonly><br>

<label class="form-label">Class:</label>
<input type="text" name="class" value="{{$row->class}}" required class="form-control" readonly><br>

<label class="form-label">Cost:</label>
<?php $cost=0;
$reduction=0;
if($row->class=='Business')
{
    $cost=$row->bcost;
}
elseif($row->class=='Economy'){
    $cost=$row->ecost;
}
else{
    $cost=$row->fcost;
}
if($row->age>=60)
{
    $reduction=$cost-1000;
}

?>
<input type="text" name="class" value="<?php echo $cost; ?>" required class="form-control" readonly><br>

<label class="form-label">Senior Citizen Concession Cost:</label>
<input type="text" name="class" value="<?php echo $reduction; ?>" required class="form-control" readonly><br>

<div class="container text-center">

<input type="submit" name="update" value="Pay" class="btn btn-primary w-50 mt-3  mb-3">
</div>

@endforeach

</fieldset>


</form>

</div>

<div class="col-7">
</div>

</div class="">
</div>
</section >

</body>
</html>