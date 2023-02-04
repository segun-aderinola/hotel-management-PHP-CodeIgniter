<div class="main">
  <div class="main-inner">    
    <div class="container">
        <div class="row">
            <div class="col-md-6"> 
    <?php if(isset($error)) {?>
			<div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>Error!</strong> <?=$error?>
            </div>
        <?php } ?>
        <form action="<?= base_url() ?>transactions/history" method="post">
            <div class="" style="display:flex; gap:2rem; flex-wrap:wrap">
                <div class="col-sm-6">
                  <label for="">Start Date </label> <br>

                  <input type="date" name="start_date" class="form-control" style="height:30px;width:20rem" required />

                </div>
                <div class="col-sm-6">
                <label for="">End Date</label> <br>

                <input type="date" name="end_date" class="form-control" style="height:30px;width:20rem" required />

                </div>


            </div>
            


            <div>
                <button name="check_transaction" class="btn btn-success btn-large">Check Transaction</button>
            </div>    
        </form>
    </div>


    <?php if(isset($reservation)){ ?>
      <div style="float:right;">
      <a href="<?= base_url() ?>transactions/print/<?= $trans_date[0].":".$trans_date[1]; ?>" target="_blank" class="btn btn-small btn-success">&nbsp;&nbsp;<i class="btn-icon-only icon-download"> Print </i> </a>
    </div>
    <div class="col-md-6">
    <table class="table table-striped table-bordered">
				<thead>
				  <tr>
            <th> ID</th>
				    <th> Customer Name </th>
            <th>Date</th>
				    <th> Room No. </th>
				    <th> Room Type </th>
				    
            <th>Payment Method</th>
				    <th> Amount Paid</th>
				    
				  </tr>
				</thead>
				<tbody>
				<?php

				if(isset($reservation) && is_array($reservation)){
					
                $count = 0;
                                                
                $price_array = [];
                    for($x = 0; $x < count($reservation); $x++){
                        $count = $count +1;
                        $price_array[] = $reservation[$x]->reservation_price;
                    ?>
				  <tr>
                    <td><?=$count; ?></td>
				    <td> <?=$customers[$x][0]->customer_firstname." ".$customers[$x][0]->customer_lastname ?></td>
            <td> <?=$reservation[$x]->checkin_date ?> </td>
				    <td> <?=$reservation[$x]->room_id ?> </td>
				    <td> <?=$room[$x][0]->room_type ?> </td>
				   <td><?=$reservation[$x]->payment_method ?></td>
           <td> &#8358; <?=$reservation[$x]->reservation_price ?> </td>
                            				   
				    
				  </tr>
                 
				<?php
                 } ?>
                 <tr>
                    <th colspan="6" style="text-align:right"> TOTAL</th>
                    <td> &#8358; <?php echo number_format(array_sum($price_array));?></td>
                  </tr>


                <?php } 
                
                ?>
				</tbody>
			</table>
    </div>
                <?php } ?>





    

</div>

</div>


