<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use app\Barber_date;
use \Datetime;
use App\Available_times;



class PostsController extends Controller
{
    //
    public function index() {
        return view('index');
    }
    public function logout (Auth $Auth) {
        // logout user
        auth()->logout();
        // redirect to homepage
        return view('/index');
    }
    public function create() {
        return view('posts/create');
    }
    
    public function gallery() {
        return view('gallery');
    }
    public function dashboard() {
        return view('admin/dashboard');
    }
     public function login2() {
        return view('login2');
    }
    public function adminnav() {
        return view('admin/adminnav');
    }

    public function barbers(Request $request) {
        
        $date_query = $request->get('datequery');
        
        if ($date_query === NULL) {
            $available_times = NULL;
            return view('admin/barbers', compact('available_times'));
        }
        else {

            $available_times = \DB::table('available_times')->join('barbers', 'barber_id', '=', 'barbers.id')->where('a_start_time', 'like', $date_query . '%')->get();
            //return $available_times;
            return view('admin/barbers', compact('available_times')); 
        }
    }
    public function update_time(Request $request) {
        
        $db_date = $request->db_start;
        $available_times = new Available_times();
        $available_times->time_id = $request->time_id;
        $available_times->a_start_time = date('Y-m-d H:i:s',strtotime($db_date . $request->start_time));
        $available_times->a_end_time = date('Y-m-d H:i:s',strtotime($db_date . $request->end_time));
        $available_times->barber_id = $request->barber_id;
        echo $db_date;
        echo $available_times;
        \DB::table('available_times')
        ->where('time_id', $available_times->time_id)
        ->update(['a_start_time' => $available_times->a_start_time, 'a_end_time' => $available_times->a_end_time]);
        //$available_times->save();
        return redirect('barbers');
    }
    
    public function delete_time(Request $request) {
        $time_id = $request->time_id;
        \DB::table('available_times')->where('time_id', '=', $time_id)->delete();
        return redirect('barbers');
        
    }
    
    public function edit_times(Request $request) {
        $id = $request->get('barber_id');
        $start = $request->get('a_start_time');
        $end = $request->get('a_end_time');
        $db_start = $request->get('db_start');
        $time_id = $request->get('time_id');
        $f_name = $request->get('f_name');
        $l_name = $request->get('l_name');
        
        return view('admin/edit_times')
            ->with('id', $id)
            ->with('start', $start)
            ->with('end', $end)
            ->with('fname', $f_name)
            ->with('lname', $l_name)
            ->with('db_start', $db_start)
            ->with('time_id', $time_id);
    }
    
    public function editbooking() {
        return view('admin/editbooking');
    }
    public function BBarbers() {
        return view('bookings/BBarbers');
    }
    public function confirm() {
        return view('bookings/confirm');
    }
    public function services() {
        return view('bookings/services');
    }
    public function Times() {
        return view('bookings/Times');
    }
    
    public function store(Request $request){
        $post=new Post;
        $post->title = $request->get('title');
        $post->body = $request->get('body');
        $post->save();
        $msg_success='Successfully added new post!';
        return redirect('posts/viewallposts')->with('status', $msg_success);
        
    }
    

}
