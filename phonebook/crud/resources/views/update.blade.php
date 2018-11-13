@include('inc.header')
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4" style="padding-top: 10px;">
				<form class="form-horizontal" method="POST" action="{{url('/edit', array($phonebooks->id))}}">
					{{csrf_field()}}
				  <fieldset>
				    <h1>Update Contact</h1>
				    @if(count($errors)>0)
				    	@foreach($errors->all() as $error)
				    		<div class="alert alert-danger">
				    			{$error}}
				    		</div>
				    	@endforeach
				    @endif
				    <div class="form-group">
				      <label for="">Name</label>
				      <input type="text" class="form-control" name="name" value="<?php echo $phonebooks->name; ?>" placeholder="Enter Name">
				    </div>
				    <div class="form-group">
				      <label for="">Number</label>
				      <input type="text" class="form-control" name="number" value="<?php echo $phonebooks->number; ?>"placeholder="Enter Number">
				    </div>
				    <div class="form-group">
				      <label>Date & Time Created:</label>
				      <input type="text" class="form-control" name="number" value="<?php echo $phonebooks->created_at; ?>" disabled>
				    </div>
				    <div class="form-group">
				      <label for="">Address</label>
				        <textarea type="text" class="form-control" name="address" cols="40" rows="6"placeholder="Enter Address"><?php echo htmlspecialchars($phonebooks->address); ?></textarea>
				    </div>
				    <div class="row" style="text-align: right;">
					    <div class="col-md-12">
					    	<button type="submit" class="btn btn-success">Update</button>
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