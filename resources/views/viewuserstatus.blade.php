<!DOCTYPE html>
<html>
    <head>
        <title>user Home</title>
            <meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!------custom style------->
            <link rel="stylesheet" href="{{asset('css/index_style.css')}}">
            <style>
              .top1{
            background-color:#5c00e6;

            }
            /* body{
              background-image: url("../img/4.jpg");
              background-size: cover;
            } */

             </style> 
            
    </head>
  <body class="overhidden">
    <header>
        <nav>
            <div class="container-fluid top ">
                <div class="row">
                    <div class="col-7">
                        <a href="#" class="text-decoration-none text-white">Home Terms</a>
                    </div>
                <div class="col-5 text-end">
                    <i class="fab fa-facebook text-white "></i>
                    <i class="fab fa-instagram text-white "></i>
                    <i class="fab fa-linkedin text-white "></i>
                    <i class="fab fa-twitter text-white "></i>
                    <i class="fab fa-youtube text-white "></i>
                    <i class="fab fa-google text-white "></i>
                </div>
            </div>
        </div>
     </nav>  
 </header>
 <!--------------------menu section-------------->
 <nav class="navbar top1 navbar-expand-lg ">
    <div class="container">
      <a href="#" class="text-decoration-none text-white">TRAVEL KITE</a>  
      <div class="">
          <ul class="navbar-nav">
              <li class="nav-item"><a href="/passenger" class="nav-link text-white">Home</a></li> 
              <li class="nav-item"><a href="" class="nav-link text-white">View Profile</a></li>
              <li class="nav-item"><a href="" class="nav-link text-white">Search Flight</a></li>
              <li class="nav-item"><a href="" class="nav-link  text-white">Notification</a></li>
              <!-- <li class="nav-item"><a href="#" class="nav-link">Portfolio</a></li>
 -->           <li class="nav-item"><a href="index" class="nav-link text-white">Log Out</a                 ></li>
          </ul>
      </div>
    </div> 
 </nav>
<!-----------------------------end-------------------->
<!------------------------------section1------------------------->
<div><h1 style="color: red;text-align: center">FLIGHT NOTIFICATIONS</h1></div>
<table>
<tr>
<table border="1" class="table table-bordered table-striped table-primary">
<thead>
<tr>
<th>Notification</th>
<th>Flight Name</th>
<th>Date</th>
<th>Action</th>

</thead></tr>
@foreach ($user as $value)
<tr>

<td>{{$value['notification']}}</td>
<td>{{$value['flight']}}</td>
<td>{{$value['currentdate']}}</td>
<!-- <input type="hidden" name="id" value="{{$value['id']}}"> -->

 
 </td>
<td><a href="{{"delete/".$value->id}}">delete</a>
</tr>
@endforeach
</table>
</fieldset>
</form>


  
    
  
  


</section>




</body>
</html>






