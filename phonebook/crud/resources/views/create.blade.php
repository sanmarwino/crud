@include('inc.header')
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
				<div class="col-md-4" style="padding-top: 10px;">
					<form class="form-horizontal" method="POST" action="{{url('/insert')}}">
						{{csrf_field()}}
					  <fieldset>
					    <h1>Add Contact</h1>
					    @if(count($errors)>0)
					    	@foreach($errors->all() as $error)
					    		<div class="alert alert-danger">
					    			{{$error}}
					    		</div>
					    	@endforeach
					    @endif
					    <div class="form-group">
					      <label for="">Name:</label>
					      <input type="text" class="form-control" name="name" placeholder="Enter Name">
					    </div>
					    <div class="form-group">
					      <label for="">Number:</label>
					      <input type="text" class="form-control" name="number" placeholder="Enter Number">
					    </div>
					    <div class="form-group">
					      <label for="">Address</label>
					        <textarea type="text" class="form-control" name="address" cols="40" rows="6" placeholder="Enter Address"></textarea>
					    </div>
					    <div class="row">
						    <div class="col-md-12" style="text-align: right;">
						    	<button type="submit" class="btn btn-success">Submit</button>
						    <a href="{{ url('/') }}" class="btn btn-danger">Cancel</a>
						    </div>
						</div>
					  </fieldset>
					</form>
				</div>
			<div class="col-md-4"></div>
		</div>
	</div>
@include('inc.footer')