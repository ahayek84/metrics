<?php

namespace App\Http\Controllers;
use App;
use Session;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

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
} /// end of controllers

