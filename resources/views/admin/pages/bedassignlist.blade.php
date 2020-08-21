@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')
    <div class="grid_10">
       <div style="height: 800px;background-color: #bac1dc" class="box round first grid">
	       <a href="{{URL::to('bedassignadd')}}"><span class="btn btn-dark"> Add Bed Assign</span></a>
                <h2 style="text-align: center;">Bed Assign List</h2>
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
            @if(Session::get('user_role') !== 'patient')
              <th>Patient Name</th>
            @endif
              <th>description</th>
              <th>assign Date</th>
              <th>discharge Date</th>
              <th>Total Cost</th>
            @if(Session::get('user_role') !== 'patient')
			  <th>Action</th>
                @endif
			</tr>
		</thead>
		<tbody>

           @php $i=0; @endphp
            @foreach ($assignlist as $assign)
              @php $i++ @endphp
			  <tr class="odd gradeX">
                  @php
                      $patient_name = DB::table('patient')->select('patient.*')
                  ->join('bed_assign', 'bed_assign.patient_id', '=', 'patient.patient_code')->where('bed_assign.id', $assign->id)
                   ->get();

                  @endphp

			  <td>{{ $i}}</td>
              <td>{{$assign->patient_id}}</td>
                      @if(Session::get('user_role') !== 'patient')
              <td>
                  @foreach($patient_name as $patient)
                  {{$patient->name}}
                  @endforeach
              </td>
                      @endif
              <td>{{$assign->description}}</td>
			  <td>{{$assign->assign_date}}</td>
			  <td>{{$assign->discharge_date}}</td>
			  <td>{{$assign->price}}</td>

                  @if(Session::get('user_role') !== 'patient')
	<td>
        <a href="{{Route('bedassignedit')}}/{{$assign->id}}" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
        <a class="btn btn-xs btn-danger" onclick="return confirm('Are you sure to delte this row !')" href="{{Route('bedassigndelete')}}/{{$assign->id}}"><i class="fa fa-trash"></i></a>
    </td>
       @endif

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
