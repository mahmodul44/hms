@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')
    <div class="grid_10">
       <div style="height: 800px;background-color: #bac1dc" class="box round first grid">
	       <a href="{{URL::to('bedadd')}}"><span class="btn btn-dark"> Add Bed</span></a>
                <h2 style="text-align: center;">Bed List</h2>
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
              <th>Bed Type</th>
              <th>Description</th>
              <th>Limit</th>
              <th>Charge</th>

		<th>Action</th>
			</tr>
				</thead>
				<tbody>
					@php $i=0; @endphp
					@foreach ($bedlist as $bed)
              @php $i++ @endphp
				<tr class="odd gradeX">
          <td>{{$i}}</td>
				<td>{{$bed->bed_type}}</td>
              <td>{{$bed->description}}</td>
              <td>{{$bed->limit}}</td>
              <td>{{$bed->charge}}</td>

<td><a class="btn btn-xs btn-primary" href="{{Route('bededit')}}/{{$bed->id}}" ><i class="fa fa-edit"></i></a> <a class="btn btn-xs btn-danger" onclick="return confirm('Are you sure to delte this row !')" href="{{Route('beddelete')}}/{{$bed->id}}"><i class="fa fa-trash"></i></a></td>
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
