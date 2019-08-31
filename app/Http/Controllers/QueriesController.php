<?php

namespace App\Http\Controllers;
use App;
use Session;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;


class QueriesController extends Controller
{
    //
    public function bar_chart($date,$class){
        $res =  App\Daily_Log::whereDate('action_date', ' = ' ,date('Y-m-d', strtotime($date)))
            ->where('class_of_object' ,$class)
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

    public function line_chart($date,$class){
        $res = DB::table('daily__logs')
                   ->select(DB::raw('GROUP_CONCAT(count) as counts, GROUP_CONCAT(action_date) as action_dates, type_of_object '))
                   ->whereDate('action_date', ' <= ' ,date('Y-m-d', strtotime($date)))
                   ->where('class_of_object' ,$class)
                   ->groupby(['type_of_object'])
                    ->get();
        $res_arr = $res->toArray();

        $datasets = [];
        $item = [];
        foreach($res_arr as $key=>$totres_val){
            $totres_val = json_decode(json_encode($totres_val), true); // change the inner StdClass to Array
            $data = unserialize(serialize(explode(',',$totres_val['counts'])));
            $labels = unserialize(serialize(explode(',',$totres_val['action_dates'])));
            $datasets["labels"] = $labels;
            $label = $totres_val['type_of_object'];
            $color =  array_map( function ($array_item){
                                   return "#".substr(md5(rand()), 0, 6);
                                }, $data);
            $item = [
                'label' => $label,
                'data' => $data, //array_map('floatval', $values)
                'backgroundColor' => $color,
                'borderColor' => $color,
                'borderWidth' => 1,
                'fill' => false
            ];
            $datasets["dataset"][] =  $item;
        }
        return $datasets;
    }
} /// end of controllers

