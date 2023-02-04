<div class="account-container" style="margin: 0 auto;">
	
	<div class="content clearfix">
		
		<form action="<?= base_url() ?>discount/set_discount" method="post">
		
			<h2> Discount </h2>		
        <?php if(isset($error)) {?>
			<div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>Error!</strong> <?=$error?>
            </div>
        <?php } ?>

			<div class="add-fields">
				
				<div class="field">
					<label for="staff_name"> Name:</label>
					<input type="text">
				</div> <!-- /field -->
				

				<div class="field">
					<label for="status">Status:</label>
					<select id="status" name="status" required="">
					
						<option disabled selected="">--Select--</option>
						<option value="Available">Available</option>
						<option value="Unavailable">Unavailable</option>
							
					</select>
				</div> <!-- /field -->

			</div> <!-- /login-fields --> <br>
			
			<div class="login-actions">
				
				<button class="button btn btn-success btn-large" name="sign in">Update</button>
				
			</div> <!-- .actions -->
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->
<br>