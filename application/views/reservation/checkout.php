<div class="account-container" style="margin: 0 auto;">
	
	<div class="content clearfix">
		
		<form action="<?= base_url() ?>reservation/checkout/<?=$reservation->customer_id ?>" method="post">
		
			<h2>Update Attendance</h2>		
<?php if(isset($error)) {?>
			<div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>Error!</strong> <?=$error?>
            </div>
<?php } ?>

			<div class="add-fields">
				
				<div class="field">
					<label for="staff_name">Customer Name:</label>
					<input type="text" name="staff_name" value="<?=$attendance->employee_name?>" readonly>
				
				</div> <!-- /field -->
				<div class="field">
					<label for="staff_name">Room Number:</label>
					<input type="text" name="staff_name" value="<?=$attendance->employee_name?>" readonly>
				
				</div> <!-- /field -->
				<div class="field">
					<label for="shift_period">Shift Period:</label>
					<input type="text" name="shift_period" value="<?=$attendance->shift_period?>" readonly>
					
				</div> <!-- /field -->

				<div class="field">
					<label for="status">Status:</label>
					<select id="status" name="status" required="">
					
						<option disabled selected="">--Select--</option>
						<?php if ($attendance->status == "Sign in") { ?>
							<option value="Sign out">Sign Out</option>
							
						<?php }else{ ?>
							<option value="Sign in">Sign In</option>

						<?php } ?>
							
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