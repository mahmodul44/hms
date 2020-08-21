@include ('front.layouts.header')

<div class="container">
	<h1 style="background-color: #DFAADE;text-align: center;padding: 10px">Make an Appoinntment</h1>
	@if(Session::has('message'))
	<div style="font-size: 25px;color: #fffafa;text-align: center;background-color: black" data-alert class="alert-box">
	{{Session::get('message')}}
	</div>
	@endif

<div class="row">
  <div class="col-sm-4">
    <div style="border: none;" class="card">
      <div class="card-body">
        <h5 style="font-size: 25px;font-weight: bold;color: red" class="card-title">Selection Area</h5>
        <hr>
        <form action="{{URL::to('appointmentuserinsert')}}" method="post">
					@csrf
        	 <div style="background-color: #4fd3aa;text-align: center;border: 2px solid black;padding: 15px" class="form-group">
    <label for="today_date">Enter Date</label>
    <input style="background-color: #eee" required="required" name="appointmentdate" type="Date" class="form-control-file" id="today_date">
  </div>
        <select name="branch" required="required" style="border:none;border-bottom: 1px solid black" class="form-control">
  <option>Select Branch*</option>
  <option value="Mirpur">Mirpur</option>
  <option value="Kollyanpur">Kollyanpur</option>
</select>
<br>
<select name="speciality" style="border:none;border-bottom: 1px solid black" class="form-control">
  <option value="">Select Department</option>
  @foreach($dept_list as $dept)
  <option value="{{$dept->deptname}}">
    {{$dept->deptname}}
  </option>
  @endforeach
</select>
<br>
<select  name="doctor" style="border:none;border-bottom: 1px solid black" class="form-control" required="required">
     <option>select Doctor</option>
     
      @foreach($dr_list as $doctor)
          
          <option value="{{$doctor->dname}}">
            {{$doctor->dname}}
          </option>
          @endforeach  
     </select>
      </div>
    </div>
  </div>

<div class="col-sm-4">
    <div style="border: none;" class="card">
      <div class="card-body">
        <h5 class="card-title">Available Slot</h5>
        <hr>
        <select name="shift" required="required" style="border:none;border-bottom: 1px solid black" class="form-control">
  <option>Select Shift*</option>
  <option value="Morning">Morning(7.00am-11.30am)</option>
  <option value="Evening">Evening(6.00pm-11.00pm)</option>
</select>
<br>

      </div>
    </div>
  </div>

  <div class="col-sm-4">
    <div style="border: none;" class="card">
      <div class="card-body">
        <h5 style="font-size: 25px;font-weight: bold;color: red" class="card-title">Patient Details</h5>
        <hr>
 		<input name="name" required="required" style="border:none;border-bottom: 1px solid black" class="form-control" type="text" placeholder="name"><br>
<input name="mobile" required="required" style="border:none;border-bottom: 1px solid black" class="form-control" type="text" placeholder="phone number"><br>
<input name="address" style="border:none;border-bottom: 1px solid black" class="form-control" type="text" placeholder="Address"><br>
<input name="age" required="required" style="border:none;border-bottom: 1px solid black" class="form-control" type="number" placeholder="Age"><br>

<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline1" value="Male" name="gender" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline1" value="Male">Male</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline2" value="Female" name="gender" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline2">Female</label>
</div> <br>
<button style="float: right;"  type="submit" name="submit" class="btn btn-primary">Send</button>
</form>
      </div>
    </div>
  </div>
</div>
</div>


<!--footer-->
@include ('front.layouts.footer')
