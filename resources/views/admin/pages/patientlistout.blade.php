@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')
    <div class="grid_10">
  <div style="height: 800px;background-color: #bac1dc" class="box round first grid">
  <h2><a href="{{URL::to('patientaddout')}}"><span class="btn btn-dark"> Add Patient</span></a></h2>
  <h2 style="text-align: center;">PatientList(Outdoor)</h2>
  <div class="block">
   <table class="data display datatable" id="example">
	<thead>
      @if(Session::has('message'))
 <div data-alert class="alert-box">
       {{Session::get('message')}}
 </div>
 @endif
		<tr>
		<th>SL.NO</th>
  <th>Patient ID</th>
	<th>Name</th>
	<th>Email</th>
	<th>Phone</th>
	<th>Address</th>
		<th>Type</th>
	<th>Action</th>
	</tr>
	</thead>
	<tbody>
   @php $i=0; @endphp
  <?php foreach ($patientlistout as $patient): ?>
    @php $i++ @endphp
		<tr class="odd gradeX">
	<td>{{ $i}}</td>
    <td>{{ $patient->patient_code}}
	<td>{{ $patient->name }}</td>
		<td>{{ $patient->email }}</td>
	<td>{{ $patient->mobile }}</td>
	<td>{{ $patient->address}}</td>
    <td>{{ $patient->type}}</td>
	<td><a class="btn btn-xs btn-success" href="{{('patientviewout')}}/{{$patient->id}}"><i class="fa fa-eye"></i></a><a class="btn btn-xs btn-primary" href="{{('patienteditout')}}/{{ $patient->id}}" ><i class="fa fa-edit"></i></a> <a class="btn btn-xs btn-danger" onclick="return confirm('Are you sure to delte this row !')" href="{{Route('patientoutdelete')}}/{{ $patient->id}}"><i class="fa fa-trash"></i></a></td>
		</tr>
<?php endforeach; ?>
					</tbody>
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
