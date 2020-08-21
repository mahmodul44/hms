@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')

<div class="grid_10">
    <div style="height: 900px;background-color: #bac1dc" class="box round first grid">
    <a href="{{URL::to('doctoradd')}}"><span style="border-bottom: 2px solid black" class="btn btn-dark">Add Doctor</span></a>
      <h2 style="text-align: center;background-color:white">DoctorList</h2>
    <div class="block">

        <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>SL.NO</th>
              <th>Doctor ID</th>
							<th>Image</th>
							<th>Name</th>
							<th>Email*</th>
							<th>Phone</th>
							<th width="13%">Action</th>
						</tr>
					</thead>
          @if(Session::has('message'))
<div data-alert class="alert-box">
     {{Session::get('message')}}
</div>
@endif
					<tbody>
            @php $i=0; @endphp
            @foreach ($doctorlist as $doctor)
              @php $i++ @endphp
						<tr class="odd gradeX">
							<td>{{ $i}}</td>
              <td>{{ $doctor->doctor_id}}</td>
              <td>
                <img src="images/doctor/{{$doctor->image}}" alt="IMG" style="width:100px;height:50px;">
                </td>
              <td>{{ $doctor->dname }}</td>
							<td>{{ $doctor->email }}</td>
							<td>{{ $doctor->mobile }}</td>
              <td><a class="btn btn-xs btn-success" href="{{Route('doctorview')}}/{{ $doctor->id }}"><i class="fa fa-eye"></i></a> <a class="btn btn-xs btn-primary" href="{{ Route('doctoredit')}}/{{ $doctor->id }}" ><i class="fa fa-edit"></i></a> <a  onclick="return confirm('Are you sure to delete this row !')" href="{{ Route('doctordelete')}}/{{ $doctor->id }}" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a></td>

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
