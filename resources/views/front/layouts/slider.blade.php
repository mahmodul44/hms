<section class="content">


  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
@foreach($slider as  $key => $slide)
    <div class="carousel-item  {{$key == 0 ? 'active' : '' }}">

   <img src="images/slider/{{$slide->image}}"  class="d-block w-100" alt="first"/>


    </div>
      @endforeach
   {{--<div class="carousel-item">
      <img src="{{asset('front/img/2.png')}}" class="d-block w-100" alt="second">
    </div>
    <div class="carousel-item">

      <img src="{{asset('front/img/slider1.jpg')}}" class="d-block w-100" alt="third">

    </div>--}}

  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</section>

<script>
  (function($) {
    $(function() {
        $('.carousel').jcarousel({
            wrap: 'circular'
        });
    });
})(jQuery)
</script>
