<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stock;
class CoatController extends Controller
{
     public function coat(){
$uncoat=Stock::where('status_finish','!=',null)->get();
return view('Coating.coated')->withcoat($uncoat);


    }
    public function unCoat(){
$uncoat=Stock::whereNull('status_finish')->get();
return view('Coating.uncoated')->withuncoat($uncoat);


    }
    public function shiftFinish(){


$rec=Stock::where('id',$_POST['orderid'])->first();

$rec->status_finish=1;
$rec->update();
return response("product coated successfully");
    }
}
