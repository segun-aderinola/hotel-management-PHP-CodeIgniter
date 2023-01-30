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
            <div>
                <label for="">Select Date of Transaction</label> <br>

                <input type="date" name="date_of_transaction" class="form-control" style="height:30px;width:20rem" required />
            </div>

            <div>
                <button name="check_transaction" class="btn btn-success btn-large">Check Transaction</button>
            </div>    
        </form>
    </div>

    <div class="col-md-6">
    <table class="table table-striped table-bordered">
				<thead>
				  <tr>
                    <th> ID</th>
				    <th> Customer Name </th>
				    <th> Room No. </th>
				    <th> Room Type </th>
                    <th>Payment Method</th>
				    <th> Amount </th>
				    
				  </tr>
				</thead>
				<tbody>
				<?php

				if(isset($reservation) && is_array($reservation)){
					
                $count = 0;
                                                
                $price_array = [];
                    for($x = 0; $x < count($reservation); $x++){
                        $count = $count +1;
                        $price_array[] = $room_price[$x][0]->room_price;
                    ?>
				  <tr>
                    <td><?=$count; ?></td>
				    <td> <?=$customers[$x][0]->customer_firstname." ".$customers[$x][0]->customer_lastname ?></td>
				    <td> <?=$reservation[$x]->room_id ?> </td>
				    <td> <?=$room[$x][0]->room_type ?> </td>
				   <td><?=$reservation[$x]->payment_method ?></td>
                    <td>&#8358; <?=number_format($room_price[$x][0]->room_price) ?></td>                				   
				    
				  </tr>
                 
				<?php
                 } ?>
                 <tr>
                    <th colspan="5" style="text-align:right"> TOTAL</th>
                    <td> &#8358; <?php echo number_format(array_sum($price_array));?></td>
                  </tr>


                <?php } 
                
                ?>
				</tbody>
			</table>
    </div>





    

</div>

</div>


