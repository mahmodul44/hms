@include ('front.layouts.header')
<div class="container">
	<h1 style="background-color: #DFAADE;text-align: center;padding: 10px">Room Book & Payment</h1>


<div class="row">
  <div class="col-sm-4">
    <div style="border: none;" class="card">
      <div class="card-body">

        <h5 class="card-title">Selection Area</h5>
        <hr>
        <form>
        	 <div style="background-color: #4fd3aa;text-align: center;border: 2px solid black;padding: 15px" class="form-group">
    <label for="today_date">Enter Selection Date</label>
    <input style="background-color: #eee" type="Date" class="form-control-file" id="today_date">
  </div>

        <select style="border:none;border-bottom: 1px solid black" class="form-control">
  <option>Branch*</option>
  <option>Mirpur</option>
  <option>Kollyanpur</option>
</select>
<br>

 <input style="border:none;border-bottom: 1px solid black" class="form-control" type="text" placeholder="patinet name"><br>
 <input style="border:none;border-bottom: 1px solid black" class="form-control" type="text" placeholder="phone number">
 <br>
 <input style="border:none;border-bottom: 1px solid black" class="form-control" type="text" placeholder="email">
 <br>
<input style="border:none;border-bottom: 1px solid black" class="form-control" type="text" placeholder="Address">
<br>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline1">Male</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline2">Female</label>
</div> <br>

   </form>
      </div>
    </div>
  </div>

<div class="col-sm-4">
    <div style="border: none;" class="card">
      <div class="card-body">

        <h5 class="card-title">Available Room</h5>
        <hr>
        <form>

        <select style="border:none;border-bottom: 1px solid black" class="form-control">
  <option>Room Type</option>
  <option>AC</option>
  <option>Non AC</option>
</select>
<br>
<h3></h3>

   </form>

      </div>
    </div>
  </div>

  <div class="col-sm-4">
    <div style="border: none;" class="card">
      <div class="card-body">
        <h5 class="card-title">Payment Details</h5>
        <hr>
 		<input style="border:none;border-bottom: 1px solid black" class="form-control" type="text" placeholder="name"><br>
<input style="border:none;border-bottom: 1px solid black" class="form-control" type="text" placeholder="phone number">
<br>
<select style="border:none;border-bottom: 1px solid black" class="form-control">
  <option>Payment Method*</option>
  <option>Bikash</option>
  <option>Dutch-Bangla</option>
  <option>Credit Card</option>
</select>
<br>
    <input style="border:none;border-bottom: 1px solid black" class="form-control" type="text" placeholder="Account number"><br>
    <input style="border:none;border-bottom: 1px solid black" class="form-control" type="text" placeholder="TrnxId">
     <br>
     <input style="border:none;border-bottom: 1px solid black" class="form-control" type="text" placeholder="Amount">
     <br>


<button style="float: right;" type="button" class="btn btn-primary">Send</button>

      </div>
    </div>
  </div>
</div>
</div>

<!--footer-->
@include ('front.layouts.footer')
