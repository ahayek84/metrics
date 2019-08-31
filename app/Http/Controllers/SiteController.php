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
        $metrics =  App\Mertics::whereDate('act_date', ' = ' ,date('Y-m-d', strtotime('01-01-2019')))->get();
        //$metrics =  App\Mertics::whereBetween('act_date', [date('Y-m-d', strtotime('01-01-2019')),date('Y-m-d', strtotime('01-01-2019'))])->get();
        if (isset($input['fromdate']) and  isset($input['todate'])) {
            $metrics =  App\Mertics::whereDate('act_date', ' = ' ,date('Y-m-d', strtotime($input['fromdate'])))->get();

            ##$metrics = App\Mertics::whereBetween('act_date', [date('Y-m-d', strtotime($input['fromdate'])), date('Y-m-d', strtotime($input['todate']))])->get();
        }
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
