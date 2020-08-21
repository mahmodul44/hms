@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')
        <div class="grid_10">
            <div style="height:900px" class="box round first grid">
	             <a href="{{Route('categoryadd')}}"><span class="btn btn-dark"> Add category</span></a>
                <h2 style="text-align: center;">Category List</h2>
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
              <th>Catedory Name</th>
              <th>Lab Type</th>
							<th>Description</th>
              <th>Status</th>
							<th>Action</th>
						</tr>
					</thead>

					<tbody>
            @php $i=0; @endphp
            @foreach ($categorylist as $category)
              @php $i++ @endphp
            <tr class="odd gradeX">
              <td>{{ $i }}</td>
              <td>{{ $category->cat_name}}</td>
              <td>{{ $category->lab_type }}</td>
              <td>{{ $category->cat_description}}</td>
              <td>{{ $category->status}}</td>
    <td><a class="btn btn-xs btn-primary" href="{{Route('categoryedit')}}/{{ $category->id}}" ><i class="fa fa-edit"></i></a> <a class="btn btn-xs btn-danger" onclick="return confirm('Are you sure to delte this row !')" href="{{Route('categorydelete')}}/{{ $category->id}}"><i class="fa fa-trash"></i></a></td>
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
