<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Room;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){

        if(Auth::id()){

            $usertype = Auth()->user()->usertype;

            if($usertype == 'user'){

                return view('home.index');
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

        return view('home.index');
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
     return redirect()->back();

    }
}
