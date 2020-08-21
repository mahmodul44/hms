@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')
    <div class="grid_10">
      <div style="height: 900px;background-color: #bac1dc" class="box round first grid">
          <a href="{{URL::to('patientadd')}}"><span class="btn btn-dark"> Add Patient</span></a>
            <h2 style="text-align: center;background-color: #ffffff">PatientList (Indoor)</h2>
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
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
            @php $i=0; @endphp
            <?php foreach ($patientlist as $patient): ?>
              @php $i++ @endphp
						<tr class="odd gradeX">
							<td>{{ $i}}</td>
                            <td>{{ $patient->patient_code}}
							<td>{{ $patient->name }}</td>
							<td>{{ $patient->email }}</td>
							<td>{{ $patient->mobile }}</td>
              <td>{{ $patient->address}}</td>
      <td>
          <a class="btn btn-xs btn-success" href="{{Route('patientview')}}/{{ $patient->id }}"><i class="fa fa-eye"></i></a>
          <a class="btn btn-xs btn-primary" href="{{Route('patientedit')}}/{{ $patient->id }}"><i class="fa fa-edit"></i></a>
          <a class="btn btn-xs btn-danger" onclick="return confirm('Are you sure to delete this row !')"  href="{{Route('patientdelete')}}/{{ $patient->id }}"><i class="fa fa-trash"></i></a>
      </td>
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
