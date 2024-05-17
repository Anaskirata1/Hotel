<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Room;
use App\Models\Booking;
use App\Models\Contact;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function room_details($id){

        $room = Room::find($id);

        return view('home.room_details' , compact('room')) ;
    }
    public function add_booking ($id , Request $request ){

        $request->validate([

            'name' => 'required|',
            'email' => 'required|',
            'phone' => 'required|',
            'startDate' => 'required|date',
            'endDate' => 'required|date|after:startDate',
        ]);

        $data = new Booking;

        $data->room_id = $id;

        $data->name = $request->name;

        $data->email = $request->email;

        $data->phone = $request->phone;

        $startDate = $request->startDate;

        $endDate = $request->endDate;
        $isBooking = Booking::where('room_id', $id)->where('startDate','<=',$endDate)->where('endDate','>=',$startDate)->exists();
        if($isBooking){
            Alert::warning('The Room is Booked Please Enter Another Date') ;
            return redirect()->back();

        } else{
            $data->startDate = $request->startDate;

        $data->endDate = $request->endDate;

        $data->save();
        Alert::success('Room Booked Successfully') ;
        return redirect()->back();
        }

    }
    public function contact_nav(){
        return view('home.contact_nav');
    }

    public function contact(Request $request){


        $request->validate([

            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);


        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;
        $contact->save();
        Alert::success('Message Sended Successfully') ;
        return redirect()->back();
    }
}
