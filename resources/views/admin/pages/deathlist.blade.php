@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')

<div class="grid_10">
    <div style="height: 900px;background-color: #bac1dc" class="box round first grid">
        @if(Session::get('user_role') !== 'patient')
    <a href="{{URL::to('deathadd')}}"><span style="border-bottom: 2px solid black" class="btn btn-dark">Add Death</span></a>

    <hr>
      <h2 style="text-align: center;background-color:white">Death Report</h2>
        @endif
    <div class="block">

        <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>SL.NO</th>
							<th>Title</th>
							<th>Description</th>
							<th>Doctor Name</th>
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
            @foreach ($deathlist as $death)
              @php $i++ @endphp
		<tr class="odd gradeX">
			<td>{{ $i}}</td>
      <td>{{ $death->title }}</td>
			<td>{{ $death->description }}</td>
      <td>{{ $death->doctor_id }}</td>
      <td>
          <a class="btn btn-xs btn-success" href="{{Route('deathview')}}/{{ $death->death_id }}"><i class="fa fa-eye"></i></a>
          @if(Session::get('user_role') !== 'patient')
      	<a class="btn btn-xs btn-primary" href="{{Route('deathedit')}}/{{$death->death_id}}"><i class="fa fa-edit"></i></a>
              <a href="{{Route('deathdelete')}}/{{$death->death_id}}" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
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
