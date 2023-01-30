<div class="footer">
  <div class="footer-inner">
    <div class="container">
      <div class="row">
        <div class="span12"> &copy; <?= date('Y') ?> <a href="https://sourcecodester.com/">Hotel Management System - CI Version <?= CI_VERSION ?></a>. <span class="pull-right">Version 2.0</span> </div>
        <!-- /span12 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /footer-inner --> 
</div>
<!-- /footer --> 
<!-- Le javascript
================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="<?= base_url() ?>js/jquery-1.7.2.min.js"></script> 
<script src="<?= base_url() ?>js/excanvas.min.js"></script> 
<script src="<?= base_url() ?>js/chart.min.js" type="text/javascript"></script> 
<script src="<?= base_url() ?>js/bootstrap.js"></script>
<script language="javascript" type="text/javascript" src="<?= base_url() ?>js/full-calendar/fullcalendar.min.js"></script>
 
<script src="<?= base_url() ?>js/base.js"></script> 
<!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

<script>
  $(document).ready(function(){
    
     $('#tables').DataTable();

  })
</script>
<?php
if($page == "reservation" ) {
?>
<script type="text/javascript">



  function date2str(date) {
    var d = date.getDate(); 
    var m = date.getMonth()+1;
    var y = date.getFullYear();
    if(d<10)d='0'+d;
    if(m<10)m='0'+m;
    return y+'-'+m+'-'+d;
  }
  $(document).ready(function() {

   
    var d = new Date();
    if($("#calendar").length>0) {
      $("#checkin_date").val(date2str(d));
      $('#checkout_date').val(date2str(d));
    }
    var calendar = $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month'
      },
      selectable: true,
      selectHelper: true,
      select: function(start, end, allDay) {
        console.log(typeof start);
        var d = new Date(start);
        console.log(d.getDate());
        console.log(date2str(start));console.log(date2str(end));
        $('#checkin_date').val(date2str(start));
        $('#checkout_date').val(date2str(end));
//        window.location.href="<?= base_url() ?>reservation/make/" + year + "/" + month + "/" + day;
        return;
        var title = prompt('Event Title:');
        if (title) {
          calendar.fullCalendar('renderEvent',
            {
              title: title,
              start: start,
              end: end,
              allDay: allDay
            },
            true // make the event "stick"
          );
        }
        calendar.fullCalendar('unselect');
      },
      editable: false,
      events: [
      ]
    });
    /*$('#calendar').find('.fc-widget-content').css('background-color','rgb(198, 247, 198)');
    $('#calendar').find('.fc-other-month').css('background-color','transparent');*/
  });

</script>
<?php } else if($page == "dashboard") { ?>

<script>     
  // init calendar
  $(document).ready(function() {
    var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();

  });

        var lineChartData = {
            labels: <?php echo json_encode($next_week_freq['dates']);?>,
            datasets: [
        /*{
            fillColor: "rgba(220,220,220,0.5)",
            strokeColor: "rgba(220,220,220,1)",
            pointColor: "rgba(220,220,220,1)",
            pointStrokeColor: "#fff",
            data: [65, 59, 90, 81, 56, 55, 40]
        },*/
        {
            fillColor: "rgba(151,187,205,0.5)",
            strokeColor: "rgba(151,187,205,1)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            data: <?php echo json_encode($next_week_freq['freq_counts']);?>
        }
      ]

        }

        var myLine = new Chart(document.getElementById("area-chart").getContext("2d")).Line(lineChartData);


        var barChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
        {
            fillColor: "rgba(220,220,220,0.5)",
            strokeColor: "rgba(220,220,220,1)",
            data: [65, 59, 90, 81, 56, 55, 40]
        },
        {
            fillColor: "rgba(151,187,205,0.5)",
            strokeColor: "rgba(151,187,205,1)",
            data: [28, 48, 40, 19, 96, 27, 100]
        }
      ]

        }    

    </script><!-- /Calendar -->
   
<?php }
  else if($page == 'Transactions'){ ?>
        <script>
          $(document).ready(function()=>{
            $('.datepicker').datepicker();
          })
        </script>
  <?php }
?>
    <style type="text/css">
    .calendar{-webkit-user-select: none; -moz-user-select: none;}
    </style>
<script type="text/javascript">
  function open_form()
  {
    console.log("Opening Form...");
    $('#form').fadeIn();
  }

</script>
</body>
</html>
