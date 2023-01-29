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
          <select id="room_type" name="room_type">
          <?php
            foreach ($room_types as $k=>$rt) {
              ?>
              <option value="<?=$rt->room_type?>" <?php if($k==0) { echo "selected"; } ?>><?=$rt->room_type?></option>
              <?php
            }
          ?>
         </select>
        </div> <!-- /field -->
        
        <div class="field">
          <label for="checkin_date">Check-in Date:</label>
          <input type="date" id="checkin_date" name="checkin_date" required value=""/>
        </div> <!-- /field -->

        <div class="field">
          <label for="checkout_date">Check-out Date:</label>
          <input type="date" id="checkout_date" name="checkout_date" required value=""/>
        </div> <!-- /field -->

      
        <div class="field">
          <label for="payment_method">Payment Method:</label>
          <select type="date" id="payment_method" name="payment_method" required>
            <option selected disabled>--Select Method--</option>
            <option value="Cash">Cash</option>
            <option value="Bank Transfer">Bank Transfer</option>
            <option value="POS">POS</option>
          </select>
        </div> <!-- /field -->

      </div> <!-- /login-fields --> <br>
      
      <div class="login-actions">
        
        <button class="button btn btn-success btn-large">List Available</button>
        
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
            <h3> Reservation</h3>
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
