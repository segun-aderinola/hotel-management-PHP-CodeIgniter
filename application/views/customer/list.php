<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span12">
        	<a href="<?= base_url() ?>customer/add" class="btn btn-small btn-primary"><i class="btn-icon-only icon-ok"></i>Add Customer</a>
			<br><br>
		
 			<table class="table table-striped table-bordered" id="tables">
				<thead>
				  <tr>
				    <th> Customer ID </th>
				    <th> Customer TC </th>
				    <th> Customer Name </th>
				    <th class="td-actions"> Actions </th>
				  </tr>
				</thead>
				<tbody>
				<?php

				if(isset($customers) && is_array($customers)){
					$count = 0;
					foreach ($customers as $cust) {
						
				?>
				  <tr>
				    <td> <?=$count = $count+1?> </td>
				    <td> <?=$cust->customer_TCno?> </td>
				    <td> <?=$cust->customer_firstname." ".$cust->customer_lastname?> </td>
				    <td class="td-actions"><a href="<?= base_url() ?>customer/edit/<?=$cust->customer_id?>" class="btn btn-small btn-primary"><i class="btn-icon-only icon-edit"> </i></a><a href="<?= base_url() ?>departments/delete/<?=$cust->customer_id?>" onclick="return confirm('Are you sure ?')" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i> 
					<a href="#" class="btn btn-small btn-primary">&nbsp;&nbsp;<i class="btn-icon-only icon-print"> </i>

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