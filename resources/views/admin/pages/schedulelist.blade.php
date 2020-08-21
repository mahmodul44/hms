@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')
        <div class="grid_10">
            <div style="height:900px;background-color: #bac1dc" class="box round first grid">
	             <a href="{{URL::to('scheduleadd')}}"><span class="btn btn-dark"> Add Schedule</span></a>
                <h2 style="text-align: center;">ScheduleList</h2>
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
              <th>Doctor Name</th>
              <th>Day</th>
							<th>Start Time</th>
							<th>End Time</th>
              <th>Per Time</th>
              <th>Visibility</th>
              <th>status</th>
							<th>Action</th>
						</tr>
					</thead>

					<tbody>
            @php $i=0; @endphp
            <?php foreach ($schedulelist as $schedule): ?>
              @php $i++ @endphp
            <tr class="odd gradeX">
              <td>{{ $i}}</td>
              <td>{{ $schedule->dname}}</td>
              <td>{{ $schedule->day }}</td>
              <td>{{ $schedule->stime }}</td>
              <td>{{ $schedule->etime }}</td>
              <td>{{ $schedule->ptime}}</td>
              <td>{{ $schedule->svisibility}}</td>
              <td>{{ $schedule->status}}</td>
        <td><a class="btn btn-xs btn-primary" href="{{Route('scheduleedit')}}/{{ $schedule->id}}" ><i class="fa fa-edit"></i></a> <a class="btn btn-xs btn-danger" onclick="return confirm('Are you sure to delte this row !')" href="{{Route('scheduledelete')}}/{{ $schedule->id}}"><i class="fa fa-trash"></i></a></td>
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
