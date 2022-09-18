<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use Illuminate\Http\Request;

class Mycontroller extends Controller
{
    public function aboutus(){
        return  view('aboutus');
    }
    public function airports(Request $request){
        $keyword = $request->keyword??null;
        if ($keyword){
            $airports = Airport::where('country','like',"%$keyword%")->get();
        }else{
            $airports = Airport::all()->take(10);
        }
        return view('airports', compact('airports','keyword'));
    }
    public function resume(Request $request){
    return view('resume');
}
    public function portfolio(){
        return view('portfolio');
    }

}
