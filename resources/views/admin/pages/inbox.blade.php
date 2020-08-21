@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')

<div class="grid_10">
            <div style="height: 800px" class="box round first grid">
	         
                <h2 style="text-align: center;">Inbox</h2>
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
              <th>Email</th>
              <th>Subject</th>
              <th>Description</th>
			  <th>Action</th>
			</tr>
			</thead>
			<tbody>

           @php $i=0; @endphp
            @foreach ($inboxlist as $inbox)
              @php $i++ @endphp
			  <tr class="odd gradeX">
			  <td>{{ $i}}</td>
              <td>{{$inbox->name}}</td>
              <td>{{$inbox->email}}</td>
			  <td>{{$inbox->subject}}</td>
			  <td>{{$inbox->description}}</td>
	<td><a href="">Reply</a> || <a onclick="return confirm('Are you sure to delte this row !')" href="{{Route('inboxdelete')}}/{{ $inbox->id}}">Delete</a></td>
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

