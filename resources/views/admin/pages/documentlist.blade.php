@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')
        <div class="grid_10">
            <div style="height: 800px" class="box round first grid">
	             <a href="{{URL::to('documentadd')}}"><span class="btn btn-dark"> Add Document</span></a>
                <h2 style="text-align: center;">DocumentList</h2>
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
              <th>Patient ID</th>
              <th>Doctor</th>
              <th>Short Note</th>
							<th>Document</th>
							<th>Date</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
            @php $i=0; @endphp
            @foreach ($documentlist as $document)
              @php $i++ @endphp
						<tr class="odd gradeX">
							<td>{{ $i}}</td>
              <td>{{$document->patient_code}}</td>
              <td>{{$document->doctor}}</td>
							<td>{{$document->snote}}</td>
              <td>
                <img src="images/document/{{$document->document}}" alt="IMG" style="width:100px;height:100px;">
                </td>
							<td>{{$document->date}}</td>
				<td><a class="btn btn-xs btn-primary" href="{{Route('documentedit')}}/{{ $document->id }}" ><i class="fa fa-edit"></i></a> <a class="btn btn-xs btn-primary" onclick="return confirm('Are you sure to delte this row !')" href="{{Route('documentdelete')}}/{{ $document->id}}"><i class="fa fa-trash"></i></a></td>
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
