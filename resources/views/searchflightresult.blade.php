<!DOCTYPE html>
<html>
<head>
	<title>INDEX PAGE</title>
	<meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">

             <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
            <link rel="stylesheet" type="text/css" href="{{asset('css/index_style.css')}}" media="all"/>
</head>
<style>
</style>
<body>
<header>
    <nav>
        <div class="container-fluid top ">
            <div class="row">
                <div class="col-7">

                    <a href="#" class="text-decoration-none text-white ">Airline Flight and Reservation System</a>
                    

                </div>

                <div class="col-5 text-end text-white">
                        <i class="fab fa-facebook  "></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-google"></i>
                        <i class="fab fa-youtube"></i>
                </div>

            </div>    
        </div>

        
    </nav>
</header>

<!----header ends-->

<!----menu section-->
<section class="" id="home">
<header class="main-header">	
<nav class="navbar navbar-expand-lg top1 sticky-top">
    <div class="container">
    	 <img src="img/logo.png" class="logo">
        <a href="" class="text-decoration-none text-white">TRAVEL KITE</a>
        
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto ">
                <li class="nav-item">
                    <a href="#home" class="nav-link text-white">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#travel" class="nav-link text-white" >Travel Blog</a>
                </li>
                <li class="nav-item">
                    <a href="login_form" class="nav-link text-white">Sign In</a>
                </li>

                <li class="nav-item">
                    <a href="register" class="nav-link text-white" >Sign Up</a>
                </li>

                <li class="nav-item">
                    <a href="#contact" class="nav-link text-white">Contact Us</a>
                </li>
                <li><button  onclick="document.getElementById('id02').style.display='block'" style="width:auto;"class="btn btn-light"><i class="fa fa-search mt-1	 px-1" aria-hidden="true"></i></button></li>
                
            </ul>
        </div>
    </div>
</nav>





<style>
  
  table,tr,td,th
    {
      /*border:2px solid;*/
      border-collapse: collapse;
      padding: 10px;
      margin: 80px;
      margin-right: 100px;
      background-color: rgb(51, 102, 255);
      color: white;

    }

</style>
<body>

<h1>Flight Details</h1>
 <table class="text-center">
      <tr>
        <th rowspan="2">Airline Name</th>
        <th rowspan="2">Departure</th>
        <th rowspan="2">Destination</th>
        <th rowspan="2">Date</th>
        <th rowspan="2">Depart Time</th>
        <th rowspan="2">Arrive Time</th>
        <th><th></th><th>Seats Available</th></tr>
        <tr><th>Total</th>
        <th>Business</th>
        <th>Economy</th>
        <th>First</th>
        <th>Action</th>
        </tr>


     
       @foreach($flights as $item)
      <tr>
        <td>{{$item->airlinename}}</td>
        <td>{{$item->departure}}</td>
        <td>{{$item->arrival}}</td>
        <td>{{$item->date}}</td>
        <td>{{$item->dtime}}</td>
        <td>{{$item->atime}}</td>
        <td>{{$item->seatcapacity}}</td>
        <td>{{$item->business}}</td>
        <td>{{$item->economy}}</td>
        <td>{{$item->first}}</td>

    

      
        <td><button class="btn btn-success"><a href={{"viewbookdetails/".$item->id}} class="text-decoration-none text-white ">Book</a></button></td>
      </tr>
     
      @endforeach
 
    </table>
</body>
</html>
