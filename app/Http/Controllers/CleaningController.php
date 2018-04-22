<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stock;
class CleaningController extends Controller
{
    public function clean(){

$clean=Stock::where('status_coating','!=',null)->get();
return view('Cleaning.clean')->withclean($clean);


    }
    public function unClean(){

$unclean=Stock::whereNull('status_coating')->get();
//dd($unclean);
return view('Cleaning.unclean')->withunclean($unclean);


    }

    public function shiftCoating(){





$rec=Stock::where('id',$_POST['orderid'])->first();

$rec->status_coating=1;
$rec->update();
return response("order shifted for coating");


    }
}
