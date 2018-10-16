<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Helpers;

class HomeController extends Controller
{
    public function index(){
        return view('home');
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
}
