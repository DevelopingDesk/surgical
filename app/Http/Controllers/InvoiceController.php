<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stock;
use App\Token;
use App\Serial;

class InvoiceController extends Controller
{
    public function create($id){
$stk=Stock::where('id',$id)->first();

return view('Invoice.create')->withinvoice($stk);
    	
    }
    public function getStore($id){

$invoice=Stock::where('id',$id)->first();
return view('Invoice.store')->withinvoice($invoice);

    }
    public function postStore(Request $request){

$invoice=Stock::where('id',$request->id)->first();

$token=Token::where('id',$invoice->token_id)->first();
$token->status=null;
$serial=Serial::where('id',$invoice->token_id)->first();
$serial->status=null;
$token->update();
$serial->update();


return redirect()->route('create.invoice', ['id' => $request->id]);

    }
}
