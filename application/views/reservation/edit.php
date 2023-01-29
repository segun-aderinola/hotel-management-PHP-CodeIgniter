<div class="account-container" style="margin: 0 auto;">
	
	<div class="content clearfix">
		
		<form action="<?= base_url() ?>reservation/edit/<?=$reservation->reserve_id?>" method="post">
		
			<h1> Update Reservation </h1>		
			
			<div class="add-fields">

				<div class="field">
					<label for="department_name">Customer's Name:</label>
					<input type="text" id="customer_name" name="customer_name" value="<?=$customer->customer_firstname . " ".$customer->customer_lastname ?>" readonly placeholder="Customer Name"/>
				</div> <!-- /field -->
				
				<div class="field">
					<label for="department_budget">Room No.:</label>
					<input type="text" id="roomNo" name="room_number" value="<?=$reservation->room_id ?>" readonly placeholder="Room Number"/>
				</div> <!-- /room Id -->

					<div class="field">
					<label for="department_budget">Customer Tel.:</label>
					<input type="text" id="roomNo" name="room_number" value="<?=$customer->customer_telephone ?>" readonly placeholder="customer telephone"/>
				</div> <!-- /room Id -->

				<div class="field">
					<label for="department_budget">Date In:</label>
					<input type="text" id="checkin_date" name="checkin_date" value="<?=$reservation->checkin_date ?>" readonly />
				</div> <!-- /room Id -->

				<div class="field">
					<label for="department_budget">Date out:</label>
					<input type="date" id="checkout_date" name="checkout_date" value="<?=$reservation->checkout_date ?>" />
				</div> <!-- /room Id -->

				<div class="field">
					<label for="department_budget">Status:</label>
					<select id="status" name="status">
						<option disabled>--select option--</option>
						<option value="in" <?php if ($reservation->status == 'in') {?> selected <?php } ?>>IN</option>

	<option value="out" <?php if ($reservation->status == 'out') {?> selected <?php } ?>>OUT</option>
					</select>
				</div> <!-- /room Id -->

			</div> <!-- /login-fields -->
			<br>
			<div class="login-actions">
				
				<button class="button btn btn-success btn-large">Update</button>
				
			</div> <!-- .actions -->
			
			
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->
<br>