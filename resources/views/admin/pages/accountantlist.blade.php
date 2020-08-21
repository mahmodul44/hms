@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')

<div class="grid_10">
    <div style="height: 900px" class="box round first grid">
    <a href="{{URL::to('employeeadd')}}"><span style="border-bottom: 2px solid black" class="btn btn-dark">Add Employee</span></a>
    <a href="{{URL::to('accountantlist')}}"><span style="border-bottom: 2px solid black" class="btn btn-light">AccountantList</span></a>
    <a href="{{URL::to('laboratoristlist')}}"><span style="border-bottom: 2px solid black" class="btn btn-dark">Laborotoryist List</span></a>
    <a href="{{URL::to('nurselist')}}"><span style="border-bottom: 2px solid black" class="btn btn-dark">Nurse List</span></a>
    <a href="{{URL::to('pharmacylist')}}"><span style="border-bottom: 2px solid black" class="btn btn-dark">Pharmacy List</span></a>
    <a href="{{URL::to('receptionistlist')}}"><span style="border-bottom: 2px solid black" class="btn btn-dark">Receptionist List</span></a>
    <a href="{{URL::to('case_managerlist')}}"><span style="border-bottom: 2px solid black" class="btn btn-dark">Case Manager List</span></a>
    <hr>
      <h2 style="text-align: center;background-color:white">List</h2>
    <div class="block">

        <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>SL.NO</th>
							<th>Image</th>
							<th>Name</th>
							<th>Email*</th>
							<th>Phone</th>
							<th>Action</th>
						</tr>
					</thead>
          @if(Session::has('message'))
<div data-alert class="alert-box">
     {{Session::get('message')}}
</div>
@endif
					<tbody>
            @php $i=0; @endphp
            @foreach ($accountantlist as $account)
              @php $i++ @endphp
						<tr class="odd gradeX">
							<td>{{ $i}}</td>
             
          <td>
          <img src="images/employee/{{$account->emp_image}}" alt="IMG" style="width:100px;height:50px;">
            </td>
              <td>{{ $account->emp_name }}</td>
							<td>{{ $account->emp_email }}</td>
							<td>{{ $account->emp_mobile }}</td>
              <td><a class="btn btn-xs btn-success" href="{{Route('accountantview')}}/{{ $account->id }}"><i class="fa fa-eye"></i></a> <a class="btn btn-xs btn-primary" href="{{Route('accountantedit')}}/{{$account->id}}"><i class="fa fa-edit"></i></a> <a class="btn btn-xs btn-danger" href="{{Route('accountantdelete')}}/{{$account->id}}"><i class="fa fa-trash"></i></a></td>

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
