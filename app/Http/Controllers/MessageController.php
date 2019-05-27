<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    public function __construct()
    {

    }

    public function store(){
        DB::table('message')->insert([
            'title'=>"Message-1",
            'body'=>"Greeting from Arafat @".Carbon::now('Asia/Dhaka')->format('h:i:s'),
            'time'=>Carbon::now('Asia/Dhaka')->toDateTimeString(),

        ]);
    }

    public function index(){
        $ms=DB::table('message')->orderBy('time','desc')->limit(15)->get();
        return view('index',compact('ms'));
    }
}
