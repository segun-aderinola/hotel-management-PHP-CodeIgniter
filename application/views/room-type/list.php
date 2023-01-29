<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span12">
			<a href="<?= base_url() ?>room-type/add" class="btn btn-small btn-primary"><i class="btn-icon-only icon-ok"></i>Add Room Type</a>
			<br><br>
			<table class="table table-striped table-bordered" id="tables">
				<thead>
				  <tr>
				    <th> Room Type </th>
				    <th> Price </th>
				    <th> Details </th>
				    
				    <th class="td-actions"> Actions </th>
				  </tr>
				</thead>
				<tbody>
				<?php
				if(isset($room_types) && is_array($room_types)):
					foreach ($room_types as $rt) {
				?>
				  <tr>
				    <td> <?=$rt->room_type ?> </td>
				    <td> &#8358; <?=$rt->room_price ?> </td>
				    <td> <?=$rt->room_details ?> </td>
				   
				    <td class="td-actions">
				    	<a href="<?= base_url() ?>room_type/edit/<?=$rt->room_type?>" class="btn btn-small btn-primary"><i class="btn-icon-only icon-edit"> </i></a>
				    	<a href="<?= base_url() ?>room_type/delete/<?=$rt->room_type?>" onclick="return confirm('Are you sure ?')" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a>
				    </td>
				  </tr>
				<?php } ?>
				<?php endif; ?>
				</tbody>
			</table>
		</div>
	  </div>
	</div>
  </div>
</div>