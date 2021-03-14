<!DOCTYPE html>
<html>
<head>
<title>update profile1</title>
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
              <li class="nav-item"><a href="{{ url()->previous() }}" class="nav-link text-white">Back</a></li> 
                <li class="nav-item "><a href="index" class="nav-link text-white">Log Out</a></li>
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
            <form action="/update_profile" method="post">
            @csrf
            <div>
                        @if(Session::get('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                        @endif
                        @if(Session::get('fail'))
                            <div class="alert alert-danger">
                                {{Session::get('fail')}}
                            </div>
                        @endif
            </div>
            @foreach($data as $value)
         
            @csrf
            <div class="form-group">
                <fieldset>
                    <input type="hidden" name="id" class="form-control" value="{{ $value->id }}">
                    <label class="">First Name:</label>
                    <input type="text" name="fname" class="form-control" value="{{$value->fname}}"></br>
                    <label class="">Last Name:</label>
                    <input type="text" name="lname" class="form-control" value="{{$value->lname}}"></br>
                    <label class="">Age:</label>
                    <input type="text" name="age" class="form-control" value="{{$value->age}}"></br>
                    <label class="">Gender:</label>
                    <input type="text" name="gender" class="form-control" value="{{$value->gender}}"></br>
                    <label class="">Address:</label>
                    <input type="text" name="address" class="form-control" value="{{$value->address}}"></br>
                    <label class="">District:</label>
                    <input type="text" name="district" class="form-control" value="{{$value->district}}"></br>
                    <label class="">Phone No:</label>
                    <input type="text" name="phno" class="form-control" value="{{$value->phno}}"></br>
                    <label class="">Email:</label>
                    <input type="text" name="email" class="form-control" value="{{$value->email}}"></br>
                    <button type="submit" class="btn btn-success" value="update">Update</button>
            </div>
                </fieldset>
            @endforeach
            
            </form>
        </div>
    </div>
</div>
</section >

</body>
</html>