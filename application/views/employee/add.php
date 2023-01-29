<div class="account-container" style="margin: 0 auto;">
	
	<div class="content clearfix">
		
		<form action="<?= base_url() ?>employee/add" method="post">
		
			<h1>Add Employee</h1>		
			
			<div class="add-fields">

			

				<div class="field">
					<label for="employee_firstname">First name:</label>
					<input type="text" id="firstname" name="firstname" required value="" placeholder="Firstname"/>
				</div> <!-- /field -->

				<div class="field">
					<label for="employee_lastname">Last name:</label>
					<input type="text" id="lastname" name="lastname" required value="" placeholder="Lastname"/>
				</div> <!-- /field -->

				<div class="field">
					<label for="employee_telephone">Telephone:</label>
					<input type="text" id="telephone" name="telephone" value="" maxlength="11" placeholder="Telephone" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"/>
				</div> <!-- /field -->

				<div class="field">
					<label for="employee_email">Email:</label>
					<input type="email" id="email" name="email" required value="" placeholder="Email"/>
				</div> <!-- /field -->

				<div class="field">
					<label for="department_id">Department:</label>
					<select id="department_id" name="department_id">
					<?php
						foreach ($departments as $dept) {
							?>
							<option value="<?=$dept->department_id?>"><?=$dept->department_name?></option>
							<?php
						}
					?>
					</select>
				</div> <!-- /field -->

				<div class="field">
					<label for="employee_type">Employee Type:</label>
					<select type="text" id="type" name="type" required placeholder="Employee Type">
					    <option selected disabled value="">--Choose Employee Type--</option>    
					    <option value = "Admin">Admin</option>
					    <option value = "Receptionist">Receptionist</option>
					    <option value = "Bar">Bar</option>
					    <option value = "Gate Man">Gate Man</option>
					</select>
				</div> <!-- /field -->

				<div class="field">
					<label for="employee_salary">Employee Salary:</label>
					<input type="text" id="salary" name="salary" value="" placeholder="Employee Salary" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"/>
				</div> <!-- /field -->

				<div class="field">
					<label for="employee_hiring_date">Employee Hiring Date:</label>
					<input type="date" id="hiring_date" name="hiring_date" value="" placeholder="Employee Hiring Date"/>
				</div> <!-- /field -->

			</div> <!-- /login-fields --> <br>
			
			<div class="login-actions">
				
				<button class="button btn btn-success btn-large">Add</button>
				
			</div> <!-- .actions -->
			
			
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->
<br>