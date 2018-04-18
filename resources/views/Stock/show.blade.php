@extends('Dashboard/dashboard')

@section('content')


<div class="table-responsive" id="example" data-example-id="contextual-table" >
    <button class="btn btn-primary pull-right" onclick="printContent('example')">print</button>	

    <center><h2 style="color: red;margin-top: 10px">MAIN INDUSTRY SURGICAL</h2></center>
    <table class="table">
      <thead>
        <tr>
          
       
               <th>Product Name</th>
               <th>Product Quantity</th>
               <th>Product Size</th>
               <th>Customer Name</th>
               <th>Customer Phone</th>
               <th>Date</th>
               <th>Receipt Number</th>
               <th>Location</th>
               <th>Advance</th>
               <th>Color</th>
               <th>Serial Number</th>
               <th>Token Number</th>




                
                        @if(Auth::User()->hasrole('admin'))
                
                <th>Delete</th>
               @endif
                
          
        </tr>
      </thead>
      <tbody>
       
       
      
       
     
        <tr class="warning">
        
           @foreach($stock as $cls)
            <tr>

                <td>{{$cls->pname}}</td>
                <td>{{$cls->pquantity}}</td>
                <td>{{$cls->psize}}</td>
                <td>{{$cls->cname}}</td>
                <td>{{$cls->cphone}}</td>
                <td>{{$cls->date}}</td>
                <td>{{$cls->rnumber}}</td>
                <td>{{$cls->location}}</td>
                <td>{{$cls->advance}}</td>
                <td>{{$cls->color_id}}</td>
                <td>{{$cls->serial_id}}</td>
                <td>{{$cls->token_id}}</td>






        
      
<td>
                <a href="" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-remove"></i> Delete</a>
             
               </td>
              
            </tr>
           @endforeach
               </tr>
       
      </tbody>
    </table>
   </div>

<script type="text/javascript">
  
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<script type="text/javascript">

function printContent(el){

var restorpage=document.body.innerHTML;
var printcontent=document.getElementById(el).innerHTML;

document.body.innerHTML=printcontent;
window.print();
document.body.innerHTML=restorpage;
window.close();
}
$('#saveOffer').click(function () {
  window.history.pushState('forward', null, '/');
  setTimeout(function () {
    window.location.reload();
},1000);
});

</script>
@endsection