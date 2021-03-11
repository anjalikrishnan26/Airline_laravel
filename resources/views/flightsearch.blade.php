<form class="modal-content animate form-group" action="<?php echo base_url()?>main/searchaction" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
            <h1 class="text-center text-white">Search Flight Details</h1>

            <div id="form">
                <h3 class="text-white">Book a Flight</h3>
                <div id="input3">
                    <span id="input-group" class="text-primary">Select Your Fare</span>
                    <input type="radio" id="group" name="r">
                    <label class="text-white" for="group">One Way</label>
                    <input type="radio" id="group" name="r">
                    <label class="text-white" for="group">Round Trip</label>
                </div>
            <div id="input">
              
                <input type="text" id="group" name="from" placeholder="From">

              
                <input type="text" id="group" name="to" placeholder="To">
                
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
               
                <button type="submit" class="btn btn-primary text-white">Search Flight</button>
                <button type="reset" class="btn btn-primary">Clear Form</button>
            </div>
        </form>
    </div>
<!--search form ends-->
