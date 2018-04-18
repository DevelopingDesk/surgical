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
<div class="panel-body">
			<form role="form" method="post" class="form-horizontal" action="{{route('post.stock')}}">
				{{csrf_field()}}
							<div class="row">
								<div class="col-md-12">
									<center><h2 style="color: lightblue">Enter Stock</h2></center>
								</div>
							</div>
						<div class="row">
							<div class="col-md-12">
								<div class="col-md-3">
								<input type="text" name="pname"  placeholder="enter product name">
									
								</div>
								<div class="col-md-3">
								<input type="text" name="pquantity" placeholder="enter product quantity">
									
								</div>
								<div class="col-md-3">
								<input type="text" name="psize"  placeholder="enter product size">
									
								</div>
								<div class="col-md-3" style="margin-top: 15px">
								<select class="form-control" name="pcolor"> 
									@foreach($color as $col)
									<option value="{{$col->id}}">
										{{$col->name}}
									</option>
									@endforeach
								</select>
									
								</div>
							</div>
						</div>	
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
								<div class="col-md-3" style="margin-top: 15px" >
								<select class="form-control" name="location"> 
									<option>
										Uncoated
									</option>
									<option>
										Coated
									</option>
									
								</select>
									
								</div>
								<div class="col-md-3">
								<input type="text" name="advance"  placeholder="enter Advance">
									
								</div>
								
								
								
								
							</div>
						</div>	
						
						
						
				<br>		
						
		<div class="row">
			<div class="col-sm-4 col-sm-offset-10">
				<button class="btn-warning btn">Submit</button>
				<button class="btn-success btn">Cancel</button>
				
			</div>
		</div>
	
					</form>		
	</div>

@endsection