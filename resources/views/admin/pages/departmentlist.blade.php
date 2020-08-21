@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')
        <div class="grid_10">
            <div style="height: 800px;background-color: #bac1dc" class="box round first grid">
  <a href="{{URL::to('departmentadd')}}"><span class="btn btn-dark"> Add Department</span></a>
        <h2 style="text-align: center;">Department List</h2>
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
							<th>Department Name</th>
							<th>Image</th>
							<th>Description</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
            @php $i=0; @endphp
            <?php foreach ($departmentlist as $department): ?>
              @php $i++ @endphp
						<tr class="odd gradeX">
							<td>{{ $i}}</td>
							<td>{{$department->deptname}}</td>
							<td><img src="images/department/{{$department->image}}"
								style="width:100px;height:60px;"/></td>
							<td>{{ $department->description}}</td>
							<td>{{ $department->status}}</td>
				<td><a class="btn btn-xs btn-primary" href="{{Route('departmentedit')}}/{{ $department->id }}" ><i class="fa fa-edit"></i></a><a class="btn btn-xs btn-danger" onclick="return confirm('Are you sure to delte this row !')" href="{{Route('departmentdelete')}}/{{ $department->id }}"><i class="fa fa-trash"></i></a></td>
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
