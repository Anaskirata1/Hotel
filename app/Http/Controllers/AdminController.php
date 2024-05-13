<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Room;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    public function index(){

        if(Auth::id()){

            $usertype = Auth()->user()->usertype;

            if($usertype == 'user'){
                $rooms = Room::all();

                return view('home.index', compact('rooms'));
            }
            elseif($usertype == 'admin'){

                return view('admin.index');
            }
            else {

                 return redirect()->back();
            }
        }
    }

    public function home(){

        $rooms = Room::all();

        return view('home.index', compact('rooms'));
    }

    public function create_room(){
        return view('admin.create_room') ;
    }
    public function add_room( Request $request){

         $request->validate([
            'title' => 'required|unique:rooms|max:255|min:4',
            'description' => 'required',
            'price' => 'required',
            'image' => 'mimes:jpg,png'
        ]);

        $data = new Room;

        $data->title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->type = $request->type;
        $data->wifi = $request->wifi;

        $image = $request->image ;
       if($image){
        $imagename = time().'.'.$image->getClientOriginalExtension() ;
        $request->image->move('room' , $imagename ) ;

        $data->image =$imagename;
       }
        $data->save();
        Log::info("anas");
        Alert::success('Room Added Successfully') ;
     return redirect()->back();

    }
    public function view_room(){
        $rooms = Room::all();
        return view('admin.view_room' , compact('rooms'));
    }
    public function room_delete($id){
        $room = Room::find($id) ;
        $room->delete();
        Alert::success('Room Deleted Successfully') ;
        return redirect()->back();
    }

    public function room_update($id){
        $room = Room::find($id);
        return view('admin.room_update', compact('room'));
    }
    public function edit_room($id , Request $request ){


        $request->validate([
            'title' => 'required|unique:rooms|max:255|min:4',
            'description' => 'required',
            'price' => 'required',
            'image' => 'mimes:jpg,png'
        ]);

        $data = Room::find($id) ;

        $data->title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->type = $request->type;
        $data->wifi = $request->wifi;

        $image = $request->image ;
       if($image){
        $imagename = time().'.'.$image->getClientOriginalExtension() ;
        $request->image->move('room' , $imagename ) ;

        $data->image =$imagename;
       }
        $data->save();

        Alert::success('Room Updated Successfully') ;
        return redirect()->back();
    }
}
