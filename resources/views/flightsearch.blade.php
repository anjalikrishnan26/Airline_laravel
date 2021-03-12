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
<section class="banner" id="home">
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
</header>
    <div class="container-fluid slide">
        <div class="container">
            <div class="row vh-100">
                <div class="col-7 text-white">
                    <h2>GET. SET. TRAVEL</h2>
                    
                </div>
            </div>
            
        </div>
        
    </div>
    
</section>

<!--about-->
<section class="py-5" id="travel">

		<div class="container row ">
			<div class="col-7 ms-3">
				<h1>Travel Blog</h1>
			</div>
			

		</div>

		<div class="col-7 ms-5">
			

		</div>
		
	


<!--about ensd-->




	<div class="container py-5">
		<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
		 	<div class="carousel-inner">
			    <div class="carousel-item active">
			      <img src="img/1a.jpg" class="d-block w-100" alt="image">
			      
			    </div>

			    <div class="carousel-item">
			      <img src="img/2a.jpg" class="d-block w-100" alt="image">
			      
			    </div>

			    <div class="carousel-item">
			      <img src="img/3a.jpg" class="d-block w-100" alt="image">
			      	<div class="carousel-caption d-none d-md-block">
			        <h5>Second slide label</h5>
			        <p>Some representative placeholder content for the second slide.</p>
      				</div>

			    </div>

		  	</div>
		</div>
	</div>

</section>

<!--contact us-->
<section class="py-5 top2" id="contact">
		
		<div class="container  ">
			<div class="row text-center">
				<h2 class="my-5">Contact Us</h2>
				<div class="col-4 ">
					
					 
					 <div>
						 	<H3>
						 	<i class="fas fa-map-marker-alt"></i>     Address</H3>
						 	<div>
						 	<p>Travel Kite India Pvt,Ltd</p>
						 	<p>DLF Cyber City Phase-2</p>
						 	<p>Sector-25</p>
						 	<p>Haryana 12202</p>
						 	</div>
					 </div>
				</div>

				<div class="col-4">
					<div class="box">
						<h3><i class="fas fa-phone-alt"></i> Phone Number</h3>
						<p>9867543221</p>
						<p>9867543223</p>

					</div>
				</div>

				<div class="col-4">
					<div>
						<h3><i class="fas fa-envelope"></i> Email</h3>
						<p>karr@gmail.com</p>
					</div>
					
				</div>
				
			</div>

		</div>	

</section>

<footer>
	<div class="container-fluid  ">
     <div class="row top3 text-white text-center">
        <p> Travel Kite &copy 2020-2021</p>
         
     </div>
       
   </div>
</footer>
<!--------search-------------->
<div id="id02" class="modal container ">
  
  <form class="modal-content animate form-group" action="/flightbook" method="post">
    <div class="imgcontainer ">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
            <h1 class="text-center text-white">Search Flight Details</h1>

            <div id="form search">
                <h3 class="text-white ml-5 ">Book a Flight</h3>
                <div id="input3">
                    <span id="input-group" class="text-primary">Select Your Fare</span>
                    <input type="radio" id="group" name="r">
                    <label class="text-white" for="group">One Way</label>
                    <input type="radio" id="group" name="r">
                    <label class="text-white" for="group">Round Trip</label>
                </div>
            <div id="input">
              
                <input type="text" id="group" name="Departure" class="" placeholder="From">

              
                <input type="text" id="group" name="arrival" placeholder="To">
                
                <input type="date" id="group" name="date" placeholder="Departure Date">
                <br>
                <button type="submit" class="btn btn-primary text-white m-5">Search Flight</button>
                <button type="reset" class="btn btn-info">Clear Form</button>
            </div>
        </form>
    </div>


<form class="modal-content animate form-group" action="searchflight" method="get">
    <div class="imgcontainer">
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
                    <input type="text" placeholder="From" name="departure">  
                                
                    <!-- <select name="departure">
                    <option>--From--</option>
                    <option>Kochi</option>
                    <option>Kannur</option>
                    </select> -->
                    <select name="arrival">
                    <option>--To--</option>
                    <option>Kochi</option>
                    <option>Kannur</option>
                    </select>

                
                    
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
            <input type="submit" value="Search" name="submit">

        </form>
    </div>
<!--search form ends-->