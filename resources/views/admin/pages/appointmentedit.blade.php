@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')

<div class="grid_10">
    <div class="box round first grid">
        <h2>Update Appointment Info</h2>
        <div class="block">
<form action="{{Route('appointmentupdate')}}/{{ $appointment->id}}" method="post" name="id">
            @csrf
             <table class="form">
                 <tr>
                 <td>
                 <label>Appointment Date</label>
             </td>
             <td>
               <input type="date" name="appointmentdate" value="{{ $appointment->appointmentdate }}" />
             </td>
       </tr>
             <tr>
               <td>
                 <label>Branch</label>
           </td>
           <td>
                 <input type="text" name="branch" value="{{ $appointment->branch }}"/>
             </td>

             <td>
                 <label>Shift</label>
             </td>
             <td>
               <input type="text" name="shift" value="{{ $appointment->shift}}"/>

             </td>
         </tr>
                 <tr>
                 <td>
                 <label>Department</label>
             </td>
             <td>
                 <!-- <input type="text" name="speciality" value="{{ $appointment->speciality}}"/> -->
                 <select name="speciality">
                     <option value="">Select Department</option>
                    @foreach($department as $dept)
<option {{$appointment->speciality==$dept->deptname?'selected':''}} value="{{$dept->deptname}}">{{$dept->deptname}}</option>
                    @endforeach
                 </select>
             </td>
                 
                 <td>
                 <label>Doctor</label>
             </td>
             <td>
                 <!-- <input type="text" name="doctor" value="{{ $appointment->doctor}}"/> -->
                 <select name="doctor">
  <option value="">select doctor</option>
  @foreach($doctor as $dr)
  <option {{ $appointment->doctor==$dr->dname?'selected':''}} value="{{$dr->dname}}">{{$dr->dname}}</option>
  @endforeach
</select>
             </td>
                 </tr>

             
                <tr>
             <td>
                 <label>Patient Name</label>
             </td>
             <td>
               <input type="text" name="name" value="{{ $appointment->name}}"/>

             </td>
         
             <td>
                 <label>Patient Mobile</label>
             </td>
             <td>
               <input type="text" name="mobile" value="{{ $appointment->mobile}}"/>
             </td>
         </tr>
                <tr>
             <td>
                 <label>Patient Address</label>
             </td>
             <td>
               <input type="text" name="address" value="{{ $appointment->address}}"/>
             </td>
         
             <td>
                 <label>Patient Age</label>
             </td>
             <td>
               <input type="text" name="age" value="{{ $appointment->age}}"/>
             </td>
         </tr>
       <tr>
        <td>
            <label>Gender</label>
             </td>
             <td>
                  <input type="text" name="gender" value="{{$appointment->gender}}"/>
             </td>
         </tr>
         <tr>
             <td>
                 <input type="submit" name="submit" Value="Update" class="btn btn-success" />
             </td>
         </tr>
             </table>
             </form>

        </div>
    </div>
</div>

@include ('admin.layouts.footer')
