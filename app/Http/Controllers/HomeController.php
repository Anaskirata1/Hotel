<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Room;
use App\Models\Booking;
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

        $data->startDate = $request->startDate;

        $data->endDate = $request->endDate;

        $data->save();
        Alert::success('Room Booked Successfully') ;
        return redirect()->back();

    }
}
