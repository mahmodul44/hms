@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')


<link rel="stylesheet" href="{{asset('admin/css/w3.css')}}">
<link rel="stylesheet" href="{{asset('admin/css/googleapis.css')}}">
<link rel="stylesheet" href="{{asset('admin/css/font-awesome2.min.css')}}">
        <div class="grid_10">
            <div style="height: 800px" class="box round first grid">
                <h2> Dashbord</h2>
                <div class="block">

    <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-eye w3-xxxlarge"></i></i></div>

        <div class="w3-right">

          <h3>{{$appointment}}</h3>

        </div>

        <div class="w3-clear"></div>
        <h4>Appointment</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>{{$patientall}}</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Patient</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"><i class="fa fa-male w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>{{$doctorall}}</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Doctor</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>{{$usersall}}</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Users</h4>
      </div>
    </div>
  </div>

<div class="row">
    <!-- Total Product Sales area -->
    <div class="col-lg-8">
        <div class="panel panel-default" id="js-timer">
            <div class="panel-body"><!-- <iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe> -->
                <div class="widget-title">
                    <h3>Total Progress</h3>
                    <span>Showing status from the last year</span>
                </div>
                <img src="{{asset('images/dashboard/barchart.png')}}">
               <!--  <canvas id="lineChart" height="368" width="651" style="display: block; width: 651px; height: 368px;"></canvas> -->
            </div> <!-- /.panel-body -->
        </div>
    </div>

    <!-- Message area -->
    <div class="col-lg-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>Enquiry</h3>
                <span>Latest Enquiry</span>
            </div>
            <div class="panel-body">
                <div class="message_inner">
  <p href="{{Route('appointmentlist')}}">
<div class="inbox-item">
<strong class="inbox-item-author">Appointment List</strong>
<span class="inbox-item-date"></span>

</div>
  </p>
  <p>Need a Doctor for Check-up? JUST MAKE AN APPOINTMENT & YOU'RE DONE !</p>
  <hr>

<p href="{{Route('doctorlist')}}">
  <div class="inbox-item">
 <strong class="inbox-item-author">Doctor List</strong>
  <span class="inbox-item-date"></span>
   </div>
    </p>
     <p>Need a Doctor for Check-up? JUST MAKE AN APPOINTMENT & YOU'RE DONE !</p>
    <hr>
   <p href="{{Route('patientlist')}}">
    <div class="inbox-item">
         <strong class="inbox-item-author">Patient List</strong>
        </div>
        </p>
         <p>Need a Doctor for Check-up? JUST MAKE AN APPOINTMENT & YOU'RE DONE !</p>
        <hr>
       <p href="{{Route('inbox')}}">
    <div class="inbox-item">
         <strong class="inbox-item-author">Inbox(2)</strong>

        </div>
        </p>
         <p>Need a Doctor for Check-up? JUST MAKE AN APPOINTMENT & YOU'RE DONE !</p>
           </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- <script type="text/javascript">
    $(window).on('load', function(){
        //line chart
        var ctx = document.getElementById("lineChart");
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July","August","September","October","November","December"],
                datasets: [
                    {
                        label: "Patient",
                        borderColor: "#2C3136",
                        borderWidth: "1",
                        backgroundColor: "rgba(0,0,0,.07)",
                        pointHighlightStroke: "rgba(26,179,148,1)",
                        data: [
                                                    ]
                    },
                    {
                        label: "Appointment",
                        borderColor: "#73BC4D",
                        borderWidth: "1",
                        backgroundColor: "#73BC4D",
                        pointHighlightStroke: "rgba(26,179,148,1)",
                        data: [
                                                    ]
                    }
                ]
            },
            options: {
                responsive: true,
                tooltips: {
                    mode: 'index',
                    intersect: false
                },
                hover: {
                    mode: 'nearest',
                    intersect: true
                }

            }
        });
    });
</script> -->


                </div>
            </div>
        </div>


@include ('admin.layouts.footer')
