<div class="account-container" style="margin: 0 auto;">
	
	<div class="content clearfix">
		
		<form action="<?= base_url() ?>room/add" method="post">
		
			<h1>Add Rooms</h1>		
<?php if(isset($error)) {?>
			<div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>Error!</strong> <?=$error?>
            </div>
<?php } ?>


			<div class="add-fields">
				<div class="field">
					<label for="room_range">Room Type:</label>
					<select id="room_type" name="room_type">
					<?php
						foreach ($room_types as $k=>$rt) {

							?>
							<option value="<?=$rt->room_type?>" <?php if($k==0) { echo "selected"; } ?>><?=$rt->room_type?></option>
							<?php
						}
					?>
					</select>
				</div> <!-- /field -->
				
				
				<div class="field">
					<label for="max_id">Room Number</label>
					<input type="number" min="1" id="room_number" name="room_number" value="" placeholder="-"/>
				</div> <!-- /field -->

			</div> <!-- /login-fields --><br>
			
			<div class="login-actions">
				
				<button class="button btn btn-success btn-large">Add</button>
				
			</div> <!-- .actions -->
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->
<br>