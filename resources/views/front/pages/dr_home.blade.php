@include ('front.layouts.header')

<div class="container-fluid">

<div class="row">
<img width="99.9%" src="{{asset('front/img/dr.bg.png')}}">
</div>
</div>

<nav class="navbar navbar-light bg-dark">
  <a class="navbar-brand " style="color: #FFF"><b>List Of All Doctors In Our Hospital</b> </a>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Type a Docotor Name" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Find A Doctor </button>
  </form>
</nav>
<br>

<div class="container">

<div class="row">
   @foreach ($front_dr as $doctor)
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
       <img style="float: left;margin: 8px" width="40%" src="images/doctor/{{$doctor->image}}">
        <h5 class="card-title">{{$doctor->dname}}</h5>
        <p class="card-text"><b></b> {{$doctor->degination}}</p>
        <p class="card-text"><b></b> {{$doctor->department}}</p>
        <p class="card-text"><b></b> {{$doctor->education}}</p>
{{--        <h5 style="float: right;"><b>Work Days</b></h5>--}}
{{--       <br>--}}
{{--        <hr>--}}
{{--        <p>Saturday- thursday : 10.00-2.00</p>--}}
{{--        <hr>--}}
        <a style="float: right;margin: 5px" href="{{Route('drview_details')}}/{{$doctor->id}}" class="btn btn-primary">View Details</a>
        <a style="float: right;margin: 5px" href="{{Route('appointment')}}/{{$doctor->id}}" class="btn btn-primary">Get Appointment</a>
      </div>
    </div>
  </div>


  @endforeach<!--  -->
</div>

</div>
@include ('front.layouts.footer')
