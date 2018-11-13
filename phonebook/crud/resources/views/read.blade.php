@include('inc.header')
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4" style="padding-top: 10px;">
				<h1>View Contact</h1>
				<div class="form-group">
				      <label>Name:</label>
				      <input type="text" class="form-control" name="name" value="<?php echo $phonebooks->name; ?>" disabled>
				    </div>
				    <div class="form-group">
				      <label>Number:</label>
				      <input type="text" class="form-control" name="number" value="<?php echo $phonebooks->number; ?>" disabled>
				    </div>
				    <div class="form-group">
				      <label>Date & Time Created:</label>
				      <input type="text" class="form-control" name="number" value="<?php echo $phonebooks->created_at; ?>" disabled>
				    </div>
				    <div class="form-group">
				      <label for="">Address</label>
				      <textarea type="text" class="form-control" name="address" disabled cols="40" rows="6"><?php echo htmlspecialchars($phonebooks->address); ?></textarea>
				    </div>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
@include('inc.footer')