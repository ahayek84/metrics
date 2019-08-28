<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SiteController extends Controller
{
    //
    public function home(Request $request, $fromdate = null,$todate = null){
        //Dd($fromdate) ;
        $metrics = App\Mertics::all();
        $data['metrics'] = $metrics;
        return view('home.index', compact('data'));
    }

    public function summary(){
        return view('home.summary');
    }
}
