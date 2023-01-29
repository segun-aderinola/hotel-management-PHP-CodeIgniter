<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span12">
			<a href="<?= base_url() ?>room/add" class="btn btn-small btn-primary"><i class="btn-icon-only icon-ok"></i>Add Rooms</a>
			<br><br>
			<table class="table table-striped table-bordered" id="tables">
				<thead>
				  <tr>
				    <th> Room Type </th>
				    <th> Room Number </th>
				   
				  
				    <th class="td-actions"> Actions </th>
				  </tr>
				</thead>
				<tbody>
				<?php
				if(isset($rooms) && is_array($rooms)){
					foreach ($rooms as $rm) {
						// $emp->username
				?>
				  <tr>
				    <td> <?=$rm->room_type ?> </td>
				    <td> <?=$rm->room_id ?> </td>
				  
				   
				    <td class="td-actions">
				    	
				    	<a href="<?= base_url() ?>room/delete/<?=$rm->room_id?>" onclick="return confirm('Are you sure ?')" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a>
				    </td>
				  </tr>
				<?php }} ?>
				</tbody>
			</table>
		</div>
	  </div>
	</div>
  </div>
</div>