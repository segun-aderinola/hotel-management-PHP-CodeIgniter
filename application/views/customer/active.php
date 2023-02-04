<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span12">
        	<a href="<?= base_url() ?>customer/all_reservation" class="btn btn-small btn-primary"><i class="btn-icon-only icon-ok"></i>All Customers</a>
			<h2 style="text-align:center;text-transform:uppercase">Active Clients</h2>
		
 			<table class="table table-striped table-bordered" id="tables">
				<thead>
				  <tr>
				    <th>  S/N </th>
				    
				     <th> Customer Name </th>
				    <th> Room No </th>
				    <th> Room Type </th>
				    <th> Checked In </th>
				    <th> Checked Out </th>
				    <th> Amount Paid (&#8358;)</th>

				   
				    <th> Status </th>
				    <th class="td-actions"> Actions </th>
				  </tr>
				</thead>
				<tbody>
				<?php

				if(isset($reservation) && is_array($reservation)){
					
				$count = 0;
				for($x = 0; $x< count($reservation); $x++){
				    $count = $count +1;
			     
						
					
				?>
				  <tr>
				  
				  
				    
				    <td><?= $count ?></td>
				    <td> <?=$customer_info[$x][0]->customer_firstname." ".$customer_info[$x][0]->customer_lastname?> </td>
				    <td><?= $reservation[$x]->room_id  ?></td>
				    <td><?= $room[$x][0]->room_type ?></td>
				    <td> <b>Date:</b> <?= $reservation[$x]->checkin_date  ?> <br>
				    	<b>Time:</b> <?= $reservation[$x]->time_in  ?>
				    </td>
				    
				    <td> <b> Date:</b> <?= $reservation[$x]->checkout_date  ?> <br>
				    	<b> Time: </b> <?= $reservation[$x]->time_out ?></td>
					<td><?= number_format($reservation[$x]->reservation_price) ?></td>

				    <td style="text-transform: uppercase;"><?= $reservation[$x]->status  ?></td>

				  

				    <td class="td-actions">
				    	<a href="<?= base_url() ?>reservation/edit/<?=$reservation[$x]->reserve_id?>" class="btn btn-small btn-success">&nbsp;&nbsp;<i class="btn-icon-only icon-book"> Update</i> 
				    </a> <br>
					<a href="<?= base_url() ?>reservation/receipt/<?=$reservation[$x]->reserve_id?>" target="_blank" class="btn btn-small btn-primary">&nbsp;&nbsp;<i class="btn-icon-only icon-download"> Print Receipt </i>
					 <br>
				     <?php 
				    	if($reservation[$x]->status == 'in'){
				    	?>
					<a href="<?= base_url() ?>reservation/checkout/<?=$reservation[$x]->reserve_id?>" onclick="return confirm('Are you sure you want to check out?')" class="btn btn-small btn-secondary">&nbsp;&nbsp;<i class="btn-icon-only icon-arrow-left"> Check Out </i>
				    </a>
				    <?php  } ?>

				   
				
				    </td>
				  </tr>
				<?php } }  ?>
				</tbody>
			</table>
			
		</div>
		
		<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
	  </div>
	</div>
  </div>
</div>