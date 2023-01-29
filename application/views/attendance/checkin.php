<div class="account-container" style="margin: 0 auto;">
	
	<div class="content clearfix">
		
		<form action="<?= base_url() ?>attendance/checkin" method="post">
		
			<h2>New Attendance</h2>		
<?php if(isset($error)) {?>
			<div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>Error!</strong> <?=$error?>
            </div>
<?php } ?>

			<div class="add-fields">
				
				<div class="field">
					<label for="staff_name">Staff Name:</label>
					<select id="staff_name" name="staff_name" required="">
					<?php
						foreach ($employee as $emp) {
							?>
							<option value="<?=$emp->employee_firstname." ".$emp->employee_lastname?>"><?=$emp->employee_firstname." ". $emp->employee_lastname ?></option>
							<?php
						}
					?>
					</select>
				</div> <!-- /field -->
				<!-- <div class="field">
					<label for="shift_period">Shift Period:</label>
					<select id="shift_period" name="shift_period" required="">
					
							<option disabled selected="">--Select--</option>
							<option value="Morning Shift">Morning Shift</option>
							<option value="Afternoon Shift">Afternoon Shift</option>
							<option value="Night Shift">Night Shift</option>
					</select>
				</div> -->

				<div class="field">
					<label for="status">Status:</label>
					<select id="status" name="status" required="">
					
						<option disabled selected="">--Select--</option>
						<option value="Sign in">Sign In</option>
						<!-- <option value="Sign out">Sign Out</option> -->
							
					</select>
				</div> <!-- /field -->

			</div> <!-- /login-fields --> <br>
			
			<div class="login-actions">
				
				<button class="button btn btn-success btn-large" name="sign in">Sign In</button>
				
			</div> <!-- .actions -->
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->
<br>