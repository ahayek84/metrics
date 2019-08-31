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
        $qrs = new Queries();
        ## defaults
        $metrics =  App\Mertics::whereDate('act_date', ' = ' ,date('Y-m-d', strtotime('01-01-2019')))->get();
        $data['items_chart'] =  $qrs->bar_chart_items('01-01-2019');

        ## fill changes
        if (isset($input['fromdate']) and  isset($input['todate'])) {
            $metrics =  App\Mertics::whereDate('act_date', ' = ' ,date('Y-m-d', strtotime($input['fromdate'])))->get();
            $data['items_chart'] =  $qrs->bar_chart_items($input['fromdate']);
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
} /// end of controllers

// begin of class queries
class Queries{

    public function bar_chart_items($date){
        $res =  App\Daily_Log::whereDate('action_date', ' = ' ,date('Y-m-d', strtotime($date)))
                    ->where('class_of_object' ,'item')
                    ->get();
        $items = [];
        $items['labels'] = $res->pluck('type_of_object')->toArray();
        $items['data'] =  $res->pluck('count')->toArray();
        $items['color'] =  array_map(
                function ($array_item){
                    return "#".substr(md5(rand()), 0, 6);
                }, $items['data']);
        return $items;
    }
}
// end of class queries



