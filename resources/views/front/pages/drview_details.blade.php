@include ('front.layouts.header')
<div class="container">
	<h1 style="background-color: #DFAADE;text-align: center;padding: 10px;font-size: 32px">{{$drview_details->dname}}</h1>

<div class="row"> 
  
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
       <img width="100%" src="../images/doctor/{{$drview_details->image}}">
        <h5 class="card-title">{{$drview_details->dname}}</h5>
        <p class="card-text"><b>Degination -</b> {{$drview_details->degination}}</p>
        <p class="card-text"><b>Degree -</b> {{$drview_details->education}}</p>
        <h5><b>Work Days</b></h5>
        <hr>
        <p>Saturday- thursday : 10.00-2.00</p>
        <hr>

        <a style="float: right;margin: 5px" href="{{Route('appointment')}}" class="btn btn-primary">Get Appointment</a>
      </div>
    </div>
  </div>

  <div class="col-sm-8">
    <div style="border: none;" class="card">
      <div class="card-body">

        <h5 class="card-title">Biography</h5>
        <hr>
        <p class="card-text"> {{$drview_details->biography}}</p>

      </div>
    </div>
  </div>
 
</div>
</div>


<!--footer-->
@include ('front.layouts.footer')
