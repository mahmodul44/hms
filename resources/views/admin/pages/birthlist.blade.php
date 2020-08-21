@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')

<div class="grid_10">
    <div style="height: 900px;background-color: #bac1dc" class="box round first grid">
        @if(Session::get('user_role') !== 'patient')
    <a href="{{URL::to('birthadd')}}"><span style="border-bottom: 2px solid black" class="btn btn-dark">Add Birth</span></a>

    <hr>
      <h2 style="text-align: center;background-color:white">Birth Report</h2>
        @endif
    <div class="block">
 @if(Session::has('message'))
<div data-alert class="alert-box">
     {{Session::get('message')}}
</div>
@endif
        <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>SL.NO</th>
                            <th>Patient ID</th>
							<th>Title</th>
							<th>Description</th>
              <th>Doctor Name</th>

              <th>Action</th>
						</tr>
					</thead>

					<tbody>
            @php $i=0; @endphp
            @foreach ($birthlist as $birth)
              @php $i++ @endphp
						<tr class="odd gradeX">
							<td>{{ $i}}</td>
                            <td>{{ $birth->patient_id }}</td>
                            <td>{{ $birth->title }}</td>
							<td>{{ $birth->description }}</td>
							<td>{{ $birth->doctor_id }}</td>

              <td>
                  <a style="background-color: #0a0a0a" class="btn btn-xs btn-info" href="{{Route('generatePDF')}}/{{ $birth->birth_id }}"><i class="fa fa-print"></i></a>

                  <a class="btn btn-xs btn-success" href="{{Route('birthview')}}/{{ $birth->birth_id }}"><i class="fa fa-eye"></i></a>
                  @if(Session::get('user_role') !== 'patient')
                  <a style="background-color: #0e2231" class="btn btn-xs btn-primary" href="{{Route('birthedit')}}/{{$birth->birth_id}}"><i class="fa fa-edit"></i></a>
                  <a class="btn btn-xs btn-danger" href="{{Route('birthdelete')}}/{{$birth->birth_id}}"><i class="fa fa-trash"></i></a>
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
