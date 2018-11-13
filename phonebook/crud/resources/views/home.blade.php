@include('inc.header')
	<div class="container">
		<div class="row">
			<div class="col-md-8" style="padding-top: 10px;">
				<h1>Contact</h1>
			</div>
			<div class="col-md-4" style="padding-top: 10px;">
				<input class="form-control" id="myInput" type="text" placeholder="Search..">
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				@if(session('info'))
					<div class="alert alert-success">
					{{session('info')}}
					</div>
				@endif
			</div>
		</div>
		<table class="table table-striped table-hover">
		  <thead>
		    <tr>
		      <th scope="col">Name</th>
		      <th scope="col">Phone number</th>
		      <th scope="col">Action</th>
		    </tr>
		  </thead>
		  <tbody id="myTable">
		  	@if(count($phonebooks) > 0)
		  	@foreach($phonebooks->all() as $phonebook)
			    <tr>
			      <td>{{ $phonebook->name}}</td>
			      <td>{{ $phonebook->number}}</td>
			      <td>
			      	<a href='{{ url("/read/{$phonebook->id}") }}' class="btn btn-primary">View</a>
			      	<a href='{{ url("/update/{$phonebook->id}") }}' class="btn btn-success">Update</a>
			      	<a href='{{ url("/delete/{$phonebook->id}") }}' class="btn btn-danger">Delete</a>
			      </td>
			    </tr>
			@endforeach
		  	@endif
		  </tbody>
		</table>
	</div>
@include('inc.footer')