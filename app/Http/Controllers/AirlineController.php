<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Airline;
use App\Models\AddFlight;
use App\Models\Notification;
use App\Models\AddDiscount;
use App\Models\Register;
use App\Models\Airport;
use Auth;

class AirlineController extends Controller
{
    function regAdd(Request $req)
    {
        $airline=new Register;
        $airline->fname=$req->fname;
        $airline->lname=$req->lname;
        $airline->age=$req->age;
        $airline->gender=$req->gender;
        $airline->address=$req->address;
        $airline->district=$req->district;
        $airline->phno=$req->phno;
        $airline->email=$req->email;
        $airline->password=Hash::make($req->password);
        $query=$airline->save();
        if($query)
            {
                return back()->with('success','successfully registered');
            }
            else
            {
                return back()->with('fail','something went wrong');
            }
        //return redirect('register');
        

    }
    //login
    function login(Request $req)
    {
        
        $req->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        $userinfo=Register::where('email','=',$req->email)->first();
        if(!$userinfo)
        {
            return back()->with('fail','we cannot recognize email');
        }
        else
        {
            if(Hash::check($req->password,$userinfo->password))
            {
                $req->session()->put('LoggedUser',$userinfo->id);
                return view('passenger');
            }
            else
            {
                return back()->with('fail','invalid password');
            }
        }
    }

   
    function flight_book($id)
    {
        $data=add_flight::find($id);
        return view('flight_book',['user'=>$data]);
    }
    //insert flight
    function addflight(Request $req)
    {
        $data=new AddFlight;
        $data->airlinename=$req->airlinename;
        $data->departure=$req->departure;
        $data->arrival=$req->arrival;
        $data->date=$req->date;
        $data->dtime=$req->dtime;
        $data->atime=$req->atime;
        $data->seatcapacity=$req->seatcapacity;
        $data->business=$req->business;
        $data->economy=$req->economy;
        $data->first=$req->first;
        $data->bcost=$req->bcost;
        $data->ecost=$req->ecost;
        $data->fcost=$req->fcost;
        $query=$data->save();
        
        if($query)
        {
            return view('flightreg');
        }
        
    }
    public function viewflight()
    {
        $data=AddFlight::all();
        return view('viewflight',['data'=>$data]);//view flight
    }
//update flight
    public function update($id)
    {
       
        $data=AddFlight::find($id);
        return view('flightupdate',['dlist'=>$data]);
    }
    function updateData(Request $req)
    {
        $data=AddFlight::find($req->id);
        $data->airlinename=$req->airlinename;
        $data->departure=$req->departure;
        $data->date=$req->date;
        $data->dtime=$req->dtime;
        $data->atime=$req->atime;
        $data->seatcapacity=$req->seatcapacity;
        $data->business=$req->business;
        $data->economy=$req->economy;
        $data->first=$req->first;
        $data->bcost=$req->economy;
        $data->ecost=$req->economy;
        $data->fcost=$req->economy;

        $data->save();
        return redirect('viewflight');

    }
    //delete flight
    public function delete($id)
    {
        $data=AddFlight::find($id);
        $data->delete();
        return redirect('viewflight');
    }
//discount

    function add_discount(Request $req)
    {
        $data=new AddDiscount;
        $data->flight=$req->flight;
        $data->discount=$req->discount;
        $query=$data->save();
        
        if($query)
        {
            return view('discount');
        }
        
    }
    //to add flight status
    function addstatus(Request $req)
    {
        $data=new Notification;
        $data->flight=$req->flight;
        $data->notification=$req->notification;
        $data->currentdate=$req->currentdate;
        $query=$data->save();
        if($query)
        {
            return view('addstatus');
        }
    }

    //noti
    function viewstatus()
    {
            $data =Notification::all();
            return view('viewstatus',['user'=>$data]);
    }
    //update noti
    function upform($id)
    {
        $data=Notification::find($id);
        return view('editstatus',['user'=>$data]);
    }
    function update_status(Request $req)
    {
        $data=Notification::find($req->id);
        $data->flight=$req->flight;
        $data->notification=$req->notification;
        $data->currentdate=$req->currentdate;
        $data->save();
        return redirect('/view');
    }
    //delete noti
    function delete_status($id)
    {
        $data=Notification::find($id);
        $data->delete();
        return redirect('/view');
     }
     //add airport
     function addairport(Request $req)
    {
        $data=new Airport;
        $data->aname=$req->aname;
        $data->abbreviation=$req->abbreviation;
        $data->city=$req->city;
        $data->state=$req->state;
        $data->zipcode=$req->zipcode;
        $data->timezone=$req->timezone;
        $query=$data->save();
        if($query)
        {
            return redirect()->back();
        }
    }
    //view airport

    function viewairport()
    {
        $data=Airport::all();
        return view('airportdetails_view',['row'=>$data]);
    }
    //logout
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/log_in');
      }
      //noti
      function viewuserstatus()
    {
            $data =Notification::all();
            return view('viewuserstatus',['user'=>$data]);
    }
}
   //view flight serach
function flightsearch(Request $req)
    {
        $data=DB::table('add_flights')->where('departure', $req->departure)
                                    ->where('arrival', $req->arrival)
                                    ->get();
        if(!$data)
        {
            return redirect()->back();
        }
        else{
            return view('searchflightresult',['flights'=>$data]);


        }

    }
 
    