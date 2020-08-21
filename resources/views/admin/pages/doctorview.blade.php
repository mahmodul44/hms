@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')

<div class="grid_10">
  <div style="height: 900px" class="box round first grid">
    <a href="{{URL::to('doctorlist')}}"><span style="border-bottom: 2px solid black" class="btn btn-dark"> All Doctor</span></a></h2>
  <h2 style="text-align: center;background-color: #FFF">DoctorList</h2>
<div class="block">


   <table class="form">
   <tr>

   <td>
   <label>Doctor Image</label>
 </td>

 <td  style="float: right;">
   <img src="../images/doctor/{{$result->image}}" alt="Doctor Img" style="width:150px;height:120px;">
</td>

 </tr>
 <tr>
 <td>
 <label>Doctor ID:</label>
 </td>
 <td>
 {{ $result->doctor_id}}
</td>

 <td>
 <label>Full Name:</label>
</td>
 <td>
 {{ $result->dname}}
 </td>
 </tr>
 <tr>
 <td>
 <label>Email:</label>
</td>
<td>
{{ $result->email}}
 </td>

 <td>
 <label>Phone Number</label>
 </td>
 <td>
 {{ $result->mobile}}
</td>
 </tr>
<tr>
<td>
 <label>Degination:</label>
 </td>
 <td>
{{ $result->degination}}
</td>

<td>
 <label>Department:</label>
 </td>
 <td>
{{ $result->department}}
 </td>
</tr>
 <tr>
 <td style="vertical-align: top; padding-top: 9px;">
 <label>Address</label>
 </td>
 <td>
{{ $result->address}}
 </td>

 <td>
<label>Date of Birth:</label>
 </td>
 <td>
    {{ $result->dob}}
 </td>
 </tr>
 <tr>
 <td>
 <label>Blood Group</label>
 </td>
   <td>
 {{ $result->bloodGroup}}
 </td>

 <td>
<label>Gender</label>
 </td>
 <td>
  {{ $result->gender}}
 </td>
</tr>
   <tr>
   <td>
 <label>Short Biography</label>
</td>
<td>
{{ $result->biography}}
 </td>

   <td>
   <label>Education/Degree</label>
   </td>
  <td>
   {{ $result->education}}
   </td>
    </tr>
       <tr>
           <td>
               <label>Password</label>
           </td>
           <td>
               <input type="password" readonly value="{{$result->password}}">
           </td>
       </tr>

    <tr>
      <td>
        <hr>
      </td>
        <td>
        <hr>
      </td>
        <td>
        <hr>
      </td>
    </tr>
    <tr>
      <td></td>
      <td> <a class="btn btn-dark" href="{{URL::to('doctorlist')}}">OK</a></td>
  <td></td>
    <td>
</td>
 </tr>
 </table>

 </div>
</div>
</div>
<script type="text/javascript">
	$(document).ready(function () {
	    setupLeftMenu();
	    $('.datatable').dataTable();
	    setSidebarHeight();
	});
</script>

@include ('admin.layouts.footer')
