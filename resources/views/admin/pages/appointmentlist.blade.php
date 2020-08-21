@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')

    <div class="grid_10">
      <div style="height: 900px;background-color: #bac1dc" class="box round first grid">
<a href="{{URL::to('appointmentadd')}}"><span class="btn btn-dark" style="border-bottom: 2px solid black"> Add Appointment</span></a>
                <h2 style="text-align: center;background-color: #ffffff">Appointment List</h2>
                <div class="block">
                  <table class="data display datatable" id="example">
					<thead>
          	<tr>
							<th>SL.NO</th>
              <th>Appointment_ID</th>
							<th>Appointment Date</th>
							<th>Name</th>
							<th>Branch</th>
							<th>Phone</th>
							<th width="16%">Action</th>
						</tr>
					</thead>
          @if(Session::has('message'))
<div data-alert class="alert-box">
     {{Session::get('message')}}
</div>
@endif
					<tbody>
            @php $i=0; @endphp
            @foreach ($appointmentlist as $appointment)
              @php $i++ @endphp
						<tr class="odd gradeX">
							<td>{{ $i }}</td>
              <td>{{ $appointment->appointment_id }}</td>
              <td>{{ $appointment->appointmentdate }}</td>
							<td>{{ $appointment->name }}</td>
							<td>{{ $appointment->branch }}</td>
							<td>{{ $appointment->mobile }}</td>
  <td> <a class=" btn btn-xs btn-success" href="{{Route('appointmentview')}}/{{$appointment->id}}"><i class="fa fa-eye"></i></a> <a class=" btn btn-xs btn-primary" href="{{ Route('appointmentedit')}}/{{$appointment->id}}"><i class="fa fa-edit"></i></a> <a class="btn btn-xs btn-danger" onclick="return confirm('Are you sure to delete this Appointment !')" href="{{Route('appointmentdelete')}}/{{$appointment->id}}"> <i class="fa fa-trash"></i></a> </td>
						</tr>
          @endforeach
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
