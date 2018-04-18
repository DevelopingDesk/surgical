<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stock;
use App\Serial;
use App\Token;
use App\Color;
class StockController extends Controller
{
	private $extra=null;
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
->where('color_id','=',$stock->color_id)
->first();
if($serial !=null){

$stock->serial_id=$serial->name;
$serial->status=1;
$serial->save();

}
else{

	return back();
}

//for token

$token=Token::where('status','=',null)->first();

if($token){

	$stock->token_id=$token->name;
	$token->status=1;
	$token->save();
}
else{

	return back();
}


$stock->save();
return back();
    }

public function show(){

$stock=Stock::all();

return view('Stock.show')->withstock($stock);


}

}
