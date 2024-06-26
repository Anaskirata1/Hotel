<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Room;
use App\Models\Gallary;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Log;
use App\Models\Booking;
use PDF ;
use Notification;
use App\Notifications\SendEmailNotification;

class AdminController extends Controller
{
    public function index(){

        if(Auth::id()){

            $usertype = Auth()->user()->usertype;

            if($usertype == 'user'){
                $gallarys = Gallary::all();
                $rooms = Room::all();

                return view('home.index', compact('rooms','gallarys'));
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

        $gallarys = Gallary::all();

        $rooms = Room::all();

        return view('home.index', compact('rooms', 'gallarys'));
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
        Alert::warning('Room Deleted Successfully') ;
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

    public function bookings(){
        $rooms = Booking::all();
        return view('admin.booking' , compact('rooms'));
    }
    public function book_delete($id){
        $data = Booking::find($id);
        $data->delete();
        Alert::warning(' The Book Deleted Successfully') ;
        return redirect()->back();
    }
    public function approve_book($id){

        $booking = Booking::find($id);

        $booking->status = 'Approved';

        $booking->save();

        Alert::success(' The Booking Approved Successfully') ;
        return redirect()->back();
    }
    public function rejected_book($id){

        $booking = Booking::find($id);

        $booking->status = 'Rejected';

        $booking->save();

        Alert::warning(' The Booking Rejected Successfully') ;
        return redirect()->back();
    }

    public function print_pdf(){
        $rooms = Booking::all();

        $pdf = PDF::loadView('admin.pdf', compact('rooms'));
        Alert::success(' The PDF Printed Successfully') ;
        return $pdf->download('bookings_details.pdf');

    }
    public function view_gallary(){
        $gallarys = Gallary::all();
        return view('admin.gallary', compact("gallarys"));
    }
    public function upload_gallary(Request $request ){

        $request->validate([
            'image' => 'required|unique:gallaries|mimes:jpg,png'
        ]);

        $gallary = new Gallary;

        $image = $request->image ;
        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension() ;
            $request->image->move('gallary' , $imagename ) ;

            $gallary->image =$imagename;
        }
        $gallary->save();
        Alert::success(' Image Added Successfully') ;
        return redirect()->back();
    }
    public function gallary_delete($id){
        $gallary = Gallary::find($id);
        $gallary->delete();
        Alert::warning(' Image Deleted Successfully') ;
        return redirect()->back();
    }
    public function all_messages() {
        $messages = Contact::all();
        return view('admin.messages', compact('messages'));
    }
    public function send_mail($id){

        $data = Contact::find($id);
        return view('admin.send_mail', compact('data')) ;
    }
    public function mail($id ,Request $request){

        $data = Contact::find($id);

        $details = [
            'greeting' => $request->greeting,
            'body' => $request->body,
            'action_text' => $request->action_text,
            'action_url' => $request->action_url,
            'endline' => $request->endline,
        ];

        Notification::send($data , new SendEmailNotification($details));
        return redirect()->back();



    }

    public function searchdata(Request $request)
{
    $searchText = $request->search;

    if ($searchText) {
        $rooms = Room::where('title', 'LIKE', "%$searchText%")->get();
    } else {
        $rooms = Room::all();
    }

    return view('admin.view_room', compact('rooms'));
}
}
