<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Helpers;
use App\User;
use App\SavedCity;
use Hash;
use Carbon\Carbon;
use DB;

class HomeController extends Controller
{
    public function index(){
        $this->get_token();
        return view('home');
    }
    public function list(){
        $token = session()->get('user_token');
        $data = User::with('saved_cities')->where('token', $token)->first();
        return view('list', ["data" => $data]);
    }
    
    public function location($keyword){
        $data = Helpers::metaweather('GET','location/search/?query='.$keyword);
        return $data;
    }
    public function location_by_lat_long($latitude, $longitude){
        $data = Helpers::metaweather('GET','location/search/?lattlong='.$latitude.','.$longitude);
        return $data;
    }
    public function weather($id){
        $data = Helpers::metaweather('GET','location/'.$id);
        return $data;
    }
    public function save_city($city){
        $token = session()->get('user_token');
        $id = User::where('token', $token)->value('id');
        $save_city = new SavedCity();
        $save_city->user_id = $id;
        $save_city->city = $city;
        $save_city->save();
        return json_decode($save_city, true);
    }

    public function get_token(){
        if (session()->has('user_token')) {
            $token = session()->get('user_token');
        }
        else{
            $ip = request()->ip();
            $date = Carbon::now();
            $token = Hash::make($ip.$date);
            $user = new User();
            $user->token = $token;
            $user->save();
            session()->put('user_token', $token);
        }
        return true;
    }
}
