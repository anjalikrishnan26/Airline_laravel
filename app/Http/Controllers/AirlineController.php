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
use App\Models\Book;
use Auth;
use PDF;

class AirlineController extends Controller
{
    /*--------------
    @function name:regAdd
    @function:registration
    @author:Fathimi Haja
    @date:09/03/2021
    --------------*/
    function regAdd(Request $req)
    {
        $req->validate(
            ['fname'=>'required|regex:/^[\pL\s\-]+$/u|max:20',
            'lname'=>'required|regex:/^[\pL\s\-]+$/u|max:20',
            'age'=>'required',
            'gender'=>'required',
            'address'=>'required',
            'district'=>'required',
            'phno'=>'required',
            'email'=>'required|email|unique:registers',
            'password'=>'required|alpha_num|min:6',
            ]);
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
    /*---@function name:login
     *---@function:login for admin and user
     *---@author:Fathimi Haja
     *---@date:09/03/2021, 11/03/2021*/ 
    
     function login(Request $req)
     {
         
         $req->validate([
             'email'=>'required',
             'password'=>'required'
         ]);
         $email=$req->input('email');
         $password=$req->input('password');
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
                     $data=['LoggedUserInfo'=>Register::where('id','=',session('LoggedUser'))->first()];
                     if($email=='admin123@gmail.com' && $password=='Admin123')
                     {
                         return view('adminhome',$data);
                     }
                     else
                     {
                         return view('passenger',$data);
                     }
             }
             else
             {
                 return back()->with('fail','invalid password');
             }
         }
     }
    // to view passenger page
    function passenger()
    {
        return view('passenger');  
    }
    

   
    function flight_book($id)
    {
        $data=add_flight::find($id);
        return view('flight_book',['user'=>$data]);
    }
    //insert flight
    /*--------------
    @function name:addflightform
    @function:load the flight page
    @author:Jayalekshmi L
    @date:09/03/2021
    --------------*/
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
    /*---------------
    @function name:viewflight
    @function:view the flight details
    @author:Anjali Krishnan
    @date:10/03/2021
    -------*/
    public function viewflight()
    {
        $data=AddFlight::all();
        return view('viewflight',['data'=>$data]);//view flight
    }
    //update flight
    public function update($id)
    {
       
        $data=AddFlight::where('id',$id)->select('add_flights.*')->get();
        return view('flightupdate',compact('data'));
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
        $data->bcost=$req->bcost;
        $data->ecost=$req->ecost;
        $data->fcost=$req->fcost;
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
    /*
    @function name:addstatus
    @function:Load the status page
    @author:Nikhila shibu
    @date:10/03/2021
    */
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
    public function log_out()
    {
        if(session()->has('LoggedUser'))
        {
            session()->pull('LoggedUser');
            return redirect('pass');
        }
    }
      //noti
      function viewuserstatus()
    {
            $data =Notification::all();
            return view('viewuserstatus',['user'=>$data]);
    }
   //view flight serach
   function searchflight(Request $req)
   {
       $dep=$req->departure;
       $arr=$req->arrival;
       $data=AddFlight::where('departure', $dep )
                                   ->where('arrival', $arr)
                                   ->get();
        
                                  
       if(!$data)
       {
           return redirect()->back();
       }
       else{
           return view('searchflightresult',['flights'=>$data]);


       }

   }
     /*---@function name:update
     *---@function:to view user profile
     *---@author:Fathimi Haja
     *---@date:11/03/2021*/
     function update_profile($id)
     {
         $data=Register::where('id',$id)->select('registers.*')->get();
         return view('profile',compact('data'));  
     }
     /*---@function name:update
     *---@function:to update user profile
     *---@author:Fathimi Haja
     *---@date:11/03/2021*/
    
    function pro_update(Request $req)
    {
        $data=Register::find($req->id);
        $data->fname=$req->fname;
        $data->lname=$req->lname;
        $data->age=$req->age;
        $data->gender=$req->gender;
        $data->address=$req->address;
        $data->district=$req->district;
        $data->phno=$req->phno;
        $data->email=$req->email;
        $query=$data->save();
        if($query)
            {
                return back()->with('success','Updated Successfully');
            }
            else
            {
                return back()->with('fail','something went wrong');
            }
        //return redirect('update');
    }
    
    function viewbookdetails( $id)
    {
       
        
        $data=AddFlight::where('id',$id)->select('add_flights.*')->get();  
        return view('flightbook',compact('data'));
        
    }

     
function insert_bookings(Request $req)
{
    
    $data=new Book;
    
    $data->airlinename=$req->airlinename;
    $data->departure=$req->departure;
    $data->arrival=$req->arrival;
    $data->date=$req->date;
    $data->dtime=$req->dtime;
    $data->atime=$req->atime;
    $data->name=$req->name;
    $data->age=$req->age;
    $data->class=$req->class;
    $data->email=$req->email;

    $query=$data->save();

    if($query)
    {
        //$values=Book::where('id')
        // $data=DB::table('books')->where('name', $req->name)
        //                         ->where('email', $req->email)
        //                         ->where('age', $req->age)
        //                         ->get();


        $data = DB::table('add_flights')
        ->join('books', 'add_flights.airlinename', '=', 'books.airlinename')
        // ->join('adminmodels', 'adminmodels.id', '=', 'bookings.departure')
        ->where('books.class', $req->class)
        ->where('books.name', $req->name)
        ->where('books.age', $req->age)
        ->where('books.email', $req->email)

        ->get();
        foreach($data as $row)
        {
            $bookid=$row->bid;
            $name=$row->airlinename;
        }
        
        //dd($data);
        $req->session()->put('bid',$bookid);
        
        if($req->class == 'Economy')
           {
            AddFlight::where('airlinename',$name)->update(array(
                'economy'=>DB::raw('economy - 1')  
            ));
           }
           elseif($req->class == 'Business')
           {
            AddFlight::where('airlinename',$name)->update(array(
                'business'=>DB::raw('business - 1') 
            ));
           }
           else
           {
            AddFlight::where('airlinename',$name)->update(array(
                'first'=>DB::raw('first - 1')
            ));
           }
    }
    if(!$data)
    {
        return redirect()->back();
    }
    else{
    //     if($b=$req->class){
    //         $cost=$data->bcost
    //     }
        
        return view('receipt',['booking'=>$data]);
    }

}
public function tickets($id){
    $data = Book::find($id);
    return view('index', compact('data'));
  }

  function ticketgeneration(Request $req)
  {
      $id=$req->session()->get('bid');
      $data = DB::table('add_flights')
      ->join('books', 'add_flights.airlinename', '=', 'books.airlinename')
      ->where('bid', $id )
      ->get();
       
                                 
      if(!$data)
      {
          return redirect()->back();
      }
      else{
          return view('ticket',['values'=>$data]);


      }

  }
    /*---@function name:user_details
     *---@function:to view registered users
     *---@author:Fathimi Haja
     *---@date:11/03/2021*/

     function user_details()
     {
         $data=Register::all();
         return view('reg_user_view',['data'=>$data]);
     
     }   

     //payment action

    
}
 
    