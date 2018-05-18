@extends('Dashboard/dashboard')
@section('content')
<style> 
input[type=text] {
   
    padding: 12px 20px;
    margin: 4px 0;
    box-sizing: border-box;
    border: none;
    border-bottom: 2px solid lightblue;
    
}

</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<div class="panel-body">
	
	@include('message')
			<form role="form" method="post" class="form-horizontal" action="{{route('post.stock')}}">
				{{csrf_field()}}
			
							<div class="row">
								<div class="col-md-12">
									<center><h2 style="color: blue">Customer</h2></center>
								</div>

							</div>
						<div class="row">
	<br><br>
						<div class="row">
							<div class="col-md-12">
								<div class="col-md-3">
								<input type="text" name="cname"  placeholder="enter customer name">
									
								</div>
								<div class="col-md-3">
								<input type="text" name="cphone" placeholder="enter customer phone">
									
								</div>
								<div class="col-md-3" style="margin-top: 15px">
								<input type="date" name="date" placeholder="enter product date" class="form-control">
									
								</div>
								<div class="col-md-3">
								<input type="text" name="rnumber"  placeholder="enter receipt number">
									
								</div>
							</div>
						</div>
							<br><br>
						<div class="row">
							<div class="col-md-12">
								
								<div class="col-md-3">
								<input type="text" name="advance"  placeholder="enter Advance">
									
								</div>
								
								
								
								
							</div>
						</div>


							<div class="col-md-12">
								
<div class="row" >
	<br>
	<center><h3 style="color: blue">Products</h3></center>
	
	
<div class="col-md-12" id="add">
	

	<div class="col-md-3" >
		
<input type="text" name="pname[]" placeholder="product name" >
	</div>
	<div class="col-md-3" >
		
<input type="text" name="pquantity[]" placeholder="product quantity" >
	</div>
	<div class="col-md-3" >
		
<input type="text" name="psize[]" placeholder="product size" >
	</div>
	<div class="col-md-3" style="margin-top: 20px">
								<select class="form-control" name="pcolor[]"> 
									@foreach($color as $p)
									<option value="{{$p->id}}">
										{{$p->name}}
									</option>
									@endforeach
								</select>
									
								</div>
	
	
</div>
<br>
</div>
								
							</div>
						</div>	
							
					
					
						
						
						
				<br>		
						
		<div class="row">
			<div class="col-sm-4 ">
				<button class="btn-success btn">Submit</button>
				<button class="btn-danger btn">Cancel</button>
				
			</div>
		</div>
	
					</form>	
					<button class="btn btn-success pull-right" id="save" style="margin-right: 20px"><span class="glyphicon glyphicon-plus"></span></button>	
	</div>

	
<script type="text/javascript">
	
$('#save').on('click',function(){


$('#add').append('<div class="col-md-12"><div class="col-md-3" >'+
		
'<input type="text" name="pname[]" placeholder="product name" >'+
	'</div>'+
	'<div class="col-md-3" >'+
		
'<input type="text" name="pquantity[]" placeholder="product quantity" >'+
	'</div>'+
	'<div class="col-md-3" >'+
		
'<input type="text" name="psize[]" placeholder="product size" >'+
	'</div>'+
	'<div class="col-md-3" style="margin-top: 20px">'+
								'<select class="form-control" name="pcolor[]">'+ 
									'@foreach($color as $p)'+
									'<option value="{{$p->id}}">'+
										'{{$p->name}}'+
									'</option>'+
									'@endforeach'+
								'</select>'+
									
								'</div> </div><br>');

});
	
</script>

@endsection