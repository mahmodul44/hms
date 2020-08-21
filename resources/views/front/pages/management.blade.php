@include ('front.layouts.header')

<style>
.chairmain{
left: 40%;
right: 50%;
position: relative;
width: 0%;
}
.image {
  display: block;
  width: 50%;
  height:50;


}

.overlay {
  position: absolute;
  bottom: 100%;
  left: 0;
  right: 0;
  background-color: #008CBA;
  overflow: hidden;
  width: 50%;
  height:100;
  transition: .5s ease;
}

.chairmain:hover .overlay {
  bottom: 0;
  height: 100%;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  white-space: nowrap;
}
/* 2nd row effet */
.column {
  float: left;
  width: 33%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}


</style>

<div class="container">
	<h1 style="background-color: #DFAADE;text-align: center;padding: 10px">Manegment Team</h1>
  <div class="row">
    <div class="col-sm-4 chairmain">
     <img src="{{asset('front/img/dept.png')}}" alt="department" class="image">

  <div class="overlay">
    <div class="text">
    	<h5>Dr.Safayet Hossain </h5>
    	<h3>Chairmain</h3>

    </div>
  </div>

    </div>

  </div>
</div>
<hr>
<div class="container">

<div class="row">

  <div class="col-sm-4 ">
    <div class="card">
      <img src="{{asset('front/img/female_dr.png')}}" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Mike</h2>
        <p class="title"> Director</p>
        <p>RSA hospital,dhaka</p>
        <p>example@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
    <div class="card">
      <img src="{{asset('front/img/doctor.jpg')}}" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Jane Doe</h2>
        <p class="title">CEO</p>
        <p>RSA hospital,dhaka</p>
        <p>example@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
    <div class="card">
      <img src="{{asset('front/img/female_dr.png')}}" alt="John" style="width:100%">
      <div class="container">
        <h2>Rose</h2>
        <p class="title">Founder</p>
        <p>RSA hospital,dhaka</p>
        <p>example@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>

</div>

<div class="container">

<div class="row">

  <div class="col-sm-4 ">
    <div class="card">
      <img src="{{asset('front/img/female_dr.png')}}" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Mike</h2>
        <p class="title"> Director</p>
        <p>RSA hospital,dhaka</p>
        <p>example@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
    <div class="card">
      <img src="{{asset('front/img/doctor.jpg')}}" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Jane Doe</h2>
        <p class="title">CEO</p>
        <p>RSA hospital,dhaka</p>
        <p>example@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
    <div class="card">
      <img src="{{asset('front/img/female_dr.png')}}" alt="John" style="width:100%">
      <div class="container">
        <h2>Rose</h2>
        <p class="title">Founder</p>
        <p>RSA hospital,dhaka</p>
        <p>example@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>

</div>
<!--footer-->
@include ('front.layouts.footer')
