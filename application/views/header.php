<!DOCTYPE html>
<html>
  <head>
    <title><?= !empty($title) ? $title:""?><?= HOTEL_NAME ?> </title>
    <meta charset="utf8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<link href="<?= base_url() ?>css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>css/bootstrap-responsive.min.css" rel="stylesheet">
  
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
	        rel="stylesheet">
	<!--<link href="<?= base_url() ?>css/font-awesome.css" rel="stylesheet">-->
	<link href="<?= base_url() ?>css/font-awesome.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>css/style.css" rel="stylesheet">
	<link href="<?= base_url() ?>css/pages/dashboard.css" rel="stylesheet">
	<link href="<?= base_url() ?>css/pages/signin.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url() ?>js/guidely/guidely.css" rel="stylesheet"> 
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	    <![endif]-->
  </head>
  <body style="margin-bottom: 50px;">
  
  <div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="<?= base_url() ?>"><i class="icon-building"></i> <?=HOTEL_NAME?></a>
      <?php
        if(UID){?>
          <div class="nav-collapse">
            <ul class="nav pull-right">
              <!-- <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                class="icon-cog"></i> Account <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="javascript:;">Settings</a></li>
                  <li><a href="javascript:;">Help</a></li>
                </ul>
              </li> -->
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                  class="icon-user"></i> <?=FULLNAME?> (<?=USERNAME?>) <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="<?= base_url() ?>login/logout">Logout</a></li>
                  </ul>
                </li>
                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?=DEPARTMENT_NAME?></a>
                </li>
              </ul>
              <form class="navbar-search pull-right" action="<?= base_url() ?>search" method="POST">
                <input type="text" name="customer" class="search-query" placeholder="Search Customer">
              </form>
          </div>
          <!--/.nav-collapse --> 
      <?php } ?>
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>
<!-- /navbar -->
<?php
  if(UID)
{?>
      <div class="subnavbar">
        <div class="subnavbar-inner">
          <div class="container">
            <ul class="mainnav">
              <li <?php if($page == "dashboard"){ echo 'class="active"'; } ?>><a href="<?= base_url() ?>"><i class="icon-dashboard"></i><span>Dashboard</span> </a> </li>
              <?php if(EMPLOYEE_TYPE === 'Admin'){ ?>
              <li <?php if($page == "employee"){ echo 'class="active"'; } ?>><a href="<?= base_url() ?>employee"><i class="icon-user"></i><span>Employees</span> </a> </li>
              <?php } ?>
              <li <?php if($page == "reservation"){ echo 'class="active"'; } ?>><a href="<?= base_url() ?>reservation"><i class="icon-list-alt"></i><span>Reservation</span> </a> </li>
              <li class="dropdown <?php if($page == "room" || $page == "room_type"){ echo 'active'; } ?>"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-home"></i><span>Rooms</span> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="<?= base_url() ?>room">Rooms</a></li>
                  <li><a href="<?= base_url() ?>room-type">Room Types</a></li>
                </ul>
              </li>
              <?php if(EMPLOYEE_TYPE === 'Admin'){ ?>
              <li <?php if($page == "departments"){ echo 'class="active"'; } ?>><a href="<?= base_url() ?>departments"><i class="icon-file"></i><span>Depatments</span> </a> </li> <?php } ?>

               <li <?php if($page == "attendance"){ echo 'class="active"'; } ?>><a href="<?= base_url() ?>attendance"><i class="icon-time"></i><span>Attendance</span> </a> </li>

               <li <?php if($page == "customer/active"){ echo 'class="active"'; } ?>><a href="<?= base_url() ?>customer/active"><i class="icon-user"></i><span>Checkedin Clients</span> </a> </li>
                <?php if(EMPLOYEE_TYPE === 'Admin'){ ?>
               <li <?php if($page == "transaction/active"){ echo 'class="active"'; } ?>><a href="#"><i class="icon-money"></i><span>Transaction History</span> </a> </li>  <?php } ?>

             
            </ul>
          </div>
          <!-- /container --> 
        </div>
        <!-- /subnavbar-inner --> 
      </div>
<?php } ?>
<!-- /subnavbar -->