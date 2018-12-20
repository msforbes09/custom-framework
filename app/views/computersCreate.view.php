<?php require 'partials/header.php' ?>
		
		<div class="row justify-content-center">
	
			<div class="col-sm-8">
				
			    <div class="card mt-5">

			    	<div class="card-body">
					    
					    <h2 class="card-title">New Computer Record</h2>
			    		
			    		<form method="post" action="/computers/create">

			    			<fieldset class="form-group">
			    				<label for="computerName">Comp Name</label>
			    				<input type="text" class="form-control" id="computerName" name="computerName" placeholder="Computer Name" required>
			    			</fieldset>

			    			<fieldset class="form-group">
			    				<label for="adminPass">Admin Password</label>
			    				<input type="text" class="form-control" id="adminPass" name="adminPass" placeholder="Administrator Password" required>
			    			</fieldset>

			    			<fieldset class="form-group">
			    				<label for="userName">UserName</label>
			    				<input type="text" class="form-control" id="userName" name="userName" placeholder="UserName" required>
			    			</fieldset>
			    
			    			<fieldset class="form-group">
			    				<label for="userPass">User Password</label>
			    				<input type="text" class="form-control" id="userPass" name="userPass" placeholder="User Password" required>
			    			</fieldset>
			    
			    			<fieldset class="form-group">
			    				<label for="specs">Computer Specs</label>
			    				<textarea class="form-control" id="specs" name="specs" rows="3"></textarea>
			    			</fieldset>


			    			<div class="form-group row">
				    			<div class="checkbox col-sm-4">
				    				<label>
				    					<input type="checkbox" name="withWbuster"> With WillsBuster
				    				</label>
				    			</div>
				    		
				    			<div class="checkbox col-sm-4">
				    				<label>
				    					<input type="checkbox" name="withSkySea"> With SkySea
				    				</label>
				    			</div>
							</div>
			    		
			    			<button type="submit" class="btn btn-primary">Submit</button>
			    			
			    			<button type="reset" class="btn btn-secondary">Clear</button>
			    		
			    		</form>

			    	</div>

			    </div>

			</div>
	
		</div>

<?php require 'partials/footer.php' ?>
