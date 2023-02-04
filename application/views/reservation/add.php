<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="span4">
        <a href="<?= base_url() ?>customer/add/reservation" class="btn btn-success btn-small">+ Customer</a>

<a href="<?= base_url() ?>customer/" class="btn btn-primary btn-small">All Customers</a>

<a href="<?= base_url() ?>customer/all_reservation" class="btn btn-danger btn-small" style="">All Reservations</a>


        <div class="account-container">
          
          <div class="content">
            
            <form action="<?= base_url() ?>reservation/check" method="post">
            
              <h1>Search for Rooms</h1>    
<?php if(isset($error)) {?>
      <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>Error!</strong> <?=$error?>
      </div>
<?php } ?>
<?php if(isset($success)) {?>
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>Success!</strong> <?=$success?>
      </div>
<?php } ?>
      <div class="add-fields">

        <div class="field">
          <label for="customer_TCno">Customer TC no:</label>
          <input type="text" id="customer_TCno" name="customer_TCno" required value="" placeholder="Customer ID no"/>
        </div> <!-- /field -->

        <div class="field">
          <label for="room_type">Room Type:</label>
          <select id="room_type" class="room_types" name="room_type">
            <option disabled selected value= "">-- Select Room Type -- </option>
          <?php
            foreach ($room_types as $k=>$rt) {
              ?>
              <option value="<?=$rt->room_type?>" <?php if($k==0) { echo "selected"; } ?>><?=$rt->room_type?></option>
              <?php
            }
          ?>
         </select>
        </div> <!-- /field -->
        <!-- amount to be paid -->
        
        <div class="field">
          <label for="checkin_date">Check-in Date:</label>
          <input type="date" id="checkin_date" class="" name="checkin_date" required value=""/>
        </div> <!-- /field -->
        <div class="field">
          <label for="checkout_date">Check-out Date:</label>
          <input type="date" id="checkout_date" name="checkout_date" required value=""/>
        </div> <!-- /field -->
        <p id="error-message"></p>

      
        <div class="field">
          <label for="payment_method">Payment Method:</label>
          <select type="date" id="payment_method" name="payment_method" required>
            <option selected disabled>--Select Method--</option>
            <option value="Cash">Cash</option>
            <option value="Bank Transfer">Bank Transfer</option>
            <option value="POS">POS</option>
          </select>
        </div> <!-- /field -->

        <div id="discount-panel">
          <input type="checkbox" id="discount_check" /> Apply Discount

          <div id="discount-panel-inner">
            <p style="margin-top:10px;color:darkred;">Discount (%)</p>
              <input type="text" id="discount" placeholder="Apply Discount" onkeypress="return onlyNumberKey(event)"/>
            </div>
        </div>

        <input type="text" id="total_amount" name="total_amount" />
        <input type="text" id="amount_before" style="display:none;"/>
        <div class="alert alert-primary" style="font-size:16px;">Total amount payable &#8358;<span id="amount"></span>
      <br>
            
      </div>
      </div> <!-- /login-fields --> <br>
      

      <div class="login-actions">
        
        <button class="button btn btn-success btn-medium">List Available</button>
        
      </div> <!-- .actions -->
      
      
      
    </form>
    
  </div> <!-- /content -->
</div> <!-- /account-container -->
</div>
<style type="text/css">.account-container{margin-top: 10px;padding-bottom: 15px;}</style>
      <div class="span7">
        <!-- /widget -->
        <div class="widget widget-nopad">
          <div class="widget-header"> <i class="icon-list-alt"></i>
            <h3> Reservation </h3>
          </div>
          <!-- /widget-header -->
          <div class="widget-content">
            <div id='calendar' class='calendar'>
            </div>
          </div>
          <!-- /widget-content --> 
        </div>
        <!-- /widget -->
      </div>
    </div>
  </div>
</div>
