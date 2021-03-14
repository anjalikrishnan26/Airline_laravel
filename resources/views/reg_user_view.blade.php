<!DOCTYPE html>
<html>
<head>
<title>user details</title>
<meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">

             <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<style>
    table,tr,td{
        border-collapse:collapse;
        border:2px solid;
        text-align:center;
    }

</style>
</head>
<body>

<h2 class="mt-2">Registered User Details</h2>
    <table class="table table-striped mt-5">
        <tr>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Age</th>
        <th scope="col">Gender</th>
        <th scope="col">Address</th>
        <th scope="col">District</th>
        <th scope="col">Phone No</th>
        <th scope="col">Email</th>
        </tr>
        <tr>
         @foreach($data as $value)
            <tr>
            <td>{{$value['fname']}}</td>
            <td>{{$value['lname']}}</td>
            <td>{{$value['age']}}</td>
            <td>{{$value['gender']}}</td>
            <td>{{$value['address']}}</td>
            <td>{{$value['district']}}</td>
            <td>{{$value['phno']}}</td>
            <td>{{$value['email']}}</td>
            
            </tr>
         @endforeach
    </table>
    <button class="btn btn-success"><a href="/admin" class="text-white nav-link">Back</a></button>
</body>
</html>