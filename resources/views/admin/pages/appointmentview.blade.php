@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')

        <div class="grid_10">
            <div style="height: 800px" class="box round first grid">
              <a href="{{URL::to('appointmentlist')}}"><span style="border-bottom: 2px solid black" class="btn btn-dark">List Of Appointment</span></a>
                <h2 style="text-align: center;background-color: #FFFF">Appointment List</h2>
                
<div class="row">
  <div class="col-sm-6">
    <div style="border: none;" class="card">
      <div class="card-body">
        <table class="form">
<tr>
<th> Appointment Id:</th>

<td>{{$appointmentview->appointment_id}}</td>
</tr>

<tr>
<th>Appointment Date: </th>

<td>{{$appointmentview->appointmentdate}}</td>
</tr>
 <tr>

<th>Branch Name:</th>
<td>{{ $appointmentview->branch }}</td>
</tr>
<tr>
   <th> Speciality</th>
   <td>{{ $appointmentview->speciality}}</td>
    </tr>
         <tr>
             <th>Doctor</th>
               <td>{{ $appointmentview->doctor}}</td>
                 </tr>
                  <tr>
                     <th>Shift</th>
                     <td>{{ $appointmentview->shift}}</td>
                 </tr>
</table>
      </div>
    </div>
  </div>

  <div class="col-sm-6">
    <div style="border: none;" class="card">
      <div class="card-body ">
      
<table class="form">
  <tr>
    <th>Patient Name:</th>
         <td>{{ $appointmentview->name}}</td>
        </tr>
         <tr>
           <th>Patient Mobile</th>
              <td>{{ $appointmentview->mobile}}</td>
                 </tr>
             <tr>
                 <th>Patient Address: </th>
         <td>{{ $appointmentview->address}}</td>
   </tr>
        <tr>
       <th>Patient Age</th>
      
     <td>{{ $appointmentview->age}}</td>
     </tr>
   <tr>
    <th>Gender</th>

     <td>{{$appointmentview->gender}} </td>
   </tr>

</table>
</div>
      </div>
    </div>

</div>
 <center><button class="btn btn-dark"><a  href="{{URL::to('appointmentlist')}}">OK</a></button> </center>

              
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
