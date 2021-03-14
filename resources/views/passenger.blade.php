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
            body{
              background-image: url("../img/4.jpg");
              background-size: cover;
            }

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
              <li class="nav-item"><a href="" class="nav-link text-white">Home</a></li> 
              <li class="nav-item"><a href={{"update_profile/".$LoggedUserInfo->id}} class="nav-link text-white">View Profile</a></li>
              <li class="nav-item"><a href="viewnoti" class="nav-link  text-white">Notification</a></li>
              <!-- <li class="nav-item"><a href="#" class="nav-link">Portfolio</a></li>---->
              <li><button  onclick="document.getElementById('id02').style.display='block'" style="width:auto;"class="btn btn-light"><i class="fa fa-search mt-1	 px-1" aria-hidden="true"></i></button></li>
              <li class="nav-item"><a href="ticket" class="nav-link text-white">Ticket</a></li> 
           <li class="nav-item"><a href="index" class="nav-link text-white">Log Out</a></li>
          </ul>
      </div>
    </div> 
 </nav>
<!-----------------------------end-------------------->
<!------------------------------section1------------------------->
<div id="id02" class="modal container ">
  
  <form class="modal-content animate form-group" action="/searchflight" method="post">
  @csrf
    <div class="imgcontainer ">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
    <h1 class="text-center ">Search Flight Details</h1>
            <div id="form">
                <h3 class="">Book a Flight</h3>
                <div id="input3">
                    <span id="input-group" class="text-primary">Select Your Fare</span>
                    <input type="radio" id="group" name="r">
                    <label class="" for="group">One Way</label>
                    <input type="radio" id="group" name="r">
                    <label class="" for="group">Round Trip</label>
                </div>
                <div id="input">   
                    <!-- <select name="departure">
                    <option>--From--</option>
                    <option>Kochi</option>
                    <option>Kannur</option>
                    </select> -->
                    <!-- <select name="arrival">
                    <option>--To--</option>
                    <option>Kochi</option>
                    <option>Kannur</option>
                    </select> -->
                    <input type="text" placeholder="to" name="departure"> 
                    <input type="text" placeholder="From" name="arrival"> 

                
                    
                    <input type="date" id="group" name="date" placeholder="Departure Date">
                    <!-- <input type="text" id="group" placeholder="Departure Time"> -->
                
                
                </div>
                <!-- <div id="input2">
                    <input type="number" id="group" placeholder="Passengers">
                   
                </div> -->
               <!--  <div id="input3">
                   
                    <input type="radio" id="group" name="r">
                    <label class="text-white" for="group">Armed Force</label>
                    <input type="radio" id="group" name="r">
                    <label class="text-white" for="group">Senior Citizen</label>
                     <input type="radio" id="group" name="r">
                    <label class="text-white" for="group">Family and Friends</label>
                   
                </div>
                -->
                <!-- <a href="searchflight">Search Flight</button> -->
                <!-- <button type="reset" class="btn btn-primary">Clear Form</button> -->
            </div>
            <input type="submit" value="Search" name="submit" class="btn btn-primary">


        </form>
    </div>

    </section>


<!---Jquery--->
<script
  src="https://code.jquery.com/jquery-3.5.1.js"integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous">
</script>

<!---Popper---->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script>

<!---Custom Js-->
<script src="js/script.js"></script>





</body>
</html>
