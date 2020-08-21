@include ('front.layouts.header')

<div class="container-fluid">

<div class="row">
<img width="99.9%" src="{{asset('front/img/dept_bg.jpg')}}">
</div>
</div>

<!--department section-->
<h3 class="text-center "><span style="border-bottom: 2px solid black;"> Department</span> </h3>
<div class="container">
<div class="row">
  @foreach($dept_view as $dept )
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
       <img width="100%" src="images/department/{{$dept->image}}">
        <h5 class="card-title text-center">{{$dept->deptname}}</h5>
        <p class="card-text">{{$dept->description}}</p>
       <button style="margin-left: 30%" type="button" class="btn btn-outline-secondary"><a href="{{Route('dept_details')}}/{{$dept->id}}"> Show Details</a></button>
      </div>
    </div>
  </div>
  @endforeach

 
</div>

</div>
@include ('front.layouts.footer')
