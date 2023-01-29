<div class="account-container" style="margin: 0 auto;">
	
	<div class="content clearfix">
		
		<form action="<?= base_url() ?>customer/edit/<?=$customer->customer_id?>" method="post">
		
			<h1>Update Customer's Information</h1>		
			
			<div class="add-fields">
	
				<div class="field">
					<label for="customer_firstname">First name:</label>
					<input type="text" id="firstname" name="firstname" required value="<?=$customer->customer_firstname?>" placeholder="Firstname"/>
				</div> <!-- /field -->

				<div class="field">
					<label for="customer_lastname">Last name:</label>
					<input type="text" id="lastname" name="lastname" required value="<?=$customer->customer_lastname?>" placeholder="Lastname"/>
				</div> <!-- /field -->

				<div class="field">
					<label for="customer_telephone">Telephone:</label>
					<input type="text" id="telephone" name="telephone" value="<?=$customer->customer_telephone?>" placeholder="Telephone"/>
				</div> <!-- /field -->

				<div class="field">
					<label for="customer_email">Email:</label>
					<input type="text" id="email" name="email" required value="<?=$customer->customer_email?>" placeholder="Email"/>
				</div> <!-- /field -->

			
				<div class="field">
					<label for="customer_country">Country:</label>
					<input type="text" id="city" name="country" required value="<?=$customer->customer_country?>" placeholder="Country"/>
				</div> <!-- /field -->
				<div class="field">
					<label for="customer_city">City:</label>
					<input type="text" id="city" name="city" required value="<?=$customer->customer_city?>" placeholder="City"/>
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