<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span12">
			<a href="<?= base_url() ?>medical_service/add" class="btn btn-small btn-primary"><i class="btn-icon-only icon-ok"></i>Add Medical Services</a>
			<br><br>
			<table class="table table-striped table-bordered">
				<thead>
				  <tr>
				    <th> Medical Service Opentime </th>
				    <th> Medical Service Closetime </th>
				    <th> Medical Service Details </th>
				    <th class="td-actions", width="100"> Actions </th>
				  </tr>
				</thead>
				<tbody>
				<?php
					if(isset($medicalServices) && $medicalServices){
					foreach ($medicalServices as $medServ) {
						// $emp->username
				?>
				  <tr>
				    <td> <?=$medServ->medicalservice_open_time?> </td>
				    <td> <?=$medServ->medicalservice_close_time?> </td>
				    <td> <?=$medServ->medicalservice_details?> </td>
				    <td class="td-actions"><a href="<?= base_url() ?>medical_service/edit/<?=$medServ->medicalservice_id?>" class="btn btn-small btn-primary"><i class="btn-icon-only icon-edit"> </i></a><a href="<?= base_url() ?>medical_service/delete/<?=$medServ->medicalservice_id?>" onclick="return confirm('Are you sure ?')" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
				  </tr>
				<?php }} ?>
				</tbody>
			</table>
		</div>
	  </div>
	</div>
  </div>
</div>