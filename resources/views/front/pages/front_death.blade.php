@include ('front.layouts.header')


<div class="container col-sm-6">
  <div style="background-color: #092763;color: #FFF" class="row">
  <div class="card-body">
    <h5 class="card-title text-center">Select correct information For Death Certificate</h5>
  @if(Session::has('message'))
  <div style="font-size: 22px;background-color: black;color:#e8a08a;text-align: center;border: 2px solid" data-alert class="alert-box">
  {{Session::get('message')}}
  </div>
  @endif
  
  <hr>
  <form action="{{URL::to('front_deathinsert')}}" method="post">
      @csrf
  <label for="today_date"> Today Date</label>
<input style="background-color: #eee" type="Date" name="date" class="form-control-file" id="date">
<br>
  <select name="patient_id" class="form-control" required="required">
     <option>select patient id</option>
     @foreach($patient_list as $patient)
     <option value="{{$patient->patient_code}}">
      {{$patient->patient_code}} ({{$patient->name}})</option>
     @endforeach
   </select>
   
<br>
<select  name="doctor_id" class="form-control" required="required">
     <option>select option</option>
     
      @foreach($dr_list as $doctor)
          
          <option value="{{$doctor->dname}}">
            {{$doctor->dname}}
          </option>
          @endforeach  
     </select>
<br>
 <input style="border:none;border-bottom: 1px solid black" class="form-control" type="" placeholder="title" name="title">
 <br>
<input style="border:none;border-bottom: 1px solid black" class="form-control" type="" placeholder="description" name="description">
<br>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline1" name="status" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline1">Active</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline2" name="status" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline2">Inactive</label>
</div>
 <br>
<button style="float: right;" type="submit" name="submit" class="btn btn-primary">Send</button>
 </form>
   </div>  
    
  </div>
</div>

@include ('front.layouts.footer')
