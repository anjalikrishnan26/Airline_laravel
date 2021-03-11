<!DOCTYPE html>
<html>
    <head>
        <title>Flight Search </title>
            <meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!------custom style------->
            <link rel="stylesheet" type="text/css" href="{{asset('css/index_style.css')}}" media="all"/>
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
    
 <!---------------------section---------------------->
 <form action="/index" method="post">
 @csrf
 <center><h1 class="py-2">Flight details</h1></center>
 <table class="text-center">
      <tr>
        <th>Airline Name</th><th>Departure</th><th>Arrival</th><th>Date</th><th>Departure Time</th>
        <th>Arrival Time</th>
        <th>Seating Capacity</th>
        <th>Bussiness</th>
        <th>Economy</th>
        <th>First</th>
        <th colspan="2">Action</th>
      </tr>
      $users = DB::table('add_flights')->select('airlinename','departure','arrival','date','dtime','atime','seatcapacity','business','economy','first')->get();
      @foreach($users as $value)
      <tr>
        <td>{{ $value->airlinename }}</td>
        <td>{{ $value->departure }}</td>
        <td>{{ $value->arrival }}</td>
        <td>{{ $value->date }}</td>
        <td>{{ $value->dtime }}</td>
        <td>{{ $value->atime }}</td>
        <td>{{ $value->seatcapacity }}</td>
        <td>{{ $value->business }}</td>
        <td>{{ $value->economy }}</td> 
        <td>{{ $value->first }}</td> 
        <input type="hidden" name="id" value="{{$user['id']}}">
        <td><a href="#" class="text-decoration-none text-white ">Book</a></td>
        
      </tr>
      @endforeach
    </table>
  </form>
</body>
</html>

