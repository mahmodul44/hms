@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')
        <div class="grid_10">
            <div style="height:900px;background-color: #bac1dc" class="box round first grid">
	             <a href="{{URL::to('testadd')}}"><span class="btn btn-dark"> Add Test</span></a>
                <h2 style="text-align: center;">Test List</h2>
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
              <th>Test Name</th>
							<th>Test Rate</th>
							<th>Test Ref rate</th>
							<th>Test Description</th>
							<th>Action</th>
						</tr>
					</thead>

					<tbody>
            @php $i=0; @endphp
            @foreach ($testlist as $test)
              @php $i++ @endphp
            <tr class="odd gradeX">
              <td>{{ $i}}</td>
              <td>{{ $test->cat_name}}</td>
              <td>{{ $test->test_name }}</td>
              <td>{{ $test->test_rate }}</td>
              <td>{{ $test->test_ref_fee }}</td>
              <td>{{ $test->test_description}}</td>
        <td><a class="btn btn-xs btn-primary" href="{{Route('testedit')}}/{{ $test->id}}" ><i class="fa fa-edit"></i></a> <a class="btn btn-xs btn-danger" onclick="return confirm('Are you sure to delte this row !')" href="{{Route('testdelete')}}/{{ $test->id}}"><i class="fa fa-trash"></i></a></td>
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
