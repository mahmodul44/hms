@include ('front.layouts.header')

<div class="container-fluid">

<div class="row">
<img width="99.9%" src="{{asset('front/img/service_bg.jpg')}}">
</div>
</div>
<h3 class="text-center "><span style="border-bottom: 2px solid black;">Our Services</span> </h3>
<div  class="container">
  <div style="background-color: #092763;color: #FFF" class="row">
    <div style="padding: 25px" class="col border text-center">
        <img width="90%" height="70%" src="{{asset('images/service/emergency.png')}}">
    	<h3>Emegency</h3>
<a href="{{Route('emergency')}}"> <button type="button" style="" class="btn btn-secondary btn-lg btn-block">View</button></a>

    </div>
    <div style="padding: 25px" class="col border text-center">
        <img width="90%" height="70%" src="{{asset('images/service/blood.jpg')}}">
    	<h3>BLOOD BANK</h3>

<a href="{{Route('blood')}}"> <button type="button" style="" class="btn btn-secondary btn-lg btn-block">View</button>
</a></div>
    <div style="padding: 25px" class="col border text-center">
        <img width="90%"height="70%" src="{{asset('images/service/ambullence.jpg')}}">
    	<h3>AMBULANCE</h3>

        <a href="{{Route('ambullence')}}"><button  type="button" style="" class="btn btn-secondary btn-lg btn-block">View</button>
        </a>
    </div>
    <div style="padding: 25px" class="col border text-center">
        <img width="90%"height="70%" src="{{asset('images/service/pharmacy.png')}}">
    	<h3>PHARMACY</h3>
<a href="{{Route('pharmacy')}}"> <button type="button" style="" class="btn btn-secondary btn-lg btn-block">View</button>
</a>
    </div>
  </div>


  <div style="margin-top: 10px;background-color: #092763;color: #FFF" class="row">
      <div style="padding: 25px" class="col border text-center">
          <img width="90%"height="70%" src="{{asset('images/service/prayer.jpg')}}">
          <h2>PRAYER ROOM</h2>
          <a href="{{Route('prayer')}}"> <button type="button" style="" class="btn btn-secondary btn-lg btn-block">View</button>
          </a></div>

    <div style="padding: 25px" class="col border text-center">
        <img width="90%"height="60%" src="{{asset('images/service/birth.jpg')}}">
    	<h2>BIRTH CERTIFICATE</h2>

<a href="{{Route('front_birth')}}"><button type="button" class="btn btn-secondary btn-lg btn-block"> View </button></a>
    </div>
    <div style="padding: 25px" class="col border text-center">
        <img width="90%"height="60%" src="{{asset('images/service/death.png')}}">
    	<h2>DEATH CERTIFICATE</h2>
  <a href="{{Route('front_death')}}"><button type="button" class="btn btn-secondary btn-lg btn-block">View</button></a>
    </div>
      <div style="padding: 25px" class="col border text-center">
          <img width="90%"height="70%" src="{{asset('images/service/cafeteria.png')}}">
          <h2>CAFETERIA</h2>
         <a href="{{Route('cafeteria')}}"> <button type="button" style="" class="btn btn-secondary btn-lg btn-block">View</button>
         </a>  </div>
  </div>



</div>

@include ('front.layouts.footer')
