@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')


        <div class="grid_10">
            <div style="height:900px;background-color: #bac1dc" class="box round first grid">
                @if(Session::get('user_role') !== 'patient')
	             <a href="{{URL::to('prescriptionadd')}}"><span class="btn btn-dark"> Add Prescription</span></a>
                <h2 style="text-align: center;">Prescription List</h2>
                @endif
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
							<th>Gender</th>
							<th>Date</th>
              <th>Action</th>
						</tr>
					</thead>

          <tbody>
            @php $i=0; @endphp
            @foreach ($prescriptionlistall as $prescription)
              @php $i++ @endphp
            <tr class="odd gradeX">
                 @php
                $patient_name = DB::table('patient')
            ->join('prescription', 'patient.patient_code', '=', 'prescription.patient_id')->where('prescription.pr_id', $prescription->pr_id)
            ->select('patient.*')
            ->get();
            @endphp
            @foreach($patient_name as $p_name)
              <td>{{ $i }}</td>
              <td>{{ $p_name->patient_code }}</td>
              <td>


            {{$p_name->name}}


              </td>
              <td>{{ $p_name->gender }}</td>
              <td>{{ $p_name->created_at }}</td>
               @endforeach

        <td>

            <a class="btn btn-xs btn-success" href="{{Route('prescriptionview')}}/{{$prescription->pr_id}}"><i class="fa fa-eye"></i></a>
            @if(Session::get('user_role') !== 'patient')
                <a class="btn btn-xs btn-primary" href="{{Route('prescriptionedit')}}/{{$prescription->pr_id}}" ><i class="fa fa-edit"></i>
                </a> <a class="btn btn-xs btn-danger" onclick="return confirm('Are you sure to delete this row !')" href="{{Route('prescriptiondelete')}}/{{ $prescription->pr_id}}"> <i class="fa fa-trash"></i></a>
            @endif
        </td>
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
