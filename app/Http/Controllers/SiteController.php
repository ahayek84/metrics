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
        ## defaults
        $metrics =  App\Mertics::whereDate('act_date', ' = ' ,date('Y-m-d', strtotime('01-01-2019')))->get();

        ## fill changes
        if (isset($input['fromdate'])) {
            $metrics =  App\Mertics::whereDate('act_date', ' = ' ,date('Y-m-d', strtotime($input['fromdate'])))->get();
        }
        $data['metrics'] = $metrics;
        $data['fromdate'] = isset($input['fromdate'])?$input['fromdate'] : '';
        $data['todate'] = isset($input['todate'])?$input['todate'] : '';


        //Dd($input['fromdate']);
        //Session::flash('params', compact('params'));
        return view('home.index', compact('data'));
    }

    public function summary(){
        return view('home.summary');
    }
} /// end of controllers

