<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span12">
			<a href="<?= base_url() ?>departments/add" class="btn btn-small btn-primary"><i class="btn-icon-only icon-ok"></i>Add Department</a>
			<br><br>
			<table class="table table-striped table-bordered" id="tables">
				<thead>
				  <tr>
				    <th> Department ID </th>
				    <th> Department Name </th>
				    <th> Department Budget </th>
				    <th class="td-actions"> Actions </th>
				  </tr>
				</thead>
				<tbody>
				<?php
					foreach ($departments as $dept) {
						// $emp->username
				?>
				  <tr>
				    <td> <?=$dept->department_id?> </td>
				    <td> <?=$dept->department_name?> </td>
				    <td> <?=$dept->department_budget?> </td>
				    <td class="td-actions"><a href="<?= base_url() ?>departments/edit/<?=$dept->department_id?>" class="btn btn-small btn-primary"><i class="btn-icon-only icon-edit"> </i></a><a href="<?= base_url() ?>departments/delete/<?=$dept->department_id?>" onclick="return confirm('Are you sure ?')" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
				  </tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
	  </div>
	</div>
  </div>
</div>