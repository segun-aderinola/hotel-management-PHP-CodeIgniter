<div class="account-container" style="margin: 0 auto;">
	
	<div class="content clearfix">

		<form action="<?= base_url() ?>room/edit/<?=$room_range->room_type?>/<?=$room_range->room_id?>" method="post">
		
			<h1>Update Rooms</h1>		
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
						foreach ($room_types as $rt) {
							?>
							<option value="<?=$rt->room_type?>" <?php if($rt->room_type==$room_range->room_type) { echo "selected"; } ?>><?=$rt->room_type?></option>
							<?php
						}
					?>
					</select>
				</div> <!-- /field -->
				
				<div class="field">
					<label for="max_id">Room Number</label>
					<input type="number" id="room_number" name="room_number" value="<?=$room_range->room_id?>" placeholder="-"/>
				</div> <!-- /field -->
				<br>

			</div> <!-- /login-fields -->
			
			<div class="login-actions">
				
				<button class="button btn btn-success btn-large">Save</button>
				
			</div> <!-- .actions -->			
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->
<br>
