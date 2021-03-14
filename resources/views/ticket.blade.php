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


</style>
</head>
<body>



<!--nav end-->
<section>

<div class="container align-items-center">
<div class="row align-items-center">
<div class="col-3">
</div>
<div class="container col-5 ms-5 border border-dark">
<h3 class="text-center text-primary mt-5">Ticket</h3></br>
<form  method="get" action="{{url('')}}" class="align-items-center" >

<fieldset class="align-items-center">
@foreach($values as $row)
<table>
<input type="hidden" name="id" value="{{$row->id}}">
<tr><td><span class="">Flight Name:</span></td>
<td><input type="text" name="airlinename" value="{{$row->airlinename}}" required maxlength="25" pattern="[a-zA-Z]+" class="" readonly>
</td></tr>
<tr><td><span class="">Departure:</span></td>
<td><input type="text" name="departure"  value="{{$row->departure}}" required maxlength="25" pattern="[a-zA-Z]+" class="" readonly>
</td></tr>

<tr><td><span class="form-span">Destination:</span></td>
<td><input type="text" name="arrival" value="{{$row->arrival}}" required class="" readonly></td></tr>

<tr><td><span class="form-span">Date:</span></td>
<td><input type="text" name="date" value="{{$row->date}}" required class="" readonly></td></tr>

<tr><td><span class="form-span">Depart Time:</span></td>
<td><input type="text" name="dtime" value="{{$row->dtime}}" required class="" readonly></td></tr>

<tr><td><span class="form-span">Arrival Time:</span></td>
<td><input type="text" name="atime" value="{{$row->atime}}" required class="" readonly></td></tr>

<tr><td><span class="form-span">Name of Traveller:</span></td>
<td><input type="text" name="name" value="{{$row->name}}" required class="" readonly></td></tr>

<tr><td><span class="">Age:</span></td>
<td><input type="text" name="age" value="{{$row->age}}" required class="" readonly></td></tr>

<tr><td><span class="form-span">Email:</span></td>
<td><input type="text" name="email" value="{{$row->email}}" required class="" readonly></td></tr>

<tr><td><span class="form-span">Class:</span></td>
<td><input type="text" name="class" value="{{$row->class}}" required class="" readonly></td></tr>

<tr><td><span class="form-span">Cost:</span>
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
    $reduction=$cost-1000;?>
    <td><input type="text" name="class" value="<?php echo $reduction; ?>" required class="" readonly></td></tr>
<?php
}
else{
    ?>
    <td><input type="text" name="class" value="<?php echo $cost; ?>" required class="" readonly></td></tr>
<?php
}

?>

</table>
<div class="container text-center">

<input type="submit" name="update" value="Download PDF" class="btn btn-primary w-50 mt-3  mb-3">
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
