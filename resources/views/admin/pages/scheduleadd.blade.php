@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')
    <div class="grid_10">
    <div style="height: 800px;background-color: #bac1dc" class="box round first grid">
     <h2><a href="{{URL::to('schedulelist')}}"><span class="btn btn-dark">All Schedule</span></a>
    <h2 style="text-align: center;">Add Schedule</h2>
     <div class="block copyblock">
    	<form action="{{Route('scheduleinsert')}}" method="post">
        @csrf
    <table class="form">

    <tr>
      <td>
      <label>Doctor Name</label>
     </td>
     <td>
     <select  name="dname" id="" class="form-control" required="required">
     <option>select option</option>

      @foreach($dr_list as $doctor)

          <option value="{{$doctor->dname}}">
            {{$doctor->dname}}
          </option>
          @endforeach
     </select>
    </td>
    </tr>
    <tr>
      <td>
      <label>Available Day</label>
     </td>
     <td>
       <select name="day" class="form-control" required="required">
       <option>select option</option>
       <option value="Satday">Satday</option>
       <option value="sunday">Sunday</option>
       <option value="Monday">Monday</option>
       <option value="Tuesday">Tuesday</option>
       <option value="Wendesday">Wendesday</option>
       <option value="Thursday">Thursday</option>
       <option value="Friday">Friday</option>
       </select>
    </td>
    </tr>
    <tr>
    <td>
<label>Available Time Slot</label>
    </td>
    <td>
      <input type="time" name="stime" placeholder="Start"  required="required">
    </td>

<td>
    <label>End Time</label></td>
  <td>
      <input type="time" name="etime" placeholder="HH:MM:SS">
  </td>
</tr>
<tr>
<td><label>per patient time</label></td>
<td>
  <input type="number" name="ptime" required="required" />
</tr>

<tr>
<td>
  <label>Serial Visibility</label>
</td>
<td>
  <select  name="svisibility" class="form-control">
  <option>select option</option>
  <option value="Sequential">Sequential</option>
  <option value="Timestamp">Timestamp</option>
  </select>
  </td>
</tr>
<tr>
<td>
  <label>Status</label>
</td>
<td>
  <div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline1" name="status" class="custom-control-input" value="active">
  <label class="custom-control-label" for="customRadioInline1">Active</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline2" name="status" class="custom-control-input" value="inactive">
  <label class="custom-control-label" for="customRadioInline2">Inactive</label>
</div>
 <!--  <select  name="status" class="form-control">
  <option>select option</option>
  <option value="active">Active</option>
  <option value="inactive">InActive</option>
  </select> -->
  </td>
</tr>
  <tr>
    <td>
    <input type="submit" name="submit" Value="Save" class="btn btn-info"/>
  </td>
    </tr>
	</table>
	</form>
</div>
       </div>
      </div>


@include ('admin.layouts.footer')
