<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span12">
        	<a href="<?= base_url() ?>attendance/checkin" class="btn btn-small btn-primary"><i class="btn-icon-only icon-ok"></i>New Sign In</a>
			<br><br>
		
 			<table class="table table-striped table-bordered" id="tables">
				<thead>
				  <tr>
				    <th> Date </th>
				    <th> Employee Name </th>
				   
				    <th> Status </th>
				   
				    <th> Day In </th>
				    <th> Day Out </th>
				    <th class="td-actions"> Actions </th>
				  </tr>
				</thead>
				<tbody>
				<?php

				if(isset($attendance) && is_array($attendance)){
					$count = 0;
					foreach ($attendance as $att) {
						
				?>
				  <tr>
				    <td> <?=$att->date_added?> </td>
				    
				    <td> <?=$att->employee_name?> </td>
				    
				    <td> <?=$att->status?> </td>
				    <td> <b>Date:</b><?=$att->date_added?> 
				    	<br>
				    	<b>Time:</b> <?=$att->time_in?>
				</td>
				    <td> <b>Date:</b> <?=$att->date_out?>
				    <br>
				    <b>Time:</b> <?=$att->time_out?>
				</td>

				    <td class="td-actions"><a href="<?= base_url() ?>attendance/edit/<?=$att->attendance_id?>" class="btn btn-small btn-primary"><i class="btn-icon-only icon-edit"> </i></a><a href="<?= base_url() ?>attendance/delete/<?=$att->attendance_id?>" onclick="return confirm('Are you sure ?')" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i> 
				

				    </a>

				    </td>
				  </tr>
				<?php } } ?>
				</tbody>
			</table>
			
		</div>
	  </div>
	</div>
  </div>
</div>