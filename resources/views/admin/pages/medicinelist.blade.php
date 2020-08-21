@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')
    <div class="grid_10">
      <div style="height: 900px;background-color: #bac1dc" class="box round first grid">
          <a href="{{URL::to('medicineadd')}}"><span class="btn btn-dark"> Add Medicine</span></a>
            <h2 style="text-align: center;">Medicine List</h2>
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
              <th>Name</th>
							<th>Category</th>
							<th>Description</th>
							<th>Price</th>
							<th>Manufacture</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
            @php $i=0; @endphp
            <?php foreach ($medicinelist as $medicine): ?>
              @php $i++ @endphp
						<tr class="odd gradeX">
							<td>{{ $i}}</td>
              <td>{{ $medicine->name}}
							<td>{{ $medicine->category }}</td>
							<td>{{ $medicine->description }}</td>
							<td>{{ $medicine->price }}</td>
              <td>{{ $medicine->manufacture}}</td>
              <td>{{ $medicine->status}}</td>
<td><a class="btn btn-xs btn-primary" href="{{Route('medicineedit')}}/{{ $medicine->id }}"><i class="fa fa-edit"></i></a> <a class="btn btn-xs btn-danger" onclick="return confirm('Are you sure to delete this row !')" href="{{Route('medicinedelete')}}/{{ $medicine->id }}" ><i class="fa fa-trash"></i></a></td>
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
