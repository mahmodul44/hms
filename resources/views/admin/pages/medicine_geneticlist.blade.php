@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')
        <div class="grid_10">
            <div style="height:900px" class="box round first grid">
	             <a href="{{Route('medicine_geneticadd')}}"><span class="btn btn-dark"> Add Medicine Genetic</span></a>
                <h2 style="text-align: center;">Medicine Genetic List</h2>
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
							<th>Description</th>
              <th>Status</th>
							<th>Action</th>
						</tr>
					</thead>

					<tbody>
            @php $i=0; @endphp
            @foreach ($medicine_geneticlist as $genetic)
              @php $i++ @endphp
            <tr class="odd gradeX">
              <td>{{ $i }}</td>
              <td>{{ $genetic->name}}</td>
              <td>{{ $genetic->description}}</td>
              <td>{{ $genetic->status }}</td>
        <td>
          <a class="btn btn-xs btn-success" href="{{Route('medicine_geneticview')}}/{{$genetic->id}}"><i class="fa fa-eye"></i></a> <a class="btn btn-xs btn-success" href="{{Route('medicine_geneticedit')}}/{{$genetic->id}}"><i class="fa fa-edit"></i></a> <a class="btn btn-xs btn-danger" href="{{Route('medicine_geneticdelete')}}/{{$genetic->id}}"><i class="fa fa-trash"></i></a> 
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
