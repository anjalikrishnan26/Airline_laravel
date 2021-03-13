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
<h3 class="text-center text-primary mt-5">View Details</h3>
<form  method="get" action="{{url('insert_bookings')}}" >
@csrf
<fieldset>
@foreach($data as $row)
<input type="hidden" name="id" value="{{$row->id}}">
<label class=>Flight Name:</label>
<input type="text" name="airlinename" value="{{$row->airlinename}}" required maxlength="25" pattern="[a-zA-Z]+" class="form-control">

<label class="">Departure:</label>
<input type="text" name="departure"  value="{{$row->departure}}" required maxlength="25" pattern="[a-zA-Z]+" class="form-control">


<label class="form-label">Destination:</label>
<input type="text" name="arrival" value="{{$row->arrival}}" required class="form-control"><br>

<label class="form-label">Date:</label>
<input type="text" name="date" value="{{$row->date}}" required class="form-control"><br>

<label class="form-label">Depart Time:</label>
<input type="text" name="dtime" value="{{$row->dtime}}" required class="form-control"><br>

<label class="form-label">Arrival Time:</label>
<input type="text" name="atime" value="{{$row->atime}}" required class="form-control"><br>

<form action=""></form>
<label class="form-label">Name of Traveller:</label>
<input type="text" name="name"  required class="form-control"><br>

<label class="">Age:</label>
<input type="text" name="age"  required class="form-control"><br>


                               
          <label class="">Select Class</label>        
                    <select name="class">
                    <option>--Select--</option>
                    <option>Business</option>
                    <option>Economy</option>
                    <option>First</option>
                    </select></br></br>


<label class="">Email:</label>
<input type="Email" name="email" value="" required class="form-control">


<div class="container text-center">

<input type="submit" name="update" value="Book" class="btn btn-primary w-50 mt-3  mb-3">
</div>



</fieldset>
@endforeach

</form>

</div>

<div class="col-7">
</div>

</div class="">
</div>
</section >

</body>
</html>
