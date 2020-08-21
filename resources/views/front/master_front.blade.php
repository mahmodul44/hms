@include ('front.layouts.header')
@include ('front.layouts.slider')

<style>
  #myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: green;
  color: white;
  cursor: pointer;
  padding: 10px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}

</style>
<section class="content">
    <div class="container">
 <h3 class="text-center">Why Choose Us</h3>
  <hr>
</div>
</section>
<!--main part-->
<!--why choose section-->
<div class="container">
  <div class="row">
    <div class="col-sm" style="background-color:#45aaff;text-align: center;">
     <h3><b>Our Departments</b></h3>
      <p style="color: #fff;">Cheak Out all our departments.</p>
      <a href="{{Route('department')}}"><button type="button" class="btn btn-dark">More</button></a> 
    </div>
    <div class="col-sm" style="background-color:#aaff;text-align: center;">
     <h3><b>Our Packages</b></h3>
      <p style="color: #fff">Cheak Out all our Services.</p>
      <a href="{{Route('service')}}"><button type="button" class="btn btn-secondary">More</button></a>
    </div>
    <div class="col-sm" style="background-color:#45aaff;text-align: center;">
      <h3><b> Appointment</b></h3>
      <p style="color: #fff">Click the Button For get Appointment</p>
      <a href="{{Route('appointment')}}"> <button type="button" class="btn btn-dark">Click Me</button></a>
    </div>
  </div>
</div>
<!--about section-->
<div class="container-fluid">
  <div class="row" style="margin-top: 10px">
    <div class="col-md-4">
      <h3>Welcome our SRA</h3><hr>
    <p> Auto-layout for flexbox grid columns also means you can set the width of one column and have the sibling columns automatically resize around it. You may use predefined grid classes (as shown below), grid mixins, or inline widths. Note that the other columns will resize no matter the width of the center column.</p>
    </div>
    <div class="col-md-4">
     <img width="90%" height="100%" alt="doctor about image" src="{{asset('front/img/dr_about.jpg')}}">
    </div>
    <div class="col-md-4">
       <h3>Our mission & Vission</h3><hr>
    <p> Auto-layout for flexbox grid columns also means you can set the width of one column and have the sibling columns automatically resize around it. You may use predefined grid classes (as shown below), grid mixins, or inline widths. Note that the other columns will resize no matter the width of the center column.</p>
    </div>
  </div>
</div>

<!--footer-->
@include ('front.layouts.footer')


<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
