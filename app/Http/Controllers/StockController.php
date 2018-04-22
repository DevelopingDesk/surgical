<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stock;
use App\Serial;
use App\Token;
use App\Color;
use Session;
class StockController extends Controller
{
	private $extra=null;
	public function shiftCleaning(){



$rec=Stock::where('id',$_POST['orderid'])->first();

$rec->status_cleaning=1;
$rec->update();
return response("order shifted to cleaning");



	}
    public function create(){
$color=Color::all();
    	return view('Stock.create')->withextra($this->extra)->withcolor($color);
    }
    public function store(Request $request){
$stock=new Stock();
$stock->pname=$request->pname;
$stock->pquantity=$request->pquantity;
$stock->psize=$request->psize;
$stock->color_id=$request->pcolor;
$stock->cname=$request->cname;
$stock->cphone=$request->cphone;
$stock->date=$request->date;
$stock->location=$request->location;
$stock->advance=$request->advance;
$stock->rnumber=$request->rnumber;

//for serial number

$serial=Serial::where('status','=',null)
->where('color_id','=',$request->pcolor)
->first();

if($serial !=null){

$stock->serial_id=$serial->id;

$serial->status=1;
$serial->save();

}
else{
Session::flash('flash_message','Serial Key Finished');
	return back();
}

//for token

$token=Token::where('status','=',null)->first();

if($token){

	$stock->token_id=$token->id;
	$token->status=1;
	$token->save();
}
else{
Session::flash('flash_message','Token Finished');

	return back();
}


$stock->save();
Session::flash('flash_message','Successfully Added');

return back();
    }

public function show(){

$stock=Stock::all();

return view('Stock.show')->withstock($stock);


}

}
