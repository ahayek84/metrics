<?php

namespace App\Http\Controllers;
use App;
use Session;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SiteController extends Controller
{
    //
    public function home(Request $request){
        $input = $request->all();
        $metrics = App\Mertics::all();
        $data['metrics'] = $metrics;
        $data['fromdate'] = isset($input['fromdate'])?$input['fromdate'] : '';
        $data['todate'] = isset($input['todate'])?$input['todate'] : '';
        //Dd($data);
        //Session::flash('params', compact('params'));
        return view('home.index', compact('data'));
    }

    public function summary(){
        return view('home.summary');
    }
}
